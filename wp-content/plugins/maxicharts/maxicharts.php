<?php
/*
 * Plugin Name: MaxiCharts
 * Plugin URI: https://maxicharts.com/
 * Description: Create beautiful interactive HTML5 charts from Gravity Forms / CSV into your posts with a simple shortcode. Uses chart.js.
 * Version: 1.3.4
 * Author: MaxiCharts
 * Author URI: https://profiles.wordpress.org/maxicharts
 * Text Domain: maxicharts
 * Domain Path: /lang
 */
if (! defined('ABSPATH')) {
    exit();
}

define('MAXICHARTS_URL', trailingslashit(plugins_url('', __FILE__)));
define('MAXICHARTS_PATH', trailingslashit(plugin_dir_path(__FILE__)));
define('MAXICHARTS_BASENAME', plugin_basename(__FILE__));
define('MAXICHARTS_CHARTJS_VERSION','2.7.2');

require_once __DIR__ . "/mcharts_utils.php";

// require_once __DIR__ . '/mcharts_gravity_forms.php';
require_once __DIR__ . '/mcharts_data_conversion_plugin.php';
require_once __DIR__ . '/mcharts_custom_criteria_plugin.php';
require_once __DIR__ . '/mcharts_table_plugin.php';
require_once __DIR__ . '/libs/vendor/autoload.php';

// fix for PHP versions < 5.5
if( !function_exists('boolval')) {
    
    function boolval($var){
        return !! $var;
    }
}

if (! class_exists('maxicharts_reports')) {
    
    class maxicharts_reports
    {
        
        protected $criteria_module = NULL;
        
        protected $table_module = NULL;
        
        protected static $availableColorSets = NULL;
        // protected static $doff_logger = null;
        function mce_button()
        {
            // check user permissions
            if (! current_user_can('edit_posts') && ! current_user_can('edit_pages')) {
                return;
            }
            // check if WYSIWYG is enabled
            if ('true' == get_user_option('rich_editing')) {
                /*
                 * add_filter( 'mce_external_plugins', array( $this, 'add_mce_plugin' ) );
                 * add_filter( 'mce_buttons', array( $this, 'register_mce_button' ) );
                 */
                MAXICHARTSAPI::getLogger()->trace("Adding TinyMCE filters...");
                add_filter("mce_external_plugins", array(
                    $this,
                    "enqueue_tinymce_scripts"
                ));
                add_filter("mce_buttons", array(
                    $this,
                    "register_buttons_editor"
                ));
            }
        }
        
        
        function maxicharts_load_textdomain() {
            load_plugin_textdomain( 'maxicharts', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );
        }
        
        function __construct()
        {
            //maxicharts_log("Construct " . __CLASS__);
            MAXICHARTSAPI::getLogger()->debug("Construct " . __CLASS__);
            
            add_action("wp_enqueue_scripts", array(
                $this,
                "maxicharts_reports_load_scripts"
            ));
            add_action('wp_head', array(
                $this,
                'maxicharts_reports_html5_support'
            ));
            
            add_shortcode('maxicharts', array(
                $this,
                'maxicharts_shortcode'
            ));
            
            add_filter("maxicharts_get_data_from_source", array(
                $this,
                "get_data_from_user"
            ), 10, 3);
            
            add_action('wp_ajax_gf_forms_list', array(
                $this,
                'list_gf_ajax'
            ));
            add_action('before_wp_tiny_mce', array(
                $this,
                'gf_forms_list_script'
            ));
            
            // add_action( 'admin_footer', array( $this, 'gf_forms_list_script' ) );
            add_action('admin_head', array(
                $this,
                'mce_button'
            ));
            
            do_action('maxicharts_add_shortcodes');
            
            /*
             * add_filter("mce_external_plugins", array($this,"enqueue_tinymce_scripts"));
             * add_filter("mce_buttons", array($this,"register_buttons_editor"));
             */
            add_filter("mcharts_modify_colors", array(
                $this,
                "setColorPalette"
            ), 10, 3);
            add_filter("mcharts_filter_chart_title", array(
                $this,
                "mcharts_clean_chart_title"
            ));
            add_filter("mcharts_filter_chart_labels", array(
                $this,
                "mcharts_clean_chart_labels"
            ));
            
            
            
            add_action('plugins_loaded', array($this,'maxicharts_load_textdomain'));
            
            //add_action('admin_print_footer_scripts','maxicharts_eg_quicktags');
        }
        
        public static function init() {
            MAXICHARTSAPI::getLogger()->debug("Init " . __CLASS__);
            $class = __CLASS__;
            new $class;
            //new maxicharts_reports();
            
            if (self::$availableColorSets == NULL) {
                $defaultColorSets = self::getDefaultColorSets();
                MAXICHARTSAPI::getLogger()->debug("color sets : ".count($defaultColorSets));
                self::$availableColorSets = apply_filters('mcharts_available_color_sets',$defaultColorSets);
                MAXICHARTSAPI::getLogger()->debug("color sets : ".count(self::$availableColorSets));
            }
        }
        function mcharts_clean_chart_title($title)
        {
            $chartTitleCleaned = str_replace('"', "", $title);
            $chartTitleCleaned = str_replace("'", "", $chartTitleCleaned);
            $chartTitleCleaned = self::removeQuotes($chartTitleCleaned);
            
            return $chartTitleCleaned;
        }
        
        function mcharts_clean_chart_labels($labels)
        {
            $labelsCleaned = array_map(array(
                $this,
                'removeQuotesAndConvertHtml'
            ), $labels);
            return $labelsCleaned;
        }
        
        function enqueue_tinymce_scripts($plugin_array)
        {
            // enqueue TinyMCE plugin script with its ID.
            $plugin_array["maxicharts_button"] = plugin_dir_url(__FILE__) . "js/gfcr_tinymce_button.js";
            MAXICHARTSAPI::getLogger()->trace("Add button to Tiny MCE using file : " . $plugin_array["maxicharts_button"]);
            return $plugin_array;
        }
        
        function register_buttons_editor($buttons)
        {
            // register buttons with their id.
            array_push($buttons, "maxicharts_insert", 'mcharts_insert_graph');
            MAXICHARTSAPI::getLogger()->trace("Add button to WP buttons array: ");
            MAXICHARTSAPI::getLogger()->trace($buttons);
            
            return $buttons;
        }
        
        public function getForms()
        {
            $list = array();
            if (is_multisite()) {
                $blog_id = get_current_blog_id();
                switch_to_blog($blog_id);
                $forms = GFAPI::get_forms();
                restore_current_blog();
            } else {
                $forms = GFAPI::get_forms();
            }
            MAXICHARTSAPI::getLogger()->trace(count($forms) . " forms retrieved");
            foreach ($forms as $form) {
                // MAXICHARTSAPI::getLogger ()->debug ( $form );
                $selected = '';
                $post_id = $form[id];
                $post_name = $form[title];
                MAXICHARTSAPI::getLogger()->trace($post_id . ' -> ' . $post_name);
                $list[] = array(
                    'text' => $post_name,
                    'value' => strval($post_id)
                );
            }
            wp_send_json(apply_filters('mcharts_modify_form_list', $list));
        }
        
        public function list_gf_ajax()
        {
            // check for nonce
            MAXICHARTSAPI::getLogger()->trace("list_gf_ajax");
            check_ajax_referer('maxicharts-nonce', 'security');
            $this->getForms();
        }
        
        
        
        public function gf_forms_list_script()
        {
            
            // create nonce
            MAXICHARTSAPI::getLogger()->trace('gf_forms_list_script');
            global $pagenow;
            MAXICHARTSAPI::getLogger()->trace($pagenow);
            // var_dump($pagenow);
            if ($pagenow != 'admin.php') {
                $nonce = wp_create_nonce('maxicharts-nonce');
                
                // do_action( 'before_wp_tiny_mce', array $mce_settings )
                ?>
<script type="text/javascript">
							jQuery( document ).on( 'tinymce-editor-init', function( $ ) {
								var data = {
									'action'	: 'gf_forms_list',				// wp ajax action
									'security'	: '<?php echo $nonce; ?>'		// nonce value created earlier
								};
/*
								alert(ajaxurl);
								alert(data);*/
								// fire ajax
							  	jQuery.post( ajaxurl, data, function( response ) {
							  		// if nonce fails then not authorized else settings saved
							  		if( response === '-1' ){
								  		// do nothing
								  		console.log('error');
							  		} else {								  		
							  			//console.log('response != -1');
							  			if (typeof(tinyMCE) != 'undefined') {
							  				//console.log('not undefined');
							  				if (tinyMCE.DOM != null) {
							  					console.log('array value set to active ed: '+ tinyMCE.activeEditor.id);
							  					//console.log(response);
							  					//tinyMCE.activeEditor.windowManager.alert(response);
							  					console.log("editor ID: "+ tinyMCE.activeEditor.id);
												tinyMCE.activeEditor.settings.gfFormsList = response;
												console.log(tinyMCE.activeEditor.settings.gfFormsList);
												
												var content = tinyMCE.get("content");
												if (content) {
												    content.settings.gfFormsList = response;
												    console.log(content.settings.gfFormsList);
												}										
												
							  				} else {
											    console.error('null tinyMCE.DOM');
											}
										}
							  		}
							  	});
							});
						</script>
<?php
            }
        }

        /**
         * Add IE Fallback for HTML5 and canvas
         *
         * @since Unknown
         */
        function maxicharts_reports_html5_support()
        {
            echo '<!--[if lte IE 8]>';
            echo '<script src="' . plugins_url('/js/excanvas.js', __FILE__) . '"></script>';
            echo '<![endif]-->';
            echo '	<style>
    			/*maxicharts_reports_js responsive canvas CSS override*/
    			.maxicharts_reports_canvas {
    				width:100%!important;
    				max-width:100%;
    			}

    			@media screen and (max-width:480px) {
    				div.maxicharts_reports-wrap {
    					width:100%!important;
    					float: none!important;
						margin-left: auto!important;
						margin-right: auto!important;
						text-align: center;
    				}
    			}
    		</style>';
        }

        /**
         * Register Script
         *
         * @since Unknown
         */
        function maxicharts_reports_load_scripts($force = false)
        {
            if (! is_admin() || $force) {
                wp_enqueue_script('jquery');
                
                $chartJsCDN = plugins_url("libs/chartsjs/" . MAXICHARTS_CHARTJS_VERSION . "/Chart.min.js", __FILE__);
                
                wp_register_script('chart-js', $chartJsCDN, null, null);
                
                wp_register_script('maxicharts_reports-functions', MAXICHARTS_URL . 'js/functions.js', array(
                    'jquery'
                ), '', true);
                
                wp_enqueue_script('chart-js');
                wp_enqueue_script('maxicharts_reports-functions');
                
                // css
                $mcr_css = plugins_url('css/maxichartsreports.css', __FILE__);
                
                wp_enqueue_style('maxicr-css', $mcr_css, __FILE__);
            }
        }

        function maxicharts_shortcode($atts)
        {
            if (! is_admin()) {
                $source = 'user';
                $destination = 'chartjs';
                return self::chartReports($source, $destination, $atts);
            }
        }

        function get_data_from_user($reportFields, $source, $atts)
        {
            
            // self::getLogger()->info("Process source " . $source);
            // $reportFields = array ();
            if ($source == 'user') {
                $defaultsParameters = array(
                    'type' => 'pie',
                    'url' => '',
                    'position' => '',
                    'float' => false,
                    'center' => false,
                    'title' => 'chart',
                    'canvaswidth' => '625',
                    'canvasheight' => '625',
                    'width' => '48%',
                    'height' => 'auto',
                    'margin' => '5px',
                    'relativewidth' => '1',
                    'align' => '',
                    'class' => '',
                    'labels' => '',
                    'data' => '30,50,100',
                    'data_conversion' => '',
                    'datasets_invert' => '',
                    'datasets' => '',
                    'gf_form_ids' => '',
                    'multi_include' => '',
                    'gf_form_id' => '1',
                    'maxentries' => strval(DEFAULT_MAX_ENTRIES),
                    'gf_criteria' => '',
                    'include' => '',
                    'exclude' => '',
                    'colors' => '',
                    'color_set' => '',
                    'color_rand' => false,
                    'chart_js_options' => '',
                    'tooltip_style' => 'BOTH',
                    'custom_search_criteria' => '',
                    'fillopacity' => '0.7',
                    'pointstrokecolor' => '#FFFFFF',
                    'animation' => 'true',
                    'xaxislabel' => '',
                    'yaxislabel' => '',
                    'scalefontsize' => '12',
                    'scalefontcolor' => '#666',
                    'scaleoverride' => 'false',
                    'scalesteps' => 'null',
                    'scalestepwidth' => 'null',
                    'scalestartvalue' => 'null',
                    'case_insensitive' => false,
                    'no_score_computation' => false,
                    'list_series_names' => '',
                    'list_series_values' => '',
                    'list_labels_names' => '',
                    'list_sum_keys' => 'all',
                    'data_only' => '',
                    'xcol' => '0',
                    'ycol' => '1',
                    'compute' => '',
                    'header_start' => '0',
                    'header_size' => '1',
                    // new CSV
                    'columns' => '',
                    'rows' => '',
                    'delimiter' => '',
                    'information_source' => '',
                    'no_entries_custom_message' => ''
                );
                extract(shortcode_atts($defaultsParameters, $atts));
                
                $type = str_replace(' ', '', $type);
                $url = str_replace(' ', '', $url);
                $title = str_replace(' ', '', $title);
                $data = explode(',', str_replace(' ', '', $data));
                $data_conversion = str_replace(' ', '', $data_conversion);
                $datasets_invert = str_replace(' ', '', $datasets_invert);
                // $gv_approve_status = explode ( ";", str_replace ( ' ', '', $gv_approve_status) );
                $datasets = explode("next", str_replace(' ', '', $datasets));
                
                if ($data) {
                    $reportFields[] = array(
                        'scores' => $data
                    );
                }
            }
            
            return $reportFields;
        }

        static function getDefaultColorSets(){
            $availableColorSets = array(
                'default' =>  array(
                    '#a6cee3',
                    '#1f78b4',
                    '#b2df8a',
                    '#33a02c',
                    '#fb9a99',
                    '#e31a1c',
                    '#fdbf6f',
                    '#ff7f00',
                    '#cab2d6',
                    '#6a3d9a',
                    '#ffff99',
                    '#b15928'
                ),
                'blue' =>  array(
                    '#ffffd9',
                    '#edf8b1',
                    '#c7e9b4',
                    '#7fcdbb',
                    '#41b6c4',
                    '#1d91c0',
                    '#225ea8',
                    '#253494',
                    '#081d58'
                ),
                'red' =>  array(
                    '#ffffcc',
                    '#ffeda0',
                    '#fed976',
                    '#feb24c',
                    '#fd8d3c',
                    '#fc4e2a',
                    '#e31a1c',
                    '#bd0026'
                ),
                'green' =>  array(
                    '#ffffe5',
                    '#f7fcb9',
                    '#d9f0a3',
                    '#addd8e',
                    '#78c679',
                    '#41ab5d',
                    '#238443',
                    '#006837',
                    '#004529'
                ),
                'purple' => array(
                    '#fff7f3',
                    '#fde0dd',
                    '#fcc5c0',
                    '#fa9fb5',
                    '#f768a1',
                    '#dd3497',
                    '#ae017e',
                    '#7a0177',
                    '#49006a'
                ),
                'orange' => array(
                    '#ffffe5',
                    '#fff7bc',
                    '#fee391',
                    '#fec44f',
                    '#fe9929',
                    '#ec7014',
                    '#cc4c02',
                    '#993404',
                    '#662506'
                ),
            );
            
            return $availableColorSets;
        }
        
        function setColorPalette($color_set, $color_rand, $colors)
        {
            MAXICHARTSAPI::getLogger()->debug("SETTING COLOR PALETTE... $color_set, $color_rand, $colors");
            MAXICHARTSAPI::getLogger()->debug(count(self::$availableColorSets) . " sets available");
            $colorsArray = array();
            
            if (! empty($colors)) {
                // custom user colors
                $colorsArray = explode(',', $colors);
                MAXICHARTSAPI::getLogger()->debug("exploded : ");
                MAXICHARTSAPI::getLogger()->debug($colorsArray);
                MAXICHARTSAPI::getLogger()->debug("### User colors : " . count($colorsArray));
            } elseif (! empty($color_set)) {
                // user defined color set
                MAXICHARTSAPI::getLogger()->debug("### Color Set is : " . $color_set);
                if ($color_set == 'random') {
                    // random colors
                    
                    MAXICHARTSAPI::getLogger()->debug("### RANDOM : " . $color_set);
                    $random_set = array_rand(self::$availableColorSets);
                    MAXICHARTSAPI::getLogger()->debug($random_set);
                    $color_set = $random_set;
                } elseif (! array_key_exists($color_set, self::$availableColorSets)) {
                    MAXICHARTSAPI::getLogger()->debug("Unkown color set: " . $color_set);
                    $color_set = 'default';
                }
                $colorsArray = self::$availableColorSets[$color_set];
            }
            MAXICHARTSAPI::getLogger()->trace($colorsArray);
            
            if (empty($colorsArray)){
                $color_set = 'default';
                $colorsArray = self::$availableColorSets[$color_set];
            }
            
            if (! empty($color_rand) && $color_rand == true) {
                MAXICHARTSAPI::getLogger()->debug("### Shuffled colors : " . count($colorsArray));
                shuffle($colorsArray);
            }
            
            return $colorsArray;
        }

        static function updateLabels($reportFields)
        {
            MAXICHARTSAPI::getLogger()->debug("--- updateLabels ---");
            
            // MAXICHARTSAPI::getLogger ()->debug ( "$scoreKey => $scoreVal" );
            foreach ($reportFields as $fieldID => $fieldDatas) {
                if (isset($fieldDatas['type']) && $fieldDatas['type'] != 'radio' && $fieldDatas['type'] != 'select') {
                    continue;
                }
                if (! isset($fieldDatas['labels'])) {
                    continue;
                }
                $newLabels = array();
                foreach ($fieldDatas['labels'] as $labelKey => $labelVal) {
                    MAXICHARTSAPI::getLogger()->trace("Replacing key $labelKey => $labelVal ?");
                    $replacmentFound = false;
                    foreach ($fieldDatas['choices'] as $choiceKey => $choiceVal) {
                        MAXICHARTSAPI::getLogger()->trace($choiceKey . ' =choices> ' . $choiceVal['value']);
                        if ($choiceVal['value'] == $labelVal) {
                            $newText = trim(html_entity_decode(wp_strip_all_tags($choiceVal['text'])));
                            MAXICHARTSAPI::getLogger()->trace("YES :: $labelKey replace=> $newText");
                            $newLabels[] = $newText;
                            $replacementFound = true;
                        }
                    }
                    
                    if (! $replacementFound) {
                        MAXICHARTSAPI::getLogger()->debug("NO :: $labelKey stays");
                        $newLabels[$labelKey] = $labelVal;
                    }
                }
                $reportFields[$fieldID]['labels'] = apply_filters('mcharts_modify_new_labels', $newLabels);
            }
            
            return $reportFields;
        }

        static function get_all_ranges($inputRows)
        {
            $rawRows = explode(',', str_replace(' ', '', $inputRows));
            MAXICHARTSAPI::getLogger()->debug($rawRows);
            $result = array();
            foreach ($rawRows as $rowsItems) {
                MAXICHARTSAPI::getLogger()->debug($rowsItems);
                if (stripos($rowsItems, '-') !== false) {
                    $limits = explode('-', $rowsItems);
                    $newRows = range($limits[0], $limits[1]);
                    $result = array_merge($result, $newRows);
                } else {
                    $result[] = $rowsItems;
                }
            }
            
            if (count($result) == 1 && empty($result[0])) {
                $result = false;
            }
            MAXICHARTSAPI::getLogger()->debug($result);
            return $result;
        }

        static function chartReports($source, $destination, $atts)
        {
            MAXICHARTSAPI::getLogger()->debug("MAXICHART DO Report from " . $source . " to " . $destination);
            
            if ($source == 'csv' && ! class_exists('mcharts_csv_source_plugin')) {
                
                $msg = "Please install/activate csv plugin";
                MAXICHARTSAPI::getLogger()->error($msg);
                return $msg;
            }
            
            do_action('check_source', $source);
            do_action('check_destination', $destination);
            
            // - - - - - - - - - - - - - - - - - - - - - - -
            $defaultsParameters = array(
                'type' => 'pie',
                'url' => '',
                'position' => '',
                'float' => false,
                'center' => false,
                'title' => 'chart',
                
                'width' => '48%',
                'height' => 'auto',
                'margin' => '5px',
                'relativewidth' => '1',
                'align' => '',
                'class' => '',
                'labels' => '',
                'data' => '30,50,100',
                'data_conversion' => '',
                'datasets_invert' => '',
                'datasets' => '',
                'data_only' => '',
                'gf_form_ids' => '',
                'multi_include' => '',
                'gf_form_id' => '1',
                'maxentries' => strval(DEFAULT_MAX_ENTRIES),
                'gf_criteria' => '',
                'include' => '',
                'exclude' => '',
                'colors' => '',
                'color_set' => '',
                'color_rand' => false,
                'chart_js_options' => '',
                'tooltip_style' => 'BOTH',
                'custom_search_criteria' => '',
                'fillopacity' => '0.7',
                'pointstrokecolor' => '#FFFFFF',
                'animation' => 'true',
                'xaxislabel' => '',
                'yaxislabel' => '',
                'scalefontsize' => '12',
                'scalefontcolor' => '#666',
                'scaleoverride' => 'false',
                'scalesteps' => 'null',
                'scalestepwidth' => 'null',
                'scalestartvalue' => 'null',
                'case_insensitive' => false,                
                'compute' => '',
                'header_start' => '0',                
                'x_stacked' => false,
                'y_stacked' => false,
                'x_step_size' => '',
                'y_step_size' => '',
                'decimal_separator' => '',
                'thousands_separator' => '',
            );
            
            $defaultsParameters = apply_filters('mcharts_filter_defaults_parameters', $defaultsParameters);
            MAXICHARTSAPI::getLogger()->trace($defaultsParameters);
            if ($atts['type'] == 'random') {            	
            	$allTypes = array(            			
            			'pie',            			
            			'bar',            			
            			'horizontalBar',            			
            			'doughnut',            			
            			'line',
            	);            	
            	$atts['type'] = $allTypes[array_rand($allTypes)];            	
            }
            extract(shortcode_atts($defaultsParameters, $atts, 'maxicharts'));
            
            MAXICHARTSAPI::getLogger()->debug($atts);
            
            // - - - - - - - - - - - - - - - - - - - - - - -
            $type = str_replace(' ', '', $type);
          
            MAXICHARTSAPI::getLogger()->debug($type);
            $url = str_replace(' ', '', $url);
            $title = str_replace(' ', '', $title);
            MAXICHARTSAPI::getLogger()->debug('CHECK TYPE : ' . $type);
            $data = explode(',', str_replace(' ', '', $data));
            $data_conversion = str_replace(' ', '', $data_conversion);
            $datasets_invert = str_replace(' ', '', $datasets_invert);
            // $gv_approve_status = explode ( ";", str_replace ( ' ', '', $gv_approve_status) );
            $datasets = explode("next", str_replace(' ', '', $datasets));
            if ($data_only) {
                $allChartsDatas = array();
            }
            $gf_form_ids = explode(',', str_replace(' ', '', $gf_form_ids));
            $multi_include = explode(',', str_replace(' ', '', $multi_include));
            $gf_form_id = str_replace(' ', '', $gf_form_id);
            $colors = str_replace(' ', '', $colors);
            $color_set = str_replace(' ', '', $color_set);
            $color_rand = str_replace(' ', '', $color_rand);
            $position = str_replace(' ', '', $position);
            $float = str_replace(' ', '', $float);
            $center = str_replace(' ', '', $center);
            $case_insensitive = boolval(trim($case_insensitive));            
            $y_stacked = boolval(str_replace(' ', '', $y_stacked));
            $x_stacked = boolval(str_replace(' ', '', $x_stacked));
            $x_step_size = str_replace(' ', '', $x_step_size);
            $y_step_size = str_replace(' ', '', $y_step_size);
            
            MAXICHARTSAPI::getLogger()->debug($x_stacked);
            $include = str_replace(' ', '', $include);
            $exclude = str_replace(' ', '', $exclude);
            $tooltip_style = str_replace(' ', '', $tooltip_style);
            $compute = str_replace(' ', '', $compute);
            $maxentries = str_replace(' ', '', $maxentries);
            if (empty($maxentries)) {
                $maxentries = DEFAULT_MAX_ENTRIES;
            }
            $header_start = str_replace(' ', '', $header_start);
            $header_size = str_replace(' ', '', $header_size);
            
            $reportFields = array();
            if ((! empty($include))) {
                $includeArray = explode(",", $include);
            }
            if (! empty($exclude)) {
                $excludeArray = explode(",", $exclude);
            }
            MAXICHARTSAPI::getLogger()->debug($type);
            MAXICHARTSAPI::getLogger()->debug("W:$width / H:$height");
            if (empty($source) || (empty($destination))) {
                $msg = "Invalid source and/or destination " . $source . ' / ' . $destination;
                MAXICHARTSAPI::getLogger()->error($msg);
                return $msg;
            }
            
            MAXICHARTSAPI::getLogger()->debug('CHECK TYPE : ' . $type);
            $reportFields = apply_filters('maxicharts_get_data_from_source', $reportFields, $source, $atts);
            MAXICHARTSAPI::getLogger()->debug('CHECK TYPE : ' . $type);
            if (is_array($reportFields) && empty($reportFields)) {
                $msg = __('No data from data source', 'maxicharts') . ' ' . $source;
                MAXICHARTSAPI::getLogger()->warn($msg);
                return $msg;
            }
            
            MAXICHARTSAPI::getLogger()->debug('ABOUT to give result if peculiar type : ' . $type);
            $need_to_return_without_graph = apply_filters('mcharts_return_without_graph', $atts);
            
            if ((! is_array($reportFields) && ! empty($reportFields)) || $need_to_return_without_graph) {
                return $reportFields;
            }
            
            if (empty($reportFields)) {
                $msg = __('No graph to display because empty data', 'maxicharts');
                MAXICHARTSAPI::getLogger()->warn($msg);
                return $msg;
            }
            // FIXME ADD HOOK to return if needed
            
            $reportFields = self::updateLabels($reportFields);
            
            // source data retrieved
            // do_action('process_additionnal_source', $source, $atts);
            // need to implement extract ( shortcode_atts ($defaultsParameters, $atts ) );
            
            // setting colors
            MAXICHARTSAPI::getLogger()->debug("### User colors : " . $colors . " ###");
            $colors = apply_filters('mcharts_modify_colors', $color_set, $color_rand, $colors);
            // $this->setColorPalette ( $color_set, $color_rand, $colors );
            MAXICHARTSAPI::getLogger()->debug("### Color Palette set : " . implode(";", $colors) . " ###");
            
            $currentchartOptions = '';
            $allCharts = '';
            $variable_defintions_js = '';
            $currentchartData = '';
            // $allChartsNames = array();
            MAXICHARTSAPI::getLogger()->debug("### Charts to display : " . count($reportFields));
            if (empty($reportFields)) {
                $msg = __('No graph to display because no data', 'maxicharts');
                MAXICHARTSAPI::getLogger()->debug($msg);
                return $msg;
            }
            
            $javascript_code_to_inject = '';
            foreach ($reportFields as $chartId => $chartToPlot) {
                
                if (! is_int($chartId)) {
                    MAXICHARTSAPI::getLogger()->warn("not an id  " . $chartId . ' skipping chart with data');
                    MAXICHARTSAPI::getLogger()->warn("Probably a GF form attribute graph type");
                    continue;
                }
                
                if (isset($chartToPlot['no_answers']) && $chartToPlot['no_answers'] == 1) {
                    // no answers yet to field
                    $currentChartMsg = '<h6>' . __("No answers yet to field number") . ' ' . $chartId . ' : ' . $chartToPlot['label'] . '</h6>';
                    MAXICHARTSAPI::getLogger()->warn($currentChartMsg);
                    $allCharts .= $currentChartMsg;
                    continue;
                }
                
                $chartType = $chartToPlot['graphType'];
                
                MAXICHARTSAPI::getLogger()->debug('Try to display chart ' . $chartType . ' with id ' . $chartId);
                MAXICHARTSAPI::getLogger()->trace($chartToPlot);
                
                $currentChartId = self::clean(uniqid('id_') . $chartId . '_' . $chartType);
                MAXICHARTSAPI::getLogger()->debug("+++ Creating chart " . $currentChartId . ' with data size : ' . count($chartToPlot));
                MAXICHARTSAPI::getLogger()->trace($chartToPlot);
                
                // $allChartsNames[] = $currentChartId;
                $chartOptionsId = 'Options_' . $currentChartId;
                $currentchartOptions = 'var ' . $chartOptionsId . ' = {';
                
                $tooltipContent = "tooltipLabel + ': '";
                if ($chartToPlot['multisets']) {
                    if ($type == 'pie') {
                        $tooltipContent = "tooltipLabel + ' / '+";
                    } else {
                        $tooltipContent = '';
                    }
                    $tooltipContent .= "datasetLabel + ': ' + tooltipData";
                    $tooltipContent .= ' + xaxisLabel';
                } else 
                    if ($data_conversion == "%") {
                        $tooltipContent .= "+ tooltipData + '%'";
                    } else {
                        
                        if ($tooltip_style == 'SUM') {
                            // $tooltipContent = "tooltipLabel + ': ' + tooltipData";
                            $tooltipContent .= "+ tooltipData";
                        } else 
                            if ($tooltip_style == 'BOTH') {
                                // $tooltipContent = "tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)'";
                                $tooltipContent .= "+ tooltipData + ' (' + tooltipPercentage + '%)'";
                            } else 
                                if ($tooltip_style == 'PERCENT') {
                                    // $tooltipContent = "tooltipLabel + ': ' + tooltipPercentage + '%'";
                                    $tooltipContent .= "+ tooltipPercentage + '%'";
                                }
                    }
                
                $tooltipContent = apply_filters('mcharts_modify_tooltip_content', $tooltipContent);
                MAXICHARTSAPI::getLogger()->trace("TOOLTIP: " . $tooltipContent);
                
                $tooltipAxisLabel = ($chartType == 'bar') ? $yaxislabel : $xaxislabel;
                // $tooltipContent = $tooltipStyle
                $chartJsTooltips = "tooltips: {
            enabled: true,
            mode: 'single',
            callbacks: {
                label: function(tooltipItem, data) {
                    var allData = data.datasets[tooltipItem.datasetIndex].data;
					var datasetLabel = data.datasets[tooltipItem.datasetIndex].label;
                    var tooltipLabel = data.labels[tooltipItem.index];
                    var tooltipData = allData[tooltipItem.index];
					var xaxisLabel = ' " . $tooltipAxisLabel . "';
                    var total = 0;
                    for (var i in allData) {
                        total += allData[i];
                    }
                    var tooltipPercentage = Math.round((tooltipData / total) * 100);
					
                    return " . $tooltipContent . ";
				}
            }
        },";
                
                MAXICHARTSAPI::getLogger()->trace($chartJsTooltips);
                $currentchartOptions .= $chartJsTooltips;
                $multiRows = isset($chartToPlot['gsurveyLikertEnableMultipleRows']) ? $chartToPlot['gsurveyLikertEnableMultipleRows'] == 1 : false;
                MAXICHARTSAPI::getLogger()->debug("AXIS TITLES " . $chartType . ": " . $xaxislabel . ' / ' . $yaxislabel);
                
                $xaxisScaleLabel = "scaleLabel: {
        display: ";
                $xaxisScaleLabel .= empty($xaxislabel) ? 'false' : 'true';
                $xaxisScaleLabel .= ",labelString: '" . strval($xaxislabel) . "'";
                $xaxisScaleLabel .= "},";
                
                $yaxisScaleLabel = "scaleLabel: {
        display: ";
                $yaxisScaleLabel .= empty($yaxislabel) ? 'false' : 'true';
                $yaxisScaleLabel .= ",labelString: '" . strval($yaxislabel) . "'";
                $yaxisScaleLabel .= "},";
              
                
                MAXICHARTSAPI::getLogger()->debug("xaxislabel : " . $xaxisScaleLabel);
                MAXICHARTSAPI::getLogger()->debug("yaxislabel : " . $yaxisScaleLabel);
                $chartJsScalesOptions = '';
                $x_stacked_option = $x_stacked == true ? "true" : "false";
                $y_stacked_option = $y_stacked == true ? "true" : "false";
                MAXICHARTSAPI::getLogger()->debug("y_stacked : " . $y_stacked . ' / ' . $y_stacked_option);
                MAXICHARTSAPI::getLogger()->debug("x_stacked : " . $x_stacked . ' / ' . $x_stacked_option);
                $stepSizeX = !empty($x_step_size) ? 'stepSize:'.$x_step_size.',' : '';
                $stepSizeY = !empty($y_step_size) ? 'stepSize:'.$y_step_size.',' : '';
                
                if ($chartType == 'bar' || $chartType == 'horizontalBar' || $chartType == 'line') {
                    MAXICHARTSAPI::getLogger()->debug("building chartjs options scale: ");
                    $chartJsScalesOptions .= "scales: {
      yAxes: [{
      id: 'y-axis-0'," . $yaxisScaleLabel . "
      stacked:" . $y_stacked_option . ",
      gridLines: {
        display: true,
        lineWidth: 1,
        color: 'rgba(0,0,0,0.30)'
      },
      ticks: {
        beginAtZero:true,
        mirror:false,
        suggestedMin: 0,
		".$stepSizeY."
      },
      afterBuildTicks: function(chart) {

      }
    }],
    xAxes: [{
      id: 'x-axis-0'," . $xaxisScaleLabel . "
      stacked:" . $x_stacked_option . ",
      gridLines: {
        display: false
      },
      ticks: {
        beginAtZero: true,
		autoSkip: false,
		".$stepSizeX."
      }
    }]
},";
                } else {
                	MAXICHARTSAPI::getLogger()->debug("Chart not bar or hbar : " . $chartType);
                }
             
                
                MAXICHARTSAPI::getLogger()->trace("Chart js scales options : " . $chartJsScalesOptions);
                $currentchartOptions .= apply_filters('filter_chartjs_scale_options', $chartJsScalesOptions);
                
                $chartTitleCleaned = apply_filters('mcharts_filter_chart_title', $chartToPlot['label']);
                
                MAXICHARTSAPI::getLogger()->debug("Chart js options : " . $chart_js_options);
                if ($chart_js_options && count($chart_js_options) > 0) {
                    $currentchartOptions .= apply_filters('mcharts_filter_chart_js_options', $chart_js_options);
                } else {
                    $legendOption = "legend: {display: true },";
                    $currentchartOptions .= apply_filters('mcharts_filter_legend_option', $legendOption);
                    
                    $titleOption = "title:{display: true,text: '" . $chartTitleCleaned . "'}";
                    $currentchartOptions .= apply_filters('mcharts_filter_title_option', $titleOption);
                }
                
               
                
                $containerDimensions = 'width:' . $width . '; height:' . $height . '; ';
                MAXICHARTSAPI::getLogger()->debug($containerDimensions);
                $chartWrappingTag = 'div';
                $canvasStyle = '';
                $containerMargin = 'margin:' . $margin . ';';
                if ((! empty($float) && $float == true) || $position == 'float') {
                    MAXICHARTSAPI::getLogger()->debug("floating graphs... : " . $float);
                    $additionalStyle = 'float:left;';
                } else {
                    $additionalStyle = 'display:flex;';
                }
                
                if ((! empty($center) && $center == true) || $position == 'center') {
                    MAXICHARTSAPI::getLogger()->debug("center graphs... : " . $center);
                    // $containerDimensions = 'height: 320px;width: 40%;';
                    $containerMargin = 'margin: 0px auto;';
                    // display: flex; max-width: 100%; /*! width: 100%; */ /*! height: auto; */ margin: 5px;
                    $canvasStyle = 'display: block;margin: 0 auto;';
                    // display: block; width: 272px; height: 272px;
                }
                
                if ($height != 'auto'){
                	MAXICHARTSAPI::getLogger()->debug("Height set to : " . $height);
                	$canvasStyle .= 'height:'.$height.';width: content-box;';//width: ' . $width. '; height: ' . $height. ';';
                	$additionalOptions = ',responsive: true,
                	maintainAspectRatio: true';
                	
                	$currentchartOptions .= $additionalOptions;
                	
                	
                } else {
                	MAXICHARTSAPI::getLogger()->debug("Width set to : " . $width);
                	$canvasStyle .= 'width: ' . $width. '; height: ' . $height. ';';
                	
                	$additionalOptions = ',responsive: true,
                	maintainAspectRatio: false';
                	$currentchartOptions .= $additionalOptions;
                }
                
                $currentchartOptions .= '}; ';
                MAXICHARTSAPI::getLogger()->trace("Chart options : " . $currentchartOptions);
                // MAXICHARTSAPI::getLogger()->debug($chartToPlot);
                /*
                if ($width == 0 || $height == 0 || $canvaswidth == 0 || $canvasheight == 0) {
                    MAXICHARTSAPI::getLogger()->warn('One dimension is 0 !');
                    MAXICHARTSAPI::getLogger()->warn($width);
                    MAXICHARTSAPI::getLogger()->warn($height);
                    MAXICHARTSAPI::getLogger()->warn($canvaswidth);
                    MAXICHARTSAPI::getLogger()->warn($canvasheight);
                }*/
                
                MAXICHARTSAPI::getLogger()->debug($additionalStyle);
                
                MAXICHARTSAPI::getLogger()->debug($containerMargin);
                
                MAXICHARTSAPI::getLogger()->debug($relativewidth);
                $dataName = 'Data_' . $currentChartId;
                MAXICHARTSAPI::getLogger()->debug("switching " . $dataName . " of type " . $chartType);
                switch ($chartType) {
                    case 'pie':
                    case 'doughnut':
                    case 'bar':
                    case 'line':
                    case 'horizontalBar':
                    case 'radar':
                        //$currentchart = '<' . $chartWrappingTag . ' class="' . $align . ' ' . $class . ' maxicharts_reports-wrap" style="' . $additionalStyle . 'max-width: 100%;' . $containerDimensions . $containerMargin /*. ' data-proportion="' . $relativewidth*/ . '">';
                        $currentchart = '<' . $chartWrappingTag . ' class="' . $class . ' maxicharts_reports-wrap">';// style="' . $additionalStyle . 'max-width: 100%;' . $containerDimensions . $containerMargin /*. ' data-proportion="' . $relativewidth*/ . '">';
                        
                        $currentchart .= '<canvas style="' . $canvasStyle . '" id="' . $currentChartId . '" class="maxicharts_reports_canvas"></canvas></' . $chartWrappingTag . '>';
                        $currentchart .= empty($information_source) ? '' : '<span class="information_source">' . $information_source . '</span>';
                        
                        $currentchartData = 'var ' . $dataName . ' = {';
                        $currentchartData .= 'labels : ["';
                        $labelsDatasArray = array();
                        if (isset($chartToPlot['labels']) && is_array($chartToPlot['labels'])) {
                            
                            MAXICHARTSAPI::getLogger()->debug('Labels before clean : ' . implode("/", $chartToPlot['labels']));
                            
                            $labelsCleaned = apply_filters('mcharts_filter_chart_labels', $chartToPlot['labels']);
                            
                            $all_numeric = true;
                            foreach ($labelsCleaned as $key) {
                                if (! (is_numeric($key))) {
                                    $all_numeric = false;
                                    break;
                                }
                            }
                            $idx = 0;
                            foreach ($labelsCleaned as $labelCleanedKey => $labelCleanedVal) {
                                $labelsDatasArray[$labelCleanedVal] = $chartToPlot['data'][$idx ++];
                            }
                            if ($all_numeric) {
                                ksort($labelsDatasArray);
                            }
                            
                            if (empty($labelsDatasArray)) {
                                $currentchart = "No labels for graph with data " . $dataName;
                                MAXICHARTSAPI::getLogger()->error($currentchart);
                                
                                $allCharts .= $currentchart;
                                continue;
                            }
                            
                            $currentchartData .= implode('","', array_keys($labelsDatasArray));
                        } else {
                            $currentchart = "No labels for graph with data " . $dataName;
                            
                            MAXICHARTSAPI::getLogger()->error($chartToPlot);
                            $allCharts .= $currentchart;
                            $allCharts .= $chartToPlot;
                        }
                        $currentchartData .= '"],';
                        
                        $currentchartDatasets = 'datasets : [';
                        if (isset($multiRows) && $multiRows || $chartToPlot['multisets']) {
                            $idx = 0;
                            // count($chartToPlot ['labels'])
                            
                            foreach ($chartToPlot['datasets'] as $datasetName => $datasetDatas) {
                                // one color per dataset if multiple datasets
                                if (isset($colors[$idx])) {
                                    $currentColor = $colors[$idx];
                                    $idx ++;
                                } else {
                                    $idx = 0;
                                    $currentColor = $colors[$idx];
                                    $idx ++;
                                }
                                $colorArray = array_fill(0, count($chartToPlot['labels']), $currentColor);
                                
                                $currentDataset = '{';
                                $currentDataset .= 'label: "' . $datasetName . '",';
                                if (isset($datasetDatas['data']) && is_array($datasetDatas['data'])) {
                                    $currentDataset .= 'data: [' . implode(",", array_values($datasetDatas['data'])) . '],';
                                } else {
                                    MAXICHARTSAPI::getLogger()->error("No data for " . $datasetName);
                                }
                                $currentDataset .= 'backgroundColor: ["' . implode('","', $colorArray) . '"],';
                                $currentDataset .= '},';
                                
                                $currentchartDatasets .= $currentDataset;
                            }
                        } else {
                            $currentDataset = '{';
                            $currentDataset .= '
                            		label: "' . $chartToPlot['label'] . '",';
                            if (isset($chartToPlot['data']) && is_array($chartToPlot['data'])) {
                                $currentDataset .= '
                                		data: [' . implode(",", array_values($labelsDatasArray)) . '],';
                            } else {
                                MAXICHARTSAPI::getLogger()->debug("No labels for " . $datasetName);
                            }
                            
                            if ($type === 'line' || $type == 'radar') {
                                // same color for all points in dataset
                                $currentDataset .= 'backgroundColor: "' . $colors[0] . '",';
                            } else {
                                // one color per answer if single dataset
                                if (isset($colors) && isset($chartToPlot['labels'])) {
                                    MAXICHARTSAPI::getLogger()->debug("Colors " . implode(";", $colors));
                                    MAXICHARTSAPI::getLogger()->debug("Labels " . implode(";", $chartToPlot['labels']));
                                    $colorArray = array();
                                    $idxColor = 0;
                                    foreach ($chartToPlot['labels'] as $label) {
                                        if (isset($colors[$idxColor])) {
                                            // $colorArray[] = $colors[$idxColor];
                                            // MAXICHARTSAPI::getLogger ()->debug($idxColor. ' color set');
                                            $colorArray[] = $colors[$idxColor];
                                            $idxColor ++;
                                        } else {
                                            // MAXICHARTSAPI::getLogger ()->debug($idxColor. ' color not set, looping');
                                            $idxColor = 0;
                                            $colorArray[] = $colors[$idxColor];
                                            $idxColor ++;
                                        }
                                        
                                        // MAXICHARTSAPI::getLogger ()->debug('new color to array '.$colors [$idxColor]);
                                    }
                                    $currentDataset .= 'backgroundColor: ["' . implode('","', $colorArray) . '"],';
                                }
                            }
                            $currentDataset .= '}';
                            
                            $currentchartDatasets .= $currentDataset;
                        }
                        
                        $currentchartDatasets .= ']';
                        MAXICHARTSAPI::getLogger()->trace($currentchartDatasets);
                        $currentchartData .= $currentchartDatasets;
                        if (empty($currentchartDatasets)) {
                            $msg = "No datasets for graph with data " . $dataName;
                            MAXICHARTSAPI::getLogger()->warn($msg);
                            return $msg;
                        } else {
                            MAXICHARTSAPI::getLogger()->trace($currentchartDatasets);
                        }
                        $currentchartData .= '};';
                        break;
                    
                    case 'table':
                        $allCharts .= apply_filters('mcharts_display_table_from_chart_data_filter', $chartToPlot, $atts);
                        continue;
                    default:
                        MAXICHARTSAPI::getLogger()->error("Unknown graph type : " . $type);
                        continue;
                }
                
                if ($type == 'table' ){
                	$msg = "No js needed for table type " . $chartTitleCleaned . ' / ' . $type;
                	MAXICHARTSAPI::getLogger()->warn($msg);
                	continue;
                }
                
                if (empty($currentchartData)) {
                    $msg = "No data for chart " . $chartTitleCleaned . ' / ' . $type;
                    MAXICHARTSAPI::getLogger()->debug($msg);
                    return $msg;
                } else if ($data_only) {
                    $allChartsDatas[$dataName]['data'] = array_values($labelsDatasArray);
                    $allChartsDatas[$dataName]['labels'] = array_keys($labelsDatasArray);
                }
                
               /* $optionsAndDatasVars = '
                		' . $currentchartOptions . '
                		' . $currentchartData;
                $variable_defintions_js .= $optionsAndDatasVars;
                MAXICHARTSAPI::getLogger()->debug($optionsAndDatasVars);*/
                $allCharts .= apply_filters('maxicharts_current_chart_filter', $currentchart, array("id"=>$currentChartId,"options"=>$chartOptionsId,'data'=>$dataName,'type'=>$chartType), $atts);
                MAXICHARTSAPI::getLogger()->debug("HTML for Chart ".$currentChartId." added");
                // hook to add options
                
                //$csvArray = apply_filters('mcharts_modify_chartjs_options', $chartOptionsId, $atts);
                $chartArrayItemJson = 'window.maxicharts_reports["' . $currentChartId . '"] = { options: ' . $chartOptionsId . ', data: ' . $dataName . ', type: \'' . $chartType . '\' };';
                //MAXICHARTSAPI::getLogger()->debug($currentchart);
                
                $current_chart_js_code = '
                		' . $currentchartOptions . '
                		' . $currentchartData . '
                        ' . $chartArrayItemJson;
                
                // put all js code after html charts
                $javascript_code_to_inject .= $current_chart_js_code;
                
                MAXICHARTSAPI::getLogger()->debug('chart created successfully ' . $chartTitleCleaned);
            }
            
            // add script js            
            $allCharts .= '<script type="text/javascript">' . 'window.maxicharts_reports = window.maxicharts_reports || {};' . $javascript_code_to_inject. '</script>';
            MAXICHARTSAPI::getLogger()->debug(count($reportFields) . ' charts created');
            
            if ($data_only) {
                MAXICHARTSAPI::getLogger()->debug('Return DATA only');
                MAXICHARTSAPI::getLogger()->debug($allChartsDatas);
                wp_send_json($allChartsDatas);
                
                //return $allChartsDatas;
            } else {
                MAXICHARTSAPI::getLogger()->debug('Returning complete graphs');
            }
            
            MAXICHARTSAPI::getLogger()->trace($allCharts);
            
            return apply_filters('maxicharts_all_charts_filter', $allCharts, $atts);
        }

        function replace_carriage_return($replace, $string)
        {
            return str_replace(array(
                "\n\r",
                "\n",
                "\r"
            ), $replace, $string);
        }

        function removeQuotesAndConvertHtml($str)
        {
            $res = preg_replace('/["]/', '', wp_strip_all_tags($str));
            $res = html_entity_decode($res);
            $res = $this->replace_carriage_return(" ", $res);
            
            return $res;
        }

        function removeQuotes($string)
        {
            return preg_replace('/["]/', '', $string); // Removes special chars.
        }

        static function clean($string)
        {
            $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
            
            return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
        }
    }
}
add_action( 'plugins_loaded', array( 'maxicharts_reports', 'init' ));
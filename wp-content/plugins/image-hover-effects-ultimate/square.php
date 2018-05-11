<?php
if (!defined('ABSPATH'))
    exit;
$iheuimage1 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/1.jpg';
$iheuimage2 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/2.jpg';
$iheuimage3 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/3.jpg';
$iheuimage4 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/4.jpg';
$iheuimage5 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/5.jpg';
$iheuimage6 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/6.jpg';
wp_enqueue_script('jQuery');
wp_enqueue_script('iheu-vendor-bootstrap-jss', plugins_url('css-js/bootstrap.min.js', __FILE__));
wp_enqueue_style('iheu-vendor-bootstrap', plugins_url('css-js/bootstrap.min.css', __FILE__));
wp_enqueue_style('iheu-vendor-style', plugins_url('css-js/style.css', __FILE__));
wp_enqueue_style('font-awesome', plugins_url('css-js/font-awesome.min.css', __FILE__));
wp_enqueue_style('iheu-style', plugins_url('public/style.css', __FILE__));
wp_enqueue_script('iheu-viewportchecker', plugins_url('public/viewportchecker.js', __FILE__));
wp_enqueue_style('Open+Sans', 'https://fonts.googleapis.com/css?family=Open+Sans');
image_hover_ultimate_user_capabilities();
if (isset($_POST['submit']) && isset($_POST['submit']) == 'Save') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheunewdata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        if ($_POST['style'] == 'square-1') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(166, 0, 138, 1)|heading-padding |15|heading-margin-top |20|';
        }
        if ($_POST['style'] == 'square-2') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |yes|heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color ||heading-padding |15|heading-margin-top ||iheu-directions |top_to_bottom|';
        }
        if ($_POST['style'] == 'square-3') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |yes|heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color ||heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'square-4') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'square-5') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions ||';
        }
        if ($_POST['style'] == 'square-6') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |scale_up|';
        }
        if ($_POST['style'] == 'square-7') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'square-8') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'square-9') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'square-10') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |10|heading-margin-top |0|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'square-11') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |15|heading-margin-top |0|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'square-12') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |15|heading-margin-top |0|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'square-13') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color |rgba(176, 0, 199, 1)|heading-padding |15|heading-margin-top |0|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'square-14') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius ||image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-left|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||heading-background-color ||heading-padding |15|heading-margin-top ||iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'square-15') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |0|image-width |250|image-height |250|image-margin |20|image-padding |20|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: top;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-left|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline ||heading-padding-bottom ||heading-margin-bottom |15|desc-font-size |15|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |12|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |100|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |8|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
        }
        global $wpdb;
        $table_name = $wpdb->prefix . 'image_hover_ultimate_style';
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_name} (name, style_name, css) VALUES ( %s, %s, %s )", array($name, $style_name, $css)));
        $redirect_id = $wpdb->insert_id;
        if ($redirect_id == 0) {
            $url = admin_url("admin.php?page=image-hover-ultimate-new");
        }
        if ($redirect_id != 0) {
            $url = admin_url("admin.php?page=image-hover-ultimate-new&styleid=$redirect_id");
        }
        echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
        exit;
    }
}
?>
<div class="wrap">
    <?php echo iheu_promote_free(); ?> 
    <div class="iheu-admin-wrapper">
        <h1>Select Style</h1>
        <p>Select Style from our Template list</p>
        <div class="iheu-admin-new-row">
            <div class="iheu-admin-row">
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <style>.image-ultimate-map-absulate{position:absolute;width:100%;height:100%;top:0;}.image-ultimate-map-absulate img{width:100%;height:100%;}.image-ultimate-map-absulate a{text-decoration:none!important;}.image-ultimate-hover-180{position:relative;width:100%;height:100%;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-180 .iheu-img{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;}.image-ultimate-hover-180 .iheu-info{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;text-align:center;-webkit-backface-visibility:hidden;backface-visibility:hidden;display:table;}.image-ultimate-hover-animation-180{animation-duration:1s;}.image-ultimate-hover-padding-180{padding:20px;}.image-ultimate-map-180{max-width:250px;width:100%;margin:0 auto;position:relative;}.image-ultimate-map-180:after{padding-bottom:100%;content:"";display:block;}.image-ultimate-hover-180 .iheu-img:before{position:absolute;display:block;content:'';width:100%;height:100%;box-shadow:inset 0 0 0 0px rgba(0,146,194,0.3);}.image-ultimate-hover-180 .iheu-img{width:100%;float:left;opacity:1;-webkit-transition:all 0.5s ease-in-out;-moz-transition:all 0.5s ease-in-out;transition:all 0.5s ease-in-out;-webkit-transform:rotate(0deg) scale(1);-moz-transform:rotate(0deg) scale(1);-ms-transform:rotate(0deg) scale(1);-o-transform:rotate(0deg) scale(1);transform:rotate(0deg) scale(1);}.image-ultimate-hover-180 .iheu-info{background:rgba(0,146,194,1);visibility:hidden;-webkit-transition:all 0.5s 0.3s ease-in-out;-moz-transition:all 0.5s 0.3s ease-in-out;transition:all 0.35s 0.5s ease-in-out;-webkit-transform:rotate(720deg) scale(0);-moz-transform:rotate(720deg) scale(0);-ms-transform:rotate(720deg) scale(0);-o-transform:rotate(720deg) scale(0);transform:rotate(720deg) scale(0);opacity:0;}.image-ultimate-hover-180 .iheu-info .iheu-data{display:table-cell;vertical-align:top;text-align:center;}.image-ultimate-hover-180 .iheu-info h3{font-size:20px;font-weight:600;padding:15px 20px;margin-bottom:15px;margin-top:20px;line-height:120%;font-family:"Open Sans";width:100%;float:left;color:#ffffff;background-color:rgba(166,0,138,1);}.image-ultimate-hover-180 .iheu-info p{font-size:15px;font-weight:300;margin-bottom:20px;margin-top:0;line-height:120%;width:100%;float:left;font-family:"Open Sans";color:#ffffff;padding:0 20px;}.image-ultimate-hover-180 a.iheu-button{padding:8px 10px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;font-weight:100;font-size:12px;font-family:"Open Sans";background:rgba(126,0,158,1);color:#ffffff;text-decoration:none;display:-webkit-inline-box;margin:0 auto;}.image-ultimate-hover-180 a.iheu-button:hover{background:rgba(255,255,255,1);color:#7e009e;}.image-ultimate-hover-180:hover .iheu-img{-webkit-transform:rotate(720deg) scale(0);-moz-transform:rotate(720deg) scale(0);-ms-transform:rotate(720deg) scale(0);-o-transform:rotate(720deg) scale(0);transform:rotate(720deg) scale(0);opacity:0;}.image-ultimate-hover-180:hover .iheu-info{visibility:visible;opacity:1;-webkit-transform:rotate(0deg) scale(1);-moz-transform:rotate(0deg) scale(1);-ms-transform:rotate(0deg) scale(1);-o-transform:rotate(0deg) scale(1);transform:rotate(0deg) scale(1);}</style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-180 image-ultimate-hover-animation-180" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-180">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-180">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-180 image-ultimate-hover-animation-180" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-180">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-180">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up" style="margin-top: 0"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 1 <span>Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-1">Select</button>
                        </div>
                    </div>                    
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <style>.image-ultimate-map-absulate{position:absolute;width:100%;height:100%;top:0;}.image-ultimate-map-absulate img{width:100%;height:100%;}.image-ultimate-map-absulate a{text-decoration:none!important;}.image-ultimate-hover-184{position:relative;width:100%;height:100%;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-184 .iheu-img{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;}.image-ultimate-hover-184 .iheu-info{position:absolute;bottom:0;left:0;right:0;width:100%;text-align:center;-webkit-backface-visibility:hidden;backface-visibility:hidden;display:table;}.image-ultimate-hover-animation-184{animation-duration:1s;}.image-ultimate-hover-padding-184{padding:20px;}.image-ultimate-map-184{max-width:250px;width:100%;margin:0 auto;position:relative;overflow:hidden;}.image-ultimate-map-184:after{padding-bottom:100%;content:"";display:block;}.image-ultimate-hover-184 .iheu-img:before{position:absolute;display:block;content:'';width:100%;height:100%;box-shadow:inset 0 0 0 0px rgba(0,146,194,0.3);}.image-ultimate-hover-184 .iheu-img{width:100%;float:left;-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-184 .iheu-info{background:rgba(188,0,194,1);opacity:0;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-184 .iheu-info .iheu-data{display:table-cell;vertical-align:middle;text-align:center;padding-bottom:20px;}.image-ultimate-hover-184 .iheu-info h3{font-size:20px;font-weight:600;padding:15px 20px;margin-bottom:15px;margin-top:0px;line-height:120%;font-family:"Open Sans";width:100%;float:left;color:#ffffff;border-bottom:1px solid currentColor;}.image-ultimate-hover-184 .iheu-info p{font-size:15px;font-weight:300;margin-bottom:20px;margin-top:0;line-height:120%;width:100%;float:left;font-family:"Open Sans";color:#ffffff;padding:0 20px;}.image-ultimate-hover-184 a.iheu-button{padding:8px 10px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;font-weight:100;font-size:12px;font-family:"Open Sans";background:rgba(126,0,158,1);color:#ffffff;text-decoration:none;display:-webkit-inline-box;margin:0 auto;}.image-ultimate-hover-184 a.iheu-button:hover{background:rgba(255,255,255,1);color:#7e009e;}.image-ultimate-hover-184:hover .iheu-info{visibility:visible;opacity:1;}.image-ultimate-hover-184.bottom_to_top .iheu-info{bottom:0;min-height:50px;-webkit-transform:translateY(100%);-moz-transform:translateY(100%);-ms-transform:translateY(100%);-o-transform:translateY(100%);transform:translateY(100%);}.image-ultimate-hover-184.bottom_to_top:hover .iheu-img{-webkit-transform:translateY(-50px);-moz-transform:translateY(-50px);-ms-transform:translateY(-50px);-o-transform:translateY(-50px);transform:translateY(-50px);}.image-ultimate-hover-184.bottom_to_top:hover .iheu-info{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);}.image-ultimate-hover-184.top_to_bottom .iheu-info{-webkit-transform:translateY(-100%);-moz-transform:translateY(-100%);-ms-transform:translateY(-100%);-o-transform:translateY(-100%);transform:translateY(-100%);top:0;min-height:50px;}.image-ultimate-hover-184.top_to_bottom:hover .iheu-img{-webkit-transform:translateY(50px);-moz-transform:translateY(50px);-ms-transform:translateY(50px);-o-transform:translateY(50px);transform:translateY(50px);}.image-ultimate-hover-184.top_to_bottom:hover .iheu-info{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);}</style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-184 image-ultimate-hover-animation-184" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-184">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-184 top_to_bottom">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-184 image-ultimate-hover-animation-184" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-184">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-184 bottom_to_top">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 2 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-2">Select</button>
                        </div>
                    </div>             
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <style>.image-ultimate-map-absulate{position:absolute;width:100%;height:100%;top:0;}.image-ultimate-map-absulate img{width:100%;height:100%;}.image-ultimate-map-absulate a{text-decoration:none!important;}.image-ultimate-hover-188{position:relative;width:100%;height:100%;overflow:hidden;}.image-ultimate-hover-188 .iheu-img{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;}.image-ultimate-hover-188 .iheu-info{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;text-align:center;-webkit-backface-visibility:hidden;backface-visibility:hidden;display:table;}.image-ultimate-hover-animation-188{animation-duration:1s;}.image-ultimate-hover-padding-188{padding:20px;}.image-ultimate-map-188{max-width:250px;width:100%;margin:0 auto;position:relative;}.image-ultimate-map-188:after{padding-bottom:100%;content:"";display:block;}.image-ultimate-hover-188 .iheu-img:before{position:absolute;display:block;content:'';width:100%;height:100%;box-shadow:inset 0 0 0 0px rgba(0,146,194,0.3);}.image-ultimate-hover-188 .iheu-img{width:100%;float:left;opacity:1;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-188 .mask1,.image-ultimate-hover-188 .mask2{background:rgba(0,146,194,1);opacity:0.4;position:absolute;width:200%;height:200%;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-188 .mask1{left:auto;right:0;top:0;-webkit-transform:rotate(45deg) translateX(-50%);-moz-transform:rotate(45deg) translateX(-50%);-ms-transform:rotate(45deg) translateX(-50%);-o-transform:rotate(45deg) translateX(-50%);transform:rotate(45deg) translateX(-50%);-webkit-transform-origin:100% 0%;-moz-transform-origin:100% 0%;-ms-transform-origin:100% 0%;-o-transform-origin:100% 0%;transform-origin:100% 0%;}.image-ultimate-hover-188 .mask2{top:auto;bottom:0;left:0;-webkit-transform:rotate(45deg) translateX(50%);-moz-transform:rotate(45deg) translateX(50%);-ms-transform:rotate(45deg) translateX(50%);-o-transform:rotate(45deg) translateX(50%);transform:rotate(45deg) translateX(50%);-webkit-transform-origin:0% 100%;-moz-transform-origin:0% 100%;-ms-transform-origin:0% 100%;-o-transform-origin:0% 100%;transform-origin:0% 100%;}.image-ultimate-hover-188 .iheu-info{visibility:hidden;-webkit-transition:all 0.35s ease-in-out 0.35s;-moz-transition:all 0.35s ease-in-out 0.35s;transition:all 0.35s ease-in-out 0.35s;}.image-ultimate-hover-188 .iheu-info .iheu-data{display:table-cell;vertical-align:top;text-align:center;}.image-ultimate-hover-188 .iheu-info .data-2{background:rgba(0,146,194,1);width:100%;float:left;padding-top:20px;padding-bottom:20px;}.image-ultimate-hover-188 .iheu-info h3{font-size:20px;font-weight:600;padding:10px 20px;margin-bottom:15px;margin-top:0px;line-height:120%;font-family:"Open Sans";width:100%;float:left;color:#ffffff;border-bottom:1px solid currentColor;}.image-ultimate-hover-188 .iheu-info p{font-size:15px;font-weight:300;margin-bottom:20px;margin-top:0;width:100%;float:left;line-height:120%;font-family:"Open Sans";color:#ffffff;padding:0 20px;}.image-ultimate-hover-188 a.iheu-button{padding:8px 10px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;font-weight:100;font-size:12px;font-family:"Open Sans";background:rgba(126,0,158,1);color:#ffffff;text-decoration:none;display:-webkit-inline-box;margin:0 auto;}.image-ultimate-hover-188 a.iheu-button:hover{background:rgba(255,255,255,1);color:#7e009e;}.image-ultimate-hover-188:hover .mask1{-webkit-transform:rotate(45deg) translateX(0);-moz-transform:rotate(45deg) translateX(0);-ms-transform:rotate(45deg) translateX(0);-o-transform:rotate(45deg) translateX(0);transform:rotate(45deg) translateX(0);}.image-ultimate-hover-188:hover .mask2{-webkit-transform:rotate(45deg) translateX(-0);-moz-transform:rotate(45deg) translateX(-0);-ms-transform:rotate(45deg) translateX(-0);-o-transform:rotate(45deg) translateX(-0);transform:rotate(45deg) translateX(-0);}.image-ultimate-hover-188.left_to_right .iheu-info{visibility:visible;-webkit-transform:translateX(-100%);-moz-transform:translateX(-100%);-ms-transform:translateX(-100%);-o-transform:translateX(-100%);transform:translateX(-100%);}.image-ultimate-hover-188.left_to_right:hover .iheu-info{width:100%;height:100%;visibility:visible;-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0);}.image-ultimate-hover-188.right_to_left .iheu-info{visibility:visible;-webkit-transform:translateX(100%);-moz-transform:translateX(100%);-ms-transform:translateX(100%);-o-transform:translateX(100%);transform:translateX(100%);}.image-ultimate-hover-188.right_to_left:hover .iheu-info{width:100%;height:100%;visibility:visible;-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0);}.image-ultimate-hover-188.top_to_bottom .iheu-info{visibility:visible;-webkit-transform:translateY(-100%);-moz-transform:translateY(-100%);-ms-transform:translateY(-100%);-o-transform:translateY(-100%);transform:translateY(-100%);}.image-ultimate-hover-188.top_to_bottom:hover .iheu-info{width:100%;height:100%;visibility:visible;-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0);}.image-ultimate-hover-188.bottom_to_top .iheu-info{visibility:visible;-webkit-transform:translateY(100%);-moz-transform:translateY(100%);-ms-transform:translateY(100%);-o-transform:translateY(100%);transform:translateY(100%);}.image-ultimate-hover-188.bottom_to_top:hover .iheu-info{width:100%;height:100%;visibility:visible;-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0);}</style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-188  image-ultimate-hover-animation-188" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-188">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-188 top_to_bottom">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="mask1"></div>
                                                    <div class="mask2"></div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <div class="data-2">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div> </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-188 image-ultimate-hover-animation-188" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-188">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-188 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="mask1"></div>
                                                    <div class="mask2"></div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <div class="data-2">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div> </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 3 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-3">Select</button>
                        </div>
                    </div>                 
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <style>.image-ultimate-map-absulate{position:absolute;width:100%;height:100%;top:0;}.image-ultimate-map-absulate img{width:100%;height:100%;}.image-ultimate-map-absulate a{text-decoration:none!important;}.image-ultimate-hover-192{position:relative;width:100%;height:100%;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-192 .iheu-img{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;}.image-ultimate-hover-192 .iheu-info{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;text-align:center;-webkit-backface-visibility:hidden;backface-visibility:hidden;display:table;}.image-ultimate-hover-animation-192{animation-duration:1s;}.image-ultimate-hover-padding-192{padding:20px;}.image-ultimate-map-192{max-width:250px;width:100%;margin:0 auto;position:relative;}.image-ultimate-map-192:after{padding-bottom:100%;content:"";display:block;}.image-ultimate-hover-192 .iheu-img:before{position:absolute;display:block;content:'';width:100%;height:100%;box-shadow:inset 0 0 0 0px rgba(0,146,194,0.3);}.image-ultimate-hover-192 .iheu-img{width:100%;float:left;opacity:1;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1);}.image-ultimate-hover-192 .iheu-info{background:rgba(0,146,194,1);opacity:0;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;padding-top:20px;padding-bottom:20px;}.image-ultimate-hover-192 .iheu-info .iheu-data{display:table-cell;vertical-align:top;text-align:center;}.image-ultimate-hover-192 .iheu-info h3{font-size:20px;font-weight:600;padding:10px 20px;margin-bottom:15px;margin-top:0px;line-height:120%;font-family:"Open Sans";width:100%;float:left;color:#ffffff;background-color:rgba(176,0,199,1);}.image-ultimate-hover-192 .iheu-info p{font-size:15px;font-weight:300;margin-bottom:20px;margin-top:0;line-height:120%;font-family:"Open Sans";color:#ffffff;padding:0 20px;width:100%;float:left;}.image-ultimate-hover-192 a.iheu-button{padding:8px 10px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;font-weight:100;font-size:12px;font-family:"Open Sans";background:rgba(126,0,158,1);color:#ffffff;text-decoration:none;display:-webkit-inline-box;margin:0 auto;}.image-ultimate-hover-192 a.iheu-button:hover{background:rgba(255,255,255,1);color:#7e009e;}.image-ultimate-hover-192:hover .iheu-img{-webkit-transform:scale(0);-moz-transform:scale(0);-ms-transform:scale(0);-o-transform:scale(0);transform:scale(0);-webkit-transition-delay:0;-moz-transition-delay:0;transition-delay:0;}.image-ultimate-hover-192.left_to_right:hover .iheu-info,.image-ultimate-hover-192.right_to_left:hover .iheu-info{visibility:visible;opacity:1;-webkit-transform:scale(1) rotate(0deg);-moz-transform:scale(1) rotate(0deg);-ms-transform:scale(1) rotate(0deg);-o-transform:scale(1) rotate(0deg);transform:scale(1) rotate(0deg);-webkit-transition-delay:0.3s;-moz-transition-delay:0.3s;transition-delay:0.3s;}.image-ultimate-hover-192.left_to_right .iheu-info{-webkit-transform:scale(0) rotate(-180deg);-moz-transform:scale(0) rotate(-180deg);-ms-transform:scale(0) rotate(-180deg);-o-transform:scale(0) rotate(-180deg);transform:scale(0) rotate(-180deg);}.image-ultimate-hover-192.right_to_left .iheu-info{-webkit-transform:scale(0) rotate(180deg);-moz-transform:scale(0) rotate(180deg);-ms-transform:scale(0) rotate(180deg);-o-transform:scale(0) rotate(180deg);transform:scale(0) rotate(180deg);}</style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-192  image-ultimate-hover-animation-192" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-192">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-192 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-192  image-ultimate-hover-animation-192" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-192">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-192 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 4 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-4">Select</button>
                        </div>
                    </div>              
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <style>.image-ultimate-map-absulate{position:absolute;width:100%;height:100%;top:0;}.image-ultimate-map-absulate img{width:100%;height:100%;}.image-ultimate-map-absulate a{text-decoration:none!important;}.image-ultimate-hover-195{position:relative;width:100%;height:100%;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-195 .iheu-img{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;}.image-ultimate-hover-195 .iheu-info{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;text-align:center;-webkit-backface-visibility:hidden;backface-visibility:hidden;display:table;}.image-ultimate-hover-animation-195{animation-duration:1s;}.image-ultimate-hover-padding-195{padding:20px;}.image-ultimate-map-195{max-width:250px;width:100%;margin:0 auto;position:relative;}.image-ultimate-map-195:after{padding-bottom:100%;content:"";display:block;}.image-ultimate-hover-195{overflow:hidden;}.image-ultimate-hover-195 .iheu-img:before{position:absolute;display:block;content:'';width:100%;height:100%;box-shadow:inset 0 0 0 0px rgba(0,146,194,0.3);}.image-ultimate-hover-195 .iheu-img{width:100%;float:left;opacity:1;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1);}.image-ultimate-hover-195 .iheu-info{background:rgba(0,146,194,1);opacity:0;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-195 .iheu-info .iheu-data{display:table-cell;vertical-align:top;text-align:center;padding-top:20px;padding-bottom:20px;}.image-ultimate-hover-195 .iheu-info h3{font-size:20px;font-weight:600;padding:10px 20px;margin-bottom:15px;margin-top:0px;line-height:120%;font-family:"Open Sans";width:100%;float:left;color:#ffffff;background-color:rgba(176,0,199,1);}.image-ultimate-hover-195 .iheu-info p{font-size:15px;font-weight:300;margin-bottom:20px;margin-top:0;line-height:120%;font-family:"Open Sans";color:#ffffff;padding:0 20px;width:100%;float:left;}.image-ultimate-hover-195 a.iheu-button{padding:8px 10px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;font-weight:100;font-size:12px;font-family:"Open Sans";background:rgba(126,0,158,1);color:#ffffff;text-decoration:none;display:-webkit-inline-box;margin:0 auto;}.image-ultimate-hover-195 a.iheu-button:hover{background:rgba(255,255,255,1);color:#7e009e;}.image-ultimate-hover-195:hover .iheu-img{-webkit-transform:scale(1.3);-moz-transform:scale(1.3);-ms-transform:scale(1.3);-o-transform:scale(1.3);transform:scale(1.3);}.image-ultimate-hover-195:hover .iheu-info{opacity:1;}</style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-195  image-ultimate-hover-animation-195" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-195">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-195 ">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-zoom-in"> Fully Customizable </h3>
                                                            <p class="iheu-zoom-in"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-195 image-ultimate-hover-animation-195" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-195">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-195 ">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-zoom-in"> Fully Customizable </h3>
                                                            <p class="iheu-zoom-in"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 5 <span>Single Effect</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-5">Select</button>
                        </div>
                    </div>              
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <style>.image-ultimate-map-absulate{position:absolute;width:100%;height:100%;top:0;}.image-ultimate-map-absulate img{width:100%;height:100%;}.image-ultimate-map-absulate a{text-decoration:none!important;}.image-ultimate-hover-198{position:relative;width:100%;height:100%;overflow:hidden;}.image-ultimate-hover-198 .iheu-img{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;}.image-ultimate-hover-198 .iheu-info{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;text-align:center;-webkit-backface-visibility:hidden;backface-visibility:hidden;display:table;}.image-ultimate-hover-animation-198{animation-duration:1s;}.image-ultimate-hover-padding-198{padding:20px;}.image-ultimate-map-198{max-width:250px;width:100%;margin:0 auto;position:relative;}.image-ultimate-map-198:after{padding-bottom:100%;content:"";display:block;}.image-ultimate-hover-198 .iheu-img:before{position:absolute;display:block;content:'';width:100%;height:100%;box-shadow:inset 0 0 0 0px rgba(0,146,194,0.3);}.image-ultimate-hover-198 .iheu-img{width:100%;float:left;opacity:1;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-198 .iheu-info{background:rgba(0,146,194,1);visibility:hidden;opacity:0;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-198 .iheu-info .iheu-data{display:table-cell;vertical-align:top;text-align:center;padding-top:20px;padding-bottom:20px;}.image-ultimate-hover-198 .iheu-info h3{font-size:20px;background:rgba(176,0,199,1);font-weight:600;padding:10px 20px;margin-bottom:15px;margin-top:0px;line-height:120%;font-family:"Open Sans";width:100%;float:left;color:#ffffff;}.image-ultimate-hover-198 .iheu-info p{font-size:15px;font-weight:300;margin-bottom:20px;margin-top:0;width:100%;line-height:120%;width:100%;float:left;font-family:"Open Sans";color:#ffffff;padding:0 20px;}.image-ultimate-hover-198 a.iheu-button{padding:8px 10px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;font-weight:100;font-size:12px;font-family:"Open Sans";background:rgba(126,0,158,1);color:#ffffff;text-decoration:none;display:-webkit-inline-box;margin:0 auto;}.image-ultimate-hover-198 a.iheu-button:hover{background:rgba(255,255,255,1);color:#7e009e;}.image-ultimate-hover-198:hover .iheu-img{opacity:0;}.image-ultimate-hover-198:hover .iheu-info{visibility:visible;opacity:1;}.image-ultimate-hover-198.scale_up .iheu-img{-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1);}.image-ultimate-hover-198.scale_up .iheu-info{-webkit-transform:scale(0);-moz-transform:scale(0);-ms-transform:scale(0);-o-transform:scale(0);transform:scale(0);}.image-ultimate-hover-198.scale_up:hover .iheu-img{-webkit-transform:scale(5);-moz-transform:scale(5);-ms-transform:scale(5);-o-transform:scale(5);transform:scale(5);}.image-ultimate-hover-198.scale_up:hover .iheu-info{-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1);}.image-ultimate-hover-198.scale_down .iheu-img{-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1);}.image-ultimate-hover-198.scale_down .iheu-info{-webkit-transform:scale(5);-moz-transform:scale(5);-ms-transform:scale(5);-o-transform:scale(5);transform:scale(5);}.image-ultimate-hover-198.scale_down:hover .iheu-img{-webkit-transform:scale(0.5);-moz-transform:scale(0.5);-ms-transform:scale(0.5);-o-transform:scale(0.5);transform:scale(0.5);}.image-ultimate-hover-198.scale_down:hover .iheu-info{-webkit-transform:scale(1);-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);transform:scale(1);}</style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-198  image-ultimate-hover-animation-198" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-198">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-198 scale_up">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-198  image-ultimate-hover-animation-198" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-198">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-198 scale_down">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 6 <span>2 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-6">Select</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <style>
                                    .image-ultimate-hover-201:hover .iheu-img{
                                        z-index: 20;
                                    }.image-ultimate-map-absulate{position:absolute;width:100%;height:100%;top:0;}.image-ultimate-map-absulate img{width:100%;height:100%;}.image-ultimate-map-absulate a{text-decoration:none!important;}.image-ultimate-hover-201{position:relative;width:100%;height:100%;}.image-ultimate-hover-201 .iheu-img{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;}.image-ultimate-hover-201 .iheu-info{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;text-align:center;-webkit-backface-visibility:hidden;backface-visibility:hidden;display:table;}.image-ultimate-hover-animation-201{animation-duration:1s;}.image-ultimate-hover-padding-201{padding:20px;}.image-ultimate-map-201{max-width:250px;width:100%;margin:0 auto;position:relative;}.image-ultimate-map-201:after{padding-bottom:100%;content:"";display:block;}.image-ultimate-hover-201 .iheu-img:before{position:absolute;display:block;content:'';width:100%;height:100%;box-shadow:inset 0 0 0 0px rgba(0,146,194,0.3);}.image-ultimate-hover-201{-webkit-perspective:900px;-moz-perspective:900px;perspective:900px;}.image-ultimate-hover-201 .iheu-img{width:100%;float:left;z-index:11;-webkit-transition:all 0.5s ease-in-out;-moz-transition:all 0.5s ease-in-out;transition:all 0.5s ease-in-out;}.image-ultimate-hover-201 .iheu-info-2{z-index:0;width:100%;top:0;left:0;height:100%;position:absolute;-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d;-ms-transform-style:preserve-3d;-o-transform-style:preserve-3d;transform-style:preserve-3d;}.image-ultimate-hover-201 .iheu-info{background:rgba(0,146,194,1);opacity:1;width:100%;height:100%;}.image-ultimate-hover-201 .iheu-info .iheu-data{display:table-cell;vertical-align:top;text-align:center;padding-top:20px;padding-bottom:20px;}.image-ultimate-hover-201 .iheu-info h3{font-size:20px;background:rgba(176,0,199,1);font-weight:600;padding:10px 20px;margin-bottom:15px;margin-top:0px;line-height:120%;font-family:"Open Sans";width:100%;float:left;color:#ffffff;}.image-ultimate-hover-201 .iheu-info p{font-size:15px;font-weight:300;margin-bottom:20px;margin-top:0;width:100%;line-height:120%;width:100%;float:left;font-family:"Open Sans";color:#ffffff;padding:0 20px;}.image-ultimate-hover-201 a.iheu-button{padding:8px 10px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;font-weight:100;font-size:12px;font-family:"Open Sans";background:rgba(126,0,158,1);color:#ffffff;text-decoration:none;display:-webkit-inline-box;margin:0 auto;}.image-ultimate-hover-201 a.iheu-button:hover{background:rgba(255,255,255,1);color:#7e009e;}.image-ultimate-hover-201.left_to_right .iheu-img{-webkit-transform-origin:100% 50%;-moz-transform-origin:100% 50%;-ms-transform-origin:100% 50%;-o-transform-origin:100% 50%;transform-origin:100% 50%;}.image-ultimate-hover-201.left_to_right:hover .iheu-img{-webkit-transform:rotate3d(0,1,0,180deg);-moz-transform:rotate3d(0,1,0,180deg);-ms-transform:rotate3d(0,1,0,180deg);-o-transform:rotate3d(0,1,0,180deg);transform:rotate3d(0,1,0,180deg);}.image-ultimate-hover-201.right_to_left .iheu-img{-webkit-transform-origin:0% 50%;-moz-transform-origin:0% 50%;-ms-transform-origin:0% 50%;-o-transform-origin:0% 50%;transform-origin:0% 50%;}.image-ultimate-hover-201.right_to_left:hover .iheu-img{-webkit-transform:rotate3d(0,1,0,-180deg);-moz-transform:rotate3d(0,1,0,-180deg);-ms-transform:rotate3d(0,1,0,-180deg);-o-transform:rotate3d(0,1,0,-180deg);transform:rotate3d(0,1,0,-180deg);}.image-ultimate-hover-201.top_to_bottom .iheu-img{-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-ms-transform-origin:50% 100%;-o-transform-origin:50% 100%;transform-origin:50% 100%;}.image-ultimate-hover-201.top_to_bottom:hover .iheu-img{-webkit-transform:rotate3d(1,0,0,-180deg);-moz-transform:rotate3d(1,0,0,-180deg);-ms-transform:rotate3d(1,0,0,-180deg);-o-transform:rotate3d(1,0,0,-180deg);transform:rotate3d(1,0,0,-180deg);}.image-ultimate-hover-201.bottom_to_top .iheu-img{-webkit-transform-origin:50% 0;-moz-transform-origin:50% 0;-ms-transform-origin:50% 0;-o-transform-origin:50% 0;transform-origin:50% 0;}.image-ultimate-hover-201.bottom_to_top:hover .iheu-img{-webkit-transform:rotate3d(1,0,0,180deg);-moz-transform:rotate3d(1,0,0,180deg);-ms-transform:rotate3d(1,0,0,180deg);-o-transform:rotate3d(1,0,0,180deg);transform:rotate3d(1,0,0,180deg);}</style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-201 image-ultimate-hover-animation-201" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-201">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-201 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info-2"><div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-201  image-ultimate-hover-animation-201" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-201">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-201 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info-2"><div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 7 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-7">Select</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <style>.image-ultimate-map-absulate{position:absolute;width:100%;height:100%;top:0;}.image-ultimate-map-absulate img{width:100%;height:100%;}.image-ultimate-map-absulate a{text-decoration:none!important;}.image-ultimate-hover-207{position:relative;width:100%;height:100%;}.image-ultimate-hover-207 .iheu-img{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;}.image-ultimate-hover-207 .iheu-info{position:absolute;top:0;bottom:0;left:0;right:0;width:100%;height:100%;text-align:center;-webkit-backface-visibility:hidden;backface-visibility:hidden;display:table;}.image-ultimate-hover-animation-207{animation-duration:1s;}.image-ultimate-hover-padding-207{padding:20px;}.image-ultimate-map-207{max-width:250px;width:100%;margin:0 auto;position:relative;}.image-ultimate-map-207:after{padding-bottom:100%;content:"";display:block;}.image-ultimate-hover-207 .iheu-img:before{position:absolute;display:block;content:'';width:100%;height:100%;box-shadow:inset 0 0 0 0px rgba(0,146,194,0.3);}.image-ultimate-hover-207{overflow:hidden;}.image-ultimate-hover-207 .iheu-img{width:100%;float:left;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-207 .iheu-info{background:rgba(0,146,194,1);visibility:hidden;opacity:0;-webkit-transition:all 0.35s ease-in-out;-moz-transition:all 0.35s ease-in-out;transition:all 0.35s ease-in-out;}.image-ultimate-hover-207 .iheu-info .iheu-data{display:table-cell;vertical-align:top;text-align:center;}.image-ultimate-hover-207 .iheu-info h3{font-size:20px;background:rgba(176,0,199,1);font-weight:600;padding:10px 20px;margin-bottom:15px;margin-top:0px;line-height:120%;font-family:"Open Sans";width:100%;float:left;color:#ffffff;}.image-ultimate-hover-207 .iheu-info p{font-size:15px;font-weight:300;margin-bottom:20px;margin-top:0;width:100%;line-height:120%;width:100%;float:left;font-family:"Open Sans";color:#ffffff;padding:0 20px;}.image-ultimate-hover-207 a.iheu-button{padding:8px 10px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;font-weight:100;font-size:12px;font-family:"Open Sans";background:rgba(126,0,158,1);color:#ffffff;text-decoration:none;display:-webkit-inline-box;margin:0 auto;}.image-ultimate-hover-207 a.iheu-button:hover{background:rgba(255,255,255,1);color:#7e009e;}.image-ultimate-hover-207:hover .iheu-info{visibility:visible;opacity:1;}.image-ultimate-hover-207.left_to_right .iheu-img{-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0);}.image-ultimate-hover-207.left_to_right .iheu-info{-webkit-transform:translateX(-100%);-moz-transform:translateX(-100%);-ms-transform:translateX(-100%);-o-transform:translateX(-100%);transform:translateX(-100%);}.image-ultimate-hover-207.left_to_right:hover .iheu-img{-webkit-transform:translateX(100%);-moz-transform:translateX(100%);-ms-transform:translateX(100%);-o-transform:translateX(100%);transform:translateX(100%);}.image-ultimate-hover-207.left_to_right:hover .iheu-info{-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0);}.image-ultimate-hover-207.right_to_left .iheu-img{-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0);}.image-ultimate-hover-207.right_to_left .iheu-info{-webkit-transform:translateX(100%);-moz-transform:translateX(100%);-ms-transform:translateX(100%);-o-transform:translateX(100%);transform:translateX(100%);}.image-ultimate-hover-207.right_to_left:hover .iheu-img{-webkit-transform:translateX(-100%);-moz-transform:translateX(-100%);-ms-transform:translateX(-100%);-o-transform:translateX(-100%);transform:translateX(-100%);}.image-ultimate-hover-207.right_to_left:hover .iheu-info{-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0);}.image-ultimate-hover-207.top_to_bottom .iheu-img{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);}.image-ultimate-hover-207.top_to_bottom .iheu-info{-webkit-transform:translateY(-100%);-moz-transform:translateY(-100%);-ms-transform:translateY(-100%);-o-transform:translateY(-100%);transform:translateY(-100%);}.image-ultimate-hover-207.top_to_bottom:hover .iheu-img{-webkit-transform:translateY(100%);-moz-transform:translateY(100%);-ms-transform:translateY(100%);-o-transform:translateY(100%);transform:translateY(100%);}.image-ultimate-hover-207.top_to_bottom:hover .iheu-info{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);}.image-ultimate-hover-207.bottom_to_top .iheu-img{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);}.image-ultimate-hover-207.bottom_to_top .iheu-info{-webkit-transform:translateY(100%);-moz-transform:translateY(100%);-ms-transform:translateY(100%);-o-transform:translateY(100%);transform:translateY(100%);}.image-ultimate-hover-207.bottom_to_top:hover .iheu-img{-webkit-transform:translateY(-100%);-moz-transform:translateY(-100%);-ms-transform:translateY(-100%);-o-transform:translateY(-100%);transform:translateY(-100%);}.image-ultimate-hover-207.bottom_to_top:hover .iheu-info{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0);}</style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-207  image-ultimate-hover-animation-207" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-207">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-207 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-207 image-ultimate-hover-animation-207" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-207">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-207 top_to_bottom">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 8 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-8">Select</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <style>

                                    .image-ultimate-map-absulate{
                                        position: absolute;
                                        width: 100%;
                                        height: 100%;
                                        top: 0;
                                    }
                                    .image-ultimate-map-absulate img{
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-map-absulate a{
                                        text-decoration: none !important;
                                    }
                                    .image-ultimate-hover-214{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-214 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-214 .iheu-info {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                        text-align: center;
                                        -webkit-backface-visibility: hidden;
                                        backface-visibility: hidden;
                                        display: table;
                                    }

                                    .image-ultimate-hover-animation-214 {
                                        animation-duration: 1s;
                                    }

                                    .image-ultimate-hover-padding-214{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-214 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-214:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-214 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);

                                    }
                                    .image-ultimate-hover-214{
                                        overflow: hidden;
                                    }

                                    .image-ultimate-hover-214 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        opacity: 1;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }

                                    .image-ultimate-hover-214 .iheu-info {
                                        background: rgba(194, 0, 129, 1);
                                        opacity: 0;
                                        -webkit-transition: all 0.35s ease 0.2s;
                                        -moz-transition: all 0.35s ease 0.2s;
                                        transition: all 0.35s ease 0.2s;
                                    }
                                    .image-ultimate-hover-214 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: top;text-align: center;                }

                                    .image-ultimate-hover-214 .iheu-info h3 {
                                        font-size: 20px;
                                        background: rgba(176, 0, 199, 1);
                                        font-weight: 600;
                                        padding: 10px 20px; 
                                        margin-bottom: 15px;
                                        margin-top: 10px;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        width:100%;
                                        float: left;
                                        color: #ffffff;

                                    }
                                    .image-ultimate-hover-214 .iheu-info p {
                                        font-size: 15px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        width: 100%;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                        padding:0 20px; 
                                    }
                                    .image-ultimate-hover-214 a.iheu-button{
                                        padding: 8px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 100;
                                        font-size: 12px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:-webkit-inline-box;
                                        margin: 0 auto;                                    }
                                    .image-ultimate-hover-214 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                    .image-ultimate-hover-214:hover .iheu-img {
                                        opacity: 0;
                                        -webkit-transform: scale(0.5);
                                        -moz-transform: scale(0.5);
                                        -ms-transform: scale(0.5);
                                        -o-transform: scale(0.5);
                                        transform: scale(0.5);
                                    }
                                    .image-ultimate-hover-214:hover .iheu-info {
                                        visibility: visible;
                                        opacity: 1;
                                    }

                                    .image-ultimate-hover-214.left_to_right .iheu-info {
                                        -webkit-transform: translateX(-100%);
                                        -moz-transform: translateX(-100%);
                                        -ms-transform: translateX(-100%);
                                        -o-transform: translateX(-100%);
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-214.left_to_right:hover .iheu-info {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }

                                    .image-ultimate-hover-214.right_to_left .iheu-info {
                                        -webkit-transform: translateX(100%);
                                        -moz-transform: translateX(100%);
                                        -ms-transform: translateX(100%);
                                        -o-transform: translateX(100%);
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-214.right_to_left:hover .iheu-info {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }

                                    .image-ultimate-hover-214.top_to_bottom .iheu-info {
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                    }
                                    .image-ultimate-hover-214.top_to_bottom:hover .iheu-info {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }

                                    .image-ultimate-hover-214.bottom_to_top .iheu-info {
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                    .image-ultimate-hover-214.bottom_to_top:hover .iheu-info {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-214 image-ultimate-hover-animation-214" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-214">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-214 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-214 image-ultimate-hover-animation-214" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-214">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-214 top_to_bottom">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 9 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-9">Select</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <style>

                                    .image-ultimate-map-absulate{
                                        position: absolute;
                                        width: 100%;
                                        height: 100%;
                                        top: 0;
                                    }
                                    .image-ultimate-map-absulate img{
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-map-absulate a{
                                        text-decoration: none !important;
                                    }
                                    .image-ultimate-hover-219{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-219 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-219 .iheu-info {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                        text-align: center;
                                        -webkit-backface-visibility: hidden;
                                        backface-visibility: hidden;
                                        display: table;
                                    }

                                    .image-ultimate-hover-animation-219 {
                                        animation-duration: 1s;
                                    }

                                    .image-ultimate-hover-padding-219{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-219 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-219:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-219 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);

                                    }
                                    .image-ultimate-hover-219{
                                        overflow: hidden;
                                    }

                                    .image-ultimate-hover-219 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        -webkit-transition: all 0.35s ease-in;
                                        -moz-transition: all 0.35s ease-in;
                                        transition: all 0.35s ease-in;
                                    }

                                    .image-ultimate-hover-219 .iheu-info {
                                        background: rgba(0, 146, 194, 0.81);
                                        visibility: hidden;
                                        opacity: 0;
                                        -webkit-transition: all 0.35s ease-in;
                                        -moz-transition: all 0.35s ease-in;
                                        transition: all 0.35s ease-in;
                                    }
                                    .image-ultimate-hover-219 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: top;text-align: center;                    padding-top: 20px;
                                        padding-bottom: 20px;
                                    }

                                    .image-ultimate-hover-219 .iheu-info h3 {
                                        font-size: 20px;
                                        background: rgba(176, 0, 199, 1);
                                        font-weight: 600;
                                        padding: 10px 20px; 
                                        margin-bottom: 15px;
                                        margin-top: 0px;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        width:100%;
                                        float: left;
                                        color: #ffffff;

                                    }
                                    .image-ultimate-hover-219 .iheu-info p {
                                        font-size: 15px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                        padding:0 20px; 
                                    }
                                    .image-ultimate-hover-219 a.iheu-button{
                                        padding: 8px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 100;
                                        font-size: 12px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:-webkit-inline-box;
                                        margin: 0 auto;                                    }
                                    .image-ultimate-hover-219 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                    .image-ultimate-hover-219:hover .iheu-info {
                                        visibility: visible;
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-219.left_to_right .iheu-info {
                                        -webkit-transform: translate(-460px, -100px) rotate(-180deg);
                                        -moz-transform: translate(-460px, -100px) rotate(-180deg);
                                        -ms-transform: translate(-460px, -100px) rotate(-180deg);
                                        -o-transform: translate(-460px, -100px) rotate(-180deg);
                                        transform: translate(-460px, -100px) rotate(-180deg);
                                    }

                                    .image-ultimate-hover-219.left_to_right:hover .iheu-info {
                                        -webkit-transform: translate(0px, 0px);
                                        -moz-transform: translate(0px, 0px);
                                        -ms-transform: translate(0px, 0px);
                                        -o-transform: translate(0px, 0px);
                                        transform: translate(0px, 0px);
                                    }
                                    .image-ultimate-hover-219.right_to_left .iheu-info {
                                        -webkit-transform: translate(460px, -100px) rotate(180deg);
                                        -moz-transform: translate(460px, -100px) rotate(180deg);
                                        -ms-transform: translate(460px, -100px) rotate(180deg);
                                        -o-transform: translate(460px, -100px) rotate(180deg);
                                        transform: translate(460px, -100px) rotate(180deg);
                                    }
                                    .image-ultimate-hover-219.right_to_left:hover .iheu-info {
                                        -webkit-transform: translate(0px, 0px);
                                        -moz-transform: translate(0px, 0px);
                                        -ms-transform: translate(0px, 0px);
                                        -o-transform: translate(0px, 0px);
                                        transform: translate(0px, 0px);
                                    }

                                    .image-ultimate-hover-219.top_to_bottom .iheu-info {
                                        -webkit-transform: translate(-265px, -145px) rotate(-45deg);
                                        -moz-transform: translate(-265px, -145px) rotate(-45deg);
                                        -ms-transform: translate(-265px, -145px) rotate(-45deg);
                                        -o-transform: translate(-265px, -145px) rotate(-45deg);
                                        transform: translate(-265px, -145px) rotate(-45deg);
                                    }
                                    .image-ultimate-hover-219.top_to_bottom:hover .iheu-info {
                                        -webkit-transform: translate(0px, 0px);
                                        -moz-transform: translate(0px, 0px);
                                        -ms-transform: translate(0px, 0px);
                                        -o-transform: translate(0px, 0px);
                                        transform: translate(0px, 0px);
                                        -webkit-transition-delay: 0.2s;
                                        -moz-transition-delay: 0.2s;
                                        transition-delay: 0.2s;
                                    }

                                    .image-ultimate-hover-219.bottom_to_top .iheu-info {
                                        -webkit-transform: translate(265px, 145px) rotate(45deg);
                                        -moz-transform: translate(265px, 145px) rotate(45deg);
                                        -ms-transform: translate(265px, 145px) rotate(45deg);
                                        -o-transform: translate(265px, 145px) rotate(45deg);
                                        transform: translate(265px, 145px) rotate(45deg);
                                    }
                                    .image-ultimate-hover-219.bottom_to_top:hover .iheu-info {
                                        -webkit-transform: translate(0px, 0px);
                                        -moz-transform: translate(0px, 0px);
                                        -ms-transform: translate(0px, 0px);
                                        -o-transform: translate(0px, 0px);
                                        transform: translate(0px, 0px);
                                        -webkit-transition-delay: 0.2s;
                                        -moz-transition-delay: 0.2s;
                                        transition-delay: 0.2s;
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-219 image-ultimate-hover-animation-219" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-219">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-219 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-219 image-ultimate-hover-animation-219" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-219">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-219 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                            <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 10 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-10">Select</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">

                                    <style>

                                        .image-ultimate-map-absulate{
                                            position: absolute;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                        }
                                        .image-ultimate-map-absulate img{
                                            width: 100%;
                                            height: 100%;
                                        }

                                        .image-ultimate-map-absulate a{
                                            text-decoration: none !important;
                                        }
                                        .image-ultimate-hover-225{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-hover-225 .iheu-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }

                                        .image-ultimate-hover-225 .iheu-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }

                                        .image-ultimate-hover-animation-225 {
                                            animation-duration: 1s;
                                        }

                                        .image-ultimate-hover-padding-225{
                                            padding: 20px;
                                        }
                                        .image-ultimate-map-225 {
                                            max-width: 250px;
                                            width: 100%;
                                            margin: 0 auto;
                                            position: relative;
                                        }
                                        .image-ultimate-map-225:after {
                                            padding-bottom: 100%;
                                            content: "";
                                            display: block;
                                        }

                                        .image-ultimate-hover-225 .iheu-img:before {
                                            position: absolute;
                                            display: block;
                                            content: '';
                                            width: 100%;
                                            height: 100%;
                                            box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);

                                        }
                                        .image-ultimate-hover-225{
                                            overflow: hidden;
                                        }

                                        .image-ultimate-hover-225 .iheu-img {
                                            width: 100%;
                                            float: left;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                            -webkit-transform: scale(1);
                                            -moz-transform: scale(1);
                                            -ms-transform: scale(1);
                                            -o-transform: scale(1);
                                            transform: scale(1);
                                        }

                                        .image-ultimate-hover-225 .iheu-info {
                                            background: rgba(0, 146, 194, 0.68);
                                            visibility: hidden;
                                            visibility: hidden;
                                            opacity: 0;
                                            pointer-events: none;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                        }
                                        .image-ultimate-hover-225 .iheu-info .iheu-data{
                                            display: table-cell;
                                            vertical-align: top;text-align: center;                }

                                        .image-ultimate-hover-225 .iheu-info h3 {
                                            font-size: 20px;
                                            background: rgba(176, 0, 199, 1);
                                            font-weight: 600;
                                            padding: 15px 20px; 
                                            margin-bottom: 15px;
                                            margin-top: 0px;
                                            line-height: 120%;
                                            font-family: "Open Sans";
                                            width:100%;
                                            float: left;
                                            color: #ffffff;

                                        }
                                        .image-ultimate-hover-225 .iheu-info p {
                                            font-size: 15px;
                                            font-weight: 300;
                                            margin-bottom: 20px;
                                            margin-top: 0;
                                            width: 100%;
                                            line-height: 120%;
                                            width: 100%;
                                            float: left;
                                            font-family: "Open Sans";
                                            color: #ffffff;
                                            padding:0 20px; 
                                        }
                                        .image-ultimate-hover-225 a.iheu-button{
                                            padding: 8px 10px;
                                            -webkit-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            border-radius: 5px;
                                            font-weight: 100;
                                            font-size: 12px;
                                            font-family: "Open Sans";
                                            background: rgba(126, 0, 158, 1);
                                            color: #ffffff;
                                            text-decoration: none;
                                            display:-webkit-inline-box;
                                            margin: 0 auto;                                    }
                                        .image-ultimate-hover-225 a.iheu-button:hover{
                                            background: rgba(255, 255, 255, 1);
                                            color: #7e009e;
                                        }

                                        .image-ultimate-hover-225:hover .iheu-img {
                                            -webkit-transform: scale(1.2);
                                            -moz-transform: scale(1.2);
                                            -ms-transform: scale(1.2);
                                            -o-transform: scale(1.2);
                                            transform: scale(1.2);
                                        }
                                        .image-ultimate-hover-225:hover .iheu-info {
                                            visibility: visible;
                                            opacity: 1;
                                            pointer-events: auto;
                                        }

                                        .image-ultimate-hover-225.left_to_right .iheu-info {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .image-ultimate-hover-225.left_to_right:hover .iheu-info {
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }

                                        .image-ultimate-hover-225.right_to_left .iheu-info {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }
                                        .image-ultimate-hover-225.right_to_left:hover .iheu-info {
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }

                                        .image-ultimate-hover-225.top_to_bottom .iheu-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                        .image-ultimate-hover-225.top_to_bottom:hover .iheu-info {
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }

                                        .image-ultimate-hover-225.bottom_to_top .iheu-info {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                        .image-ultimate-hover-225.bottom_to_top:hover .iheu-info {
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                    </style>

                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-225 image-ultimate-hover-animation-225" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-225">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-225 left_to_right">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage3; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Fully Customizable </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-225 image-ultimate-hover-animation-225" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-225">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-225 right_to_left">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage4; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Fully Customizable </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 11 <span>Single Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-11">Select</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <style>
                                        .image-ultimate-map-absulate{
                                            position: absolute;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                        }
                                        .image-ultimate-map-absulate img{
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-map-absulate a{
                                            text-decoration: none !important;
                                        }
                                        .image-ultimate-hover{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-hover-232 .iheu-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-hover-232 .iheu-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .image-ultimate-hover-animation-232 {
                                            animation-duration: 1s;
                                        }
                                        .image-ultimate-hover-padding-232{
                                            padding: 20px;
                                        }
                                        .image-ultimate-map-232 {
                                            max-width: 250px;
                                            width: 100%;
                                            margin: 0 auto;
                                            position: relative;
                                        }
                                        .image-ultimate-map-232:after {
                                            padding-bottom: 100%;
                                            content: "";
                                            display: block;
                                        }
                                        .image-ultimate-hover-232 .iheu-img:before {
                                            position: absolute;
                                            display: block;
                                            content: '';
                                            width: 100%;
                                            height: 100%;
                                            box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);

                                        }
                                        .image-ultimate-hover-232 .iheu-img {
                                            width: 100%;
                                            float: left;
                                            opacity: 1;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                        }
                                        .image-ultimate-hover-232 .iheu-info {
                                            background: rgba(194, 149, 0, 1);
                                            visibility: hidden;
                                            opacity: 0;
                                            pointer-events: none;
                                            -webkit-transform: scale(0.5);
                                            -moz-transform: scale(0.5);
                                            -ms-transform: scale(0.5);
                                            -o-transform: scale(0.5);
                                            transform: scale(0.5);
                                            -webkit-transition: all 0.35s ease 0.2s;
                                            -moz-transition: all 0.35s ease 0.2s;
                                            transition: all 0.35s ease 0.2s;
                                        }
                                        .image-ultimate-hover-232 .iheu-info .iheu-data{
                                            display: table-cell;
                                            vertical-align: top;text-align: center;                }
                                        .image-ultimate-hover-232 .iheu-info h3 {
                                            font-size: 20px;
                                            background: rgba(176, 0, 199, 1);
                                            font-weight: 600;
                                            padding: 15px 20px; 
                                            margin-bottom: 15px;
                                            margin-top: 0px;
                                            line-height: 120%;
                                            font-family: "Open Sans";
                                            width:100%;
                                            float: left;
                                            color: #ffffff;
                                        }
                                        .image-ultimate-hover-232 .iheu-info p {
                                            font-size: 15px;
                                            font-weight: 300;
                                            margin-bottom: 20px;
                                            margin-top: 0;
                                            width: 100%;
                                            line-height: 120%;
                                            width: 100%;
                                            float: left;
                                            font-family: "Open Sans";
                                            color: #ffffff;
                                            padding:0 20px; 
                                        }
                                        .image-ultimate-hover-232 a.iheu-button{
                                            padding: 8px 10px;
                                            -webkit-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            border-radius: 5px;
                                            font-weight: 100;
                                            font-size: 12px;
                                            font-family: "Open Sans";
                                            background: rgba(126, 0, 158, 1);
                                            color: #ffffff;
                                            text-decoration: none;
                                            display:-webkit-inline-box;
                                            margin: 0 auto;                                    }
                                        .image-ultimate-hover-232 a.iheu-button:hover{
                                            background: rgba(255, 255, 255, 1);
                                            color: #7e009e;
                                        }
                                        .image-ultimate-hover-232:hover .iheu-img {
                                            opacity: 0;
                                            pointer-events: none;
                                            -webkit-transform: scale(0.5);
                                            -moz-transform: scale(0.5);
                                            -ms-transform: scale(0.5);
                                            -o-transform: scale(0.5);
                                            transform: scale(0.5);
                                        }
                                        .image-ultimate-hover-232:hover .iheu-info {
                                            visibility: visible;
                                            opacity: 1;
                                            pointer-events: auto;
                                            -webkit-transform: scale(1);
                                            -moz-transform: scale(1);
                                            -ms-transform: scale(1);
                                            -o-transform: scale(1);
                                            transform: scale(1);
                                        }
                                        .image-ultimate-hover-232.left_to_right .iheu-img {
                                            -webkit-transform: translateX(0) rotate(0);
                                            -moz-transform: translateX(0) rotate(0);
                                            -ms-transform: translateX(0) rotate(0);
                                            -o-transform: translateX(0) rotate(0);
                                            transform: translateX(0) rotate(0);
                                        }
                                        .image-ultimate-hover-232.left_to_right:hover .iheu-img {
                                            -webkit-transform: translateX(100%) rotate(180deg);
                                            -moz-transform: translateX(100%) rotate(180deg);
                                            -ms-transform: translateX(100%) rotate(180deg);
                                            -o-transform: translateX(100%) rotate(180deg);
                                            transform: translateX(100%) rotate(180deg);
                                        }
                                        .image-ultimate-hover-232.right_to_left .iheu-img {
                                            -webkit-transform: translateX(0) rotate(0);
                                            -moz-transform: translateX(0) rotate(0);
                                            -ms-transform: translateX(0) rotate(0);
                                            -o-transform: translateX(0) rotate(0);
                                            transform: translateX(0) rotate(0);
                                        }
                                        .image-ultimate-hover-232.right_to_left:hover .iheu-img {
                                            -webkit-transform: translateX(-100%) rotate(-180deg);
                                            -moz-transform: translateX(-100%) rotate(-180deg);
                                            -ms-transform: translateX(-100%) rotate(-180deg);
                                            -o-transform: translateX(-100%) rotate(-180deg);
                                            transform: translateX(-100%) rotate(-180deg);
                                        }
                                        .image-ultimate-hover-232.top_to_bottom .iheu-img {
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                        .image-ultimate-hover-232.top_to_bottom:hover .iheu-img {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                        .image-ultimate-hover-232.bottom_to_top .iheu-img {
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                        .image-ultimate-hover-232.bottom_to_top:hover .iheu-img {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                    </style>
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-232 image-ultimate-hover-animation-232" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-232">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-232 right_to_left">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage5; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-232 image-ultimate-hover-animation-232" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-232">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-232 left_to_right">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage6; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 12 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-12">Select</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <style>
                                        .image-ultimate-map-absulate{
                                            position: absolute;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                        }
                                        .image-ultimate-map-absulate img{
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-map-absulate a{
                                            text-decoration: none !important;
                                        }
                                        .image-ultimate-hover-238{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-hover-238 .iheu-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-hover-238 .iheu-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .image-ultimate-hover-animation-238 {
                                            animation-duration: 1s;
                                        }

                                        .image-ultimate-hover-padding-238{
                                            padding: 20px;
                                        }
                                        .image-ultimate-map-238 {
                                            max-width: 250px;
                                            width: 100%;
                                            margin: 0 auto;
                                            position: relative;
                                        }

                                        .image-ultimate-map-238:after {
                                            padding-bottom: 100%;
                                            content: "";
                                            display: block;
                                        }
                                        .image-ultimate-hover-238 {
                                            overflow: hidden;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .image-ultimate-hover-238 .iheu-img:before {
                                            position: absolute;
                                            display: block;
                                            content: '';
                                            width: 100%;
                                            height: 100%;
                                            box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);

                                        }
                                        .image-ultimate-hover-238 .iheu-img {
                                            width: 100%;
                                            float: left;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-in-out;
                                            -moz-transition: all 0.4s ease-in-out;
                                            transition: all 0.4s ease-in-out;
                                        }
                                        .image-ultimate-hover-238 .iheu-info {
                                            background: rgba(0, 146, 194, 1);
                                            opacity: 0;
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;
                                        }
                                        .image-ultimate-hover-238:hover .iheu-info {
                                            visibility: visible;
                                            opacity: 1;
                                        }
                                        .image-ultimate-hover-238 .iheu-info .iheu-data{
                                            display: table-cell;
                                            vertical-align: top;text-align: center;                }
                                        .image-ultimate-hover-238 .iheu-info h3 {
                                            font-size: 20px;
                                            background: rgba(176, 0, 199, 1);
                                            font-weight: 600;
                                            padding: 15px 20px; 
                                            margin-bottom: 15px;
                                            margin-top: 10px;
                                            line-height: 120%;
                                            font-family: "Open Sans";
                                            width:100%;
                                            float: left;
                                            color: #ffffff;

                                        }
                                        .image-ultimate-hover-238 .iheu-info p {
                                            font-size: 15px;
                                            font-weight: 300;
                                            margin-bottom: 20px;
                                            margin-top: 0;
                                            width: 100%;
                                            line-height: 120%;
                                            width: 100%;
                                            float: left;
                                            font-family: "Open Sans";
                                            color: #ffffff;
                                            padding:0 20px; 
                                        }
                                        .image-ultimate-hover-238 a.iheu-button{
                                            padding: 8px 10px;
                                            -webkit-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            border-radius: 5px;
                                            font-weight: 100;
                                            font-size: 12px;
                                            font-family: "Open Sans";
                                            background: rgba(126, 0, 158, 1);
                                            color: #ffffff;
                                            text-decoration: none;
                                            display:-webkit-inline-box;
                                            margin: 0 auto;                                    }
                                        .image-ultimate-hover-238 a.iheu-button:hover{
                                            background: rgba(255, 255, 255, 1);
                                            color: #7e009e;
                                        }
                                        .image-ultimate-hover-238.left_to_right .iheu-img {
                                            -webkit-transform: rotateY(0);
                                            -moz-transform: rotateY(0);
                                            -ms-transform: rotateY(0);
                                            -o-transform: rotateY(0);
                                            transform: rotateY(0);
                                            -webkit-transform-origin: 100% 50%;
                                            -moz-transform-origin: 100% 50%;
                                            -ms-transform-origin: 100% 50%;
                                            -o-transform-origin: 100% 50%;
                                            transform-origin: 100% 50%;
                                        }
                                        .image-ultimate-hover-238.left_to_right .iheu-info {
                                            -webkit-transform: rotateY(90deg);
                                            -moz-transform: rotateY(90deg);
                                            -ms-transform: rotateY(90deg);
                                            -o-transform: rotateY(90deg);
                                            transform: rotateY(90deg);
                                            -webkit-transform-origin: 0% 50%;
                                            -moz-transform-origin: 0% 50%;
                                            -ms-transform-origin: 0% 50%;
                                            -o-transform-origin: 0% 50%;
                                            transform-origin: 0% 50%;
                                        }
                                        .image-ultimate-hover-238.left_to_right:hover .iheu-img {
                                            -webkit-transform: rotateY(-90deg);
                                            -moz-transform: rotateY(-90deg);
                                            -ms-transform: rotateY(-90deg);
                                            -o-transform: rotateY(-90deg);
                                            transform: rotateY(-90deg);
                                        }
                                        .image-ultimate-hover-238.left_to_right:hover .iheu-info {
                                            -webkit-transform: rotateY(0);
                                            -moz-transform: rotateY(0);
                                            -ms-transform: rotateY(0);
                                            -o-transform: rotateY(0);
                                            transform: rotateY(0);
                                        }

                                        .image-ultimate-hover-238.right_to_left .iheu-img {
                                            -webkit-transform: rotateY(0);
                                            -moz-transform: rotateY(0);
                                            -ms-transform: rotateY(0);
                                            -o-transform: rotateY(0);
                                            transform: rotateY(0);
                                            -webkit-transform-origin: 0% 50%;
                                            -moz-transform-origin: 0% 50%;
                                            -ms-transform-origin: 0% 50%;
                                            -o-transform-origin: 0% 50%;
                                            transform-origin: 0% 50%;
                                        }
                                        .image-ultimate-hover-238.right_to_left .iheu-info {
                                            -webkit-transform: rotateY(-90deg);
                                            -moz-transform: rotateY(-90deg);
                                            -ms-transform: rotateY(-90deg);
                                            -o-transform: rotateY(-90deg);
                                            transform: rotateY(-90deg);
                                            -webkit-transform-origin: 100% 50%;
                                            -moz-transform-origin: 100% 50%;
                                            -ms-transform-origin: 100% 50%;
                                            -o-transform-origin: 100% 50%;
                                            transform-origin: 100% 50%;
                                        }
                                        .image-ultimate-hover-238.right_to_left:hover .iheu-img {
                                            -webkit-transform: rotateY(90deg);
                                            -moz-transform: rotateY(90deg);
                                            -ms-transform: rotateY(90deg);
                                            -o-transform: rotateY(90deg);
                                            transform: rotateY(90deg);
                                        }
                                        .image-ultimate-hover-238.right_to_left:hover .iheu-info {
                                            -webkit-transform: rotateY(0);
                                            -moz-transform: rotateY(0);
                                            -ms-transform: rotateY(0);
                                            -o-transform: rotateY(0);
                                            transform: rotateY(0);
                                        }

                                        .image-ultimate-hover-238.top_to_bottom .iheu-img {
                                            -webkit-transform: rotateX(0);
                                            -moz-transform: rotateX(0);
                                            -ms-transform: rotateX(0);
                                            -o-transform: rotateX(0);
                                            transform: rotateX(0);
                                            -webkit-transform-origin: 50% 100%;
                                            -moz-transform-origin: 50% 100%;
                                            -ms-transform-origin: 50% 100%;
                                            -o-transform-origin: 50% 100%;
                                            transform-origin: 50% 100%;
                                        }
                                        .image-ultimate-hover-238.top_to_bottom .iheu-info {
                                            -webkit-transform: rotateX(-90deg);
                                            -moz-transform: rotateX(-90deg);
                                            -ms-transform: rotateX(-90deg);
                                            -o-transform: rotateX(-90deg);
                                            transform: rotateX(-90deg);
                                            -webkit-transform-origin: 50% 0;
                                            -moz-transform-origin: 50% 0;
                                            -ms-transform-origin: 50% 0;
                                            -o-transform-origin: 50% 0;
                                            transform-origin: 50% 0;
                                        }
                                        .image-ultimate-hover-238.top_to_bottom:hover .iheu-img {
                                            -webkit-transform: rotateX(90deg);
                                            -moz-transform: rotateX(90deg);
                                            -ms-transform: rotateX(90deg);
                                            -o-transform: rotateX(90deg);
                                            transform: rotateX(90deg);
                                        }
                                        .image-ultimate-hover-238.top_to_bottom:hover .iheu-info {
                                            -webkit-transform: rotateX(0);
                                            -moz-transform: rotateX(0);
                                            -ms-transform: rotateX(0);
                                            -o-transform: rotateX(0);
                                            transform: rotateX(0);
                                        }

                                        .image-ultimate-hover-238.bottom_to_top .iheu-img {
                                            -webkit-transform: rotateX(0);
                                            -moz-transform: rotateX(0);
                                            -ms-transform: rotateX(0);
                                            -o-transform: rotateX(0);
                                            transform: rotateX(0);
                                            -webkit-transform-origin: 50% 0;
                                            -moz-transform-origin: 50% 0;
                                            -ms-transform-origin: 50% 0;
                                            -o-transform-origin: 50% 0;
                                            transform-origin: 50% 0;
                                        }
                                        .image-ultimate-hover-238.bottom_to_top .iheu-info {
                                            -webkit-transform: rotateX(90deg);
                                            -moz-transform: rotateX(90deg);
                                            -ms-transform: rotateX(90deg);
                                            -o-transform: rotateX(90deg);
                                            transform: rotateX(90deg);
                                            -webkit-transform-origin: 50% 100%;
                                            -moz-transform-origin: 50% 100%;
                                            -ms-transform-origin: 50% 100%;
                                            -o-transform-origin: 50% 100%;
                                            transform-origin: 50% 100%;
                                        }
                                        .image-ultimate-hover-238.bottom_to_top:hover .iheu-img {
                                            -webkit-transform: rotateX(-90deg);
                                            -moz-transform: rotateX(-90deg);
                                            -ms-transform: rotateX(-90deg);
                                            -o-transform: rotateX(-90deg);
                                            transform: rotateX(-90deg);
                                        }
                                        .image-ultimate-hover-238.bottom_to_top:hover .iheu-info {
                                            -webkit-transform: rotateX(0);
                                            -moz-transform: rotateX(0);
                                            -ms-transform: rotateX(0);
                                            -o-transform: rotateX(0);
                                            transform: rotateX(0);
                                        }
                                    </style>
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-238 image-ultimate-hover-animation-238" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-238">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-238 left_to_right">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage1; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-238 image-ultimate-hover-animation-238" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-238">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-238 right_to_left">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage2; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>
                                                                <p class="iheu-fade-up"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 13 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-13">Select</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <style>
                                        .image-ultimate-map-absulate{
                                            position: absolute;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                        }
                                        .image-ultimate-map-absulate img{
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-map-absulate a{
                                            text-decoration: none !important;
                                        }
                                        .image-ultimate-hover-244{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                            overflow:hidden;
                                        }
                                        .image-ultimate-hover-244 .iheu-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-hover-244 .iheu-info {
                                            position: absolute;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                        }
                                        .image-ultimate-hover-animation-244 {
                                            animation-duration: 1s;
                                        }
                                        .image-ultimate-hover-padding-244{
                                            padding: 20px;
                                        }
                                        .image-ultimate-map-244 {
                                            max-width: 250px;
                                            width: 100%;
                                            margin: 0 auto;
                                            position: relative;
                                        }
                                        .image-ultimate-map-244:after {
                                            padding-bottom: 100%;
                                            content: "";
                                            display: block;
                                        }
                                        .image-ultimate-hover-244 .iheu-img:before {
                                            position: absolute;
                                            display: block;
                                            content: '';
                                            width: 100%;
                                            height: 100%;
                                            box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);
                                        }
                                        .image-ultimate-hover-244 .iheu-img {
                                            width: 100%;
                                            float: left;
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                        }
                                        .image-ultimate-hover-244 .iheu-info {
                                            background: rgba(0, 146, 194, 1);
                                            opacity: 1;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                        }
                                        .image-ultimate-hover-244.bottom_to_top .iheu-info .iheu-data,
                                        .image-ultimate-hover-244.top_to_bottom .iheu-info .iheu-data{
                                            display: block;
                                            width:100%;
                                            float:left;
                                            padding: 20px;
                                        }
                                        .image-ultimate-hover-244.left_to_right .iheu-info .iheu-data,
                                        .image-ultimate-hover-244.right_to_left .iheu-info .iheu-data{
                                            padding: 20px;
                                            display: table-cell;
                                            vertical-align: top;text-align: center;                }
                                        .image-ultimate-hover-244 .iheu-info h3 {
                                            font-size: 20px;
                                            font-weight: 600;
                                            padding: 15px 0; 
                                            margin-bottom: 15px;
                                            margin-top: 0px;
                                            line-height: 120%;
                                            font-family: "Open Sans";
                                            width:100%;
                                            float: left;
                                            color: #ffffff;
                                        }
                                        .image-ultimate-hover-244 .iheu-info p {
                                            font-size: 15px;
                                            font-weight: 300;
                                            margin-bottom: 20px;
                                            margin-top: 0;
                                            line-height: 120%;
                                            width:100%;
                                            float: left;
                                            font-family: "Open Sans";
                                            color: #ffffff;
                                        }
                                        .image-ultimate-hover-244 a.iheu-button{
                                            padding: 8px 10px;
                                            -webkit-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            border-radius: 5px;
                                            font-weight: 100;
                                            font-size: 12px;
                                            font-family: "Open Sans";
                                            background: rgba(126, 0, 158, 1);
                                            color: #ffffff;
                                            text-decoration: none;
                                            display:-webkit-inline-box;
                                            margin: 0 auto;                                    }
                                        .image-ultimate-hover-244 a.iheu-button:hover{
                                            background: rgba(255, 255, 255, 1);
                                            color: #7e009e;
                                        }
                                        .image-ultimate-hover-244:hover .iheu-info {
                                            visibility: visible;
                                            opacity: 1;
                                        }
                                        .image-ultimate-hover-244.left_to_right .iheu-info {
                                            left:0;
                                            display: table;
                                            width: 50%;
                                            height:100%;
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .image-ultimate-hover-244.left_to_right:hover .iheu-img {
                                            -webkit-transform: translateX(50px);
                                            -moz-transform: translateX(50px);
                                            -ms-transform: translateX(50px);
                                            -o-transform: translateX(50px);
                                            transform: translateX(50px);
                                        }
                                        .image-ultimate-hover-244.left_to_right:hover .iheu-info {
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }
                                        .image-ultimate-hover-244.right_to_left .iheu-info {
                                            right:0;
                                            display: table;
                                            width: 50%;
                                            height:100%;
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }
                                        .image-ultimate-hover-244.right_to_left:hover .iheu-img {
                                            -webkit-transform: translateX(-50px);
                                            -moz-transform: translateX(-50px);
                                            -ms-transform: translateX(-50px);
                                            -o-transform: translateX(-50px);
                                            transform: translateX(-50px);
                                        }
                                        .image-ultimate-hover-244.right_to_left:hover .iheu-info {
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }
                                        .image-ultimate-hover-244.bottom_to_top .iheu-info {
                                            bottom:0;
                                            height: auto;
                                            width: 100%;
                                            min-height: 60px;
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                        .image-ultimate-hover-244.bottom_to_top:hover .iheu-img {
                                            -webkit-transform: translateY(-50px);
                                            -moz-transform: translateY(-50px);
                                            -ms-transform: translateY(-50px);
                                            -o-transform: translateY(-50px);
                                            transform: translateY(-50px);
                                        }
                                        .image-ultimate-hover-244.bottom_to_top:hover .iheu-info {
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                        .image-ultimate-hover-244.top_to_bottom .iheu-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                            width: 100%;
                                            top: 0;
                                            height: auto;
                                            min-height: 60px;
                                        }
                                        .image-ultimate-hover-244.top_to_bottom:hover .iheu-img {
                                            -webkit-transform: translateY(50px);
                                            -moz-transform: translateY(50px);
                                            -ms-transform: translateY(50px);
                                            -o-transform: translateY(50px);
                                            transform: translateY(50px);
                                        }
                                        .image-ultimate-hover-244.top_to_bottom:hover .iheu-info {
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                    </style>
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-244 image-ultimate-hover-animation-244" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-244">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-244 right_to_left">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage3; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Defult Title </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-244 image-ultimate-hover-animation-244" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-244">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-244 left_to_right">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage4; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Defult Title </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Square Effects 14 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-14">Select</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">

                                    <style>

                                        .image-ultimate-map-absulate{
                                            position: absolute;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                        }
                                        .image-ultimate-map-absulate img{
                                            width: 100%;
                                            height: 100%;
                                        }

                                        .image-ultimate-map-absulate a{
                                            text-decoration: none !important;
                                        }
                                        .image-ultimate-hover-249{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-transform-style: preserve-3d;
                                            -moz-transform-style: preserve-3d;
                                            transform-style: preserve-3d;
                                        }
                                        .image-ultimate-hover-249 .iheu-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            overflow: hidden;
                                        }
                                        .image-ultimate-hover-249 .iheu-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                            overflow: hidden;
                                        }
                                        .image-ultimate-hover-animation-249 {
                                            animation-duration: 1s;
                                        }
                                        .image-ultimate-hover-249, 
                                        .image-ultimate-hover-249 .iheu-img, .image-ultimate-hover-249 a .iheu-img,
                                        .image-ultimate-hover-249 .iheu-img:before, .image-ultimate-hover-249 a .iheu-img:before,
                                        .image-ultimate-hover-249 .iheu-img img, .image-ultimate-hover-249 a .iheu-img img,
                                        .image-ultimate-hover-249 .iheu-info, .image-ultimate-hover-249 a .iheu-info{
                                            border-radius: 0%;
                                            -moz-border-radius:  0%;
                                            -webkit-border-radius:  0%;
                                            transition: 0.5s;
                                        }
                                        .image-ultimate-hover-padding-249{
                                            padding: 20px;
                                        }
                                        .image-ultimate-map-249 {
                                            max-width: 250px;
                                            width: 100%;
                                            margin: 0 auto;
                                            position: relative;
                                            -webkit-perspective: 1700px;
                                            -moz-perspective: 1700px;
                                            perspective: 1700px;
                                            -webkit-perspective-origin: 0 50%;
                                            -moz-perspective-origin: 0 50%;
                                            perspective-origin: 0 50%;
                                        }
                                        .image-ultimate-map-249:after {
                                            padding-bottom: 100%;
                                            content: "";
                                            display: block;
                                        }
                                        .image-ultimate-hover-249 .iheu-img:before {
                                            position: absolute;
                                            display: block;
                                            content: '';
                                            width: 100%;
                                            height: 100%;
                                            box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);
                                        }
                                        .image-ultimate-hover-249 .iheu-img {
                                            width: 100%;
                                            float: left;
                                            -webkit-transition: -webkit-transform 0.4s;
                                            -moz-transition: -moz-transform 0.4s;
                                            transition: transform 0.4s;
                                            overflow:hidden;
                                        }
                                        .image-ultimate-hover-249{
                                            background: rgba(0, 146, 194, 1);
                                        }
                                        .image-ultimate-hover-249.left_to_right .iheu-info {
                                            background: rgba(0, 146, 194, 1);
                                            height: 100%;
                                            width: 50%;
                                            opacity: 0;
                                            -webkit-backface-visibility: hidden;
                                            -moz-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            -webkit-transform-origin: 0 0;
                                            -moz-transform-origin: 0 0;
                                            transform-origin: 0 0;
                                            -webkit-transform: rotateY(-90deg);
                                            -moz-transform: rotateY(-90deg);
                                            transform: rotateY(-90deg);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                                            transition: transform 0.4s, opacity 0.1s 0.3s;
                                        }
                                        .image-ultimate-hover-249.right_to_left .iheu-info {
                                            background: rgba(0, 146, 194, 1);
                                            height: 100%;
                                            width: 50%;
                                            opacity: 0;
                                            left:auto;
                                            -webkit-backface-visibility: hidden;
                                            -moz-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            -webkit-transform-origin: 100% 0;
                                            -moz-transform-origin: 100% 0;
                                            transform-origin: 100% 0;
                                            -webkit-transform: rotateY(90deg);
                                            -moz-transform: rotateY(90deg);
                                            transform: rotateY(90deg);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                                            transition: transform 0.4s, opacity 0.1s 0.3s;
                                        }
                                        .image-ultimate-hover-249.top_to_bottom .iheu-info {
                                            background: rgba(0, 146, 194, 1);
                                            min-height: 50%;
                                            width: 100%;
                                            opacity: 0;
                                            bottom: auto;
                                            -webkit-backface-visibility: hidden;
                                            -moz-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            -webkit-transform-origin: 0 0;
                                            -moz-transform-origin: 0 0;
                                            transform-origin: 0 0;
                                            -webkit-transform: rotateX(90deg);
                                            -moz-transform: rotateX(90deg);
                                            transform: rotateX(90deg);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                                            transition: transform 0.4s, opacity 0.1s 0.3s;
                                        }
                                        .image-ultimate-hover-249.bottom_to_top .iheu-info {
                                            background: rgba(0, 146, 194, 1);
                                            min-height: 50%;
                                            width: 100%;
                                            opacity: 0;
                                            top:auto;
                                            bottom: 0;
                                            -webkit-backface-visibility: hidden;
                                            -moz-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            -webkit-transform-origin: 100% 100%;
                                            -moz-transform-origin: 100% 100%;
                                            transform-origin: 100% 100%;
                                            -webkit-transform: rotateX(-90deg);
                                            -moz-transform: rotateX(-90deg);
                                            transform: rotateX(-90deg);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                                            transition: transform 0.4s, opacity 0.1s 0.3s;
                                        }
                                        .image-ultimate-hover-249 .iheu-info .iheu-data{
                                            display: table-cell;
                                            vertical-align: top;text-align: center;                    padding: 20px; 
                                        }
                                        .image-ultimate-hover-249 .iheu-info h3 {
                                            font-size: 20px;
                                            font-weight: 600;
                                            padding-bottom: px;
                                            margin-bottom: 15px;
                                            margin-top: 0;
                                            line-height: 120%;
                                            width: 100%;
                                            float: left;
                                            font-family: "Open Sans";
                                            display: inline-block;
                                            color: #ffffff;
                                        }
                                        .image-ultimate-hover-249 .iheu-info p {
                                            font-size: 15px;
                                            font-weight: 300;
                                            margin-bottom: 20px;
                                            margin-top: 0;
                                            line-height: 120%;
                                            width: 100%;
                                            float: left;
                                            font-family: "Open Sans";
                                            color: #ffffff;
                                        }
                                        .image-ultimate-hover-249 a.iheu-button{
                                            padding: 8px 10px;
                                            -webkit-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            border-radius: 5px;
                                            font-weight: 100;
                                            font-size: 12px;
                                            font-family: "Open Sans";
                                            background: rgba(126, 0, 158, 1);
                                            color: #ffffff;
                                            text-decoration: none;
                                            display:-webkit-inline-box;
                                            margin: 0 auto;                                    }
                                        .image-ultimate-hover-249 a.iheu-button:hover{
                                            background: rgba(255, 255, 255, 1);
                                            color: #7e009e;
                                        }

                                        .image-ultimate-hover-249.left_to_right:hover .iheu-img img {
                                            -webkit-transform: translateX(25%);
                                            -moz-transform: translateX(25%);
                                            -ms-transform: translateX(25%);
                                            transform: translateX(25%);
                                        }
                                        .image-ultimate-hover-249.right_to_left:hover .iheu-img img {
                                            -webkit-transform: translateX(-25%);
                                            -moz-transform: translateX(-25%);
                                            -ms-transform: translateX(-25%);
                                            transform: translateX(-25%);
                                        }
                                        .image-ultimate-hover-249.top_to_bottom:hover .iheu-img img {
                                            -webkit-transform: translateY(25%);
                                            -moz-transform: translateY(25%);
                                            -ms-transform: translateY(25%);
                                            transform: translateY(25%);
                                        }
                                        .image-ultimate-hover-249.bottom_to_top:hover .iheu-img img {
                                            -webkit-transform: translateY(-25%);
                                            -moz-transform: translateY(-25%);
                                            -ms-transform: translateY(-25%);
                                            transform: translateY(-25%);
                                        }
                                        .image-ultimate-hover-249.left_to_right:hover .iheu-info,
                                        .image-ultimate-hover-249.right_to_left:hover .iheu-info {
                                            opacity: 1;
                                            -webkit-transform: rotateY(0deg);
                                            -moz-transform: rotateY(0deg);
                                            transform: rotateY(0deg);
                                            -webkit-transition: -webkit-transform 0.4s, opacity ;
                                            -moz-transition: -moz-transform 0.4s, opacity;
                                            transition: transform 0.4s, opacity;
                                        }
                                        .image-ultimate-hover-249.top_to_bottom:hover .iheu-info,
                                        .image-ultimate-hover-249.bottom_to_top:hover .iheu-info {
                                            opacity: 1;
                                            -webkit-transform: rotateY(0deg);
                                            -moz-transform: rotateY(0deg);
                                            transform: rotateY(0deg);
                                            -webkit-transition: -webkit-transform 0.4s, opacity ;
                                            -moz-transition: -moz-transform 0.4s, opacity;
                                            transition: transform 0.4s, opacity;
                                        }
                                    </style>
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-249 image-ultimate-hover-animation-249" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-249">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-249 left_to_right">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage5; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Defult Title </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-249 image-ultimate-hover-animation-249" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-249">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-249 right_to_left">
                                                    <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank"> 
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage6; ?>">
                                                        </div>
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-left"> Defult Title </h3>
                                                                <p class="iheu-fade-left"> Customize With Image Hover Awesome Tools </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 15 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="square-15">Select</button>
                        </div>
                    </div>

                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">

                                <div class="image-ultimate-row">
                                    <style>
                                        .image-ultimate-map-absulate{
                                            position: absolute;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                        }
                                        .image-ultimate-map-absulate img{
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-map-absulate a{
                                            text-decoration: none !important;
                                        }
                                        .image-ultimate-hover-256{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-hover-256 .iheu-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-hover-256 .iheu-info {
                                            position: absolute;
                                            left: 0;
                                            width: 100%;
                                            height: auto;
                                            -webkit-backface-visibility: hidden;
                                            -moz-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                        }

                                        .image-ultimate-hover-animation-256 {
                                            animation-duration: 1s;
                                        }
                                        .image-ultimate-hover-padding-256{

                                        }
                                        .image-ultimate-map-256 {
                                            max-width: 300px;
                                            width: 100%;
                                            margin: 0 auto;
                                            position: relative;

                                        }
                                        .image-ultimate-map-256:after {
                                            padding-bottom: 100%;
                                            content: "";
                                            display: block;
                                        }

                                        .image-ultimate-hover-256 .iheu-img:before {
                                            position: absolute;
                                            display: block;
                                            content: '';
                                            width: 100%;
                                            height: 100%;
                                            box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);
                                        }
                                        .image-ultimate-hover-256 .iheu-img {
                                            width: 100%;
                                            float: left;
                                            z-index: 10;
                                            -webkit-transition: -webkit-transform 0.4s;
                                            -moz-transition: -moz-transform 0.4s;
                                            transition: transform 0.4s;
                                        }
                                        .image-ultimate-hover-256.top_to_bottom:hover .iheu-img{
                                            -webkit-transform: translateY(80px);
                                            -moz-transform: translateY(80px);
                                            -ms-transform: translateY(80px);
                                            transform: translateY(80px);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                                            transition: transform 0.4s, opacity 0.1s;

                                        }
                                        .image-ultimate-hover-256.bottom_to_top:hover .iheu-img{
                                            -webkit-transform: translateY(-80px);
                                            -moz-transform: translateY(-80px);
                                            -ms-transform: translateY(-80px);
                                            transform: translateY(-80px);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                                            transition: transform 0.4s, opacity 0.1s;
                                        }
                                        .image-ultimate-hover-256 .iheu-info {
                                            background: rgba(0, 146, 194, 1);
                                            height: 80px;
                                        }
                                        .image-ultimate-hover-256.top_to_bottom .iheu-info{
                                            top: 0;
                                        }
                                        .image-ultimate-hover-256.bottom_to_top .iheu-info{
                                            bottom: 0
                                        }
                                        .image-ultimate-hover-256 .iheu-info .iheu-data{
                                            width: 100%;
                                            float:left;
                                            padding: 15px; 
                                            position: relative;
                                        }
                                        .image-ultimate-hover-256 .iheu-info h3 {
                                            font-size: 20px;
                                            font-weight: 600;
                                            margin-bottom: 5px;
                                            margin-top: 0;
                                            line-height: 120%;
                                            float:left;
                                            display: inline-block;
                                            font-family: "Open Sans";
                                            color: #ffffff;
                                        }
                                        .image-ultimate-hover-256 .iheu-info p {
                                            font-size: 15px;
                                            font-weight: 300;
                                            margin-top: 0;
                                            line-height: 120%;
                                            width: 100%;
                                            margin-bottom: 0;
                                            float: left;
                                            text-align: left;
                                            font-family: "Open Sans";
                                            color: #7bfaae;
                                        }
                                        .image-ultimate-hover-256 a.iheu-button{
                                            padding: 8px 10px;
                                            -webkit-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            border-radius: 5px;
                                            font-weight: 100;
                                            font-size: 12px;
                                            font-family: "Open Sans";
                                            background: rgba(126, 0, 158, 1);
                                            color: #ffffff;
                                            text-decoration: none;
                                            position: absolute;
                                            right: 15px;
                                            top: 15px;
                                        }
                                        .image-ultimate-hover-256 a.iheu-button:hover{
                                            background: rgba(255, 255, 255, 1);
                                            color: #7e009e;
                                        }
                                    </style>

                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-256 image-ultimate-hover-animation-256" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-256">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-256 bottom_to_top">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-left"> Music </h3>
                                                            <p class="iheu-fade-left"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-left iheu-button"> Live Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 16 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn ctu-pro-only" >Pro Only</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <style>
                                        .image-ultimate-map-absulate{
                                            position: absolute;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                        }
                                        .image-ultimate-map-absulate img{
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-map-absulate a{
                                            text-decoration: none !important;
                                        }
                                        .image-ultimate-hover-259{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            overflow: hidden;
                                        }
                                        .image-ultimate-hover-259 .iheu-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-hover-259 .iheu-info {
                                            position: absolute;
                                            left: 0;
                                            width: 100%;
                                            height: auto;
                                            -webkit-backface-visibility: hidden;
                                            -moz-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                        }

                                        .image-ultimate-hover-animation-259 {
                                            animation-duration: 1s;
                                        }
                                        .image-ultimate-hover-padding-259{
                                            padding: 20px;
                                        }
                                        .image-ultimate-map-259 {
                                            max-width: 300px;
                                            width: 100%;
                                            margin: 0 auto;
                                            position: relative;

                                        }
                                        .image-ultimate-map-259:after {
                                            padding-bottom: 100%;
                                            content: "";
                                            display: block;
                                        }

                                        .image-ultimate-hover-259 .iheu-img:before {
                                            position: absolute;
                                            display: block;
                                            content: '';
                                            width: 100%;
                                            height: 100%;
                                            box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);
                                        }
                                        .image-ultimate-hover-259 .iheu-img {
                                            width: 100%;
                                            float: left;
                                            -webkit-transition: -webkit-transform 0.4s;
                                            -moz-transition: -moz-transform 0.4s;
                                            transition: transform 0.4s;
                                        }
                                        .image-ultimate-hover-259.top_to_bottom:hover .iheu-img{
                                            -webkit-transform: translateY(50px);
                                            -moz-transform: translateY(50px);
                                            -ms-transform: translateY(50px);
                                            transform: translateY(50px);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                                            transition: transform 0.4s, opacity 0.1s;

                                        }
                                        .image-ultimate-hover-259.bottom_to_top:hover .iheu-img{
                                            -webkit-transform: translateY(-50px);
                                            -moz-transform: translateY(-50px);
                                            -ms-transform: translateY(-50px);
                                            transform: translateY(-50px);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                                            transition: transform 0.4s, opacity 0.1s;
                                        }
                                        .image-ultimate-hover-259{
                                            background: rgba(0, 146, 194, 1);
                                        }
                                        .image-ultimate-hover-259 .iheu-info {
                                            background: rgba(0, 146, 194, 1);
                                            height: auto;
                                        }
                                        .image-ultimate-hover-259.top_to_bottom .iheu-info{
                                            top: 0;
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                        .image-ultimate-hover-259.bottom_to_top .iheu-info{
                                            bottom: 0;
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                        .image-ultimate-hover-259:hover.top_to_bottom .iheu-info{

                                            -webkit-transform: translateY(0%);
                                            -moz-transform: translateY(0%);
                                            -ms-transform: translateY(0%);
                                            transform: translateY(0%);
                                        }
                                        .image-ultimate-hover-259:hover.bottom_to_top .iheu-info{
                                            bottom: 0;
                                            -webkit-transform: translateY(0%);
                                            -moz-transform: translateY(0%);
                                            -ms-transform: translateY(0%);
                                            transform: translateY(0%);
                                        }
                                        .image-ultimate-hover-259 .iheu-info .iheu-data{
                                            width: 100%;
                                            float:left;
                                            padding: 15px; 
                                            position: relative;
                                        }
                                        .image-ultimate-hover-259 .iheu-info h3 {
                                            font-size: 20px;
                                            font-weight: 600;
                                            margin-bottom: 5px;
                                            margin-top: 0;
                                            line-height: 120%;
                                            float:left;
                                            display: inline-block;
                                            font-family: "Open Sans";
                                            color: #ffffff;
                                        }
                                        .image-ultimate-hover-259 .iheu-info p {
                                            font-size: 15px;
                                            font-weight: 300;
                                            margin-top: 0;
                                            line-height: 120%;
                                            width: 100%;
                                            margin-bottom: 0;
                                            float: left;
                                            text-align: left;
                                            font-family: "Open Sans";
                                            color: #7bfaae;
                                        }
                                        .image-ultimate-hover-259 a.iheu-button{
                                            padding: 8px 10px;
                                            -webkit-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            border-radius: 5px;
                                            font-weight: 100;
                                            font-size: 12px;
                                            font-family: "Open Sans";
                                            background: rgba(126, 0, 158, 1);
                                            color: #ffffff;
                                            text-decoration: none;
                                            position: absolute;
                                            right: 15px;
                                            top: 15px;
                                        }
                                        .image-ultimate-hover-259 a.iheu-button:hover{
                                            background: rgba(255, 255, 255, 1);
                                            color: #7e009e;
                                        }
                                    </style>

                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-259 image-ultimate-hover-animation-259" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-259">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-259 bottom_to_top">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Music  </h3>
                                                            <p class="iheu-fade-up"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-up iheu-button"> Live Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 17 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn ctu-pro-only">Pro Only</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <style>
                                        .image-ultimate-map-absulate{
                                            position: absolute;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                        }
                                        .image-ultimate-map-absulate img{
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-map-absulate a{
                                            text-decoration: none !important;
                                        }
                                        .image-ultimate-map-261 {
                                            max-width: 300px;
                                            width: 100%;
                                            margin: 0 auto;
                                            position: relative;
                                        }
                                        .image-ultimate-map-261:after {
                                            padding-bottom: 100%;
                                            content: "";
                                            display: block;
                                        }
                                        .image-ultimate-hover-animation-261 {
                                            animation-duration: 1s;
                                        }
                                        .image-ultimate-hover-padding-261{
                                            padding: 20px;
                                        }
                                        .image-ultimate-map-261 .image-ultimate-map-absulate{
                                            -webkit-perspective: 1700px;
                                            -moz-perspective: 1700px;
                                            perspective: 1700px;
                                        }
                                        .image-ultimate-hover-261{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-transform-style: preserve-3d;
                                            -moz-transform-style: preserve-3d;
                                            transform-style: preserve-3d;
                                            background: rgba(0, 146, 194, 1);

                                        }
                                        .image-ultimate-hover-261 .iheu-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            overflow: hidden;
                                        }
                                        .image-ultimate-hover-261 .iheu-img:before {
                                            position: absolute;
                                            display: block;
                                            content: '';
                                            width: 100%;
                                            height: 100%;
                                            box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);
                                        }
                                        .image-ultimate-hover-261 .iheu-img img{
                                            width: 100%;
                                            float: left;
                                            -webkit-transition: -webkit-transform 0.4s;
                                            -moz-transition: -moz-transform 0.4s;
                                            transition: transform 0.4s;
                                        }
                                        .image-ultimate-hover-261.left_to_right:hover .iheu-img img{
                                            -webkit-transform: translateX(25%);
                                            -moz-transform: translateX(25%);
                                            -ms-transform: translateX(25%);
                                            transform: translateX(25%);
                                        }
                                        .image-ultimate-hover-261.right_to_left:hover .iheu-img img{
                                            -webkit-transform: translateX(-25%);
                                            -moz-transform: translateX(-25%);
                                            -ms-transform: translateX(-25%);
                                            transform: translateX(-25%);
                                        }
                                        .image-ultimate-hover-261 .iheu-info {
                                            background: rgba(0, 146, 194, 1);
                                        }
                                        .image-ultimate-hover-261.left_to_right .iheu-info {
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            height: 100%;
                                            width: 50%;
                                            opacity: 0;
                                            -webkit-backface-visibility: hidden;
                                            -moz-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            -webkit-transform-origin: 0 0;
                                            -moz-transform-origin: 0 0;
                                            transform-origin: 0 0;
                                            -webkit-transform: rotateY(-90deg);
                                            -moz-transform: rotateY(-90deg);
                                            transform: rotateY(-90deg);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                                            transition: transform 0.4s, opacity 0.1s 0.3s;
                                        }
                                        .image-ultimate-hover-261.left_to_right:hover .iheu-info{
                                            opacity: 1;
                                            -webkit-transform: rotateY(0deg);
                                            -moz-transform: rotateY(0deg);
                                            transform: rotateY(0deg);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                                            transition: transform 0.4s, opacity 0.1s;
                                        }
                                        .image-ultimate-hover-261.right_to_left .iheu-info {
                                            position: absolute;
                                            top: 0;
                                            right: 0;
                                            height: 100%;
                                            width: 50%;
                                            opacity: 0;
                                            -webkit-backface-visibility: hidden;
                                            -moz-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            -webkit-transform-origin: 100% 0;
                                            -moz-transform-origin: 100% 0;
                                            transform-origin: 100% 0;
                                            -webkit-transform: rotateY(90deg);
                                            -moz-transform: rotateY(90deg);
                                            transform: rotateY(90deg);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
                                            transition: transform 0.4s, opacity 0.1s 0.3s;
                                        }
                                        .image-ultimate-hover-261.right_to_left:hover .iheu-info{
                                            opacity: 1;
                                            -webkit-transform: rotateY(0deg);
                                            -moz-transform: rotateY(0deg);
                                            transform: rotateY(0deg);
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.1s;
                                            transition: transform 0.4s, opacity 0.1s;
                                        }
                                        .image-ultimate-hover-261 .iheu-info .iheu-data{
                                            position: relative;
                                            padding: 15px;
                                            height: 100%;
                                            width: 100%;
                                        }
                                        .image-ultimate-hover-261 .iheu-info h3 {
                                            font-size: 20px;
                                            font-weight: 600;
                                            margin-bottom: 5px;
                                            margin-top: 0;
                                            line-height: 120%;
                                            float:left;
                                            text-align: left;
                                            display: inline-block;
                                            font-family: "Open Sans";
                                            color: #ffffff;
                                        }
                                        .image-ultimate-hover-261 .iheu-info p {
                                            font-size: 15px;
                                            font-weight: 300;
                                            margin-top: 0;
                                            line-height: 120%;
                                            width: 100%;
                                            margin-bottom: 0;
                                            float: left;
                                            text-align: left;
                                            font-family: "Open Sans";
                                            color: #7bfaae;
                                        }
                                        .image-ultimate-hover-261 a.iheu-button{
                                            padding: 8px 10px;
                                            -webkit-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            border-radius: 5px;
                                            font-weight: 100;
                                            font-size: 12px;
                                            font-family: "Open Sans";
                                            background: rgba(126, 0, 158, 1);
                                            color: #ffffff;
                                            text-decoration: none;
                                            position: absolute;
                                            right: 15px;
                                            bottom: 15px;
                                        }
                                        .image-ultimate-hover-261 a.iheu-button:hover{
                                            background: rgba(255, 255, 255, 1);
                                            color: #7e009e;
                                        }
                                    </style>

                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-261 image-ultimate-hover-animation-261" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-261">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-261 left_to_right">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-left"> Music </h3>
                                                            <p class="iheu-fade-left"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-left iheu-button"> Live Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 18 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn ctu-pro-only">Pro Only</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <style>
                                        .image-ultimate-map-absulate{
                                            position: absolute;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                        }
                                        .image-ultimate-map-absulate img{
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-map-absulate a{
                                            text-decoration: none !important;
                                        }
                                        .image-ultimate-map-265 {
                                            max-width: 300px;
                                            width: 100%;
                                            margin: 0 auto;
                                            position: relative;
                                        }
                                        .image-ultimate-map-265:after {
                                            padding-bottom: 100%;
                                            content: "";
                                            display: block;
                                        }
                                        .image-ultimate-hover-animation-265 {
                                            animation-duration: 1s;
                                        }
                                        .image-ultimate-hover-padding-265{
                                            padding: 20px;
                                        }
                                        .image-ultimate-hover-265{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-transform-style: preserve-3d;
                                            -moz-transform-style: preserve-3d;
                                            transform-style: preserve-3d;
                                            background: rgba(0, 146, 194, 1);

                                        }
                                        .image-ultimate-hover-265 .iheu-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            z-index: 10;
                                            -webkit-transition: -webkit-transform 0.4s;
                                            -moz-transition: -moz-transform 0.4s;
                                            transition: transform 0.4s;
                                        }
                                        .image-ultimate-hover-265:hover .iheu-img {
                                            -webkit-transform: scale(0.4);
                                            -moz-transform: scale(0.4);
                                            -ms-transform: scale(0.4);
                                            transform: scale(0.4);
                                        }
                                        .image-ultimate-hover-265 .iheu-img:before {
                                            position: absolute;
                                            display: block;
                                            content: '';
                                            width: 100%;
                                            height: 100%;
                                            box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);
                                        }

                                        .image-ultimate-hover-265 .iheu-info {
                                            background: rgba(0, 146, 194, 1);
                                        }
                                        .image-ultimate-hover-265 .iheu-info {
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            height: 100%;
                                            width: 100%;
                                            opacity: 0;
                                            -webkit-transform: scale(0.7);
                                            -moz-transform: scale(0.7);
                                            -ms-transform: scale(0.7);
                                            transform: scale(0.7);
                                            -webkit-backface-visibility: hidden;
                                            -moz-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.4s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.4s;
                                            transition: transform 0.4s, opacity 0.4s;
                                        }
                                        .image-ultimate-hover-265:hover .iheu-info {
                                            -webkit-transform: scale(1);
                                            -moz-transform: scale(1);
                                            -ms-transform: scale(1);
                                            transform: scale(1);
                                            opacity: 1;
                                        }
                                        .image-ultimate-hover-265 .iheu-info .iheu-data{
                                            position: relative;
                                            padding: 15px;
                                            height: 100%;
                                            width: 100%;
                                        }
                                        .image-ultimate-hover-265 .iheu-info h3 {
                                            font-size: 20px;
                                            font-weight: 600;
                                            margin-bottom: 5px;
                                            margin-top: 0;
                                            line-height: 120%;
                                            float:left;
                                            display: inline-block;
                                            font-family: "Open Sans";
                                            color: #ffffff;
                                        }
                                        .image-ultimate-hover-265 .iheu-info p {
                                            font-size: 15px;
                                            font-weight: 300;
                                            margin-top: 0;
                                            line-height: 120%;
                                            width: 100%;
                                            margin-bottom: 0;
                                            float: left;
                                            text-align: left;
                                            font-family: "Open Sans";
                                            color: #7bfaae;
                                        }
                                        .image-ultimate-hover-265 a.iheu-button{
                                            padding: 8px 10px;
                                            -webkit-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            border-radius: 5px;
                                            font-weight: 100;
                                            font-size: 12px;
                                            font-family: "Open Sans";
                                            background: rgba(126, 0, 158, 1);
                                            color: #ffffff;
                                            text-decoration: none;
                                            position: absolute;
                                            right: 15px;
                                            bottom: 15px;
                                        }
                                        .image-ultimate-hover-265 a.iheu-button:hover{
                                            background: rgba(255, 255, 255, 1);
                                            color: #7e009e;
                                        }
                                    </style>

                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-265 image-ultimate-hover-animation-265" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-265">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-265 ">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-left"> Music  </h3>
                                                            <p class="iheu-fade-left"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-left iheu-button"> Live Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 19 <span>Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn ctu-pro-only">Pro Only</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <style>
                                        .image-ultimate-map-absulate{
                                            position: absolute;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                        }
                                        .image-ultimate-map-absulate img{
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-map-absulate a{
                                            text-decoration: none !important;
                                        }
                                        .image-ultimate-map-268 {
                                            max-width: 300px;
                                            width: 100%;
                                            margin: 0 auto;
                                            position: relative;
                                        }
                                        .image-ultimate-map-268:after {
                                            padding-bottom: 100%;
                                            content: "";
                                            display: block;
                                        }
                                        .image-ultimate-hover-animation-268 {
                                            animation-duration: 1s;
                                        }
                                        .image-ultimate-hover-padding-268{
                                            padding: 20px;
                                        }
                                        .image-ultimate-hover-268{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            background: rgba(0, 146, 194, 1);

                                        }
                                        .image-ultimate-hover-268 .iheu-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            z-index: 10;
                                            -webkit-transition: -webkit-transform 0.4s;
                                            -moz-transition: -moz-transform 0.4s;
                                            transition: transform 0.4s;

                                        }
                                        .image-ultimate-hover-268.bottom_to_top:hover .iheu-img {
                                            -webkit-transform: translateY(-50px) scale(0.5);
                                            -moz-transform: translateY(-50px) scale(0.5);
                                            -ms-transform: translateY(-50px) scale(0.5);
                                            transform: translateY(-50px) scale(0.5);
                                        }
                                        .image-ultimate-hover-268.top_to_bottom:hover .iheu-img{
                                            -webkit-transform: translateY(50px) scale(0.5);
                                            -moz-transform: translateY(50px) scale(0.5);
                                            -ms-transform: translateY(50px) scale(0.5);
                                            transform: translateY(50px) scale(0.5);
                                        }
                                        .image-ultimate-hover-268 .iheu-img:before {
                                            position: absolute;
                                            display: block;
                                            content: '';
                                            width: 100%;
                                            height: 100%;
                                            box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);
                                        }

                                        .image-ultimate-hover-268 .iheu-info {
                                            background: rgba(0, 146, 194, 1);
                                        }
                                        .image-ultimate-hover-268 .iheu-info {
                                            position: absolute;
                                            left: 0;
                                            width: 100%;
                                            -webkit-backface-visibility: hidden;
                                            -moz-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            -webkit-transition: -webkit-transform 0.4s, opacity 0.4s;
                                            -moz-transition: -moz-transform 0.4s, opacity 0.4s;
                                            transition: transform 0.4s, opacity 0.4s;
                                        }
                                        .image-ultimate-hover-268.bottom_to_top .iheu-info {
                                            bottom:0px;
                                        }
                                        .image-ultimate-hover-268.top_to_bottom .iheu-info {
                                            top:0px;
                                        }
                                        .image-ultimate-hover-268 .iheu-info .iheu-data{
                                            position: relative;
                                            padding: 15px;
                                            height: 100%;
                                            width: 100%;
                                            float: left;
                                        }
                                        .image-ultimate-hover-268 .iheu-info h3 {
                                            font-size: 20px;
                                            font-weight: 600;
                                            margin-bottom: 5px;
                                            margin-top: 0;
                                            line-height: 120%;
                                            float:left;
                                            display: inline-block;
                                            font-family: "Open Sans";
                                            color: #ffffff;
                                        }
                                        .image-ultimate-hover-268 .iheu-info p {
                                            font-size: 15px;
                                            font-weight: 300;
                                            margin-top: 0;
                                            line-height: 120%;
                                            width: 100%;
                                            margin-bottom: 0;
                                            float: left;
                                            text-align: left;
                                            font-family: "Open Sans";
                                            color: #7bfaae;
                                        }
                                        .image-ultimate-hover-268 a.iheu-button{
                                            padding: 8px 10px;
                                            -webkit-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            border-radius: 5px;
                                            font-weight: 100;
                                            font-size: 12px;
                                            font-family: "Open Sans";
                                            background: rgba(126, 0, 158, 1);
                                            color: #ffffff;
                                            text-decoration: none;
                                            position: absolute;
                                            right: 15px;
                                            bottom: 15px;
                                        }
                                        .image-ultimate-hover-268 a.iheu-button:hover{
                                            background: rgba(255, 255, 255, 1);
                                            color: #7e009e;
                                        }
                                    </style>

                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-268 image-ultimate-hover-animation-268" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-268">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-268 bottom_to_top">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-left"> Music  </h3>
                                                            <p class="iheu-fade-left"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-left iheu-button"> Live Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 20 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn ctu-pro-only">Pro Only</button>
                        </div>
                    </div>
                </div>
                <div class="iheb-admin-style-select-panel margin">
                    <div class="iheb-admin-style-select-panel-upper">
                        <div class="image-ultimate-container"> 
                            <div class="image-ultimate-row">
                                <div class="image-ultimate-row">
                                    <style>
                                        .image-ultimate-map-absulate{
                                            position: absolute;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                        }
                                        .image-ultimate-map-absulate img{
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .image-ultimate-map-absulate a{
                                            text-decoration: none !important;
                                        }
                                        .image-ultimate-map-270 {
                                            max-width: 300px;
                                            width: 100%;
                                            margin: 0 auto;
                                            position: relative;
                                        }
                                        .image-ultimate-map-270:after {
                                            padding-bottom: 100%;
                                            content: "";
                                            display: block;
                                        }
                                        .image-ultimate-hover-animation-270 {
                                            animation-duration: 1s;
                                        }
                                        .image-ultimate-hover-padding-270{
                                            padding: 20px;
                                        }
                                        .image-ultimate-hover-270{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            background: rgba(0, 146, 194, 1);
                                            -webkit-transition: -webkit-transform 0.4s;
                                            -moz-transition: -moz-transform 0.4s;
                                            transition: transform 0.4s;

                                        }
                                        .image-ultimate-hover-270 .iheu-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            z-index: 10;
                                            -webkit-transition: -webkit-transform 0.4s;
                                            -moz-transition: -moz-transform 0.4s;
                                            transition: transform 0.4s;

                                        }
                                        .image-ultimate-hover-270 .iheu-img:before {
                                            position: absolute;
                                            display: block;
                                            content: '';
                                            width: 100%;
                                            height: 100%;
                                            box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);
                                        }

                                        .image-ultimate-hover-270 .iheu-info {
                                            background: rgba(0, 146, 194, 1);

                                        }
                                        .image-ultimate-hover-270 .iheu-info {
                                            position: absolute;
                                            left: 0;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-backface-visibility: hidden;
                                            -moz-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            -webkit-transition: all 0.4s;
                                            -moz-transition: all 0.4s;
                                            transition: all 0.4s;
                                        }
                                        .image-ultimate-hover-270.bottom_to_top .iheu-info {
                                            bottom:0px;
                                        }
                                        .image-ultimate-hover-270.bottom_to_top:hover .iheu-info {
                                            bottom:0px;
                                            height: 120%;
                                            box-shadow: 0 0 0 10px rgba(0, 146, 194, 1);

                                        }
                                        .image-ultimate-hover-270.top_to_bottom .iheu-info {
                                            top:0px;
                                        }
                                        .image-ultimate-hover-270.top_to_bottom:hover .iheu-info {
                                            top:0px;
                                            height: 120%;
                                            box-shadow: 0 0 0 10px rgba(0, 146, 194, 1);
                                        }
                                        .image-ultimate-hover-270 .iheu-info .iheu-data{
                                            position: absolute;
                                            margin: 5px;
                                            left: 0;
                                            right: 0;
                                        }
                                        .image-ultimate-hover-270.top_to_bottom .iheu-info .iheu-data{
                                            bottom: 0;
                                        }
                                        .image-ultimate-hover-270.bottom_to_top .iheu-info .iheu-data{
                                            top: 0;
                                        }
                                        .image-ultimate-hover-270 .iheu-info h3 {
                                            font-size: 20px;
                                            font-weight: 600;
                                            margin-bottom: 5px;
                                            margin-top: 0;
                                            line-height: 120%;
                                            float:left;
                                            display: inline-block;
                                            font-family: "Open Sans";
                                            color: #ffffff;
                                        }
                                        .image-ultimate-hover-270 .iheu-info p {
                                            font-size: 15px;
                                            font-weight: 300;
                                            margin-top: 0;
                                            line-height: 120%;
                                            width: 100%;
                                            margin-bottom: 0;
                                            float: left;
                                            text-align: left;
                                            font-family: "Open Sans";
                                            color: #7bfaae;
                                        }
                                        .image-ultimate-hover-270 a.iheu-button{
                                            padding: 8px 10px;
                                            -webkit-border-radius: 5px;
                                            -moz-border-radius: 5px;
                                            border-radius: 5px;
                                            font-weight: 100;
                                            font-size: 12px;
                                            font-family: "Open Sans";
                                            background: rgba(126, 0, 158, 1);
                                            color: #ffffff;
                                            text-decoration: none;
                                            right: 0;
                                            position: absolute;

                                        }
                                        .image-ultimate-hover-270.top_to_bottom a.iheu-button{
                                            bottom: 0px;
                                        }
                                        .image-ultimate-hover-270.bottom_to_top a.iheu-button{
                                            top: 0px;
                                        }
                                        .image-ultimate-hover-270 a.iheu-button:hover{
                                            background: rgba(255, 255, 255, 1);
                                            color: #7e009e;
                                        }
                                    </style>

                                    <div class="image-ultimate-responsive-1  image-ultimate-animation-js image-ultimate-hover-padding-270 image-ultimate-hover-animation-270" data-av-animation="slideInUp">
                                        <div class="image-ultimate-map-270">
                                            <div class="image-ultimate-map-absulate">
                                                <div class="image-ultimate-hover image-ultimate-hover-270 top_to_bottom">
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Music  </h3>
                                                            <p class="iheu-fade-up"> By Jacob Cummings </p>
                                                            <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-square/" target="_blank" class="iheu-fade-up iheu-button"> Live Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iheb-admin-style-select-panel-bottom">
                        <div class="iheb-admin-style-select-panel-bottom-left">
                            Style 21 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn ctu-pro-only">Pro Only</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<div class="modal fade" id="iheu-square-data" >
    <form method="post">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Style Settings</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row form-group-sm">
                        <label for="style-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                        <div class="col-sm-6 nopadding">
                            <input class="form-control" type="text" value=""  name="style-name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?php wp_nonce_field("iheunewdata") ?>
                    <input type="hidden" name="style" id="style" value="">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('[data-toggle="tooltip"]').tooltip();
        jQuery(".btn-success").click(function () {
            var activedata = jQuery(this).attr("data-target");
            jQuery("#style").val(activedata);
            jQuery("#iheu-square-data").modal("show");
        });
    });
</script>
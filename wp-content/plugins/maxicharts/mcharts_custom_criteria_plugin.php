<?php

if ( !defined( 'ABSPATH' ) ){
    exit;
}

//define ( 'PLUGIN_PATH', trailingslashit ( plugin_dir_path ( __FILE__ ) ) );

//require_once __DIR__ . '/libs/vendor/autoload.php';
include_once __DIR__ . "/mcharts_utils.php";

if (! class_exists('mcharts_custom_criteria_plugin')) {
    class mcharts_custom_criteria_plugin
    {
        //protected static $logger = null;
        
        function __construct()
        {
            //getLogger()->debug("construct gfcr_custom_search_criteria");
            MAXICHARTSAPI::getLogger ()->debug ("Adding Module : ".__CLASS__);
            add_filter("mcharts_modify_custom_search_criteria", array(
                $this,
                "modify_custom_search_criteria"
            ), 10, 2);
        }
        
        
        function modify_custom_search_criteria($search_criteria, $atts)
        {
            MAXICHARTSAPI::getLogger ()->debug("modify_custom_search_criteria BEFORE");
            MAXICHARTSAPI::getLogger ()->debug($search_criteria);
            foreach ($search_criteria as $key => $value) {
                //MAXICHARTSAPI::getLogger ()->debug($value);
                if ($key == 'field_filters') {
                    MAXICHARTSAPI::getLogger ()->debug($key);
                    foreach ($value as $key2 => $value2) {
                        //$pos = stripos ( $value2['value'], 'user_' );
                        $metaPattern = 'user:';
                        $posMeta = stripos ( $value2['value'],  $metaPattern);
                        
                        MAXICHARTSAPI::getLogger ()->debug($value2);
                        MAXICHARTSAPI::getLogger ()->debug($value2['value']);
                        MAXICHARTSAPI::getLogger ()->debug($metaPattern);
                        if (is_array($value2) && !is_array($value2['value']) && $posMeta !== false){
                            MAXICHARTSAPI::getLogger ()->debug($metaPattern." found in array value : ".$value2['value']. ' at position '.$posMeta);
                            //$current_user = wp_get_current_user();
                            $current_user_id = get_current_user_id();
                            $metaKey = substr($value2['value'],$posMeta+strlen ( $metaPattern));
                            $newVal = get_user_meta($current_user_id, $metaKey, true);
                            
                            if (empty($newVal)){
                                $current_user = wp_get_current_user();
                                $vars = get_object_vars ( $current_user);
                                //MAXICHARTSAPI::getLogger ()->debug($vars);
                                //MAXICHARTSAPI::getLogger ()->debug($vars['data']);
                                $user_data = get_object_vars ($vars['data']);
                                //MAXICHARTSAPI::getLogger ()->debug($user_data);
                                //MAXICHARTSAPI::getLogger ()->debug(get_userdata(get_current_user_id()));
                                $newVal = $user_data[$metaKey];
                                //MAXICHARTSAPI::getLogger ()->debug($newVal);
                                //$func = create_function ( '', '$current_user = wp_get_current_user();return $current_user->);'
                                //$newVal = $current_user-> get_current_user_id();
                                //$current_user->user_login;
                                //MAXICHARTSAPI::getLogger ()->debug('need to replace '.$value2['value'].' with val: '.$newVal);
                                //$search_criteria[$key][$key2]['value'] = $newVal;
                            }
                            
                            //$newVal = $user_data[$value2['value']];
                            MAXICHARTSAPI::getLogger ()->debug('meta val '.$metaKey.' for '.$current_user_id.' is: '.$newVal);
                            
                            $search_criteria[$key][$key2]['value'] = $newVal;
                            
                        } else if (is_array($value2) && $value2['key'] == 'created_by') {
                            //MAXICHARTSAPI::getLogger ()->debug($value2['key'].' found with val: '.$value2['value']);
                            if ($value2['value'] == 'current') {
                                // replace by current user id
                                $newVal = get_current_user_id();
                                MAXICHARTSAPI::getLogger ()->debug('need to replace '.$value2['value'].' with val: '.$newVal);
                                $search_criteria[$key][$key2]['value'] = $newVal;
                            }
                        }
                        
                        
                    }
                } else if ($key === 'date_range') {
                    // interpret string like date range, and set correct value to GF criteria filter
                    if ($value === "last_week" ) {
                        $start_date = date( 'Y-m-d', strtotime('-7 days') );
                        $end_date = date( 'Y-m-d', time() );
                    } else if ($value === "last_month" ) {
                        $start_date = date( 'Y-m-d', strtotime('-30 days') );
                        $end_date = date( 'Y-m-d', time() );
                    } else if ($value === "last_year" ) {
                        $start_date = date( 'Y-m-d', strtotime('-12 month') );
                        $end_date = date( 'Y-m-d', time() );
                    } else if ($value === "yesterday" ) {
                        $start_date = date( 'Y-m-d', strtotime('-2 days') );
                        $end_date = date( 'Y-m-d', strtotime('-1 day'));
                    } else if ($value === "today" ) {
                        $start_date = date( 'Y-m-d', strtotime('-1 day') );
                        $end_date = date( 'Y-m-d', time() );
                    }
                    // today” and “yesterday
                    //"start_date":"2016-10-12","end_date":"2017-12-01"
                    $search_criteria["start_date"] = $start_date;
                    $search_criteria["end_date"] = $end_date;
                }
            }
            
            MAXICHARTSAPI::getLogger ()->debug("modify_custom_search_criteria AFTER");
            MAXICHARTSAPI::getLogger ()->debug($search_criteria);
            return $search_criteria;
        }
    }
}

new mcharts_custom_criteria_plugin();
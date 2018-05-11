<?php
if (!defined('ABSPATH'))
    exit;
image_hover_ultimate_user_capabilities();
if (isset($_POST['submit']) && isset($_POST['submit']) == 'Save' && isset($_POST['style'])) {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheunewdata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        if ($_POST['style'] == 'general-1') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||';
        }
        if ($_POST['style'] == 'general-2') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 0.71)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |bottom_to_top|';
        }
        if ($_POST['style'] == 'general-3') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'general-4') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'general-5') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'general-6') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |scale_up|';
        }
        if ($_POST['style'] == 'general-7') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'general-8') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'general-9') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'general-10') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |80|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |top_to_bottom|';
        }
        if ($_POST['style'] == 'general-11') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'general-12') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'general-13') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||';
        }
        if ($_POST['style'] == 'general-14') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'general-15') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |15|background-color |rgba(0, 146, 194, 1)|content-alignment |vertical-align: middle;text-align: center;|open-in-new-tab ||image-animation |zoomIn|animation-durations |1|content-animation |iheu-fade-up|inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size |20|heading-font-color |#ffffff|heading-font-familly |Open+Sans|heading-font-weight |600|heading-underline |no|heading-padding-bottom |0|heading-margin-bottom |10|desc-font-size |16|desc-font-color |#ffffff|desc-font-familly |Open+Sans|desc-font-weight |300|desc-padding-bottom |20|bottom-font-size |14|bottom-font-color |#ffffff|bottom-font-background |rgba(126, 0, 158, 1)|bottom-font-familly |Open+Sans|bottom-font-weight |300|bottom-hover-color |#7e009e|bottom-hover-background |rgba(255, 255, 255, 1)|bottom-border-radius |5|bottom-padding-top-bottom |10|bottom-padding-left-right |10|bottom-align |margin: 0 auto;|bottom-margin-left |10|bottom-margin-right |10|iheu-css ||';
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
$iheuimage1 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/1.jpg';
$iheuimage2 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/2.jpg';
$iheuimage3 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/3.jpg';
$iheuimage4 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/4.jpg';
$iheuimage5 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/5.jpg';
$iheuimage6 = WP_PLUGIN_URL . '/image-hover-effects-ultimate/public/image/6.jpg';
?>


<div class="wrap">
    <?php echo iheu_promote_free();?> 
    <div class="iheu-admin-wrapper">
        <h1>Select Style</h1>
        <p>Select Style from our Template list</p>
        <div class="iheu-admin-new-row">
            <div class="iheu-admin-row">
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
                                    .image-ultimate-hover-4{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-4 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-4 .iheu-info {
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
                                    .image-ultimate-hover-animation-4 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-4, 
                                    .image-ultimate-hover-4 .iheu-img, .image-ultimate-hover-4 a .iheu-img,
                                    .image-ultimate-hover-4 .iheu-img:before, .image-ultimate-hover-4 a .iheu-img:before,
                                    .image-ultimate-hover-4 .iheu-img img, .image-ultimate-hover-4 a .iheu-img img,
                                    .image-ultimate-hover-4 .iheu-info, .image-ultimate-hover-4 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-4{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-4 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-4:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-4 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(246, 217, 255, 0.41);
                                    }
                                    .image-ultimate-hover-4 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-4 .iheu-info {
                                        background: rgba(194, 0, 194, 1);
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-4 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-4 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-4 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-4 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-4 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-4:hover .iheu-info {
                                        opacity: 1;
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-4 image-ultimate-hover-animation-4"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-4">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-4">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-4 image-ultimate-hover-animation-4"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-4">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-4 squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 1 <span> Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-1">Select</button>
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
                                    .image-ultimate-hover-10{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-10 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-10 .iheu-info {
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

                                    .image-ultimate-hover-animation-10 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-10, 
                                    .image-ultimate-hover-10 .iheu-img, .image-ultimate-hover-10 a .iheu-img,
                                    .image-ultimate-hover-10 .iheu-img:before, .image-ultimate-hover-10 a .iheu-img:before,
                                    .image-ultimate-hover-10 .iheu-img img, .image-ultimate-hover-10 a .iheu-img img,
                                    .image-ultimate-hover-10 .iheu-info, .image-ultimate-hover-10 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-10{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-10 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-10:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-10 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(187, 234, 250, 0.3);

                                    }

                                    .image-ultimate-hover-10 .iheu-img {
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
                                    .image-ultimate-hover-10 .iheu-info {
                                        background: rgba(0, 146, 194, 0.71);
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-10 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-10 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-10 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-10 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                    }
                                    .image-ultimate-hover-10 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-10.left_to_right .iheu-info {
                                        -webkit-transform: translateX(-100%);
                                        -moz-transform: translateX(-100%);
                                        -ms-transform: translateX(-100%);
                                        -o-transform: translateX(-100%);
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-10.left_to_right a:hover .iheu-img,
                                    .image-ultimate-hover-10.left_to_right:hover .iheu-img{
                                        -webkit-transform: rotate(-90deg);
                                        -moz-transform: rotate(-90deg);
                                        -ms-transform: rotate(-90deg);
                                        -o-transform: rotate(-90deg);
                                        transform: rotate(-90deg);
                                    }
                                    .image-ultimate-hover-10.left_to_right a:hover .iheu-info,
                                    .image-ultimate-hover-10.left_to_right:hover .iheu-info{
                                        opacity: 1;
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                        pointer-events: auto;
                                    }

                                    .image-ultimate-hover-10.right_to_left .iheu-info {
                                        -webkit-transform: translateX(100%);
                                        -moz-transform: translateX(100%);
                                        -ms-transform: translateX(100%);
                                        -o-transform: translateX(100%);
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-10.right_to_left a:hover .iheu-img,
                                    .image-ultimate-hover-10.right_to_left:hover .iheu-img{
                                        -webkit-transform: rotate(90deg);
                                        -moz-transform: rotate(90deg);
                                        -ms-transform: rotate(90deg);
                                        -o-transform: rotate(90deg);
                                        transform: rotate(90deg);
                                    }
                                    .image-ultimate-hover-10.right_to_left a:hover .iheu-info,
                                    .image-ultimate-hover-10.right_to_left:hover .iheu-info{
                                        opacity: 1;
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                        pointer-events: auto;
                                    }

                                    .image-ultimate-hover-10.top_to_bottom .iheu-info {
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                    }
                                    .image-ultimate-hover-10.top_to_bottom a:hover .iheu-img,
                                    .image-ultimate-hover-10.top_to_bottom:hover .iheu-img{
                                        -webkit-transform: rotate(-90deg);
                                        -moz-transform: rotate(-90deg);
                                        -ms-transform: rotate(-90deg);
                                        -o-transform: rotate(-90deg);
                                        transform: rotate(-90deg);
                                    }
                                    .image-ultimate-hover-10.top_to_bottom a:hover .iheu-info,
                                    .image-ultimate-hover-10.top_to_bottom:hover .iheu-info{
                                        opacity: 1;
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                        pointer-events: auto;
                                    }

                                    .image-ultimate-hover-10.bottom_to_top .iheu-info {
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                    .image-ultimate-hover-10.bottom_to_top a:hover .iheu-img,
                                    .image-ultimate-hover-10.bottom_to_top:hover .iheu-img{
                                        -webkit-transform: rotate(90deg);
                                        -moz-transform: rotate(90deg);
                                        -ms-transform: rotate(90deg);
                                        -o-transform: rotate(90deg);
                                        transform: rotate(90deg);
                                    }
                                    .image-ultimate-hover-10.bottom_to_top a:hover .iheu-info,
                                    .image-ultimate-hover-10.bottom_to_top:hover .iheu-info{
                                        opacity: 1;
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                        pointer-events: auto;
                                    }

                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-10 image-ultimate-hover-animation-10"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-10">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-10 right_to_left">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-left"> Fully Customizable </h3>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-10 image-ultimate-hover-animation-10"  data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-10">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-10 left_to_right squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage4; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-left"> Fully Customizable </h3>

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
                            Style 2 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-2">Select</button>
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
                                    .image-ultimate-hover-17{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-17 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-17 .iheu-info {
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

                                    .image-ultimate-hover-animation-17 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-17, 
                                    .image-ultimate-hover-17 .iheu-img, .image-ultimate-hover-17 a .iheu-img,
                                    .image-ultimate-hover-17 .iheu-img:before, .image-ultimate-hover-17 a .iheu-img:before,
                                    .image-ultimate-hover-17 .iheu-img img, .image-ultimate-hover-17 a .iheu-img img,
                                    .image-ultimate-hover-17 .iheu-info, .image-ultimate-hover-17 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-17{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-17 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-17:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-17 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }

                                    .image-ultimate-hover-17 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        z-index: 11;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-17 .iheu-info {
                                        background: rgba(126, 0, 194, 1);
                                        opacity: 0;
                                        pointer-events: none;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-17 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-17 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-17 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-17 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-17 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }


                                    .image-ultimate-hover-17.left_to_right .iheu-img {
                                        -webkit-transform: scale(1) translateX(0);
                                        -moz-transform: scale(1) translateX(0);
                                        -ms-transform: scale(1) translateX(0);
                                        -o-transform: scale(1) translateX(0);
                                        transform: scale(1) translateX(0);
                                    }
                                    .image-ultimate-hover-17.left_to_right .iheu-info {
                                        -webkit-transform: translateX(-100%);
                                        -moz-transform: translateX(-100%);
                                        -ms-transform: translateX(-100%);
                                        -o-transform: translateX(-100%);
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-17.left_to_right a:hover .iheu-img,
                                    .image-ultimate-hover-17.left_to_right:hover .iheu-img{
                                        -webkit-transform: scale(0.5) translateX(100%);
                                        -moz-transform: scale(0.5) translateX(100%);
                                        -ms-transform: scale(0.5) translateX(100%);
                                        -o-transform: scale(0.5) translateX(100%);
                                        transform: scale(0.5) translateX(100%);
                                    }
                                    .image-ultimate-hover-17.left_to_right a:hover .iheu-info,
                                    .image-ultimate-hover-17.left_to_right:hover .iheu-info{
                                        opacity: 1;
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                        pointer-events: auto;
                                    }

                                    .image-ultimate-hover-17.right_to_left .iheu-img {
                                        -webkit-transform: scale(1) translateX(0);
                                        -moz-transform: scale(1) translateX(0);
                                        -ms-transform: scale(1) translateX(0);
                                        -o-transform: scale(1) translateX(0);
                                        transform: scale(1) translateX(0);
                                    }
                                    .image-ultimate-hover-17.right_to_left .iheu-info {
                                        -webkit-transform: translateX(100%);
                                        -moz-transform: translateX(100%);
                                        -ms-transform: translateX(100%);
                                        -o-transform: translateX(100%);
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-17.right_to_left a:hover .iheu-img,
                                    .image-ultimate-hover-17.right_to_left:hover .iheu-img{
                                        -webkit-transform: scale(0.5) translateX(-100%);
                                        -moz-transform: scale(0.5) translateX(-100%);
                                        -ms-transform: scale(0.5) translateX(-100%);
                                        -o-transform: scale(0.5) translateX(-100%);
                                        transform: scale(0.5) translateX(-100%);
                                    }
                                    .image-ultimate-hover-17.right_to_left a:hover .iheu-info,
                                    .image-ultimate-hover-17.right_to_left:hover .iheu-info{
                                        opacity: 1;
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                        pointer-events: auto;
                                    }

                                    .image-ultimate-hover-17.top_to_bottom .iheu-img {
                                        -webkit-transform: scale(1) translateY(0);
                                        -moz-transform: scale(1) translateY(0);
                                        -ms-transform: scale(1) translateY(0);
                                        -o-transform: scale(1) translateY(0);
                                        transform: scale(1) translateY(0);
                                    }
                                    .image-ultimate-hover-17.top_to_bottom .iheu-info {
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                    }
                                    .image-ultimate-hover-17.top_to_bottom a:hover .iheu-img,
                                    .image-ultimate-hover-17.top_to_bottom:hover .iheu-img{
                                        -webkit-transform: scale(0.5) translateY(100%);
                                        -moz-transform: scale(0.5) translateY(100%);
                                        -ms-transform: scale(0.5) translateY(100%);
                                        -o-transform: scale(0.5) translateY(100%);
                                        transform: scale(0.5) translateY(100%);
                                    }
                                    .image-ultimate-hover-17.top_to_bottom a:hover .iheu-info,
                                    .image-ultimate-hover-17.top_to_bottom:hover .iheu-info{
                                        opacity: 1;
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                        pointer-events: auto;
                                    }

                                    .image-ultimate-hover-17.bottom_to_top .iheu-img {
                                        -webkit-transform: scale(1) translateY(0);
                                        -moz-transform: scale(1) translateY(0);
                                        -ms-transform: scale(1) translateY(0);
                                        -o-transform: scale(1) translateY(0);
                                        transform: scale(1) translateY(0);
                                    }
                                    .image-ultimate-hover-17.bottom_to_top .iheu-info {
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                    .image-ultimate-hover-17.bottom_to_top a:hover .iheu-img,
                                    .image-ultimate-hover-17.bottom_to_top:hover .iheu-img{
                                        -webkit-transform: scale(0.5) translateY(-100%);
                                        -moz-transform: scale(0.5) translateY(-100%);
                                        -ms-transform: scale(0.5) translateY(-100%);
                                        -o-transform: scale(0.5) translateY(-100%);
                                        transform: scale(0.5) translateY(-100%);
                                    }
                                    .image-ultimate-hover-17.bottom_to_top a:hover .iheu-info,
                                    .image-ultimate-hover-17.bottom_to_top:hover .iheu-info{
                                        opacity: 1;
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                        pointer-events: auto;
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-17 image-ultimate-hover-animation-17" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-17">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-17 top_to_bottom">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-17  image-ultimate-hover-animation-17" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-17">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-17 bottom_to_top squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 3 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-3">Select</button>
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
                                    .image-ultimate-hover-23{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-23 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-23 .iheu-info {
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

                                    .image-ultimate-hover-animation-23 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-23, 
                                    .image-ultimate-hover-23 .iheu-img, .image-ultimate-hover-23 a .iheu-img,
                                    .image-ultimate-hover-23 .iheu-img:before, .image-ultimate-hover-23 a .iheu-img:before,
                                    .image-ultimate-hover-23 .iheu-img img, .image-ultimate-hover-23 a .iheu-img img,
                                    .image-ultimate-hover-23 .iheu-info, .image-ultimate-hover-23 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-23{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-23 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-23:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-23 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }

                                    .image-ultimate-hover-23 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        opacity: 1;
                                        -webkit-transition: all 0.4s ease-in-out;
                                        -moz-transition: all 0.4s ease-in-out;
                                        transition: all 0.4s ease-in-out;
                                    }
                                    .image-ultimate-hover-23 .iheu-info {
                                        background: rgba(181, 0, 194, 1);
                                        opacity: 0;
                                        visibility: hidden;
                                        pointer-events: none;
                                        -webkit-transition: all 0.35s ease;
                                        -moz-transition: all 0.35s ease;
                                        transition: all 0.35s ease;
                                    }
                                    .image-ultimate-hover-23 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-23 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-23 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-23 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-23 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }


                                    .image-ultimate-hover-23 a:hover .iheu-img,
                                    .image-ultimate-hover-23:hover .iheu-img{
                                        opacity: 0;
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-23 a:hover .iheu-info,
                                    .image-ultimate-hover-23:hover .iheu-info{
                                        visibility: visible;
                                        opacity: 1;
                                        pointer-events: auto;
                                    }

                                    .image-ultimate-hover-23.left_to_right .iheu-img {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }
                                    .image-ultimate-hover-23.left_to_right .iheu-info {
                                        -webkit-transform: translateX(-100%);
                                        -moz-transform: translateX(-100%);
                                        -ms-transform: translateX(-100%);
                                        -o-transform: translateX(-100%);
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-23.left_to_right a:hover .iheu-img,
                                    .image-ultimate-hover-23.left_to_right:hover .iheu-img{
                                        -webkit-transform: translateX(100%);
                                        -moz-transform: translateX(100%);
                                        -ms-transform: translateX(100%);
                                        -o-transform: translateX(100%);
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-23.left_to_right a:hover .iheu-info,
                                    .image-ultimate-hover-23.left_to_right:hover .iheu-info{
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }

                                    .image-ultimate-hover-23.right_to_left .iheu-img {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }
                                    .image-ultimate-hover-23.right_to_left .iheu-info {
                                        -webkit-transform: translateX(100%);
                                        -moz-transform: translateX(100%);
                                        -ms-transform: translateX(100%);
                                        -o-transform: translateX(100%);
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-23.right_to_left a:hover .iheu-img,
                                    .image-ultimate-hover-23.right_to_left:hover .iheu-img{
                                        -webkit-transform: translateX(-100%);
                                        -moz-transform: translateX(-100%);
                                        -ms-transform: translateX(-100%);
                                        -o-transform: translateX(-100%);
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-23.right_to_left a:hover .iheu-info,
                                    .image-ultimate-hover-23.right_to_left:hover .iheu-info{
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }

                                    .image-ultimate-hover-23.top_to_bottom .iheu-img {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                    .image-ultimate-hover-23.top_to_bottom .iheu-info {
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                    .image-ultimate-hover-23.top_to_bottom a:hover .iheu-img,
                                    .image-ultimate-hover-23.top_to_bottom:hover .iheu-img{
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                    }
                                    .image-ultimate-hover-23.top_to_bottom a:hover .iheu-info,
                                    .image-ultimate-hover-23.top_to_bottom:hover .iheu-info{
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }

                                    .image-ultimate-hover-23.bottom_to_top .iheu-img {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                    .image-ultimate-hover-23.bottom_to_top .iheu-info {
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                    }
                                    .image-ultimate-hover-23.bottom_to_top a:hover .iheu-img,
                                    .image-ultimate-hover-23.bottom_to_top:hover .iheu-img{
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                    .image-ultimate-hover-23.bottom_to_top a:hover .iheu-info,
                                    .image-ultimate-hover-23.bottom_to_top:hover .iheu-info{
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-23  image-ultimate-hover-animation-23" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-23">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-23 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-23  image-ultimate-hover-animation-23" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-23">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-23 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 4 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-4">Select</button>
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
                                    .image-ultimate-hover-29{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        -webkit-perspective: 900px;
                                        -moz-perspective: 900px;
                                        perspective: 900px;
                                    }
                                    .image-ultimate-hover-29 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-29 .iheu-info {
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

                                    .image-ultimate-hover-animation-29 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-29, 
                                    .image-ultimate-hover-29 .iheu-img, .image-ultimate-hover-29 a .iheu-img,
                                    .image-ultimate-hover-29 .iheu-img:before, .image-ultimate-hover-29 a .iheu-img:before,
                                    .image-ultimate-hover-29 .iheu-img img, .image-ultimate-hover-29 a .iheu-img img,
                                    .image-ultimate-hover-29 .iheu-info, .image-ultimate-hover-29 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-29{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-29 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-29:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-29 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }
                                    .image-ultimate-hover-29 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-29 .iheu-info-2{
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        -webkit-transform-style: preserve-3d;
                                        -moz-transform-style: preserve-3d;
                                        -ms-transform-style: preserve-3d;
                                        -o-transform-style: preserve-3d;
                                        transform-style: preserve-3d;
                                        position: absolute;
                                        width:100%;
                                        height:100%;
                                        top: 0;
                                        left: 0;
                                    }
                                    .image-ultimate-hover-29.right_to_left .iheu-info {
                                        background: rgba(0, 163, 65, 0.76);
                                        visibility: hidden;
                                        -webkit-transform: rotate3d(0, 1, 0, 180deg);
                                        -moz-transform: rotate3d(0, 1, 0, 180deg);
                                        -ms-transform: rotate3d(0, 1, 0, 180deg);
                                        -o-transform: rotate3d(0, 1, 0, 180deg);
                                        transform: rotate3d(0, 1, 0, 180deg);
                                        -webkit-backface-visibility: hidden;
                                        backface-visibility: hidden;
                                    }
                                    .image-ultimate-hover-29.left_to_right .iheu-info {
                                        background: rgba(0, 163, 65, 0.76);
                                        visibility: hidden;
                                        -webkit-transform: rotate3d(0, 1, 0, -180deg);
                                        -moz-transform: rotate3d(0, 1, 0, -180deg);
                                        -ms-transform: rotate3d(0, 1, 0, -180deg);
                                        -o-transform: rotate3d(0, 1, 0, -180deg);
                                        transform: rotate3d(0, 1, 0, -180deg);
                                        -webkit-backface-visibility: hidden;
                                        backface-visibility: hidden;
                                    }
                                    .image-ultimate-hover-29.top_to_bottom .iheu-info {
                                        background: rgba(0, 163, 65, 0.76);
                                        visibility: hidden;
                                        -webkit-transform: rotateX(-180deg);
                                        -moz-transform: rotateX(-180deg);
                                        -ms-transform:  rotateX(-180deg);
                                        -o-transform:  rotateX(-180deg);
                                        transform:  rotateX(-180deg);
                                        -webkit-backface-visibility: hidden;
                                        backface-visibility: hidden;
                                    }
                                    .image-ultimate-hover-29.bottom_to_top .iheu-info {
                                        background: rgba(0, 163, 65, 0.76);
                                        visibility: hidden;
                                        -webkit-transform: rotateX(180deg);
                                        -moz-transform: rotateX(180deg);
                                        -ms-transform:  rotateX(180deg);
                                        -o-transform:  rotateX(180deg);
                                        transform:  rotateX(180deg);
                                        -webkit-backface-visibility: hidden;
                                        backface-visibility: hidden;
                                    }
                                    .image-ultimate-hover-29 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-29 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-29 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        float:left;
                                        width:100%;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-29 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-29 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                    .image-ultimate-hover-29.left_to_right:hover .iheu-info-2 {
                                        -webkit-transform: rotate3d(0, 1, 0, 180deg);
                                        -moz-transform: rotate3d(0, 1, 0, 180deg);
                                        -ms-transform: rotate3d(0, 1, 0, 180deg);
                                        -o-transform: rotate3d(0, 1, 0, 180deg);
                                        transform: rotate3d(0, 1, 0, 180deg);
                                    }
                                    .image-ultimate-hover-29.right_to_left:hover .iheu-info-2 {
                                        -webkit-transform: rotate3d(0, 1, 0, -180deg);
                                        -moz-transform: rotate3d(0, 1, 0, -180deg);
                                        -ms-transform: rotate3d(0, 1, 0, -180deg);
                                        -o-transform: rotate3d(0, 1, 0, -180deg);
                                        transform: rotate3d(0, 1, 0, -180deg);
                                    }
                                    .image-ultimate-hover-29.top_to_bottom:hover .iheu-info {
                                        -webkit-transform: rotateX(0deg);
                                        -moz-transform: rotateX(0deg);
                                        -ms-transform: rotateX(0deg);
                                        -o-transform: rotateX(0deg);
                                        transform: rotateX(0deg);
                                    }
                                    .image-ultimate-hover-29.bottom_to_top:hover .iheu-info {
                                        -webkit-transform: rotateX(0deg);
                                        -moz-transform: rotateX(0deg);
                                        -ms-transform: rotateX(0deg);
                                        -o-transform: rotateX(0deg);
                                        transform: rotateX(0deg);
                                    }
                                    .image-ultimate-hover-29:hover .iheu-info {
                                        visibility: visible;
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-29  image-ultimate-hover-animation-29" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-29">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-29 bottom_to_top">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info-2">
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-29  image-ultimate-hover-animation-23" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-29">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-29 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info-2">
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
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
                            Style 5 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-5">Select</button>
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
                                    .image-ultimate-hover{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover .iheu-info {
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
                                    .image-ultimate-hover-animation-34 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-34, 
                                    .image-ultimate-hover-34 .iheu-img, .image-ultimate-hover-34 a .iheu-img,
                                    .image-ultimate-hover-34 .iheu-img:before, .image-ultimate-hover-34 a .iheu-img:before,
                                    .image-ultimate-hover-34 .iheu-img img, .image-ultimate-hover-34 a .iheu-img img,
                                    .image-ultimate-hover-34 .iheu-info, .image-ultimate-hover-34 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-34{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-34 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-34:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-34 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-34 .iheu-img {
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
                                    .image-ultimate-hover-34 .iheu-info {
                                        background: rgba(65, 0, 194, 0.79);
                                        opacity: 0;
                                        pointer-events: none;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-34 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-34 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-34 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-34 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-34 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-34:hover .iheu-info{
                                        pointer-events: auto;
                                    }
                                    .image-ultimate-hover-34.scale_up .iheu-info {
                                        -webkit-transform: scale(0.5);
                                        -moz-transform: scale(0.5);
                                        -ms-transform: scale(0.5);
                                        -o-transform: scale(0.5);
                                        transform: scale(0.5);

                                    }
                                    .image-ultimate-hover-34.scale_up:hover .iheu-img {
                                        opacity: 0;
                                        -webkit-transform: scale(1.5);
                                        -moz-transform: scale(1.5);
                                        -ms-transform: scale(1.5);
                                        -o-transform: scale(1.5);
                                        transform: scale(1.5);
                                        ponter-events:none;
                                    }
                                    .image-ultimate-hover-34.scale_up:hover .iheu-info {
                                        opacity: 1;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                    }

                                    .image-ultimate-hover-34.scale_down .iheu-info {
                                        -webkit-transform: scale(1.5);
                                        -moz-transform: scale(1.5);
                                        -ms-transform: scale(1.5);
                                        -o-transform: scale(1.5);
                                        transform: scale(1.5);
                                    }
                                    .image-ultimate-hover-34.scale_down:hover .iheu-img {
                                        opacity: 0;
                                        -webkit-transform: scale(0.5);
                                        -moz-transform: scale(0.5);
                                        -ms-transform: scale(0.5);
                                        -o-transform: scale(0.5);
                                        transform: scale(0.5);                                        
                                        ponter-events:none;
                                    }
                                    .image-ultimate-hover-34.scale_down:hover .iheu-info {
                                        opacity: 1;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                    }

                                    .image-ultimate-hover-34.scale_down_up .iheu-info {
                                        -webkit-transform: scale(0.5);
                                        -moz-transform: scale(0.5);
                                        -ms-transform: scale(0.5);
                                        -o-transform: scale(0.5);
                                        transform: scale(0.5);
                                        -webkit-transition: all 0.35s ease-in-out 0.2s;
                                        -moz-transition: all 0.35s ease-in-out 0.2s;
                                        transition: all 0.35s ease-in-out 0.2s;
                                    }
                                    .image-ultimate-hover-34.scale_down_up:hover .iheu-img {
                                        opacity: 0;
                                        -webkit-transform: scale(0.5);
                                        -moz-transform: scale(0.5);
                                        -ms-transform: scale(0.5);
                                        -o-transform: scale(0.5);
                                        transform: scale(0.5);                                        
                                        ponter-events:none;
                                    }
                                    .image-ultimate-hover-34.scale_down_up:hover .iheu-info {
                                        opacity: 1;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                    }

                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-34  image-ultimate-hover-animation-34" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-34">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-34 scale_down">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-34  image-ultimate-hover-animation-34" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-34">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-34 scale_up squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 6 <span>3 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-6">Select</button>
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
                                    .image-ultimate-hover-40{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-40 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-40 .iheu-info {
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

                                    .image-ultimate-hover-animation-40 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-40, 
                                    .image-ultimate-hover-40 .iheu-img, .image-ultimate-hover-40 a .iheu-img,
                                    .image-ultimate-hover-40 .iheu-img:before, .image-ultimate-hover-40 a .iheu-img:before,
                                    .image-ultimate-hover-40 .iheu-img img, .image-ultimate-hover-40 a .iheu-img img,
                                    .image-ultimate-hover-40 .iheu-info, .image-ultimate-hover-40 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-40{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-40 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-40:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-40 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-40 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        opacity: 1;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                        -webkit-transition: all 0.35s ease-out;
                                        -moz-transition: all 0.35s ease-out;
                                        transition: all 0.35s ease-out;
                                    }
                                    .image-ultimate-hover-40 .iheu-info {
                                        background: rgba(0, 146, 194, 1);
                                        opacity: 0;
                                        visibility: hidden;
                                        pointer-events: none;
                                        -webkit-transition: all 0.35s ease 0.2s;
                                        -moz-transition: all 0.35s ease 0.2s;
                                        transition: all 0.35s ease 0.2s;
                                    }
                                    .image-ultimate-hover-40 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-40 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-40 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-40 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-40 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-40:hover .iheu-info {
                                        visibility: visible;
                                        opacity: 1;
                                        pointer-events: auto;
                                    }
                                    .image-ultimate-hover-40:hover .iheu-img {
                                        opacity: 0;
                                        -webkit-transform: scale(0.5);
                                        -moz-transform: scale(0.5);
                                        -ms-transform: scale(0.5);
                                        -o-transform: scale(0.5);
                                        transform: scale(0.5);
                                    }

                                    .image-ultimate-hover-40.left_to_right .iheu-info {
                                        -webkit-transform: translateX(-100%);
                                        -moz-transform: translateX(-100%);
                                        -ms-transform: translateX(-100%);
                                        -o-transform: translateX(-100%);
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-40.left_to_right:hover .iheu-info {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }

                                    .image-ultimate-hover-40.right_to_left .iheu-info {
                                        -webkit-transform: translateX(100%);
                                        -moz-transform: translateX(100%);
                                        -ms-transform: translateX(100%);
                                        -o-transform: translateX(100%);
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-40.right_to_left:hover .iheu-info {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }

                                    .image-ultimate-hover-40.top_to_bottom .iheu-info {
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                    .image-ultimate-hover-40.top_to_bottom:hover .iheu-info {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }

                                    .image-ultimate-hover-40.bottom_to_top .iheu-info {
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                    }
                                    .image-ultimate-hover-40.bottom_to_top:hover .iheu-info {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }

                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-40  image-ultimate-hover-animation-40" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-40">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-40 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-40  image-ultimate-hover-animation-40" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-40">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-40 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 7 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-7">Select</button>
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
                                    .image-ultimate-hover-46{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-46 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-46 .iheu-info {
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

                                    .image-ultimate-hover-animation-46 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-46, 
                                    .image-ultimate-hover-46 .iheu-img, .image-ultimate-hover-46 a .iheu-img,
                                    .image-ultimate-hover-46 .iheu-img:before, .image-ultimate-hover-46 a .iheu-img:before,
                                    .image-ultimate-hover-46 .iheu-img img, .image-ultimate-hover-46 a .iheu-img img,
                                    .image-ultimate-hover-46 .iheu-info, .image-ultimate-hover-46 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-46{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-46 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-46:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-46 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }
                                    .image-ultimate-hover-46 .iheu-img-2 {
                                        width: 100%;
                                        float: left;
                                        height: 100%;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-46 .iheu-img-2 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        opacity: 1;
                                        -webkit-transition: all 0.3s ease-in-out 0.3s;
                                        -moz-transition: all 0.3s ease-in-out 0.3s;
                                        transition: all 0.3s ease-in-out 0.3s;
                                    }
                                    .image-ultimate-hover-46 .iheu-info-2 {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        opacity: 0;
                                        pointer-events: none;
                                        -webkit-transition: all 0.3s ease-in-out 0.3s;
                                        -moz-transition: all 0.3s ease-in-out 0.3s;
                                        transition: all 0.3s ease-in-out 0.3s;
                                    }
                                    .image-ultimate-hover-46 .iheu-info-2 .iheu-info {
                                        background: rgba(0, 146, 194, 1);
                                        pointer-events: none;
                                        -webkit-transform: scale(0.5);
                                        -moz-transform: scale(0.5);
                                        -ms-transform: scale(0.5);
                                        -o-transform: scale(0.5);
                                        transform: scale(0.5);
                                        -webkit-transition: all 0.35s ease-in-out 0.6s;
                                        -moz-transition: all 0.35s ease-in-out 0.6s;
                                        transition: all 0.35s ease-in-out 0.6s;
                                    }
                                    .image-ultimate-hover-46 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-46 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-46 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-46 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-46 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                    .image-ultimate-hover-46:hover .iheu-img-2 {
                                        pointer-events: none;
                                        -webkit-transform: scale(0.5);
                                        -moz-transform: scale(0.5);
                                        -ms-transform: scale(0.5);
                                        -o-transform: scale(0.5);
                                        transform: scale(0.5);
                                    }
                                    .image-ultimate-hover-46:hover .iheu-img-2 .iheu-img {
                                        opacity: 0;
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-46:hover .iheu-info-2 {
                                        opacity: 1;
                                        pointer-events: auto;
                                    }
                                    .image-ultimate-hover-46:hover .iheu-info-2 .iheu-info {
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                        pointer-events: auto;
                                    }

                                    .image-ultimate-hover-46.left_to_right .iheu-img-2 .iheu-img {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }
                                    .image-ultimate-hover-46.left_to_right .iheu-info-2 {
                                        -webkit-transform: translateX(100%);
                                        -moz-transform: translateX(100%);
                                        -ms-transform: translateX(100%);
                                        -o-transform: translateX(100%);
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-46.left_to_right:hover .iheu-img-2 .iheu-img {
                                        -webkit-transform: translateX(-100%);
                                        -moz-transform: translateX(-100%);
                                        -ms-transform: translateX(-100%);
                                        -o-transform: translateX(-100%);
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-46.left_to_right:hover .iheu-info-2 {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }

                                    .image-ultimate-hover-46.right_to_left .iheu-img-2 .iheu-img {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }
                                    .image-ultimate-hover-46.right_to_left .iheu-info-2 {
                                        -webkit-transform: translateX(-100%);
                                        -moz-transform: translateX(-100%);
                                        -ms-transform: translateX(-100%);
                                        -o-transform: translateX(-100%);
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-46.right_to_left:hover .iheu-img-2 .iheu-img {
                                        -webkit-transform: translateX(100%);
                                        -moz-transform: translateX(100%);
                                        -ms-transform: translateX(100%);
                                        -o-transform: translateX(100%);
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-46.right_to_left:hover .iheu-info-2 {
                                        -webkit-transform: translateX(0);
                                        -moz-transform: translateX(0);
                                        -ms-transform: translateX(0);
                                        -o-transform: translateX(0);
                                        transform: translateX(0);
                                    }

                                    .image-ultimate-hover-46.top_to_bottom .iheu-img-2 .iheu-img {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                    .image-ultimate-hover-46.top_to_bottom .iheu-info-2 {
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                    }
                                    .image-ultimate-hover-46.top_to_bottom:hover .iheu-img-2 .iheu-img {
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                    .image-ultimate-hover-46.top_to_bottom:hover .iheu-info-2 {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }

                                    .image-ultimate-hover-46.bottom_to_top .iheu-img-2 .iheu-img {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                    .image-ultimate-hover-46.bottom_to_top .iheu-info-2 {
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                    .image-ultimate-hover-46.bottom_to_top:hover .iheu-img-2 .iheu-img {
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                    }
                                    .image-ultimate-hover-46.bottom_to_top:hover .iheu-info-2 {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-46  image-ultimate-hover-animation-46" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-46">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-46 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img-2">
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage3; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="iheu-info-2">
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-46  image-ultimate-hover-animation-46" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-46">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-46 top_to_bottom squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img-2">
                                                        <div class="iheu-img">
                                                            <img src="<?php echo $iheuimage4; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="iheu-info-2">
                                                        <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
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
                            Style 8 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-8">Select</button>
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
                                    .image-ultimate-hover-53{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-53 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-53 .iheu-info {
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

                                    .image-ultimate-hover-animation-53 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-53, 
                                    .image-ultimate-hover-53 .iheu-img, .image-ultimate-hover-53 a .iheu-img,
                                    .image-ultimate-hover-53 .iheu-img:before, .image-ultimate-hover-53 a .iheu-img:before,
                                    .image-ultimate-hover-53 .iheu-img img, .image-ultimate-hover-53 a .iheu-img img,
                                    .image-ultimate-hover-53 .iheu-info, .image-ultimate-hover-53 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-53{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-53 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-53:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-53 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-53 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        opacity: 1;
                                        -webkit-transition: all 0.35s ease-out;
                                        -moz-transition: all 0.35s ease-out;
                                        transition: all 0.35s ease-out;
                                    }
                                    .image-ultimate-hover-53 .iheu-info {
                                        background: rgba(194, 0, 162, 1);
                                        opacity: 0;
                                        visibility: hidden;
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
                                    .image-ultimate-hover-53 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-53 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-53 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float:left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-53 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-53 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-53:hover .iheu-img {
                                        opacity: 0;
                                        pointer-events: none;
                                        -webkit-transform: scale(0.5);
                                        -moz-transform: scale(0.5);
                                        -ms-transform: scale(0.5);
                                        -o-transform: scale(0.5);
                                        transform: scale(0.5);
                                    }
                                    .image-ultimate-hover-53:hover .iheu-info {
                                        visibility: visible;
                                        opacity: 1;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                        pointer-events: auto;
                                    }
                                    .image-ultimate-hover-53.left_to_right .iheu-img {
                                        -webkit-transform: translateX(0) rotate(0);
                                        -moz-transform: translateX(0) rotate(0);
                                        -ms-transform: translateX(0) rotate(0);
                                        -o-transform: translateX(0) rotate(0);
                                        transform: translateX(0) rotate(0);
                                    }
                                    .image-ultimate-hover-53.left_to_right:hover .iheu-img {
                                        -webkit-transform: translateX(100%) rotate(180deg);
                                        -moz-transform: translateX(100%) rotate(180deg);
                                        -ms-transform: translateX(100%) rotate(180deg);
                                        -o-transform: translateX(100%) rotate(180deg);
                                        transform: translateX(100%) rotate(180deg);
                                    }
                                    .image-ultimate-hover-53.right_to_left .iheu-img {
                                        -webkit-transform: translateX(0) rotate(0);
                                        -moz-transform: translateX(0) rotate(0);
                                        -ms-transform: translateX(0) rotate(0);
                                        -o-transform: translateX(0) rotate(0);
                                        transform: translateX(0) rotate(0);
                                    }
                                    .image-ultimate-hover-53.right_to_left:hover .iheu-img {
                                        -webkit-transform: translateX(-100%) rotate(-180deg);
                                        -moz-transform: translateX(-100%) rotate(-180deg);
                                        -ms-transform: translateX(-100%) rotate(-180deg);
                                        -o-transform: translateX(-100%) rotate(-180deg);
                                        transform: translateX(-100%) rotate(-180deg);
                                    }
                                    .image-ultimate-hover-53.top_to_bottom .iheu-img {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                    .image-ultimate-hover-53.top_to_bottom:hover .iheu-img {
                                        -webkit-transform: translateY(-100%);
                                        -moz-transform: translateY(-100%);
                                        -ms-transform: translateY(-100%);
                                        -o-transform: translateY(-100%);
                                        transform: translateY(-100%);
                                    }
                                    .image-ultimate-hover-53.bottom_to_top .iheu-img {
                                        -webkit-transform: translateY(0);
                                        -moz-transform: translateY(0);
                                        -ms-transform: translateY(0);
                                        -o-transform: translateY(0);
                                        transform: translateY(0);
                                    }
                                    .image-ultimate-hover-53.bottom_to_top:hover .iheu-img {
                                        -webkit-transform: translateY(100%);
                                        -moz-transform: translateY(100%);
                                        -ms-transform: translateY(100%);
                                        -o-transform: translateY(100%);
                                        transform: translateY(100%);
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-53  image-ultimate-hover-animation-53" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-53">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-53 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-53  image-ultimate-hover-animation-53" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-53">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-53 bottom_to_top squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            <button type="button" class="btn btn-success"  data-target="general-9">Select</button>
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
                                    .image-ultimate-hover-59{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-59 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-59 .iheu-info {
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

                                    .image-ultimate-hover-animation-59 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-59, 
                                    .image-ultimate-hover-59 .iheu-img, .image-ultimate-hover-59 a .iheu-img,
                                    .image-ultimate-hover-59 .iheu-img:before, .image-ultimate-hover-59 a .iheu-img:before,
                                    .image-ultimate-hover-59 .iheu-img img, .image-ultimate-hover-59 a .iheu-img img,
                                    .image-ultimate-hover-59 .iheu-info, .image-ultimate-hover-59 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-59{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-59 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-59:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-59 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }

                                    .image-ultimate-hover-59 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        z-index: 11;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-59 .iheu-info {
                                        background: rgba(155, 0, 194, 1);
                                        opacity: 0;
                                        -webkit-transform: scale(0);
                                        -moz-transform: scale(0);
                                        -ms-transform: scale(0);
                                        -o-transform: scale(0);
                                        transform: scale(0);
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-59 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: bottom;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-59 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 50px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-59 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-59 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-59 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                    .image-ultimate-hover-59:hover .iheu-info {
                                        visibility: visible;
                                        opacity: 1;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                    }

                                    .image-ultimate-hover-59.top_to_bottom:hover .iheu-img {
                                        -webkit-transform: translateY(50px) scale(0.5);
                                        -moz-transform: translateY(50px) scale(0.5);
                                        -ms-transform: translateY(50px) scale(0.5);
                                        -o-transform: translateY(50px) scale(0.5);
                                        transform: translateY(50px) scale(0.5);
                                    }

                                    .image-ultimate-hover-59.bottom_to_top:hover .iheu-img {
                                        -webkit-transform: translateY(-50px) scale(0.5);
                                        -moz-transform: translateY(-50px) scale(0.5);
                                        -ms-transform: translateY(-50px) scale(0.5);
                                        -o-transform: translateY(-50px) scale(0.5);
                                        transform: translateY(-50px) scale(0.5);
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-59  image-ultimate-hover-animation-59" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-59">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-59 bottom_to_top">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-59  image-ultimate-hover-animation-59" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-59">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-59 bottom_to_top squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 10 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-10">Select</button>
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
                                    .image-ultimate-hover-65{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        -webkit-perspective: 900px;
                                        -moz-perspective: 900px;
                                        perspective: 900px;
                                    }
                                    .image-ultimate-hover-65 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-65 .iheu-info {
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

                                    .image-ultimate-hover-animation-65 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-65, 
                                    .image-ultimate-hover-65 .iheu-img, .image-ultimate-hover-65 a .iheu-img,
                                    .image-ultimate-hover-65 .iheu-img:before, .image-ultimate-hover-65 a .iheu-img:before,
                                    .image-ultimate-hover-65 .iheu-img img, .image-ultimate-hover-65 a .iheu-img img,
                                    .image-ultimate-hover-65 .iheu-info, .image-ultimate-hover-65 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-65{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-65 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-65:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-65 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-65 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        opacity: 1;
                                        -webkit-transform-origin: 50% 50%;
                                        -moz-transform-origin: 50% 50%;
                                        -ms-transform-origin: 50% 50%;
                                        -o-transform-origin: 50% 50%;
                                        transform-origin: 50% 50%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-65 .iheu-info {
                                        background: rgba(194, 0, 146, 1);
                                        opacity: 0;
                                        visibility: hidden;
                                        -webkit-transition: all 0.35s ease 0.35s;
                                        -moz-transition: all 0.35s ease 0.35s;
                                        transition: all 0.35s ease 0.35s;
                                    }
                                    .image-ultimate-hover-65 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-65 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-65 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float:left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-65 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-65 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-65:hover .iheu-img {
                                        opacity: 0;
                                    }
                                    .image-ultimate-hover-65:hover .iheu-info {
                                        visibility: visible;
                                        opacity: 1;
                                    }

                                    .image-ultimate-hover-65.left_to_right .iheu-img {
                                        -webkit-transform: translateZ(0) rotateY(0);
                                        -moz-transform: translateZ(0) rotateY(0);
                                        -ms-transform: translateZ(0) rotateY(0);
                                        -o-transform: translateZ(0) rotateY(0);
                                        transform: translateZ(0) rotateY(0);
                                    }
                                    .image-ultimate-hover-65.left_to_right .iheu-info {
                                        -webkit-transform: translateZ(-1000px) rotateY(-90deg);
                                        -moz-transform: translateZ(-1000px) rotateY(-90deg);
                                        -ms-transform: translateZ(-1000px) rotateY(-90deg);
                                        -o-transform: translateZ(-1000px) rotateY(-90deg);
                                        transform: translateZ(-1000px) rotateY(-90deg);
                                    }
                                    .image-ultimate-hover-65.left_to_right:hover .iheu-img {
                                        -webkit-transform: translateZ(-1000px) rotateY(90deg);
                                        -moz-transform: translateZ(-1000px) rotateY(90deg);
                                        -ms-transform: translateZ(-1000px) rotateY(90deg);
                                        -o-transform: translateZ(-1000px) rotateY(90deg);
                                        transform: translateZ(-1000px) rotateY(90deg);
                                    }
                                    .image-ultimate-hover-65.left_to_right:hover .iheu-info {
                                        -webkit-transform: translateZ(0) rotateY(0);
                                        -moz-transform: translateZ(0) rotateY(0);
                                        -ms-transform: translateZ(0) rotateY(0);
                                        -o-transform: translateZ(0) rotateY(0);
                                        transform: translateZ(0) rotateY(0);
                                    }

                                    .image-ultimate-hover-65.right_to_left .iheu-img {
                                        -webkit-transform: translateZ(0) rotateY(0);
                                        -moz-transform: translateZ(0) rotateY(0);
                                        -ms-transform: translateZ(0) rotateY(0);
                                        -o-transform: translateZ(0) rotateY(0);
                                        transform: translateZ(0) rotateY(0);
                                    }
                                    .image-ultimate-hover-65.right_to_left .iheu-info {
                                        -webkit-transform: translateZ(-1000px) rotateY(90deg);
                                        -moz-transform: translateZ(-1000px) rotateY(90deg);
                                        -ms-transform: translateZ(-1000px) rotateY(90deg);
                                        -o-transform: translateZ(-1000px) rotateY(90deg);
                                        transform: translateZ(-1000px) rotateY(90deg);
                                    }
                                    .image-ultimate-hover-65.right_to_left:hover .iheu-img {
                                        -webkit-transform: translateZ(-1000px) rotateY(-90deg);
                                        -moz-transform: translateZ(-1000px) rotateY(-90deg);
                                        -ms-transform: translateZ(-1000px) rotateY(-90deg);
                                        -o-transform: translateZ(-1000px) rotateY(-90deg);
                                        transform: translateZ(-1000px) rotateY(-90deg);
                                    }
                                    .image-ultimate-hover-65.right_to_left:hover .iheu-info {
                                        -webkit-transform: translateZ(0) rotateY(0);
                                        -moz-transform: translateZ(0) rotateY(0);
                                        -ms-transform: translateZ(0) rotateY(0);
                                        -o-transform: translateZ(0) rotateY(0);
                                        transform: translateZ(0) rotateY(0);
                                    }

                                    .image-ultimate-hover-65.top_to_bottom .iheu-img {
                                        -webkit-transform: translateZ(0) rotateX(0);
                                        -moz-transform: translateZ(0) rotateX(0);
                                        -ms-transform: translateZ(0) rotateX(0);
                                        -o-transform: translateZ(0) rotateX(0);
                                        transform: translateZ(0) rotateX(0);
                                    }
                                    .image-ultimate-hover-65.top_to_bottom .iheu-info {
                                        -webkit-transform: translateZ(-1000px) rotateX(90deg);
                                        -moz-transform: translateZ(-1000px) rotateX(90deg);
                                        -ms-transform: translateZ(-1000px) rotateX(90deg);
                                        -o-transform: translateZ(-1000px) rotateX(90deg);
                                        transform: translateZ(-1000px) rotateX(90deg);
                                    }
                                    .image-ultimate-hover-65.top_to_bottom:hover .iheu-img {
                                        -webkit-transform: translateZ(-1000px) rotateX(-90deg);
                                        -moz-transform: translateZ(-1000px) rotateX(-90deg);
                                        -ms-transform: translateZ(-1000px) rotateX(-90deg);
                                        -o-transform: translateZ(-1000px) rotateX(-90deg);
                                        transform: translateZ(-1000px) rotateX(-90deg);
                                    }
                                    .image-ultimate-hover-65.top_to_bottom:hover .iheu-info {
                                        -webkit-transform: translateZ(0) rotateX(0);
                                        -moz-transform: translateZ(0) rotateX(0);
                                        -ms-transform: translateZ(0) rotateX(0);
                                        -o-transform: translateZ(0) rotateX(0);
                                        transform: translateZ(0) rotateX(0);
                                    }

                                    .image-ultimate-hover-65.bottom_to_top .iheu-img {
                                        -webkit-transform: translateZ(0) rotateX(0);
                                        -moz-transform: translateZ(0) rotateX(0);
                                        -ms-transform: translateZ(0) rotateX(0);
                                        -o-transform: translateZ(0) rotateX(0);
                                        transform: translateZ(0) rotateX(0);
                                    }
                                    .image-ultimate-hover-65.bottom_to_top .iheu-info {
                                        -webkit-transform: translateZ(-1000px) rotateX(-90deg);
                                        -moz-transform: translateZ(-1000px) rotateX(-90deg);
                                        -ms-transform: translateZ(-1000px) rotateX(-90deg);
                                        -o-transform: translateZ(-1000px) rotateX(-90deg);
                                        transform: translateZ(-1000px) rotateX(-90deg);
                                    }
                                    .image-ultimate-hover-65.bottom_to_top:hover .iheu-img {
                                        -webkit-transform: translateZ(-1000px) rotateX(90deg);
                                        -moz-transform: translateZ(-1000px) rotateX(90deg);
                                        -ms-transform: translateZ(-1000px) rotateX(90deg);
                                        -o-transform: translateZ(-1000px) rotateX(90deg);
                                        transform: translateZ(-1000px) rotateX(90deg);
                                    }
                                    .image-ultimate-hover-65.bottom_to_top:hover .iheu-info {
                                        -webkit-transform: translateZ(0) rotateX(0);
                                        -moz-transform: translateZ(0) rotateX(0);
                                        -ms-transform: translateZ(0) rotateX(0);
                                        -o-transform: translateZ(0) rotateX(0);
                                        transform: translateZ(0) rotateX(0);
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-65  image-ultimate-hover-animation-65" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-65">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-65 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-65  image-ultimate-hover-animation-65" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-65">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-65 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 11 <span>4 Layout</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-11">Select</button>
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
                                    .image-ultimate-hover-71{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-71 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-71 .iheu-info {
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

                                    .image-ultimate-hover-animation-71 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-71, 
                                    .image-ultimate-hover-71 .iheu-img, .image-ultimate-hover-71 a .iheu-img,
                                    .image-ultimate-hover-71 .iheu-img:before, .image-ultimate-hover-71 a .iheu-img:before,
                                    .image-ultimate-hover-71 .iheu-img img, .image-ultimate-hover-71 a .iheu-img img,
                                    .image-ultimate-hover-71 .iheu-info, .image-ultimate-hover-71 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-71{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-71 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-71:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-71 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }

                                    .image-ultimate-hover-71 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        opacity: 1;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-71 .iheu-info {
                                        background: rgba(94, 0, 194, 1);
                                        opacity: 0;
                                        visibility: hidden;
                                        pointer-events: none;
                                        -webkit-transform: scale(0.5);
                                        -moz-transform: scale(0.5);
                                        -ms-transform: scale(0.5);
                                        -o-transform: scale(0.5);
                                        transform: scale(0.5);
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-71 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-71 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-71 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float:left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-71 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-71 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-71:hover .iheu-img {
                                        opacity: 0;
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-71:hover .iheu-info {
                                        opacity: 1;
                                        visibility: visible;
                                        pointer-events: auto;
                                    }

                                    .image-ultimate-hover-71.left_to_right .iheu-img {
                                        -webkit-transform: translateX(0) rotate(0);
                                        -moz-transform: translateX(0) rotate(0);
                                        -ms-transform: translateX(0) rotate(0);
                                        -o-transform: translateX(0) rotate(0);
                                        transform: translateX(0) rotate(0);
                                    }
                                    .image-ultimate-hover-71.left_to_right .iheu-info {
                                        -webkit-transform: translateX(100%) rotate(180deg);
                                        -moz-transform: translateX(100%) rotate(180deg);
                                        -ms-transform: translateX(100%) rotate(180deg);
                                        -o-transform: translateX(100%) rotate(180deg);
                                        transform: translateX(100%) rotate(180deg);
                                    }
                                    .image-ultimate-hover-71.left_to_right:hover .iheu-img {
                                        -webkit-transform: translateX(100%) rotate(180deg);
                                        -moz-transform: translateX(100%) rotate(180deg);
                                        -ms-transform: translateX(100%) rotate(180deg);
                                        -o-transform: translateX(100%) rotate(180deg);
                                        transform: translateX(100%) rotate(180deg);
                                    }
                                    .image-ultimate-hover-71.left_to_right:hover .iheu-info {
                                        -webkit-transform: translateX(0) rotate(0);
                                        -moz-transform: translateX(0) rotate(0);
                                        -ms-transform: translateX(0) rotate(0);
                                        -o-transform: translateX(0) rotate(0);
                                        transform: translateX(0) rotate(0);
                                        -webkit-transition-delay: 0.4s;
                                        -moz-transition-delay: 0.4s;
                                        transition-delay: 0.4s;
                                    }

                                    .image-ultimate-hover-71.right_to_left .iheu-img {
                                        -webkit-transform: translateX(0) rotate(0);
                                        -moz-transform: translateX(0) rotate(0);
                                        -ms-transform: translateX(0) rotate(0);
                                        -o-transform: translateX(0) rotate(0);
                                        transform: translateX(0) rotate(0);
                                    }
                                    .image-ultimate-hover-71.right_to_left .iheu-info {
                                        -webkit-transform: translateX(-100%) rotate(-180deg);
                                        -moz-transform: translateX(-100%) rotate(-180deg);
                                        -ms-transform: translateX(-100%) rotate(-180deg);
                                        -o-transform: translateX(-100%) rotate(-180deg);
                                        transform: translateX(-100%) rotate(-180deg);
                                    }
                                    .image-ultimate-hover-71.right_to_left:hover .iheu-img {
                                        -webkit-transform: translateX(-100%) rotate(-180deg);
                                        -moz-transform: translateX(-100%) rotate(-180deg);
                                        -ms-transform: translateX(-100%) rotate(-180deg);
                                        -o-transform: translateX(-100%) rotate(-180deg);
                                        transform: translateX(-100%) rotate(-180deg);
                                    }
                                    .image-ultimate-hover-71.right_to_left:hover .iheu-info {
                                        -webkit-transform: translateX(0) rotate(0);
                                        -moz-transform: translateX(0) rotate(0);
                                        -ms-transform: translateX(0) rotate(0);
                                        -o-transform: translateX(0) rotate(0);
                                        transform: translateX(0) rotate(0);
                                        -webkit-transition-delay: 0.4s;
                                        -moz-transition-delay: 0.4s;
                                        transition-delay: 0.4s;
                                    }

                                    .image-ultimate-hover-71.top_to_bottom .iheu-img {
                                        -webkit-transform: translateY(0) rotate(0);
                                        -moz-transform: translateY(0) rotate(0);
                                        -ms-transform: translateY(0) rotate(0);
                                        -o-transform: translateY(0) rotate(0);
                                        transform: translateY(0) rotate(0);
                                    }
                                    .image-ultimate-hover-71.top_to_bottom .iheu-info {
                                        -webkit-transform: translateY(-100%) rotate(-180deg);
                                        -moz-transform: translateY(-100%) rotate(-180deg);
                                        -ms-transform: translateY(-100%) rotate(-180deg);
                                        -o-transform: translateY(-100%) rotate(-180deg);
                                        transform: translateY(-100%) rotate(-180deg);
                                    }
                                    .image-ultimate-hover-71.top_to_bottom:hover .iheu-img {
                                        -webkit-transform: translateY(-100%) rotate(-180deg);
                                        -moz-transform: translateY(-100%) rotate(-180deg);
                                        -ms-transform: translateY(-100%) rotate(-180deg);
                                        -o-transform: translateY(-100%) rotate(-180deg);
                                        transform: translateY(-100%) rotate(-180deg);
                                    }
                                    .image-ultimate-hover-71.top_to_bottom:hover .iheu-info {
                                        -webkit-transform: translateY(0) rotate(0);
                                        -moz-transform: translateY(0) rotate(0);
                                        -ms-transform: translateY(0) rotate(0);
                                        -o-transform: translateY(0) rotate(0);
                                        transform: translateY(0) rotate(0);
                                        -webkit-transition-delay: 0.4s;
                                        -moz-transition-delay: 0.4s;
                                        transition-delay: 0.4s;
                                    }

                                    .image-ultimate-hover-71.bottom_to_top .iheu-img {
                                        -webkit-transform: translateY(0) rotate(0);
                                        -moz-transform: translateY(0) rotate(0);
                                        -ms-transform: translateY(0) rotate(0);
                                        -o-transform: translateY(0) rotate(0);
                                        transform: translateY(0) rotate(0);
                                    }
                                    .image-ultimate-hover-71.bottom_to_top .iheu-info {
                                        -webkit-transform: translateY(100%) rotate(180deg);
                                        -moz-transform: translateY(100%) rotate(180deg);
                                        -ms-transform: translateY(100%) rotate(180deg);
                                        -o-transform: translateY(100%) rotate(180deg);
                                        transform: translateY(100%) rotate(180deg);
                                    }
                                    .image-ultimate-hover-71.bottom_to_top:hover .iheu-img {
                                        -webkit-transform: translateY(100%) rotate(180deg);
                                        -moz-transform: translateY(100%) rotate(180deg);
                                        -ms-transform: translateY(100%) rotate(180deg);
                                        -o-transform: translateY(100%) rotate(180deg);
                                        transform: translateY(100%) rotate(180deg);
                                    }
                                    .image-ultimate-hover-71.bottom_to_top:hover .iheu-info {
                                        -webkit-transform: translateY(0) rotate(0);
                                        -moz-transform: translateY(0) rotate(0);
                                        -ms-transform: translateY(0) rotate(0);
                                        -o-transform: translateY(0) rotate(0);
                                        transform: translateY(0) rotate(0);
                                        -webkit-transition-delay: 0.4s;
                                        -moz-transition-delay: 0.4s;
                                        transition-delay: 0.4s;
                                    }


                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-71  image-ultimate-hover-animation-71" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-71">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-71 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-71  image-ultimate-hover-animation-71" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-71">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-71 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 12 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-12">Select</button>
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
                                    .image-ultimate-hover-77{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-77 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-77 .iheu-info {
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

                                    .image-ultimate-hover-animation-77 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-77, 
                                    .image-ultimate-hover-77 .iheu-img, .image-ultimate-hover-77 a .iheu-img,
                                    .image-ultimate-hover-77 .iheu-img:before, .image-ultimate-hover-77 a .iheu-img:before,
                                    .image-ultimate-hover-77 .iheu-img img, .image-ultimate-hover-77 a .iheu-img img,
                                    .image-ultimate-hover-77 .iheu-info, .image-ultimate-hover-77 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-77{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-77 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-77:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-77 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }

                                    .image-ultimate-hover-77 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-77 .iheu-info {
                                        background: rgba(103, 0, 194, 0.64);
                                        opacity: 0;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-77 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-77 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-77 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width:100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-77 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-77 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-77:hover .iheu-info {
                                        opacity: 1;
                                    }

                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-77  image-ultimate-hover-animation-77" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-77">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-77">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-flip-x"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-77  image-ultimate-hover-animation-77" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-77">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-77 squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-flip-x"> Fully Customizable </h3>

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
                            Style 13 <span>Single Effect</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-13">Select</button>
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
                                    .image-ultimate-hover-83{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-perspective: 900px;
                                        -moz-perspective: 900px;
                                        perspective: 900px;
                                    }
                                    .image-ultimate-hover-83 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-83 .iheu-info {
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
                                    .image-ultimate-hover-animation-83 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-83, 
                                    .image-ultimate-hover-83 .iheu-img, .image-ultimate-hover-83 a .iheu-img,
                                    .image-ultimate-hover-83 .iheu-img:before, .image-ultimate-hover-83 a .iheu-img:before,
                                    .image-ultimate-hover-83 .iheu-img img, .image-ultimate-hover-83 a .iheu-img img,
                                    .image-ultimate-hover-83 .iheu-info, .image-ultimate-hover-83 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-83{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-83 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-83:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-83 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-83 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        visibility: visible;
                                        opacity: 1;
                                        -webkit-transition: all 0.4s ease-out;
                                        -moz-transition: all 0.4s ease-out;
                                        transition: all 0.4s ease-out;
                                    }
                                    .image-ultimate-hover-83 .iheu-info {
                                        background: rgba(155, 0, 194, 1);
                                        opacity: 0;
                                        visibility: hidden;
                                        -webkit-transition: all 0.35s ease-in-out 0.3s;
                                        -moz-transition: all 0.35s ease-in-out 0.3s;
                                        transition: all 0.35s ease-in-out 0.3s;
                                    }
                                    .image-ultimate-hover-83 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-83 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-83 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-83 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-83 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                    .image-ultimate-hover-83:hover .iheu-img {
                                        opacity: 0;
                                        visibility: hidden;
                                    }
                                    .image-ultimate-hover-83:hover .iheu-info {
                                        visibility: visible;
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-83.left_to_right .iheu-img {
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
                                    .image-ultimate-hover-83.left_to_right .iheu-info {
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
                                    .image-ultimate-hover-83.left_to_right:hover .iheu-img {
                                        -webkit-transform: rotateY(-90deg);
                                        -moz-transform: rotateY(-90deg);
                                        -ms-transform: rotateY(-90deg);
                                        -o-transform: rotateY(-90deg);
                                        transform: rotateY(-90deg);
                                    }
                                    .image-ultimate-hover-83.left_to_right:hover .iheu-info {
                                        -webkit-transform: rotateY(0);
                                        -moz-transform: rotateY(0);
                                        -ms-transform: rotateY(0);
                                        -o-transform: rotateY(0);
                                        transform: rotateY(0);
                                    }
                                    .image-ultimate-hover-83.right_to_left .iheu-img {
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
                                    .image-ultimate-hover-83.right_to_left .iheu-info {
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
                                    .image-ultimate-hover-83.right_to_left:hover .iheu-img {
                                        -webkit-transform: rotateY(90deg);
                                        -moz-transform: rotateY(90deg);
                                        -ms-transform: rotateY(90deg);
                                        -o-transform: rotateY(90deg);
                                        transform: rotateY(90deg);
                                    }
                                    .image-ultimate-hover-83.right_to_left:hover .iheu-info {
                                        -webkit-transform: rotateY(0);
                                        -moz-transform: rotateY(0);
                                        -ms-transform: rotateY(0);
                                        -o-transform: rotateY(0);
                                        transform: rotateY(0);
                                    }
                                    .image-ultimate-hover-83.top_to_bottom .iheu-img {
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
                                    .image-ultimate-hover-83.top_to_bottom .iheu-info {
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
                                    .image-ultimate-hover-83.top_to_bottom:hover .iheu-img {
                                        -webkit-transform: rotateX(90deg);
                                        -moz-transform: rotateX(90deg);
                                        -ms-transform: rotateX(90deg);
                                        -o-transform: rotateX(90deg);
                                        transform: rotateX(90deg);
                                    }
                                    .image-ultimate-hover-83.top_to_bottom:hover .iheu-info {
                                        -webkit-transform: rotateX(0);
                                        -moz-transform: rotateX(0);
                                        -ms-transform: rotateX(0);
                                        -o-transform: rotateX(0);
                                        transform: rotateX(0);
                                    }

                                    .image-ultimate-hover-83.bottom_to_top .iheu-img {
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
                                    .image-ultimate-hover-83.bottom_to_top .iheu-info {
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
                                    .image-ultimate-hover-83.bottom_to_top:hover .iheu-img {
                                        -webkit-transform: rotateX(-90deg);
                                        -moz-transform: rotateX(-90deg);
                                        -ms-transform: rotateX(-90deg);
                                        -o-transform: rotateX(-90deg);
                                        transform: rotateX(-90deg);
                                    }
                                    .image-ultimate-hover-83.bottom_to_top:hover .iheu-info {
                                        -webkit-transform: rotateX(0);
                                        -moz-transform: rotateX(0);
                                        -ms-transform: rotateX(0);
                                        -o-transform: rotateX(0);
                                        transform: rotateX(0);
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-83 image-ultimate-hover-animation-83" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-83">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-83 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-83  image-ultimate-hover-animation-83" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-83">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-83 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 14 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-14">Select</button>
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
                                    .image-ultimate-hover-89{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-89 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-89 .iheu-info {
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

                                    .image-ultimate-hover-animation-89 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-89, 
                                    .image-ultimate-hover-89 .iheu-img, .image-ultimate-hover-89 a .iheu-img,
                                    .image-ultimate-hover-89 .iheu-img:before, .image-ultimate-hover-89 a .iheu-img:before,
                                    .image-ultimate-hover-89 .iheu-img img, .image-ultimate-hover-89 a .iheu-img img,
                                    .image-ultimate-hover-89 .iheu-info, .image-ultimate-hover-89 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-89{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-89 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-89:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-89 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-89 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        opacity: 1;
                                        visibility: visible;
                                        -webkit-transform: scale(1) rotate(0);
                                        -moz-transform: scale(1) rotate(0);
                                        -ms-transform: scale(1) rotate(0);
                                        -o-transform: scale(1) rotate(0);
                                        transform: scale(1) rotate(0);
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-89 .iheu-info {
                                        background: rgba(94, 0, 194, 1);
                                        opacity: 0;
                                        visibility: hidden;
                                        -webkit-transform: scale(0.5) rotate(-720deg);
                                        -moz-transform: scale(0.5) rotate(-720deg);
                                        -ms-transform: scale(0.5) rotate(-720deg);
                                        -o-transform: scale(0.5) rotate(-720deg);
                                        transform: scale(0.5) rotate(-720deg);
                                        -webkit-transition: all 0.35s ease-in-out 0.3s;
                                        -moz-transition: all 0.35s ease-in-out 0.3s;
                                        transition: all 0.35s ease-in-out 0.3s;
                                    }
                                    .image-ultimate-hover-89 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-89 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-89 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-89 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-89 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-89:hover .iheu-img {
                                        opacity: 0;
                                        visibility: hidden;
                                        -webkit-transform: scale(0.5) rotate(720deg);
                                        -moz-transform: scale(0.5) rotate(720deg);
                                        -ms-transform: scale(0.5) rotate(720deg);
                                        -o-transform: scale(0.5) rotate(720deg);
                                        transform: scale(0.5) rotate(720deg);
                                    }
                                    .image-ultimate-hover-89:hover .iheu-info {
                                        opacity: 1;
                                        visibility: visible;
                                        -webkit-transform: scale(1) rotate(0);
                                        -moz-transform: scale(1) rotate(0);
                                        -ms-transform: scale(1) rotate(0);
                                        -o-transform: scale(1) rotate(0);
                                        transform: scale(1) rotate(0);
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-89  image-ultimate-hover-animation-89" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-89">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-89">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-89  image-ultimate-hover-animation-89" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-89">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-89 squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 15 <span>Single Effect</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="general-15">Select</button>
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
                                    .image-ultimate-hover-95{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-95 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-95 .iheu-info {
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
                                    .image-ultimate-hover-animation-95 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-95, 
                                    .image-ultimate-hover-95 .iheu-img, .image-ultimate-hover-95 a .iheu-img,
                                    .image-ultimate-hover-95 .iheu-img:before, .image-ultimate-hover-95 a .iheu-img:before,
                                    .image-ultimate-hover-95 .iheu-img img, .image-ultimate-hover-95 a .iheu-img img,
                                    .image-ultimate-hover-95 .iheu-info, .image-ultimate-hover-95 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-95{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-95 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-95:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-95 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-95 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        z-index: 11;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-95:hover .iheu-img{
                                        z-index: 20;
                                    }
                                    .image-ultimate-hover-95 .iheu-info {
                                        background: rgba(103, 0, 194, 1);
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-95 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-95 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-95 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width:100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-95 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-95 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-95:hover .iheu-img{
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-95.left_to_right .iheu-img {
                                        -webkit-transform-origin: 95% 50%;
                                        -moz-transform-origin: 95% 50%;
                                        -ms-transform-origin: 95% 50%;
                                        -o-transform-origin: 95% 50%;
                                        transform-origin: 95% 50%;
                                    }
                                    .image-ultimate-hover-95.left_to_right .iheu-img:after {
                                        content: '';
                                        width: 8px;
                                        height: 8px;
                                        position: absolute;
                                        top: calc(50% - 8px);
                                        left: 95%;
                                        margin: -4px 0 0 -4px;
                                    }
                                    .image-ultimate-hover-95.left_to_right:hover .iheu-img {
                                        -webkit-transform: rotate(-180deg);
                                        -moz-transform: rotate(-180deg);
                                        -ms-transform: rotate(-180deg);
                                        -o-transform: rotate(-180deg);
                                        transform: rotate(-180deg);
                                    }
                                    .image-ultimate-hover-95.right_to_left .iheu-img {
                                        -webkit-transform-origin: 5% 50%;
                                        -moz-transform-origin: 5% 50%;
                                        -ms-transform-origin: 5% 50%;
                                        -o-transform-origin: 5% 50%;
                                        transform-origin: 5% 50%;
                                    }
                                    .image-ultimate-hover-95.right_to_left .iheu-img:after {
                                        content: '';
                                        width: 8px;
                                        height: 8px;
                                        position: absolute;
                                        top: calc(50% - 8px);
                                        left: 5%;
                                        margin: -4px 0 0 -4px;
                                    }
                                    .image-ultimate-hover-95.right_to_left:hover .iheu-img {
                                        -webkit-transform: rotate(180deg);
                                        -moz-transform: rotate(180deg);
                                        -ms-transform: rotate(180deg);
                                        -o-transform: rotate(180deg);
                                        transform: rotate(180deg);
                                    }

                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-95  image-ultimate-hover-animation-95" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-95">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-95 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-95  image-ultimate-hover-animation-95" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-95">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-95 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 16 <span>2 Effects</span>
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
                                    .image-ultimate-hover-101{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-101 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-101 .iheu-info {
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

                                    .image-ultimate-hover-animation-101 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-101, 
                                    .image-ultimate-hover-101 .iheu-img, .image-ultimate-hover-101 a .iheu-img,
                                    .image-ultimate-hover-101 .iheu-img:before, .image-ultimate-hover-101 a .iheu-img:before,
                                    .image-ultimate-hover-101 .iheu-img img, .image-ultimate-hover-101 a .iheu-img img,
                                    .image-ultimate-hover-101 .iheu-info, .image-ultimate-hover-101 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-101{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-101 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-101:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-101 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }

                                    .image-ultimate-hover-101 .iheu-img {
                                        width: 100%;
                                        float: left;

                                    }
                                    .image-ultimate-hover-101 .iheu-info {
                                        background: rgba(149, 0, 194, 0.71);
                                        opacity: 0;
                                        -webkit-transform: scale(0);
                                        -moz-transform: scale(0);
                                        -ms-transform: scale(0);
                                        -o-transform: scale(0);
                                        transform: scale(0);
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-101 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-101 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-101 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-101 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-101 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-101:hover .iheu-info {
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-101:hover .iheu-info {
                                        opacity: 1;
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-101  image-ultimate-hover-animation-101" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-101">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-101">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-101  image-ultimate-hover-animation-101" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-101">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-101 squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 17 <span>Single Effects</span>
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
                                    .image-ultimate-hover-107{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-perspective: 900px;
                                        -moz-perspective: 900px;
                                        perspective: 900px;
                                    }
                                    .image-ultimate-hover-107 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-107 .iheu-info {
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

                                    .image-ultimate-hover-animation-107 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-107, 
                                    .image-ultimate-hover-107 .iheu-img, .image-ultimate-hover-107 a .iheu-img,
                                    .image-ultimate-hover-107 .iheu-img:before, .image-ultimate-hover-107 a .iheu-img:before,
                                    .image-ultimate-hover-107 .iheu-img img, .image-ultimate-hover-107 a .iheu-img img,
                                    .image-ultimate-hover-107 .iheu-info, .image-ultimate-hover-107 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-107{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-107 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-107:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-107 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }

                                    .image-ultimate-hover-107 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        z-index: 11;
                                        -webkit-transition: all 0.5s ease-in-out;
                                        -moz-transition: all 0.5s ease-in-out;
                                        transition: all 0.5s ease-in-out;
                                    }
                                    .image-ultimate-hover-107 .iheu-info-2{
                                        position: absolute;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transform-style: preserve-3d;
                                        -moz-transform-style: preserve-3d;
                                        -ms-transform-style: preserve-3d;
                                        -o-transform-style: preserve-3d;
                                        transform-style: preserve-3d;
                                    }
                                    .image-ultimate-hover-107 .iheu-info {
                                        background: rgba(110, 0, 194, 1);
                                    }
                                    .image-ultimate-hover-107 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-107 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-107 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-107 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-107 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                    .image-ultimate-hover-107:hover .iheu-img{
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-107.bottom_to_top .iheu-img {
                                        -webkit-transform-origin: 50% 0;
                                        -moz-transform-origin: 50% 0;
                                        -ms-transform-origin: 50% 0;
                                        -o-transform-origin: 50% 0;
                                        transform-origin: 50% 0;
                                    }
                                    .image-ultimate-hover-107.bottom_to_top a:hover .iheu-img {
                                        -webkit-transform: rotate3d(1, 0, 0, 180deg);
                                        -moz-transform: rotate3d(1, 0, 0, 180deg);
                                        -ms-transform: rotate3d(1, 0, 0, 180deg);
                                        -o-transform: rotate3d(1, 0, 0, 180deg);
                                        transform: rotate3d(1, 0, 0, 180deg);
                                    }

                                    .image-ultimate-hover-107.top_to_bottom .iheu-img {
                                        -webkit-transform-origin: 50% 100%;
                                        -moz-transform-origin: 50% 100%;
                                        -ms-transform-origin: 50% 100%;
                                        -o-transform-origin: 50% 100%;
                                        transform-origin: 50% 100%;
                                    }
                                    .image-ultimate-hover-107.top_to_bottom:hover .iheu-img {
                                        -webkit-transform: rotate3d(1, 0, 0, -180deg);
                                        -moz-transform: rotate3d(1, 0, 0, -180deg);
                                        -ms-transform: rotate3d(1, 0, 0, -180deg);
                                        -o-transform: rotate3d(1, 0, 0, -180deg);
                                        transform: rotate3d(1, 0, 0, -180deg);
                                    }

                                    .image-ultimate-hover-107.left_to_right .iheu-img {
                                        -webkit-transform-origin: 100% 50%;
                                        -moz-transform-origin: 100% 50%;
                                        -ms-transform-origin: 100% 50%;
                                        -o-transform-origin: 100% 50%;
                                        transform-origin: 100% 50%;
                                    }
                                    .image-ultimate-hover-107.left_to_right:hover .iheu-img {
                                        -webkit-transform: rotate3d(0, 1, 0, 180deg);
                                        -moz-transform: rotate3d(0, 1, 0, 180deg);
                                        -ms-transform: rotate3d(0, 1, 0, 180deg);
                                        -o-transform: rotate3d(0, 1, 0, 180deg);
                                        transform: rotate3d(0, 1, 0, 180deg);
                                    }

                                    .image-ultimate-hover-107.right_to_left .iheu-img {
                                        -webkit-transform-origin: 0% 50%;
                                        -moz-transform-origin: 0% 50%;
                                        -ms-transform-origin: 0% 50%;
                                        -o-transform-origin: 0% 50%;
                                        transform-origin: 0% 50%;
                                    }
                                    .image-ultimate-hover-107.right_to_left:hover .iheu-img {
                                        -webkit-transform: rotate3d(0, 1, 0, -180deg);
                                        -moz-transform: rotate3d(0, 1, 0, -180deg);
                                        -ms-transform: rotate3d(0, 1, 0, -180deg);
                                        -o-transform: rotate3d(0, 1, 0, -180deg);
                                        transform: rotate3d(0, 1, 0, -180deg);
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-107  image-ultimate-hover-animation-107" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-107">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-107 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info-2"> <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
                                                        </div> </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-107  image-ultimate-hover-animation-107" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-107">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-107 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info-2"> <div class="iheu-info">
                                                            <div class="iheu-data">
                                                                <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                            </div>
                                                        </div> </div>
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
                            Style 18 <span>4 Effects</span>
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
                            .image-ultimate-hover-115{
                                position: relative;
                                width: 100%;
                                height: 100%;
                                -webkit-transition: all 0.35s ease-in-out;
                                -moz-transition: all 0.35s ease-in-out;
                                transition: all 0.35s ease-in-out;
                            }
                            .image-ultimate-hover-115 .iheu-img {
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                right: 0;
                                width: 100%;
                                height: 100%;
                            }

                            .image-ultimate-hover-115 .iheu-info {
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

                            .image-ultimate-hover-animation-115 {
                                animation-duration: 1s;
                            }
                            .image-ultimate-hover-115, 
                            .image-ultimate-hover-115 .iheu-img, .image-ultimate-hover-115 a .iheu-img,
                            .image-ultimate-hover-115 .iheu-img:before, .image-ultimate-hover-115 a .iheu-img:before,
                            .image-ultimate-hover-115 .iheu-img img, .image-ultimate-hover-115 a .iheu-img img,
                            .image-ultimate-hover-115 .iheu-info, .image-ultimate-hover-115 a .iheu-info{
                                border-radius: 50%;
                                -moz-border-radius:  50%;
                                -webkit-border-radius:  50%;
                                transition: 0.5s;
                            }
                            .image-ultimate-hover-padding-115{
                                padding: 20px;
                            }
                            .image-ultimate-map-115 {
                                max-width: 250px;
                                width: 100%;
                                margin: 0 auto;
                                position: relative;
                            }
                            .image-ultimate-map-115:after {
                                padding-bottom: 100%;
                                content: "";
                                display: block;
                            }

                            .image-ultimate-hover-115 .iheu-img:before {
                                position: absolute;
                                display: block;
                                content: '';
                                width: 100%;
                                height: 100%;
                                box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                            }
                            .image-ultimate-hover-115{
                                -webkit-perspective: 900px;
                                -moz-perspective: 900px;
                                perspective: 900px;
                            }
                            .image-ultimate-hover-115 .iheu-img {
                                width: 100%;
                                float: left;
                                -webkit-transition: all 0.35s linear;
                                -moz-transition: all 0.35s linear;
                                transition: all 0.35s linear;
                                -webkit-transform-origin: 50% 0%;
                                -moz-transform-origin: 50% 0%;
                                -ms-transform-origin: 50% 0%;
                                -o-transform-origin: 50% 0%;
                                transform-origin: 50% 0%;
                            }
                            .image-ultimate-hover-115 .iheu-info-2{
                                -webkit-transform-style: preserve-3d;
                                -moz-transform-style: preserve-3d;
                                -ms-transform-style: preserve-3d;
                                -o-transform-style: preserve-3d;
                                transform-style: preserve-3d;
                                position: absolute;
                                width:100%;
                                top:0 ;
                                bottom:0;
                            }
                            .image-ultimate-hover-115 .iheu-info-2 .iheu-info {
                                background: rgba(224, 0, 161, 1);
                                opacity: 1;
                                visibility: hidden;
                                -webkit-transition: all 0.35s linear;
                                -moz-transition: all 0.35s linear;
                                transition: all 0.35s linear;
                                -webkit-transform-origin: 50% 0%;
                                -moz-transform-origin: 50% 0%;
                                -ms-transform-origin: 50% 0%;
                                -o-transform-origin: 50% 0%;
                                transform-origin: 50% 0%;
                                -webkit-backface-visibility: hidden;
                                backface-visibility: hidden;
                            }
                            .image-ultimate-hover-115 .iheu-info .iheu-data{
                                display: table-cell;
                                vertical-align: middle;text-align: center;                                        padding: 15px; 
                            }
                            .image-ultimate-hover-115 .iheu-info h3 {
                                font-size: 20px;
                                font-weight: 600;
                                padding-bottom: 0px;
                                margin-bottom: 10px;
                                margin-top: 0;
                                line-height: 120%;
                                font-family: "Open Sans";
                                display: inline-block;
                                color: #ffffff;
                            }
                            .image-ultimate-hover-115 .iheu-info p {
                                font-size: 16px;
                                font-weight: 300;
                                margin-bottom: 20px;
                                margin-top: 0;
                                line-height: 120%;
                                width:100%;
                                float: left;
                                font-family: "Open Sans";
                                color: #ffffff;
                            }
                            .image-ultimate-hover-115 a.iheu-button{
                                padding: 10px 10px;
                                -webkit-border-radius: 5px;
                                -moz-border-radius: 5px;
                                border-radius: 5px;
                                font-weight: 300;
                                font-size: 14px;
                                font-family: "Open Sans";
                                background: rgba(126, 0, 158, 1);
                                color: #ffffff;
                                text-decoration: none;
                                display:table;
                                margin: 0 auto;                                                                            }
                            .image-ultimate-hover-115 a.iheu-button:hover{
                                background: rgba(255, 255, 255, 1);
                                color: #7e009e;
                            }

                            .image-ultimate-hover-115:hover .iheu-img {
                                opacity: 0;
                            }
                            .image-ultimate-hover-115:hover .iheu-info-2 .iheu-info {
                                opacity: 1;
                                visibility: visible;
                            }
                            .image-ultimate-hover-115.top_to_bottom .iheu-info-2 .iheu-info {
                                -webkit-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                                -moz-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                                -ms-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                                -o-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                                transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                            }
                            .image-ultimate-hover-115.top_to_bottom:hover .iheu-img {
                                -webkit-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                                -moz-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                                -ms-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                                -o-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                                transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                            }
                            .image-ultimate-hover-115.top_to_bottom:hover .iheu-info-2 .iheu-info {
                                -webkit-transform: rotate3d(1, 0, 0, 0deg);
                                -moz-transform: rotate3d(1, 0, 0, 0deg);
                                -ms-transform: rotate3d(1, 0, 0, 0deg);
                                -o-transform: rotate3d(1, 0, 0, 0deg);
                                transform: rotate3d(1, 0, 0, 0deg);
                            }

                            .image-ultimate-hover-115.bottom_to_top .iheu-info-2 .iheu-info {
                                -webkit-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                                -moz-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                                -ms-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                                -o-transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                                transform: translate3d(0, 280px, 0) rotate3d(1, 0, 0, -90deg);
                            }
                            .image-ultimate-hover-115.bottom_to_top:hover .iheu-img {
                                -webkit-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                                -moz-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                                -ms-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                                -o-transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                                transform: translate3d(0, 0, -220px) rotate3d(1, 0, 0, 90deg);
                            }
                            .image-ultimate-hover-115.bottom_to_top:hover .iheu-info-2 .iheu-info {
                                -webkit-transform: rotate3d(1, 0, 0, 0deg);
                                -moz-transform: rotate3d(1, 0, 0, 0deg);
                                -ms-transform: rotate3d(1, 0, 0, 0deg);
                                -o-transform: rotate3d(1, 0, 0, 0deg);
                                transform: rotate3d(1, 0, 0, 0deg);
                            }
                        </style>

                        <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-115  image-ultimate-hover-animation-115" data-av-animation="slideInUp">
                            <div class="image-ultimate-map-115">
                                <div class="image-ultimate-map-absulate">
                                    <div class="image-ultimate-hover image-ultimate-hover-115 left_to_right">
                                        <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                            <div class="iheu-img">
                                                <img src="<?php echo  $iheuimage1; ?>">
                                            </div>
                                            <div class="iheu-info-2">  <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                    </div>
                                                </div>   </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-115  image-ultimate-hover-animation-115" data-av-animation="slideInUp">
                            <div class="image-ultimate-map-115">
                                <div class="image-ultimate-map-absulate">
                                    <div class="image-ultimate-hover image-ultimate-hover-115 bottom_to_top squar">
                                        <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                            <div class="iheu-img">
                                                <img src="<?php echo  $iheuimage2; ?>">
                                            </div>
                                            <div class="iheu-info-2">  <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                    </div>
                                                </div>   </div>
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
                            Style 19 <span>4 Effects</span>
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
                            .image-ultimate-hover-121{
                                position: relative;
                                width: 100%;
                                height: 100%;
                                -webkit-transition: all 0.35s ease-in-out;
                                -moz-transition: all 0.35s ease-in-out;
                                transition: all 0.35s ease-in-out;
                            }
                            .image-ultimate-hover-121 .iheu-img {
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                right: 0;
                                width: 100%;
                                height: 100%;
                            }
                            .image-ultimate-hover-121 .iheu-info {
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
                            .image-ultimate-hover-animation-121 {
                                animation-duration: 1s;
                            }
                            .image-ultimate-hover-121, 
                            .image-ultimate-hover-121 .iheu-img, .image-ultimate-hover-121 a .iheu-img,
                            .image-ultimate-hover-121 .iheu-img:before, .image-ultimate-hover-121 a .iheu-img:before,
                            .image-ultimate-hover-121 .iheu-img img, .image-ultimate-hover-121 a .iheu-img img,
                            .image-ultimate-hover-121 .iheu-info, .image-ultimate-hover-121 a .iheu-info{
                                border-radius: 50%;
                                -moz-border-radius:  50%;
                                -webkit-border-radius:  50%;
                                transition: 0.5s;
                            }
                            .image-ultimate-hover-padding-121{
                                padding: 20px;
                            }
                            .image-ultimate-map-121 {
                                max-width: 250px;
                                width: 100%;
                                margin: 0 auto;
                                position: relative;
                            }
                            .image-ultimate-map-121:after {
                                padding-bottom: 100%;
                                content: "";
                                display: block;
                            }
                            .image-ultimate-hover-121 .iheu-img:before {
                                position: absolute;
                                display: block;
                                content: '';
                                width: 100%;
                                height: 100%;
                                box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);
                            }
                            .image-ultimate-hover-121 .iheu-img {
                                width: 100%;
                                float: left;
                                -webkit-transition: all 0.35s ease-in-out;
                                -moz-transition: all 0.35s ease-in-out;
                                transition: all 0.35s ease-in-out;
                            }
                            .image-ultimate-hover-121 .iheu-info {
                                background: rgba(45, 194, 0, 1);
                                opacity: 0;
                                -webkit-backface-visibility: hidden;
                                -moz-backface-visibility: hidden;
                                backface-visibility: hidden;
                                -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
                                -moz-transition: -moz-transform 0.3s, opacity 0.3s;
                                transition: transform 0.3s, opacity 0.3s;
                            }
                            .image-ultimate-hover-121 .iheu-info .iheu-data{
                                display: table-cell;
                                vertical-align: middle;text-align: center;                                        padding: 15px; 
                            }
                            .image-ultimate-hover-121 .iheu-info h3 {
                                font-size: 20px;
                                font-weight: 600;
                                padding-bottom: 0px;
                                margin-bottom: 10px;
                                margin-top: 0;
                                line-height: 120%;
                                font-family: "Open Sans";
                                display: inline-block;
                                color: #ffffff;
                            }
                            .image-ultimate-hover-121 .iheu-info p {
                                font-size: 16px;
                                font-weight: 300;
                                margin-bottom: 20px;
                                margin-top: 0;
                                line-height: 120%;
                                width:100%;
                                float:left;
                                font-family: "Open Sans";
                                color: #ffffff;
                            }
                            .image-ultimate-hover-121 a.iheu-button{
                                padding: 10px 10px;
                                -webkit-border-radius: 5px;
                                -moz-border-radius: 5px;
                                border-radius: 5px;
                                font-weight: 300;
                                font-size: 14px;
                                font-family: "Open Sans";
                                background: rgba(126, 0, 158, 1);
                                color: #ffffff;
                                text-decoration: none;
                                display:table;
                                margin: 0 auto;                                                                            }
                            .image-ultimate-hover-121 a.iheu-button:hover{
                                background: rgba(255, 255, 255, 1);
                                color: #7e009e;
                            }

                            .image-ultimate-hover-121.left_to_right:hover .iheu-info {
                                opacity: 1;
                                -webkit-transform: translate(15px, 15px);
                                -moz-transform: translate(15px, 15px);
                                -ms-transform: translate(15px, 15px);
                                transform: translate(15px, 15px);
                            }
                            .image-ultimate-hover-121.right_to_left:hover .iheu-info {
                                opacity: 1;
                                -webkit-transform: translate(-15px, -15px);
                                -moz-transform: translate(-15px, -15px);
                                -ms-transform: translate(-15px, -15px);
                                transform: translate(-15px, -15px);
                            }
                            .image-ultimate-hover-121.top_to_bottom:hover .iheu-info {
                                opacity: 1;
                                -webkit-transform: translate(-15px, 15px);
                                -moz-transform: translate(-15px, 15px);
                                -ms-transform: translate(-15px, 15px);
                                transform: translate(-15px, 15px);
                            }
                            .image-ultimate-hover-121.bottom_to_top:hover .iheu-info {
                                opacity: 1;
                                -webkit-transform: translate(15px, -15px);
                                -moz-transform: translate(15px, -15px);
                                -ms-transform: translate(15px, -15px);
                                transform: translate(15px, -15px);
                            }
                        </style>
                        <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-121  image-ultimate-hover-animation-121" data-av-animation="slideInUp">
                            <div class="image-ultimate-map-121">
                                <div class="image-ultimate-map-absulate">
                                    <div class="image-ultimate-hover image-ultimate-hover-121 left_to_right">
                                        <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                            <div class="iheu-img">
                                                <img src="<?php echo  $iheuimage3; ?>">
                                            </div>
                                            <div class="iheu-info">
                                                <div class="iheu-data">
                                                    <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-121  image-ultimate-hover-animation-121" data-av-animation="slideInUp">
                            <div class="image-ultimate-map-121">
                                <div class="image-ultimate-map-absulate">
                                    <div class="image-ultimate-hover image-ultimate-hover-121 right_to_left squar">
                                        <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                            <div class="iheu-img">
                                                <img src="<?php echo  $iheuimage4; ?>">
                                            </div>
                                            <div class="iheu-info">
                                                <div class="iheu-data">
                                                    <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 20 <span>4 Effects</span>
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
                            .image-ultimate-hover-126{
                                position: relative;
                                width: 100%;
                                height: 100%;
                                -webkit-transition: all 0.35s ease-in-out;
                                -moz-transition: all 0.35s ease-in-out;
                                transition: all 0.35s ease-in-out;
                            }
                            .image-ultimate-hover-126 .iheu-img {
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                right: 0;
                                width: 100%;
                                height: 100%;
                            }

                            .image-ultimate-hover-126 .iheu-info {
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

                            .image-ultimate-hover-animation-126 {
                                animation-duration: 1s;
                            }
                            .image-ultimate-hover-126, 
                            .image-ultimate-hover-126 .iheu-img, .image-ultimate-hover-126 a .iheu-img,
                            .image-ultimate-hover-126 .iheu-img:before, .image-ultimate-hover-126 a .iheu-img:before,
                            .image-ultimate-hover-126 .iheu-img img, .image-ultimate-hover-126 a .iheu-img img,
                            .image-ultimate-hover-126 .iheu-info, .image-ultimate-hover-126 a .iheu-info{
                                border-radius: 50%;
                                -moz-border-radius:  50%;
                                -webkit-border-radius:  50%;
                                transition: 0.5s;
                            }
                            .image-ultimate-hover-padding-126{
                                padding: 20px;
                            }
                            .image-ultimate-map-126 {
                                max-width: 250px;
                                width: 100%;
                                margin: 0 auto;
                                position: relative;
                            }
                            .image-ultimate-map-126:after {
                                padding-bottom: 100%;
                                content: "";
                                display: block;
                            }

                            .image-ultimate-hover-126 .iheu-img:before {
                                position: absolute;
                                display: block;
                                content: '';
                                width: 100%;
                                height: 100%;
                                box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                            }

                            .image-ultimate-hover-126 .iheu-img {
                                width: 100%;
                                float: left;
                                opacity: 1;
                                -webkit-transition: all 0.5s ease-in-out;
                                -moz-transition: all 0.5s ease-in-out;
                                transition: all 0.5s ease-in-out;
                                -webkit-transform: scale(1) translate(0%, 0%);
                                -moz-transform:scale(1) translate(0%, 0%);
                                -ms-transform:scale(1) translate(0%, 0%);
                                -o-transform: scale(1) translate(0%, 0%);
                                transform: scale(1) translate(0%, 0%);
                            }

                            .image-ultimate-hover-126.left_to_right:hover .iheu-img{
                                -webkit-transform: scale(0.2) translate(-200%, 0%);
                                -moz-transform:scale(0.2) translate(-200%, 0%);
                                -ms-transform:scale(0.2) translate(-200%, 0%);
                                -o-transform: scale(0.2) translate(-200%, 0%);
                                transform: scale(0.2) translate(-200%, 0%);
                                opacity: 0;
                                pointer-events: none;
                            }
                            .image-ultimate-hover-126.right_to_left:hover .iheu-img{
                                -webkit-transform: scale(0.2) translate(300%, 0%);
                                -moz-transform:scale(0.2) translate(300%, 0%);
                                -ms-transform:scale(0.2) translate(300%, 0%);
                                -o-transform: scale(0.2) translate(300%, 0%);
                                transform: scale(0.2) translate(300%, 0%);
                                opacity: 0;
                                pointer-events: none;
                            }
                            .image-ultimate-hover-126.bottom_to_top:hover .iheu-img{
                                -webkit-transform: scale(0.2) translate(0%, -200%);
                                -moz-transform:scale(0.2) translate(0%, -200%);
                                -ms-transform:scale(0.2) translate(0%, -200%);
                                -o-transform: scale(0.2) translate(0%, -200%);
                                transform: scale(0.2) translate(0%, -200%);
                                opacity: 0;
                                pointer-events: none;
                            }
                            .image-ultimate-hover-126.top_to_bottom:hover .iheu-img{
                                -webkit-transform: scale(0.2) translate(0%, 300%);
                                -moz-transform:scale(0.2) translate(0%, 300%);
                                -ms-transform:scale(0.2) translate(0%, 300%);
                                -o-transform: scale(0.2) translate(0%, 300%);
                                transform: scale(0.2) translate(0%, 300%);
                                opacity: 0;
                                pointer-events: none;
                            }
                            .image-ultimate-hover-126.left_to_right:hover .iheu-img{
                                transform-origin: 0 50% 0;
                            }
                            .image-ultimate-hover-126 .iheu-info {
                                background: rgba(194, 0, 168, 1);
                                opacity: 0;
                            }
                            .image-ultimate-hover-126:hover .iheu-info{
                                opacity: 1;
                            }

                            .image-ultimate-hover-126 .iheu-info .iheu-data{
                                display: table-cell;
                                vertical-align: middle;text-align: center;                                        padding: 15px; 
                            }
                            .image-ultimate-hover-126 .iheu-info h3 {
                                font-size: 20px;
                                font-weight: 600;
                                padding-bottom: 0px;
                                margin-bottom: 10px;
                                margin-top: 0;
                                line-height: 120%;
                                font-family: "Open Sans";
                                display: inline-block;
                                color: #ffffff;
                            }
                            .image-ultimate-hover-126 .iheu-info p {
                                font-size: 16px;
                                font-weight: 300;
                                margin-bottom: 20px;
                                margin-top: 0;
                                line-height: 120%;
                                width: 100%;
                                float: left;
                                font-family: "Open Sans";
                                color: #ffffff;
                            }
                            .image-ultimate-hover-126 a.iheu-button{
                                padding: 10px 10px;
                                -webkit-border-radius: 5px;
                                -moz-border-radius: 5px;
                                border-radius: 5px;
                                font-weight: 300;
                                font-size: 14px;
                                font-family: "Open Sans";
                                background: rgba(126, 0, 158, 1);
                                color: #ffffff;
                                text-decoration: none;
                                display:table;
                                margin: 0 auto;                                                                            }
                            .image-ultimate-hover-126 a.iheu-button:hover{
                                background: rgba(255, 255, 255, 1);
                                color: #7e009e;
                            }

                        </style>

                        <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-126  image-ultimate-hover-animation-126" data-av-animation="slideInUp">
                            <div class="image-ultimate-map-126">
                                <div class="image-ultimate-map-absulate">
                                    <div class="image-ultimate-hover image-ultimate-hover-126 right_to_left">
                                        <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 

                                            <div class="iheu-img">
                                                <img src="<?php echo  $iheuimage5; ?>">
                                            </div>
                                            <div class="iheu-gen-style"></div>
                                            <div class="iheu-info">
                                                <div class="iheu-data">
                                                    <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-126  image-ultimate-hover-animation-126" data-av-animation="slideInUp">
                            <div class="image-ultimate-map-126">
                                <div class="image-ultimate-map-absulate">
                                    <div class="image-ultimate-hover image-ultimate-hover-126 left_to_right squar">
                                        <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 

                                            <div class="iheu-img">
                                                <img src="<?php echo  $iheuimage6; ?>">
                                            </div>
                                            <div class="iheu-gen-style"></div>
                                            <div class="iheu-info">
                                                <div class="iheu-data">
                                                    <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 21 <span>4 Effects</span>
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
                            .image-ultimate-hover-133{
                                position: relative;
                                width: 100%;
                                height: 100%;
                                -webkit-transition: all 0.35s ease-in-out;
                                -moz-transition: all 0.35s ease-in-out;
                                transition: all 0.35s ease-in-out;
                            }
                            .image-ultimate-hover-133 .iheu-img {
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                right: 0;
                                width: 100%;
                                height: 100%;
                            }

                            .image-ultimate-hover-133 .iheu-info {
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

                            .image-ultimate-hover-animation-133 {
                                animation-duration: 1s;
                            }
                            .image-ultimate-hover-133, 
                            .image-ultimate-hover-133 .iheu-img, .image-ultimate-hover-133 a .iheu-img,
                            .image-ultimate-hover-133 .iheu-img:before, .image-ultimate-hover-133 a .iheu-img:before,
                            .image-ultimate-hover-133 .iheu-img img, .image-ultimate-hover-133 a .iheu-img img,
                            .image-ultimate-hover-133 .iheu-info, .image-ultimate-hover-133 a .iheu-info{
                                border-radius: 50%;
                                -moz-border-radius:  50%;
                                -webkit-border-radius:  50%;
                                transition: 0.5s;
                            }
                            .image-ultimate-hover-padding-133{
                                padding: 20px;
                            }
                            .image-ultimate-map-133 {
                                max-width: 250px;
                                width: 100%;
                                margin: 0 auto;
                                position: relative;
                            }
                            .image-ultimate-map-133:after {
                                padding-bottom: 100%;
                                content: "";
                                display: block;
                            }

                            .image-ultimate-hover-133 .iheu-img:before {
                                position: absolute;
                                display: block;
                                content: '';
                                width: 100%;
                                height: 100%;
                                box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                            }
                            .image-ultimate-hover-133 .iheu-img {
                                width: 100%;
                                float: left;
                                transition: all 1s ease;
                                animation-duration: 1s;
                            }
                            .image-ultimate-hover-133.top_to_bottom .iheu-img {
                                opacity: 1;
                                transform: rotateX(0deg);
                                transform-origin: 100% 100% 0;
                            }
                            .image-ultimate-hover-133.top_to_bottom:hover .iheu-img {
                                opacity: 0;
                                transform: rotateX(90deg);
                                pointer-events: none;
                            }
                            .image-ultimate-hover-133.top_to_bottom .iheu-info {
                                background: rgba(123, 194, 0, 1);
                                opacity: 0;
                                transform: rotateX(90deg);
                                transform-origin: 100% 100% 0;
                                transition: all 1s ease;
                                animation-duration: 1s;
                                pointer-events: none;
                            }
                            .image-ultimate-hover-133.top_to_bottom:hover .iheu-info {
                                opacity: 1;
                                transform: rotateX(0deg);
                                pointer-events: auto;
                            }

                            .image-ultimate-hover-133.bottom_to_top .iheu-img {
                                opacity: 1;
                                transform: rotateX(0deg);
                                transform-origin:0 0 0;
                            }
                            .image-ultimate-hover-133.bottom_to_top:hover .iheu-img {
                                opacity: 0;
                                transform: rotateX(90deg);
                                pointer-events: none;
                            }
                            .image-ultimate-hover-133.bottom_to_top .iheu-info {
                                background: rgba(123, 194, 0, 1);
                                opacity: 0;
                                transform: rotateX(90deg);
                                transform-origin: 0 0 0;
                                transition: all 1s ease;
                                animation-duration: 1s;
                                pointer-events: none;
                            }
                            .image-ultimate-hover-133.bottom_to_top:hover .iheu-info {
                                opacity: 1;
                                transform: rotateX(0deg);
                                pointer-events: auto;
                            }
                            .image-ultimate-hover-133.left_to_right .iheu-img {
                                opacity: 1;
                                transform: rotateY(0deg);
                                transform-origin:0 0 0;
                            }
                            .image-ultimate-hover-133.left_to_right:hover .iheu-img {
                                opacity: 0;
                                transform: rotateY(90deg);
                                pointer-events: none;
                            }
                            .image-ultimate-hover-133.left_to_right .iheu-info {
                                background: rgba(123, 194, 0, 1);
                                opacity: 0;
                                transform: rotateY(90deg);
                                transform-origin: 0 0 0;
                                transition: all 1s ease;
                                animation-duration: 1s;
                                pointer-events: none;
                            }
                            .image-ultimate-hover-133.left_to_right:hover .iheu-info {
                                opacity: 1;
                                transform: rotateY(0deg);
                                pointer-events: auto;
                            }

                            .image-ultimate-hover-133.right_to_left .iheu-img {
                                opacity: 1;
                                transform: rotateY(0deg);
                                transform-origin:100% 100% 0;
                            }
                            .image-ultimate-hover-133.right_to_left:hover .iheu-img {
                                opacity: 0;
                                transform: rotateY(90deg);
                                pointer-events: none;
                            }
                            .image-ultimate-hover-133.right_to_left .iheu-info {
                                background: rgba(123, 194, 0, 1);
                                opacity: 0;
                                transform: rotateY(90deg);
                                transform-origin: 100% 100% 0;
                                transition: all 1s ease;
                                animation-duration: 1s;
                                pointer-events: none;
                            }
                            .image-ultimate-hover-133.right_to_left:hover .iheu-info {
                                opacity: 1;
                                transform: rotateY(0deg);
                                pointer-events: auto;
                            }
                            .image-ultimate-hover-133 .iheu-info .iheu-data{
                                display: table-cell;
                                vertical-align: middle;text-align: center;                                        padding: 15px; 
                            }
                            .image-ultimate-hover-133 .iheu-info h3 {
                                font-size: 20px;
                                font-weight: 600;
                                padding-bottom: 0px;
                                margin-bottom: 10px;
                                margin-top: 0;
                                line-height: 120%;
                                font-family: "Open Sans";
                                display: inline-block;
                                color: #ffffff;
                            }
                            .image-ultimate-hover-133 .iheu-info p {
                                font-size: 16px;
                                font-weight: 300;
                                margin-bottom: 20px;
                                margin-top: 0;
                                line-height: 120%;
                                float:left;
                                width:100%;
                                font-family: "Open Sans";
                                color: #ffffff;
                            }
                            .image-ultimate-hover-133 a.iheu-button{
                                padding: 10px 10px;
                                -webkit-border-radius: 5px;
                                -moz-border-radius: 5px;
                                border-radius: 5px;
                                font-weight: 300;
                                font-size: 14px;
                                font-family: "Open Sans";
                                background: rgba(126, 0, 158, 1);
                                color: #ffffff;
                                text-decoration: none;
                                display:table;
                                margin: 0 auto;                                                                            }
                            .image-ultimate-hover-133 a.iheu-button:hover{
                                background: rgba(255, 255, 255, 1);
                                color: #7e009e;
                            }

                        </style>

                        <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-133  image-ultimate-hover-animation-133" data-av-animation="slideInUp">
                            <div class="image-ultimate-map-133">
                                <div class="image-ultimate-map-absulate">
                                    <div class="image-ultimate-hover image-ultimate-hover-133 left_to_right">
                                        <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                            <div class="iheu-img">
                                                <img src="<?php echo  $iheuimage1; ?>">
                                            </div>
                                            <div class="iheu-info">
                                                <div class="iheu-data">
                                                    <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                </div>
                                            </div>     
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-133  image-ultimate-hover-animation-133" data-av-animation="slideInUp">
                            <div class="image-ultimate-map-133">
                                <div class="image-ultimate-map-absulate">
                                    <div class="image-ultimate-hover image-ultimate-hover-133 right_to_left squar">
                                        <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                            <div class="iheu-img">
                                                <img src="<?php echo  $iheuimage2; ?>">
                                            </div>
                                            <div class="iheu-info">
                                                <div class="iheu-data">
                                                    <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 22 <span>4 Effects</span>
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
                                    .image-ultimate-hover-138{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-138 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-138 .iheu-info {
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

                                    .image-ultimate-hover-animation-138 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-138, 
                                    .image-ultimate-hover-138 .iheu-img, .image-ultimate-hover-138 a .iheu-img,
                                    .image-ultimate-hover-138 .iheu-img:before, .image-ultimate-hover-138 a .iheu-img:before,
                                    .image-ultimate-hover-138 .iheu-img img, .image-ultimate-hover-138 a .iheu-img img,
                                    .image-ultimate-hover-138 .iheu-info, .image-ultimate-hover-138 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-138{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-138 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-138:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-138 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }
                                    .image-ultimate-hover-138 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-138.left_to_right .iheu-info {
                                        background: rgba(0, 146, 194, 1);
                                        opacity: 0;
                                        transition: all 1s ease;
                                        animation-duration: 1s;
                                        pointer-events: none;
                                        backface-visibility: hidden;
                                        opacity: 0;
                                        transform: scale(0, 0) translate(-150%, 0%);
                                        transform-origin: 0 100% 0;
                                    }
                                    .image-ultimate-hover-138.left_to_right:hover .iheu-info {
                                        opacity: 1;
                                        transform: scale(1, 1) translate(0%, 0%);
                                        transform-origin: 100% 100% 0;
                                        pointer-events: auto;
                                    }
                                    .image-ultimate-hover-138.right_to_left .iheu-info {
                                        background: rgba(0, 146, 194, 1);
                                        opacity: 0;
                                        transition: all 1s ease;
                                        animation-duration: 1s;
                                        pointer-events: none;
                                        backface-visibility: hidden;
                                        opacity: 0;
                                        transform: scale(0, 0) translate(150%, 0%);
                                        transform-origin: 100% 0 0;
                                    }
                                    .image-ultimate-hover-138.right_to_left:hover .iheu-info {
                                        opacity: 1;
                                        transform: scale(1, 1) translate(0%, 0%);
                                        transform-origin: 100% 100% 0;
                                        pointer-events: auto;
                                    }
                                    .image-ultimate-hover-138.top_to_bottom .iheu-info {
                                        background: rgba(0, 146, 194, 1);
                                        opacity: 0;
                                        transition: all 1s ease;
                                        animation-duration: 1s;
                                        pointer-events: none;
                                        backface-visibility: hidden;
                                        opacity: 0;
                                        transform: scale(0, 0) translate(0%, 0%);
                                        transform-origin: 0 0 0;
                                    }
                                    .image-ultimate-hover-138.top_to_bottom:hover .iheu-info {
                                        opacity: 1;
                                        transform: scale(1, 1) translate(0%, 0%);
                                        transform-origin: 100% 100% 0;
                                        pointer-events: auto;
                                    }
                                    .image-ultimate-hover-138.bottom_to_top .iheu-info {
                                        background: rgba(0, 146, 194, 1);
                                        opacity: 0;
                                        transition: all 1s ease;
                                        animation-duration: 1s;
                                        pointer-events: none;
                                        backface-visibility: hidden;
                                        opacity: 0;
                                        transform: scale(0, 0) translate(100%, 100%);
                                        transform-origin: 100% 100% 0;
                                    }
                                    .image-ultimate-hover-138.bottom_to_top:hover .iheu-info {
                                        opacity: 1;
                                        transform: scale(1, 1) translate(0%, 0%);
                                        transform-origin: 100% 100% 0;
                                        pointer-events: auto;
                                    }

                                    .image-ultimate-hover-138 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-138 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-138 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        float:left;
                                        width:100%;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-138 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-138 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-138  image-ultimate-hover-animation-138" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-138">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-138 left_to_right">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-138  image-ultimate-hover-animation-138" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-138">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-138 right_to_left squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 23 <span>4 Effects</span>
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
                                    .image-ultimate-hover-145{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-145 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-145 .iheu-info {
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

                                    .image-ultimate-hover-animation-145 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-145, 
                                    .image-ultimate-hover-145 .iheu-img, .image-ultimate-hover-145 a .iheu-img,
                                    .image-ultimate-hover-145 .iheu-img:before, .image-ultimate-hover-145 a .iheu-img:before,
                                    .image-ultimate-hover-145 .iheu-img img, .image-ultimate-hover-145 a .iheu-img img,
                                    .image-ultimate-hover-145 .iheu-info, .image-ultimate-hover-145 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-145{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-145 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-145:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-145 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }
                                    .image-ultimate-hover-145 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        z-index: 2;
                                        transition: all 1s ease-out 0s;
                                    }
                                    .image-ultimate-hover-145.bottom_to_top .iheu-img {
                                        opacity: 1;
                                        transform: perspective(800px) rotateX(0deg) translateZ(0px);
                                        transform-origin: 50% 0 0;
                                    }
                                    .image-ultimate-hover-145.bottom_to_top:hover .iheu-img {
                                        opacity: 0 ;
                                        transform: perspective(800px) rotateX(180deg) translateZ(100px);
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-145.top_to_bottom .iheu-img {
                                        opacity: 1;
                                        transform: perspective(800px) rotateX(0deg) translateZ(0px);
                                        transform-origin: 100% 100% 0;
                                    }
                                    .image-ultimate-hover-145.top_to_bottom:hover .iheu-img {
                                        opacity: 0 ;
                                        transform: perspective(800px) rotateX(-180deg) translateZ(100px);
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-145.left_to_right .iheu-img {
                                        opacity: 1;
                                        transform: perspective(800px) rotateY(0deg) translateZ(0px);
                                        transform-origin: 0% 100% 0;
                                    }
                                    .image-ultimate-hover-145.left_to_right:hover .iheu-img {
                                        opacity: 0 ;
                                        transform: perspective(800px) rotateY(-180deg) translateZ(100px);
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-145.right_to_left .iheu-img {
                                        opacity: 1;
                                        transform: perspective(800px) rotateY(0deg) translateZ(0px);
                                        transform-origin: 100% 100% 0;
                                    }
                                    .image-ultimate-hover-145.right_to_left:hover .iheu-img {
                                        opacity: 0 ;
                                        transform: perspective(800px) rotateY(180deg) translateZ(100px);
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-145 .iheu-info {
                                        background: rgba(165, 0, 194, 1);
                                    }
                                    .image-ultimate-hover-145 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-145 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-145 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        float:left;
                                        width:100%;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-145 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-145 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-145  image-ultimate-hover-animation-145" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-145">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-145 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-145  image-ultimate-hover-animation-145" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-145">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-145 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 24 <span>4 Effects</span>
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
                                    .image-ultimate-hover-151{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-151 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-151 .iheu-info {
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

                                    .image-ultimate-hover-animation-151 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-151, 
                                    .image-ultimate-hover-151 .iheu-img, .image-ultimate-hover-151 a .iheu-img,
                                    .image-ultimate-hover-151 .iheu-img:before, .image-ultimate-hover-151 a .iheu-img:before,
                                    .image-ultimate-hover-151 .iheu-img img, .image-ultimate-hover-151 a .iheu-img img,
                                    .image-ultimate-hover-151 .iheu-info, .image-ultimate-hover-151 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-151{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-151 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-151:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-151 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }
                                    .image-ultimate-hover-151 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        z-index: 2;
                                        transition: all 1s ease-out 0s;
                                    }
                                    .image-ultimate-hover-151 .iheu-img {
                                        backface-visibility: hidden;
                                        opacity: 1;
                                        transform: scale(1, 1) rotate(0deg);
                                        transform-origin: 100% 200% 0;
                                    }
                                    .image-ultimate-hover-151:hover .iheu-img {
                                        opacity: 0;
                                        transform: scale(0, 0) rotate(270deg);
                                        transform-origin: 200% 500% 0;
                                        pointer-events: none;
                                    }

                                    .image-ultimate-hover-151 .iheu-info {
                                        background: rgba(194, 0, 129, 1);
                                        z-index: 0;
                                    }
                                    .image-ultimate-hover-151 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-151 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-151 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        float:left;
                                        width:100%;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-151 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-151 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-151 image-ultimate-hover-animation-151" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-151">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-151 ">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-151  image-ultimate-hover-animation-151" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-151">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-151 square">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 25 <span>Single Effect</span>
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
                                    .image-ultimate-hover-158{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-158 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-158 .iheu-info {
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

                                    .image-ultimate-hover-animation-158 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-158, 
                                    .image-ultimate-hover-158 .iheu-img, .image-ultimate-hover-158 a .iheu-img,
                                    .image-ultimate-hover-158 .iheu-img:before, .image-ultimate-hover-158 a .iheu-img:before,
                                    .image-ultimate-hover-158 .iheu-img img, .image-ultimate-hover-158 a .iheu-img img,
                                    .image-ultimate-hover-158 .iheu-info, .image-ultimate-hover-158 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-158{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-158 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-158:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-158 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }
                                    .image-ultimate-hover-158 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        z-index: 2;
                                        transition: all 1s ease-out 0s;
                                    }
                                    .image-ultimate-hover-158 .iheu-img {
                                        backface-visibility: hidden;
                                        transform: scale(1);
                                        z-index: 0;
                                    }
                                    .image-ultimate-hover-158:hover .iheu-img {
                                        opacity: 0;
                                        transform: scale(0);
                                    }
                                    .image-ultimate-hover-158 .iheu-info {
                                        background: rgba(0, 194, 10, 1);
                                        transition: all 1s ease-out 0s;
                                        opacity: 0;
                                        transform: scale(0) rotateZ(-720deg);
                                    }
                                    .image-ultimate-hover-158:hover .iheu-info {
                                        opacity: 1;
                                        transform: scale(1) rotateZ(0deg);
                                    }
                                    .image-ultimate-hover-158 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-158 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-158 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        float:left;
                                        width:100%;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-158 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-158 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-158  image-ultimate-hover-animation-158" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-158">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-158 ">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-158  image-ultimate-hover-animation-158" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-158">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-158 squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 26 <span>Single Effects</span>
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
                                    .image-ultimate-hover-163{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-163 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-163 .iheu-info {
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

                                    .image-ultimate-hover-animation-163 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-163, 
                                    .image-ultimate-hover-163 .iheu-img, .image-ultimate-hover-163 a .iheu-img,
                                    .image-ultimate-hover-163 .iheu-img:before, .image-ultimate-hover-163 a .iheu-img:before,
                                    .image-ultimate-hover-163 .iheu-img img, .image-ultimate-hover-163 a .iheu-img img,
                                    .image-ultimate-hover-163 .iheu-info, .image-ultimate-hover-163 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-163{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-163 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-163:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-163 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }
                                    .image-ultimate-hover-163 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        z-index: 2;
                                        transition: all 1s ease-out 0s;
                                    }
                                    .image-ultimate-hover-163.left_to_right .iheu-img {
                                        opacity: 1;
                                        animation-duration: 1s;
                                        animation-name: tinRightIn;
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-163.left_to_right:hover .iheu-img {
                                        animation-duration: 1s;
                                        animation-name: tinRightOut;
                                        opacity: 0 ;
                                        pointer-events: none;
                                    }
                                    @keyframes tinRightIn {
                                        0% {
                                            opacity: 0;
                                            transform: scale(1, 1) translateX(900%);
                                        }
                                        50%, 70%, 90% {
                                            opacity: 1;
                                            transform: scale(1.1, 1.1) translateX(0px);
                                        }
                                        60%, 80%, 100% {
                                            opacity: 1;
                                            transform: scale(1, 1) translateX(0px);
                                        }
                                    }
                                    @keyframes tinRightOut {
                                        0%, 20%, 40%, 50% {
                                            opacity: 1;
                                            transform: scale(1, 1) translateX(0px);
                                        }
                                        10%, 30% {
                                            opacity: 1;
                                            transform: scale(1.1, 1.1) translateX(0px);
                                        }
                                        100% {
                                            opacity: 0;
                                            transform: scale(1, 1) translateX(900%);
                                        }
                                    }
                                    .image-ultimate-hover-163.right_to_left .iheu-img {
                                        opacity: 1;
                                        animation-duration: 1s;
                                        animation-name: tinLeftIn;
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-163.right_to_left:hover .iheu-img {
                                        animation-duration: 1s;
                                        animation-name: tinLeftOut;
                                        opacity: 0 ;
                                        pointer-events: none;
                                    }
                                    @keyframes tinLeftIn {
                                        0% {
                                            opacity: 0;
                                            transform: scale(1, 1) translateX(-900%);
                                        }
                                        50%, 70%, 90% {
                                            opacity: 1;
                                            transform: scale(1.1, 1.1) translateX(0px);
                                        }
                                        60%, 80%, 100% {
                                            opacity: 1;
                                            transform: scale(1, 1) translateX(0px);
                                        }
                                    }
                                    @keyframes tinLeftOut {
                                        0%, 20%, 40%, 50% {
                                            opacity: 1;
                                            transform: scale(1, 1) translateX(0px);
                                        }
                                        10%, 30% {
                                            opacity: 1;
                                            transform: scale(1.1, 1.1) translateX(0px);
                                        }
                                        100% {
                                            opacity: 0;
                                            transform: scale(1, 1) translateX(-900%);
                                        }
                                    }
                                    .image-ultimate-hover-163.top_to_bottom .iheu-img {
                                        opacity: 1;
                                        animation-duration: 1s;
                                        animation-name: tinTopIn;
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-163.top_to_bottom:hover .iheu-img {
                                        animation-duration: 1s;
                                        animation-name: tinTopOut;
                                        opacity: 0 ;
                                        pointer-events: none;
                                    }
                                    @keyframes tinTopIn {
                                        0% {
                                            opacity: 0;
                                            transform: scale(1, 1) translateY(-900%);
                                        }
                                        50%, 70%, 90% {
                                            opacity: 1;
                                            transform: scale(1.1, 1.1) translateY(0px);
                                        }
                                        60%, 80%, 100% {
                                            opacity: 1;
                                            transform: scale(1, 1) translateY(0px);
                                        }
                                    }
                                    @keyframes tinTopOut {
                                        0%, 20%, 40%, 50% {
                                            opacity: 1;
                                            transform: scale(1, 1) translateY(0px);
                                        }
                                        10%, 30% {
                                            opacity: 1;
                                            transform: scale(1.1, 1.1) translateY(0px);
                                        }
                                        100% {
                                            opacity: 0;
                                            transform: scale(1, 1) translateY(-900%);
                                        }
                                    }

                                    .image-ultimate-hover-163.bottom_to_top .iheu-img {
                                        opacity: 1;
                                        animation-duration: 1s;
                                        animation-name: tinBottomIn;
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-163.bottom_to_top:hover .iheu-img {
                                        animation-duration: 1s;
                                        animation-name: tinBottomOut;
                                        opacity: 0 ;
                                        pointer-events: none;
                                    }

                                    @keyframes tinBottomIn {
                                        0% {
                                            opacity: 0;
                                            transform: scale(1, 1) translateY(900%);
                                        }
                                        50%, 70%, 90% {
                                            opacity: 1;
                                            transform: scale(1.1, 1.1) translateY(0px);
                                        }
                                        60%, 80%, 100% {
                                            opacity: 1;
                                            transform: scale(1, 1) translateY(0px);
                                        }
                                    }
                                    @keyframes tinBottomOut {
                                        0%, 20%, 40%, 50% {
                                            opacity: 1;
                                            transform: scale(1, 1) translateY(0px);
                                        }
                                        10%, 30% {
                                            opacity: 1;
                                            transform: scale(1.1, 1.1) translateY(0px);
                                        }
                                        100% {
                                            opacity: 0;
                                            transform: scale(1, 1) translateY(900%);
                                        }
                                    }
                                    .image-ultimate-hover-163 .iheu-info {
                                        background: rgba(0, 146, 194, 1);
                                        z-index: 0;
                                    }
                                    .image-ultimate-hover-163 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-163 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-163 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        float:left;
                                        width:100%;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-163 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-163 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-163  image-ultimate-hover-animation-163" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-163">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-163 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage3; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-163 image-ultimate-hover-animation-163" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-163">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-163 top_to_bottom squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage4; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 27 <span>4 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn ctu-pro-only" >Pro Only</button>
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
                                    .image-ultimate-hover-169{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-169 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-169 .iheu-info {
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

                                    .image-ultimate-hover-animation-169 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-169, 
                                    .image-ultimate-hover-169 .iheu-img, .image-ultimate-hover-169 a .iheu-img,
                                    .image-ultimate-hover-169 .iheu-img:before, .image-ultimate-hover-169 a .iheu-img:before,
                                    .image-ultimate-hover-169 .iheu-img img, .image-ultimate-hover-169 a .iheu-img img,
                                    .image-ultimate-hover-169 .iheu-info, .image-ultimate-hover-169 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-169{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-169 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-169:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-169 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }
                                    .image-ultimate-hover-169 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        z-index: 2;
                                        transition: all 1s ease-out 0s;
                                    }
                                    .image-ultimate-hover-169.left_to_right .iheu-img {
                                        opacity: 1 ;
                                        transform: perspective(800px) rotateY(0deg);
                                        transform-origin: 100% 50%;
                                    }
                                    .image-ultimate-hover-169.left_to_right:hover .iheu-img {
                                        opacity: 0;
                                        transform: perspective(800px) rotateY(180deg);
                                        transform-origin: 50% 50%;
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-169.right_to_left .iheu-img {
                                        opacity: 1 ;
                                        transform: perspective(800px) rotateY(0deg);
                                        transform-origin: 0 0 ;
                                    }
                                    .image-ultimate-hover-169.right_to_left:hover .iheu-img {
                                        opacity: 0;
                                        transform: perspective(800px) rotateY(-180deg);
                                        transform-origin: 50% 50% ;
                                        pointer-events: none;
                                    }
                                    .image-ultimate-hover-169.bottom_to_top .iheu-img {
                                        opacity: 1 ;
                                        transform: perspective(800px) rotateX(0deg);
                                        transform-origin: 50% 100%;
                                    }
                                    .image-ultimate-hover-169.bottom_to_top:hover .iheu-img {
                                        opacity: 0;
                                        transform: perspective(800px) rotateX(-180deg);
                                        transform-origin: 50% 50% ;
                                        pointer-events: none;

                                    }
                                    .image-ultimate-hover-169.top_to_bottom .iheu-img {
                                        opacity: 1 ;
                                        transform: perspective(800px) rotateX(0deg);
                                        transform-origin: 0 0 ;
                                    }
                                    .image-ultimate-hover-169.top_to_bottom:hover .iheu-img {
                                        opacity: 0;
                                        transform: perspective(800px) rotateX(180deg);
                                        transform-origin: 50% 50% ;
                                        pointer-events: none;
                                    }

                                    .image-ultimate-hover-169 .iheu-info {
                                        background: rgba(0, 146, 194, 1);
                                        z-index: 0;
                                    }
                                    .image-ultimate-hover-169 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-169 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-169 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        float:left;
                                        width:100%;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-169 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-169 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }

                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-169  image-ultimate-hover-animation-169" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-169">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-169 right_to_left">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage1; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-169 image-ultimate-hover-animation-169" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-169">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-169 left_to_right squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage2; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 28 <span>4 Effects</span>
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
                                    .image-ultimate-hover-175{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                    }
                                    .image-ultimate-hover-175 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-175 .iheu-info {
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

                                    .image-ultimate-hover-animation-175 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-175, 
                                    .image-ultimate-hover-175 .iheu-img, .image-ultimate-hover-175 a .iheu-img,
                                    .image-ultimate-hover-175 .iheu-img:before, .image-ultimate-hover-175 a .iheu-img:before,
                                    .image-ultimate-hover-175 .iheu-img img, .image-ultimate-hover-175 a .iheu-img img,
                                    .image-ultimate-hover-175 .iheu-info, .image-ultimate-hover-175 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }

                                    .image-ultimate-hover-padding-175{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-175 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-175:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-175 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }
                                    .image-ultimate-hover-175 .iheu-img {
                                        width: 100%;
                                        float: left;
                                        z-index: 2;
                                        transition: all 1s ease-out 0s;
                                    }
                                    .image-ultimate-hover-175 .iheu-img {
                                        animation-duration: 1s;
                                        animation-name: foolishIn;
                                        opacity: 1;
                                        z-index: 2;
                                    }
                                    .image-ultimate-hover-175:hover .iheu-img {
                                        animation-duration: 1s;
                                        animation-name: foolishOut;
                                        opacity: 0 ;
                                        pointer-events: none;
                                    }
                                    @keyframes foolishOut {
                                        0% {
                                            opacity: 1;
                                            transform: scale(1, 1) rotate(360deg);
                                            transform-origin: 50% 50% 0;
                                        }
                                        20% {
                                            opacity: 1;
                                            transform: scale(0.5, 0.5) rotate(0deg);
                                            transform-origin: 0 0 0;
                                        }
                                        40% {
                                            opacity: 1;
                                            transform: scale(0.5, 0.5) rotate(0deg);
                                            transform-origin: 100% 0 0;
                                        }
                                        60% {
                                            opacity: 1;
                                            transform: scale(0.5, 0.5) rotate(0deg);
                                            transform-origin: 0 50% 0;
                                        }
                                        80% {
                                            opacity: 1;
                                            transform: scale(0.5, 0.5) rotate(0deg);
                                            transform-origin: 0 100% 0;
                                        }
                                        100% {
                                            opacity: 0;
                                            transform: scale(0, 0) rotate(0deg);
                                            transform-origin: 50% 50% 0;
                                        }
                                    }
                                    @keyframes foolishIn {
                                        0% {
                                            opacity: 0;
                                            transform: scale(0, 0) rotate(360deg);
                                            transform-origin: 50% 50% 0;
                                        }
                                        20% {
                                            opacity: 1;
                                            transform: scale(0.5, 0.5) rotate(0deg);
                                            transform-origin: 0 100% 0;
                                        }
                                        40% {
                                            opacity: 1;
                                            transform: scale(0.5, 0.5) rotate(0deg);
                                            transform-origin: 100% 100% 0;
                                        }
                                        60% {
                                            opacity: 1;
                                            transform: scale(0.5, 0.5) rotate(0deg);
                                            transform-origin: 0 50% 0;
                                        }
                                        80% {
                                            opacity: 1;
                                            transform: scale(0.5, 0.5) rotate(0deg);
                                            transform-origin: 0 0 0;
                                        }
                                        100% {
                                            opacity: 1;
                                            transform: scale(1, 1) rotate(0deg);
                                            transform-origin: 50% 50% 0;
                                        }
                                    }
                                    .image-ultimate-hover-175 .iheu-info {
                                        background: rgba(194, 0, 162, 1);
                                    }
                                    .image-ultimate-hover-175 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                                        padding: 15px; 
                                    }
                                    .image-ultimate-hover-175 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 0px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-175 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 20px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        float:left;
                                        width:100%;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-175 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                                                            }
                                    .image-ultimate-hover-175 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }



                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-175  image-ultimate-hover-animation-175" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-175">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-175 ">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage5; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

                                                        </div>
                                                    </div>     
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-175  image-ultimate-hover-animation-175" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-175">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-175 squar">
                                                <a href="https://www.oxilab.org/image-hover-effects-ultimate-demo-general/" target="_blank"> 
                                                    <div class="iheu-img">
                                                        <img src="<?php echo $iheuimage6; ?>">
                                                    </div>
                                                    <div class="iheu-info">
                                                        <div class="iheu-data">
                                                            <h3 class="iheu-fade-up"> Fully Customizable </h3>

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
                            Style 29 <span>Single Effect</span>
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
                                    .image-ultimate-hover-41{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-41 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-41 .iheu-info {
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
                                        z-index: 1;
                                    }
                                    .image-ultimate-hover-animation-41 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-41, 
                                    .image-ultimate-hover-41 .iheu-img, .image-ultimate-hover-41 a .iheu-img,
                                    .image-ultimate-hover-41 .iheu-img:before, .image-ultimate-hover-41 a .iheu-img:before,
                                    .image-ultimate-hover-41 .iheu-img img, .image-ultimate-hover-41 a .iheu-img img,
                                    .image-ultimate-hover-41 .iheu-info, .image-ultimate-hover-41 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-41{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-41 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-41:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-41 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-41 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-41 .iheu-info {                   
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                        background:transparent;
                                    }
                                    .image-ultimate-hover-41 .iheu-data h3,
                                    .image-ultimate-hover-41 .iheu-data p,
                                    .image-ultimate-hover-41 .iheu-data .iheu-button{
                                        -webkit-transition: all 0.25s ease 0.25s;
                                        -o-transition: all 0.25s ease 0.25s;
                                        -moz-transition: all 0.25s ease 0.25s;
                                        transition: all 0.25s ease 0.25s;
                                    }
                                    .image-ultimate-hover-41 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;text-align: center;                    padding: 15px; 
                                    }
                                    .image-ultimate-hover-41 .iheu-info .iheu-data2{
                                        width: 100%;
                                        float: left;
                                        height:0px;
                                        opacity:0;
                                    }
                                    .image-ultimate-hover-41 .iheu-info h3 {
                                        font-size: 20px;
                                        font-weight: 600;
                                        padding-bottom: 4px;
                                        margin-bottom: 10px;
                                        margin-top: 0;
                                        opacity:1;
                                        line-height: 120%;
                                        font-family: "Open Sans";
                                        display: inline-block;
                                        color: #ffffff;

                                    }
                                    .image-ultimate-hover-41 .iheu-info p {
                                        font-size: 16px;
                                        font-weight: 300;
                                        margin-bottom: 0px;
                                        margin-top: 0;
                                        line-height: 120%;
                                        width: 100%;
                                        float: left;
                                        font-family: "Open Sans";
                                        color: #ffffff;
                                    }
                                    .image-ultimate-hover-41 a.iheu-button{
                                        padding: 10px 10px;
                                        -webkit-border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        border-radius: 5px;
                                        font-weight: 300;
                                        font-size: 14px;
                                        font-family: "Open Sans";
                                        background: rgba(126, 0, 158, 1);
                                        color: #ffffff;
                                        text-decoration: none;
                                        display:table;
                                        margin: 0 auto;                                    }
                                    .image-ultimate-hover-41 a.iheu-button:hover{
                                        background: rgba(255, 255, 255, 1);
                                        color: #7e009e;
                                    }
                                    .image-ultimate-hover-41:hover .iheu-info,
                                    .image-ultimate-hover-41.iheu-touch .iheu-info{
                                        opacity: 1;
                                        -webkit-backface-visibility: visible;
                                        backface-visibility: visible;
                                        background: rgba(119, 179, 199, 0.89); 
                                    }
                                    .image-ultimate-hover-41:hover .iheu-info .iheu-data2,
                                    .image-ultimate-hover-41.iheu-touch .iheu-info .iheu-data2{
                                        height:auto;
                                        opacity:1;
                                    }
                                    .image-ultimate-hover-41:hover .iheu-info h3,
                                    .image-ultimate-hover-41.iheu-touch .iheu-info h3{
                                        color: #ffffff;
                                        border-bottom: 1px solid currentColor;                }
                                    </style>
                                    <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-41 image-ultimate-hover-animation-41"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-41">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-41">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3> Fully Customizable </h3>
                                                        <div class="iheu-data2">
                                                            <p class="iheu-fade-up"> Add Your Description Unless make it blank. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-41 image-ultimate-hover-animation-41"  data-av-animation="zoomIn">
                                    <div class="image-ultimate-map-41">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-41 squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <h3> Easy to Setup </h3>
                                                        <div class="iheu-data2">
                                                            <p class="iheu-fade-up"> Add Your Description Unless make it blank. </p>
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
                            Style 30 <span> Single Effects</span>
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
<div class="modal fade" id="iheu-general-data" >
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
            jQuery("#iheu-general-data").modal("show");
        });
    });
</script>
<style>
    .image-ultimate-map-absulate .squar, 
    .image-ultimate-map-absulate .squar .iheu-img, .image-ultimate-map-absulate .squar a .iheu-img,
    .image-ultimate-map-absulate .squar .iheu-img:before, .image-ultimate-map-absulate .squar a .iheu-img:before,
    .image-ultimate-map-absulate .squar .iheu-img img, .image-ultimate-map-absulate .squar a .iheu-img img,
    .image-ultimate-map-absulate .squar .iheu-info, .image-ultimate-map-absulate .squar a .iheu-info{
        border-radius: 0% !important;
        -moz-border-radius:  0% !important;
        -webkit-border-radius:  0% !important;
        transition: 0.5s;
    }
</style>
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

image_hover_ultimate_user_capabilities();
if (!empty($_POST['submit']) && $_POST['submit'] == 'Save') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'iheunewdata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        if ($_POST['style'] == 'button-1') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |44|button-height-width |40|button-margin-right |7|';
        }
        if ($_POST['style'] == 'button-2') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |40|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'button-3') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'button-4') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
        }
        if ($_POST['style'] == 'button-5') {
            $name = sanitize_text_field($_POST['style-name']);
            $style_name = sanitize_text_field($_POST['style']);
            $css = 'iheu-item |image-ultimate-responsive-1|image-radius |50|image-width |250|image-height |250|image-margin |20|image-padding |30|background-color |rgba(0, 146, 194, 0.5)|content-alignment ||open-in-new-tab ||image-animation |pulse|animation-durations |1|content-animation ||inner-shadow |0|inner-shadow-color |rgba(0, 146, 194, 0.3)|box-shadow ||box-shadow-color ||heading-font-size ||heading-font-color ||heading-font-familly ||heading-font-weight ||heading-underline ||heading-padding-bottom ||heading-margin-bottom ||desc-font-size ||desc-font-color ||desc-font-familly ||desc-font-weight ||desc-padding-bottom ||bottom-font-size ||bottom-font-color ||bottom-font-background ||bottom-font-familly ||bottom-font-weight ||bottom-hover-color ||bottom-hover-background ||bottom-border-radius ||bottom-padding-top-bottom ||bottom-padding-left-right ||bottom-align ||bottom-margin-left ||bottom-margin-right ||iheu-css ||button-font-size |18|button-font-color |#7e009e|button-font-background |rgba(255, 255, 255, 1)|button-hover-color |#ffffff|button-hover-background |rgba(126, 0, 158, 1)|button-border-radius |46|button-height-width |40|button-margin-right |7|iheu-directions |left_to_right|';
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
                                    .image-ultimate-hover-273{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-273 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-273 .iheu-info {
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

                                    .image-ultimate-hover-animation-273 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-273, 
                                    .image-ultimate-hover-273 .iheu-img, .image-ultimate-hover-273 a .iheu-img,
                                    .image-ultimate-hover-273 .iheu-img:before, .image-ultimate-hover-273 a .iheu-img:before,
                                    .image-ultimate-hover-273 .iheu-img img, .image-ultimate-hover-273 a .iheu-img img,
                                    .image-ultimate-hover-273 .iheu-info, .image-ultimate-hover-273 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-273{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-273 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-273:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }

                                    .image-ultimate-hover-273 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);

                                    }

                                    .image-ultimate-hover-273 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-273 .iheu-info {
                                        background: rgba(0, 146, 194, 0.5);
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-273 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;
                                        text-align: center;
                                        padding: 30px; 
                                    }
                                    .image-ultimate-hover-273 .iheu-info .iheu-data a{
                                        display: inline-block;
                                    }
                                    .image-ultimate-hover-273 .iheu-info .iheu-data a:first-child{
                                        margin-right: 7px
                                    }
                                    .image-ultimate-hover-273 .iheu-info .iheu-data a:hover,
                                    .image-ultimate-hover-273 .iheu-info .iheu-data a:active,
                                    .image-ultimate-hover-273 .iheu-info .iheu-data a:focus{
                                        border:none;
                                        box-shadow: none;
                                    }
                                    .image-ultimate-hover-273 .iheu-info .iheu-data .fa{
                                        background: rgba(255, 255, 255, 1);
                                        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -webkit-border-radius: 44px;
                                        -moz-border-radius:44px;
                                        border-radius: 44px;
                                        color: #7e009e;
                                        display: inline-block;
                                        line-height: 40px;
                                        font-size: 18px;
                                        text-align: center;
                                        text-decoration: none;
                                        width: 40px;
                                        height: 40px;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-273 .iheu-info .iheu-data .fa:hover{
                                        color: #ffffff;
                                        background-color: rgba(126, 0, 158, 1);
                                    }


                                    .image-ultimate-hover-273:hover .iheu-info {
                                        opacity: 1;
                                        z-index:1;
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-273 image-ultimate-hover-animation-273" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-273">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-273">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa fa-search-plus"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa  fa-facebook"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-273 image-ultimate-hover-animation-273" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-273">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-273 squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa fa-search-plus"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa  fa-facebook"></i></a>
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
                            Style 1 <span>Single Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="button-1">Select</button>
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
                                    .image-ultimate-hover-276{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-276 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-276 .iheu-info {
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
                                        z-index:1;
                                    }
                                    .image-ultimate-hover-animation-276 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-276, 
                                    .image-ultimate-hover-276 .iheu-img, .image-ultimate-hover-276 a .iheu-img,
                                    .image-ultimate-hover-276 .iheu-img:before, .image-ultimate-hover-276 a .iheu-img:before,
                                    .image-ultimate-hover-276 .iheu-img img, .image-ultimate-hover-276 a .iheu-img img,
                                    .image-ultimate-hover-276 .iheu-info, .image-ultimate-hover-276 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-276{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-276 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-276:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-276{
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-276 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 0px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-276 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-276 .iheu-info {
                                        background: rgba(194, 103, 0, 0.5);
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-276 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;
                                        text-align: center;
                                        padding: 30px; 
                                    }
                                    .image-ultimate-hover-276 .iheu-info .iheu-data a{
                                        display: inline-block;
                                    }
                                    .image-ultimate-hover-276 .iheu-info .iheu-data a:first-child{
                                        margin-right: 7px
                                    }
                                    .image-ultimate-hover-276 .iheu-info .iheu-data a:hover,
                                    .image-ultimate-hover-276 .iheu-info .iheu-data a:active,
                                    .image-ultimate-hover-276 .iheu-info .iheu-data a:focus{
                                        border:none;
                                        box-shadow: none;
                                    }
                                    .image-ultimate-hover-276 .iheu-info .iheu-data .fa{
                                        background: rgba(255, 255, 255, 1);
                                        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -webkit-border-radius: 40px;
                                        -moz-border-radius:40px;
                                        border-radius: 40px;
                                        color: #7e009e;
                                        display: inline-block;
                                        line-height: 40px;
                                        font-size: 18px;
                                        text-align: center;
                                        text-decoration: none;
                                        width: 40px;
                                        height: 40px;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-276 .iheu-info .iheu-data .fa:hover{
                                        color: #ffffff;
                                        background-color: rgba(126, 0, 158, 1);
                                    }

                                    .image-ultimate-hover-276.left_to_right .iheu-info {
                                        left: -100%;
                                        top: 0;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-276.left_to_right:hover .iheu-info {
                                        left: 0;
                                        top: 0;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-276.right_to_left .iheu-info {
                                        left: 100%;
                                        top: 0;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-276.right_to_left:hover .iheu-info {
                                        left: 0;
                                        top: 0;
                                        height: 100%;
                                    }

                                    .image-ultimate-hover-276.top_to_bottom .iheu-info {
                                        left: 0;
                                        top: -100%;
                                        width: 100%;
                                    }
                                    .image-ultimate-hover-276.top_to_bottom:hover .iheu-info {
                                        left: 0;
                                        top: 0%;
                                        width: 100%;
                                    }
                                    .image-ultimate-hover-276.bottom_to_top .iheu-info {
                                        left: 0;
                                        top: 100%;
                                        width: 100%;
                                    }
                                    .image-ultimate-hover-276.bottom_to_top:hover .iheu-info {
                                        left: 0;
                                        top: 0%;
                                        width: 100%;
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-276 image-ultimate-hover-animation-276" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-276">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-276 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-276 image-ultimate-hover-animation-276" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-276">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-276 right_to_left squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage4; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa fa-twitter"></i></a>
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
                            <button type="button" class="btn btn-success"  data-target="button-2">Select</button>
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
                                    .image-ultimate-hover-282{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-282 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-282 .iheu-info {
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
                                        z-index:1;
                                    }
                                    .image-ultimate-hover-animation-282 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-282, 
                                    .image-ultimate-hover-282 .iheu-img, .image-ultimate-hover-282 a .iheu-img,
                                    .image-ultimate-hover-282 .iheu-img:before, .image-ultimate-hover-282 a .iheu-img:before,
                                    .image-ultimate-hover-282 .iheu-img img, .image-ultimate-hover-282 a .iheu-img img,
                                    .image-ultimate-hover-282 .iheu-info, .image-ultimate-hover-282 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-282{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-282 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-282:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-282 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-282 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-282 .iheu-info {
                                        background: rgba(0, 146, 194, 0.5);
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-282 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;
                                        text-align: center;
                                        padding: 30px; 
                                    }
                                    .image-ultimate-hover-282 .iheu-info .iheu-data a{
                                        display: inline-block;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-282 .iheu-info .iheu-data a:first-child{
                                        margin-right: 7px;
                                    }
                                    .image-ultimate-hover-282 .iheu-info .iheu-data a:hover,
                                    .image-ultimate-hover-282 .iheu-info .iheu-data a:active,
                                    .image-ultimate-hover-282 .iheu-info .iheu-data a:focus{
                                        border:none;
                                        box-shadow: none;
                                    }
                                    .image-ultimate-hover-282 .iheu-info .iheu-data .fa{
                                        background: rgba(255, 255, 255, 1);
                                        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -webkit-border-radius: 46px;
                                        -moz-border-radius:46px;
                                        border-radius: 46px;
                                        color: #7e009e;
                                        display: inline-block;
                                        line-height: 40px;
                                        font-size: 18px;
                                        text-align: center;
                                        text-decoration: none;
                                        width: 40px;
                                        height: 40px;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-282 .iheu-info .iheu-data .fa:hover{
                                        color: #ffffff;
                                        background-color: rgba(126, 0, 158, 1);
                                    }
                                    .image-ultimate-hover-282:hover .iheu-info {
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-282.left_to_right .iheu-info .iheu-data a:first-child{
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-282.left_to_right:hover .iheu-info .iheu-data a:first-child{
                                        transform: translateX(0%);
                                    }
                                    .image-ultimate-hover-282.left_to_right .iheu-info .iheu-data a:last-child{
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-282.left_to_right:hover .iheu-info .iheu-data a:last-child{
                                        transform: translateX(0%);
                                    }
                                    .image-ultimate-hover-282.right_to_left .iheu-info .iheu-data a:first-child{
                                        transform: translateX(100%);
                                    }
                                    .image-ultimate-hover-282.right_to_left:hover .iheu-info .iheu-data a:first-child{
                                        transform: translateX(0%);
                                    }
                                    .image-ultimate-hover-282.right_to_left .iheu-info .iheu-data a:last-child{
                                        transform: translateX(-100%);
                                    }
                                    .image-ultimate-hover-282.right_to_left:hover .iheu-info .iheu-data a:last-child{
                                        transform: translateX(0%);
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-282 image-ultimate-hover-animation-282" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-282">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-282 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage5; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-282 image-ultimate-hover-animation-282" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-282">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-282 right_to_left squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage6; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa fa-twitter"></i></a>
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
                            Style 3 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="button-3">Select</button>
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
                                    .image-ultimate-hover-285{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-285 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-285 .iheu-info {
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
                                        z-index:1;
                                    }
                                    .image-ultimate-hover-animation-285 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-285, 
                                    .image-ultimate-hover-285 .iheu-img, .image-ultimate-hover-285 a .iheu-img,
                                    .image-ultimate-hover-285 .iheu-img:before, .image-ultimate-hover-285 a .iheu-img:before,
                                    .image-ultimate-hover-285 .iheu-img img, .image-ultimate-hover-285 a .iheu-img img,
                                    .image-ultimate-hover-285 .iheu-info, .image-ultimate-hover-285 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-285{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-285 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-285:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-285 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-285 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-285 .iheu-info {
                                        background: rgba(0, 146, 194, 0.5);
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-285 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;
                                        text-align: center;
                                        padding: 30px; 
                                    }
                                    .image-ultimate-hover-285 .iheu-info .iheu-data a{
                                        display: inline-block;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-285 .iheu-info .iheu-data a:first-child{
                                        margin-right: 7px;
                                    }
                                    .image-ultimate-hover-285 .iheu-info .iheu-data a:hover,
                                    .image-ultimate-hover-285 .iheu-info .iheu-data a:active,
                                    .image-ultimate-hover-285 .iheu-info .iheu-data a:focus{
                                        border:none;
                                        box-shadow: none;
                                    }
                                    .image-ultimate-hover-285 .iheu-info .iheu-data .fa{
                                        background: rgba(255, 255, 255, 1);
                                        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -webkit-border-radius: 46px;
                                        -moz-border-radius:46px;
                                        border-radius: 46px;
                                        color: #7e009e;
                                        display: inline-block;
                                        line-height: 40px;
                                        font-size: 18px;
                                        text-align: center;
                                        text-decoration: none;
                                        width: 40px;
                                        height: 40px;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-285 .iheu-info .iheu-data .fa:hover{
                                        color: #ffffff;
                                        background-color: rgba(126, 0, 158, 1);
                                    }
                                    .image-ultimate-hover-285:hover .iheu-info {
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-285.left_to_right .iheu-info .iheu-data a{
                                        -webkit-transform: scale(1.5);
                                        -moz-transform: scale(1.5);
                                        -ms-transform: scale(1.5);
                                        -o-transform: scale(1.5);
                                        transform: scale(1.5);
                                        opacity: 0;
                                    }
                                    .image-ultimate-hover-285.left_to_right:hover .iheu-info .iheu-data a{
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-285.right_to_left .iheu-info .iheu-data a{
                                        -webkit-transform: scale(0.5);
                                        -moz-transform: scale(0.5);
                                        -ms-transform: scale(0.5);
                                        -o-transform: scale(0.5);
                                        transform: scale(0.5);
                                        opacity: 0;
                                    }
                                    .image-ultimate-hover-285.right_to_left:hover .iheu-info .iheu-data a{
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                        opacity: 1;
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-285 image-ultimate-hover-animation-285" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-285">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-285 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-285 image-ultimate-hover-animation-285" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-285">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-285 right_to_left squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa fa-twitter"></i></a>
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
                            Style 4 <span>2 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="button-4">Select</button>
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
                                    .image-ultimate-hover-288{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-288 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-288 .iheu-info {
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
                                        z-index:1;
                                    }
                                    .image-ultimate-hover-animation-288 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-288, 
                                    .image-ultimate-hover-288 .iheu-img, .image-ultimate-hover-288 a .iheu-img,
                                    .image-ultimate-hover-288 .iheu-img:before, .image-ultimate-hover-288 a .iheu-img:before,
                                    .image-ultimate-hover-288 .iheu-img img, .image-ultimate-hover-288 a .iheu-img img,
                                    .image-ultimate-hover-288 .iheu-info, .image-ultimate-hover-288 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-288{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-288 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-288:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-288 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-288 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-288 .iheu-info {
                                        background: rgba(0, 146, 194, 0.5);
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-288 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;
                                        text-align: center;
                                        padding: 30px; 
                                    }
                                    .image-ultimate-hover-288 .iheu-info .iheu-data a{
                                        display: inline-block;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-288 .iheu-info .iheu-data a:first-child{
                                        margin-right: 7px;
                                    }
                                    .image-ultimate-hover-288 .iheu-info .iheu-data a:hover,
                                    .image-ultimate-hover-288 .iheu-info .iheu-data a:active,
                                    .image-ultimate-hover-288 .iheu-info .iheu-data a:focus{
                                        border:none;
                                        box-shadow: none;
                                    }
                                    .image-ultimate-hover-288 .iheu-info .iheu-data .fa{
                                        background: rgba(255, 255, 255, 1);
                                        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -webkit-border-radius: 46px;
                                        -moz-border-radius:46px;
                                        border-radius: 46px;
                                        color: #7e009e;
                                        display: inline-block;
                                        line-height: 40px;
                                        font-size: 18px;
                                        text-align: center;
                                        text-decoration: none;
                                        width: 40px;
                                        height: 40px;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-288 .iheu-info .iheu-data .fa:hover{
                                        color: #ffffff;
                                        background-color: rgba(126, 0, 158, 1);
                                    }
                                    .image-ultimate-hover-288:hover .iheu-info {
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-288.left_to_right .iheu-info .iheu-data a:first-child{
                                        -webkit-transform-origin: 165% 50%;
                                        -moz-transform-origin: 165% 50%;
                                        -ms-transform-origin: 165% 50%;
                                        -o-transform-origin: 165% 50%;
                                        transform-origin: 165% 50%;
                                        -webkit-transform: rotateZ(0deg) scale(0);
                                        -moz-transform: rotateZ(0deg) scale(0);
                                        -ms-transform: rotateZ(0deg) scale(0);
                                        -o-transform: rotateZ(0deg) scale(0);
                                        transform: rotateZ(0deg) scale(0);
                                    }
                                    .image-ultimate-hover-288.left_to_right:hover .iheu-info .iheu-data a:first-child{
                                        webkit-transform: rotateZ(360deg) scale(1);
                                        -moz-transform: rotateZ(360deg) scale(1);
                                        -ms-transform: rotateZ(360deg) scale(1);
                                        -o-transform: rotateZ(360deg) scale(1);
                                        transform: rotateZ(360deg) scale(1);
                                    }
                                    .image-ultimate-hover-288.left_to_right .iheu-info .iheu-data a:last-child{
                                        -webkit-transform: scale(0);
                                        -moz-transform: scale(0);
                                        -ms-transform: scale(0);
                                        -o-transform: scale(0);
                                        transform: scale(0);
                                    }
                                    .image-ultimate-hover-288.left_to_right:hover .iheu-info .iheu-data a:last-child{
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                    }
                                    .image-ultimate-hover-288.right_to_left .iheu-info .iheu-data a:first-child{
                                        -webkit-transform: scale(0);
                                        -moz-transform: scale(0);
                                        -ms-transform: scale(0);
                                        -o-transform: scale(0);
                                        transform: scale(0);
                                    }
                                    .image-ultimate-hover-288.right_to_left:hover .iheu-info .iheu-data a:first-child{
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                    }
                                    .image-ultimate-hover-288.right_to_left .iheu-info .iheu-data a:last-child{
                                        -webkit-transform-origin: -65% 50%;
                                        -moz-transform-origin: -65% 50%;
                                        -ms-transform-origin: -65% 50%;
                                        -o-transform-origin: -65% 50%;
                                        transform-origin: -65% 50%;
                                        -webkit-transform: rotateZ(0deg) scale(0);
                                        -moz-transform: rotateZ(0deg) scale(0);
                                        -ms-transform: rotateZ(0deg) scale(0);
                                        -o-transform: rotateZ(0deg) scale(0);
                                        transform: rotateZ(0deg) scale(0);
                                    }
                                    .image-ultimate-hover-288.right_to_left:hover .iheu-info .iheu-data a:last-child{
                                        -webkit-transform: rotateZ(360deg) scale(1);
                                        -moz-transform: rotateZ(360deg) scale(1);
                                        -ms-transform: rotateZ(360deg) scale(1);
                                        -o-transform: rotateZ(360deg) scale(1);
                                        transform: rotateZ(360deg) scale(1);
                                    }
                                    .image-ultimate-hover-288.top_to_bottom .iheu-info .iheu-data a:first-child{
                                        -webkit-transform-origin: 105% 50%;
                                        -moz-transform-origin: 105% 50%;
                                        -ms-transform-origin: 105% 50%;
                                        -o-transform-origin: 105% 50%;
                                        transform-origin: 105% 50%;
                                        -webkit-transform: rotateZ(360deg) scale(0);
                                        -moz-transform: rotateZ(360deg) scale(0);
                                        -ms-transform: rotateZ(360deg) scale(0);
                                        -o-transform: rotateZ(360deg) scale(0);
                                        transform: rotateZ(360deg) scale(0);
                                    }
                                    .image-ultimate-hover-288.top_to_bottom:hover .iheu-info .iheu-data a:first-child{
                                        -webkit-transform: rotateZ(0deg) scale(1);
                                        -moz-transform: rotateZ(0deg) scale(1);
                                        -ms-transform: rotateZ(0deg) scale(1);
                                        -o-transform: rotateZ(0deg) scale(1);
                                        transform: rotateZ(0deg) scale(1);
                                    }
                                    .image-ultimate-hover-288.top_to_bottom .iheu-info .iheu-data a:last-child{
                                        -webkit-transform-origin: -5% 50%;
                                        -moz-transform-origin: -5% 50%;
                                        -ms-transform-origin: -5% 50%;
                                        -o-transform-origin: -5% 50%;
                                        transform-origin: -5% 50%;
                                        -webkit-transform: rotateZ(360deg) scale(0);
                                        -moz-transform: rotateZ(360deg) scale(0);
                                        -ms-transform: rotateZ(360deg) scale(0);
                                        -o-transform: rotateZ(360deg) scale(0);
                                        transform: rotateZ(360deg) scale(0);
                                    }
                                    .image-ultimate-hover-288.top_to_bottom:hover .iheu-info .iheu-data a:last-child{
                                        -webkit-transform: rotateZ(0deg) scale(1);
                                        -moz-transform: rotateZ(0deg) scale(1);
                                        -ms-transform: rotateZ(0deg) scale(1);
                                        -o-transform: rotateZ(0deg) scale(1);
                                        transform: rotateZ(0deg) scale(1);
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-288 image-ultimate-hover-animation-288" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-288">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-288 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-288 image-ultimate-hover-animation-288" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-288">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-288 top-to-bottom squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa  fa-facebook"></i></a>
                                                        <a href="https://www.oxilab.org/downloads/image-hover-ultimate-pro/"><i class="fa fa-twitter"></i></a>
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
                            Style 5 <span>3 Effects</span>
                        </div>
                        <div class="iheb-admin-style-select-panel-bottom-right">
                            <button type="button" class="btn btn-success"  data-target="button-5">Select</button>
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
                                    .image-ultimate-hover-291{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-291 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-291 .iheu-info {
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
                                        z-index:1;
                                    }

                                    .image-ultimate-hover-animation-291 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-291, 
                                    .image-ultimate-hover-291 .iheu-img, .image-ultimate-hover-291 a .iheu-img,
                                    .image-ultimate-hover-291 .iheu-img:before, .image-ultimate-hover-291 a .iheu-img:before,
                                    .image-ultimate-hover-291 .iheu-img img, .image-ultimate-hover-291 a .iheu-img img,
                                    .image-ultimate-hover-291 .iheu-info, .image-ultimate-hover-291 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-291{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-291 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-291:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-291 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }

                                    .image-ultimate-hover-291 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-291 .iheu-info {
                                        background: rgba(0, 146, 194, 0.5);
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-291 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;
                                        text-align: center;
                                        padding: 30px; 
                                    }
                                    .image-ultimate-hover-291 .iheu-info .iheu-data a{
                                        display: inline-block;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-291 .iheu-info .iheu-data a:first-child{
                                        margin-right: 7px;
                                    }
                                    .image-ultimate-hover-291 .iheu-info .iheu-data a:hover,
                                    .image-ultimate-hover-291 .iheu-info .iheu-data a:active,
                                    .image-ultimate-hover-291 .iheu-info .iheu-data a:focus{
                                        border:none;
                                        box-shadow: none;
                                    }
                                    .image-ultimate-hover-291 .iheu-info .iheu-data .fa{
                                        background: rgba(255, 255, 255, 1);
                                        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -webkit-border-radius: 46px;
                                        -moz-border-radius:46px;
                                        border-radius: 46px;
                                        color: #7e009e;
                                        display: inline-block;
                                        line-height: 40px;
                                        font-size: 18px;
                                        text-align: center;
                                        text-decoration: none;
                                        width: 40px;
                                        height: 40px;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-291 .iheu-info .iheu-data .fa:hover{
                                        color: #ffffff;
                                        background-color: rgba(126, 0, 158, 1);
                                    }
                                    .image-ultimate-hover-291:hover .iheu-info {
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-291.left_to_right .iheu-info .iheu-data a:first-child{
                                        -webkit-transform: translateX(-900%);
                                        -moz-transform: translateX(-900%);
                                        -ms-transform: translateX(-900%);
                                        -o-transform: translateX(-900%);
                                        transform: translateX(-900%);
                                    }
                                    .image-ultimate-hover-291.left_to_right:hover .iheu-info .iheu-data a:first-child{
                                        -webkit-transform: translateX(0%);
                                        -moz-transform: translateX(0%);
                                        -ms-transform: translateX(0%);
                                        -o-transform: translateX(0%);
                                        transform: translateX(0%);
                                    }
                                    .image-ultimate-hover-291.left_to_right .iheu-info .iheu-data a:last-child{
                                        -webkit-transform: translateX(900%);
                                        -moz-transform: translateX(900%);
                                        -ms-transform: translateX(900%);
                                        -o-transform: translateX(900%);
                                        transform: translateX(900%);
                                    }
                                    .image-ultimate-hover-291.left_to_right:hover .iheu-info .iheu-data a:last-child{
                                        -webkit-transform: translateX(0%);
                                        -moz-transform: translateX(0%);
                                        -ms-transform: translateX(0%);
                                        -o-transform: translateX(0%);
                                        transform: translateX(0%);
                                    }
                                    .image-ultimate-hover-291.right_to_left .iheu-info .iheu-data a:first-child{
                                        -webkit-transform-origin: -190% 50%;
                                        -moz-transform-origin: -190% 50%;
                                        -ms-transform-origin: -190% 50%;
                                        -o-transform-origin: -190% 50%;
                                        transform-origin: -190% 50%;
                                        webkit-transform: rotateZ(180deg);
                                        -moz-transform: rotateZ(180deg);
                                        -ms-transform: rotateZ(180deg);
                                        -o-transform: rotateZ(180deg);
                                        transform: rotateZ(180deg);
                                    }
                                    .image-ultimate-hover-291.right_to_left:hover .iheu-info .iheu-data a:first-child{
                                        -webkit-transform: rotateZ(0deg);
                                        -moz-transform: rotateZ(0deg);
                                        -ms-transform: rotateZ(0deg);
                                        -o-transform: rotateZ(0deg);
                                        transform: rotateZ(0deg);
                                    }
                                    .image-ultimate-hover-291.right_to_left .iheu-info .iheu-data a:last-child{
                                        -webkit-transform-origin: 300% 50%;
                                        -moz-transform-origin: 300% 50%;
                                        -ms-transform-origin: 300% 50%;
                                        -o-transform-origin: 300% 50%;
                                        transform-origin: 300% 50%;
                                        -webkit-transform: rotateZ(180deg);
                                        -moz-transform: rotateZ(180deg);
                                        -ms-transform: rotateZ(180deg);
                                        -o-transform: rotateZ(180deg);
                                        transform: rotateZ(180deg);
                                    }
                                    .image-ultimate-hover-291.right_to_left:hover .iheu-info .iheu-data a:last-child{
                                        -webkit-transform: rotateZ(0deg);
                                        -moz-transform: rotateZ(0deg);
                                        -ms-transform: rotateZ(0deg);
                                        -o-transform: rotateZ(0deg);
                                        transform: rotateZ(0deg);
                                    }
                                    .image-ultimate-hover-291.top_to_bottom .iheu-info .iheu-data a:first-child{

                                        -webkit-transform: translateY(-900%);
                                        -moz-transform: translateY(-900%);
                                        -ms-transform: translateY(-900%);
                                        -o-transform: translateY(-900%);
                                        transform: translateY(-900%);
                                    }
                                    .image-ultimate-hover-291.top_to_bottom:hover .iheu-info .iheu-data a:first-child{
                                        -webkit-transform: translateY(0%);
                                        -moz-transform: translateY(0%);
                                        -ms-transform: translateY(0%);
                                        -o-transform: translateY(0%);
                                        transform: translateY(0%);
                                    }
                                    .image-ultimate-hover-291.top_to_bottom .iheu-info .iheu-data a:last-child{
                                        -webkit-transform: translateY(900%);
                                        -moz-transform: translateY(900%);
                                        -ms-transform: translateY(900%);
                                        -o-transform: translateY(900%);
                                        transform: translateY(900%);
                                    }
                                    .image-ultimate-hover-291.top_to_bottom:hover .iheu-info .iheu-data a:last-child{
                                        -webkit-transform: translateY(0%);
                                        -moz-transform: translateY(0%);
                                        -ms-transform: translateY(0%);
                                        -o-transform: translateY(0%);
                                        transform: translateY(0%);
                                    }
                                    .image-ultimate-hover-291.bottom_to_top .iheu-info .iheu-data a:first-child{
                                        -webkit-transform-origin: 50% -110%;
                                        -moz-transform-origin: 50% -110%;
                                        -ms-transform-origin: 50% -110%;
                                        -o-transform-origin: 50% -110%;
                                        transform-origin: 50% -110%;
                                        -webkit-transform: rotateZ(180deg);
                                        -moz-transform: rotateZ(180deg);
                                        -ms-transform: rotateZ(180deg);
                                        -o-transform: rotateZ(180deg);
                                        transform: rotateZ(180deg);
                                    }
                                    .image-ultimate-hover-291.bottom_to_top:hover .iheu-info .iheu-data a:first-child{
                                        -webkit-transform: rotateZ(0deg);
                                        -moz-transform: rotateZ(0deg);
                                        -ms-transform: rotateZ(0deg);
                                        -o-transform: rotateZ(0deg);
                                        transform: rotateZ(0deg);
                                    }
                                    .image-ultimate-hover-291.bottom_to_top .iheu-info .iheu-data a:last-child{
                                        -webkit-transform-origin: 50% 210%;
                                        -moz-transform-origin: 50% 210%;
                                        -ms-transform-origin: 50% 210%;
                                        -o-transform-origin: 50% 210%;
                                        transform-origin: 50% 210%;
                                        -webkit-transform: rotateZ(180deg);
                                        -moz-transform: rotateZ(180deg);
                                        -ms-transform: rotateZ(180deg);
                                        -o-transform: rotateZ(180deg);
                                        transform: rotateZ(180deg);
                                    }
                                    .image-ultimate-hover-291.bottom_to_top:hover .iheu-info .iheu-data a:last-child{
                                        -webkit-transform: rotateZ(0deg);
                                        -moz-transform: rotateZ(0deg);
                                        -ms-transform: rotateZ(0deg);
                                        -o-transform: rotateZ(0deg);
                                        transform: rotateZ(0deg);
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-291 image-ultimate-hover-animation-291" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-291">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-291 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage5; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-291 image-ultimate-hover-animation-291" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-291">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-291 bottom_to_top squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage6; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
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
                            Button Effects 6 <span>4 Layout</span>
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
                                    .image-ultimate-hover-297{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-297 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-297 .iheu-info {
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
                                        z-index:1;
                                    }
                                    .image-ultimate-hover-animation-297 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-297, 
                                    .image-ultimate-hover-297 .iheu-img, .image-ultimate-hover-297 a .iheu-img,
                                    .image-ultimate-hover-297 .iheu-img:before, .image-ultimate-hover-297 a .iheu-img:before,
                                    .image-ultimate-hover-297 .iheu-img img, .image-ultimate-hover-297 a .iheu-img img,
                                    .image-ultimate-hover-297 .iheu-info, .image-ultimate-hover-297 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-297{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-297 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-297:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-297 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-297 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-297 .iheu-info {
                                        background: rgba(0, 146, 194, 0.5);
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-297 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;
                                        text-align: center;
                                        padding: 30px; 
                                    }
                                    .image-ultimate-hover-297 .iheu-info .iheu-data a{
                                        display: inline-block;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-297 .iheu-info .iheu-data a:first-child{
                                        margin-right: 7px;
                                    }
                                    .image-ultimate-hover-297 .iheu-info .iheu-data a:hover,
                                    .image-ultimate-hover-297 .iheu-info .iheu-data a:active,
                                    .image-ultimate-hover-297 .iheu-info .iheu-data a:focus{
                                        border:none;
                                        box-shadow: none;
                                    }
                                    .image-ultimate-hover-297 .iheu-info .iheu-data .fa{
                                        background: rgba(255, 255, 255, 1);
                                        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -webkit-border-radius: 46px;
                                        -moz-border-radius:46px;
                                        border-radius: 46px;
                                        color: #7e009e;
                                        display: inline-block;
                                        line-height: 40px;
                                        font-size: 18px;
                                        text-align: center;
                                        text-decoration: none;
                                        width: 40px;
                                        height: 40px;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-297 .iheu-info .iheu-data .fa:hover{
                                        color: #ffffff;
                                        background-color: rgba(126, 0, 158, 1);
                                    }
                                    .image-ultimate-hover-297:hover .iheu-info {
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-297.left_to_right .iheu-info .iheu-data a{
                                        -webkit-transform: rotateZ(360deg);
                                        -moz-transform: rotateZ(360deg);
                                        -ms-transform: rotateZ(360deg);
                                        -o-transform: rotateZ(360deg);
                                        transform: rotateZ(360deg);
                                    }
                                    .image-ultimate-hover-297.left_to_right:hover .iheu-info .iheu-data a{
                                        -webkit-transform: rotateZ(0deg);
                                        -moz-transform: rotateZ(0deg);
                                        -ms-transform: rotateZ(0deg);
                                        -o-transform: rotateZ(0deg);
                                        transform: rotateZ(0deg);
                                    }
                                    .image-ultimate-hover-297.right_to_left .iheu-info .iheu-data a{
                                        -webkit-transform: rotateZ(-360deg);
                                        -moz-transform: rotateZ(-360deg);
                                        -ms-transform: rotateZ(-360deg);
                                        -o-transform: rotateZ(-360deg);
                                        transform: rotateZ(-360deg);
                                    }
                                    .image-ultimate-hover-297.right_to_left:hover .iheu-info .iheu-data a{
                                        -webkit-transform: rotateZ(0deg);
                                        -moz-transform: rotateZ(0deg);
                                        -ms-transform: rotateZ(0deg);
                                        -o-transform: rotateZ(0deg);
                                        transform: rotateZ(0deg);
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-297 image-ultimate-hover-animation-297" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-297">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-297 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-297 image-ultimate-hover-animation-297" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-297">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-297 right_to_left squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
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
                            Button Effects 7 <span>2 Layout</span>
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
                                    .image-ultimate-hover-300{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-300 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-300 .iheu-info {
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
                                        z-index:1;
                                    }
                                    .image-ultimate-hover-animation-300 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-300, 
                                    .image-ultimate-hover-300 .iheu-img, .image-ultimate-hover-300 a .iheu-img,
                                    .image-ultimate-hover-300 .iheu-img:before, .image-ultimate-hover-300 a .iheu-img:before,
                                    .image-ultimate-hover-300 .iheu-img img, .image-ultimate-hover-300 a .iheu-img img,
                                    .image-ultimate-hover-300 .iheu-info, .image-ultimate-hover-300 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-300{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-300 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-300:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-300 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-300 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-300 .iheu-info {
                                        background: rgba(0, 146, 194, 0.5);
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-300 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;
                                        text-align: center;
                                        padding: 30px; 
                                    }
                                    .image-ultimate-hover-300 .iheu-info .iheu-data a{
                                        display: inline-block;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-300 .iheu-info .iheu-data a:first-child{
                                        margin-right: 7px;
                                    }
                                    .image-ultimate-hover-300 .iheu-info .iheu-data a:hover,
                                    .image-ultimate-hover-300 .iheu-info .iheu-data a:active,
                                    .image-ultimate-hover-300 .iheu-info .iheu-data a:focus{
                                        border:none;
                                        box-shadow: none;
                                    }
                                    .image-ultimate-hover-300 .iheu-info .iheu-data .fa{
                                        background: rgba(255, 255, 255, 1);
                                        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -webkit-border-radius: 46px;
                                        -moz-border-radius:46px;
                                        border-radius: 46px;
                                        color: #7e009e;
                                        display: inline-block;
                                        line-height: 40px;
                                        font-size: 18px;
                                        text-align: center;
                                        text-decoration: none;
                                        width: 40px;
                                        height: 40px;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-300 .iheu-info .iheu-data .fa:hover{
                                        color: #ffffff;
                                        background-color: rgba(126, 0, 158, 1);
                                    }
                                    .image-ultimate-hover-300:hover .iheu-info {
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-300.left_to_right .iheu-info .iheu-data a{
                                        webkit-transform: scaleX(0);
                                        -moz-transform: scaleX(0);
                                        -ms-transform: scaleX(0);
                                        -o-transform: scaleX(0);
                                        transform: scaleX(0);
                                    }
                                    .image-ultimate-hover-300.left_to_right:hover .iheu-info .iheu-data a{
                                        -webkit-transform: scaleX(1);
                                        -moz-transform: scaleX(1);
                                        -ms-transform: scaleX(1);
                                        -o-transform: scaleX(1);
                                        transform: scaleX(1);
                                    }
                                    .image-ultimate-hover-300.top_to_bottom .iheu-info .iheu-data a{
                                        -webkit-transform: scaleY(0);
                                        -moz-transform: scaleY(0);
                                        -ms-transform: scaleY(0);
                                        -o-transform: scaleY(0);
                                        transform: scaleY(0);
                                    }
                                    .image-ultimate-hover-300.top_to_bottom:hover .iheu-info .iheu-data a{

                                        -webkit-transform: scaleY(1);
                                        -moz-transform: scaleY(1);
                                        -ms-transform: scaleY(1);
                                        -o-transform: scaleY(1);
                                        transform: scaleY(1);
                                    }
                                </style>

                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-300 image-ultimate-hover-animation-300" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-300">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-300 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-300 image-ultimate-hover-animation-300" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-300">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-300 top_to_bottom squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage4; ?>">
                                                </div>

                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
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
                            Style 8 <span>2 Effects</span>
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
                                    .image-ultimate-hover-303{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-303 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-303 .iheu-info {
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
                                        z-index:1;
                                    }

                                    .image-ultimate-hover-animation-303 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-303, 
                                    .image-ultimate-hover-303 .iheu-img, .image-ultimate-hover-303 a .iheu-img,
                                    .image-ultimate-hover-303 .iheu-img:before, .image-ultimate-hover-303 a .iheu-img:before,
                                    .image-ultimate-hover-303 .iheu-img img, .image-ultimate-hover-303 a .iheu-img img,
                                    .image-ultimate-hover-303 .iheu-info, .image-ultimate-hover-303 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-303{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-303 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-303:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-303 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-303 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-303 .iheu-info {
                                        background: rgba(0, 146, 194, 0.5);
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-303 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;
                                        text-align: center;
                                        padding: 30px; 
                                    }
                                    .image-ultimate-hover-303 .iheu-info .iheu-data a{
                                        display: inline-block;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-303 .iheu-info .iheu-data a:first-child{
                                        margin-right: 7px;
                                    }
                                    .image-ultimate-hover-303 .iheu-info .iheu-data a:hover,
                                    .image-ultimate-hover-303 .iheu-info .iheu-data a:active,
                                    .image-ultimate-hover-303 .iheu-info .iheu-data a:focus{
                                        border:none;
                                        box-shadow: none;
                                    }
                                    .image-ultimate-hover-303 .iheu-info .iheu-data .fa{
                                        background: rgba(255, 255, 255, 1);
                                        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -webkit-border-radius: 46px;
                                        -moz-border-radius:46px;
                                        border-radius: 46px;
                                        color: #7e009e;
                                        display: inline-block;
                                        line-height: 40px;
                                        font-size: 18px;
                                        text-align: center;
                                        text-decoration: none;
                                        width: 40px;
                                        height: 40px;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-303 .iheu-info .iheu-data .fa:hover{
                                        color: #ffffff;
                                        background-color: rgba(126, 0, 158, 1);
                                    }
                                    .image-ultimate-hover-303:hover .iheu-info {
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-303.left_to_right .iheu-info .iheu-data a{
                                        -webkit-transform: scale(5);
                                        -moz-transform: scale(5);
                                        -ms-transform: scale(5);
                                        -o-transform: scale(5);
                                        transform: scale(5);
                                        opacity: 0;
                                    }
                                    .image-ultimate-hover-303.left_to_right:hover .iheu-info .iheu-data a{
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-303.top_to_bottom .iheu-info .iheu-data a{
                                        -webkit-transform: scale(0);
                                        -moz-transform: scale(0);
                                        -ms-transform: scale(0);
                                        -o-transform: scale(0);
                                        transform: scale(0);
                                        opacity: 0;
                                    }
                                    .image-ultimate-hover-303.top_to_bottom:hover .iheu-info .iheu-data a{
                                        -webkit-transform: scale(1);
                                        -moz-transform: scale(1);
                                        -ms-transform: scale(1);
                                        -o-transform: scale(1);
                                        transform: scale(1);
                                        opacity: 1;
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-303 image-ultimate-hover-animation-303" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-303">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-303 top-to-bottom">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage5; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-303 image-ultimate-hover-animation-303" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-303">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-303 left_to_right squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage6; ?>">
                                                </div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
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
                            Style 9 <span>2 Effects</span>
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
                                    .image-ultimate-hover-306{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-306 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-306 .iheu-info {
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
                                        z-index:1;
                                    }

                                    .image-ultimate-hover-animation-306 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-306, 
                                    .image-ultimate-hover-306 .iheu-img, .image-ultimate-hover-306 a .iheu-img,
                                    .image-ultimate-hover-306 .iheu-img:before, .image-ultimate-hover-306 a .iheu-img:before,
                                    .image-ultimate-hover-306 .iheu-img img, .image-ultimate-hover-306 a .iheu-img img,
                                    .image-ultimate-hover-306 .iheu-info, .image-ultimate-hover-306 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-306{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-306 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-306:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-306 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-306 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-306 .iheu-info { 
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-306 .overlayT{
                                        background: rgba(0, 146, 194, 0.5);
                                        position: absolute;
                                        -webkit-transition: all 0.3s;
                                        -moz-transition: all 0.3s;
                                        -o-transition: all 0.3s;
                                        transition: all 0.3s;
                                    }
                                    .image-ultimate-hover-306 .overlayB{
                                        background: rgba(0, 146, 194, 0.5);
                                        position: absolute;
                                        -webkit-transition: all 0.3s;
                                        -moz-transition: all 0.3s;
                                        -o-transition: all 0.3s;
                                        transition: all 0.3s;
                                    }
                                    .image-ultimate-hover-306 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;
                                        text-align: center;
                                        padding: 30px; 
                                    }
                                    .image-ultimate-hover-306 .iheu-info .iheu-data a{
                                        display: inline-block;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-306 .iheu-info .iheu-data a:first-child{
                                        margin-right: 7px;
                                    }
                                    .image-ultimate-hover-306 .iheu-info .iheu-data a:hover,
                                    .image-ultimate-hover-306 .iheu-info .iheu-data a:active,
                                    .image-ultimate-hover-306 .iheu-info .iheu-data a:focus{
                                        border:none;
                                        box-shadow: none;
                                    }
                                    .image-ultimate-hover-306 .iheu-info .iheu-data .fa{
                                        background: rgba(255, 255, 255, 1);
                                        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -webkit-border-radius: 46px;
                                        -moz-border-radius:46px;
                                        border-radius: 46px;
                                        color: #7e009e;
                                        display: inline-block;
                                        line-height: 40px;
                                        font-size: 18px;
                                        text-align: center;
                                        text-decoration: none;
                                        width: 40px;
                                        height: 40px;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-306 .iheu-info .iheu-data .fa:hover{
                                        color: #ffffff;
                                        background-color: rgba(126, 0, 158, 1);
                                    }
                                    .image-ultimate-hover-306:hover .iheu-info {
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-306.left_to_right .overlayT{
                                        left: 0;
                                        top: -100%;
                                        height: 100%;
                                        width: 100%;
                                    }
                                    .image-ultimate-hover-306.left_to_right .overlayB{
                                        left: 0;
                                        top: 100%;
                                        height: 100%;
                                        width: 100%;
                                    }
                                    .image-ultimate-hover-306.left_to_right:hover .overlayT{
                                        top: 0;
                                    }
                                    .image-ultimate-hover-306.left_to_right:hover .overlayB{
                                        top: 0;
                                    }
                                    .image-ultimate-hover-306.right_to_left .overlayT{
                                        left: -100%;
                                        top: 0;
                                        height: 100%;
                                        width: 100%;
                                    }
                                    .image-ultimate-hover-306.right_to_left .overlayB{
                                        left: 100%;
                                        top: 0;
                                        height: 100%;
                                        width: 100%;
                                    }
                                    .image-ultimate-hover-306.right_to_left:hover .overlayT{
                                        left: 0;
                                    }
                                    .image-ultimate-hover-306.right_to_left:hover .overlayB{
                                        left: 0;
                                    }
                                    .image-ultimate-hover-306.top_to_bottom .overlayT{
                                        width: 100%;
                                        height: 50%;
                                        left: 0;
                                        top: -50%;
                                    }
                                    .image-ultimate-hover-306.top_to_bottom .overlayB{
                                        height: 50%;
                                        left: 0;
                                        width: 100%;
                                        top: 100%;
                                    }
                                    .image-ultimate-hover-306.top_to_bottom:hover .overlayT{
                                        left: 0;
                                        top: 0;
                                    }
                                    .image-ultimate-hover-306.top_to_bottom:hover .overlayB{
                                        left: 0;
                                        top: 50%;
                                    }
                                    .image-ultimate-hover-306.bottom_to_top .overlayT{
                                        width: 50%;
                                        height: 100%;
                                        left: -50%;
                                        top: 0;
                                    }
                                    .image-ultimate-hover-306.bottom_to_top .overlayB{
                                        width: 50%;
                                        height: 100%;
                                        left: 100%;
                                        top: 0;
                                    }
                                    .image-ultimate-hover-306.bottom_to_top:hover .overlayT{
                                        left: 0;
                                        top: 0;
                                    }
                                    .image-ultimate-hover-306.bottom_to_top:hover .overlayB{
                                        left: 50%;
                                        top: 0;
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-306 image-ultimate-hover-animation-306" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-306">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-306 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage1; ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="overlayB"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-306 image-ultimate-hover-animation-306" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-306">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-306 right_to_left squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage2; ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="overlayB"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
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
                            Button Effects 10 <span>4 Layout</span>
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
                                    .image-ultimate-hover-312{
                                        position: relative;
                                        width: 100%;
                                        height: 100%;
                                        -webkit-transition: all 0.35s ease-in-out;
                                        -moz-transition: all 0.35s ease-in-out;
                                        transition: all 0.35s ease-in-out;
                                        overflow: hidden;
                                    }
                                    .image-ultimate-hover-312 .iheu-img {
                                        position: absolute;
                                        top: 0;
                                        bottom: 0;
                                        left: 0;
                                        right: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                    .image-ultimate-hover-312 .iheu-info {
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
                                        z-index:1;
                                    }
                                    .image-ultimate-hover-animation-312 {
                                        animation-duration: 1s;
                                    }
                                    .image-ultimate-hover-312, 
                                    .image-ultimate-hover-312 .iheu-img, .image-ultimate-hover-312 a .iheu-img,
                                    .image-ultimate-hover-312 .iheu-img:before, .image-ultimate-hover-312 a .iheu-img:before,
                                    .image-ultimate-hover-312 .iheu-img img, .image-ultimate-hover-312 a .iheu-img img,
                                    .image-ultimate-hover-312 .iheu-info, .image-ultimate-hover-312 a .iheu-info{
                                        border-radius: 50%;
                                        -moz-border-radius:  50%;
                                        -webkit-border-radius:  50%;
                                        transition: 0.5s;
                                    }
                                    .image-ultimate-hover-padding-312{
                                        padding: 20px;
                                    }
                                    .image-ultimate-map-312 {
                                        max-width: 250px;
                                        width: 100%;
                                        margin: 0 auto;
                                        position: relative;
                                    }
                                    .image-ultimate-map-312:after {
                                        padding-bottom: 100%;
                                        content: "";
                                        display: block;
                                    }
                                    .image-ultimate-hover-312 .iheu-img:before {
                                        position: absolute;
                                        display: block;
                                        content: '';
                                        width: 100%;
                                        height: 100%;
                                        box-shadow: inset 0 0 0 15px rgba(0, 146, 194, 0.3);
                                    }
                                    .image-ultimate-hover-312 .iheu-img {
                                        width: 100%;
                                        float: left;
                                    }
                                    .image-ultimate-hover-312 .iheu-info { 
                                        opacity: 0;
                                        -webkit-transition: all 0.8s ease-in-out;
                                        -moz-transition: all 0.8s ease-in-out;
                                        transition: all 0.8s ease-in-out;
                                    }
                                    .image-ultimate-hover-312 .overlayT{
                                        background: rgba(0, 146, 194, 0.5);
                                        position: absolute;
                                        -webkit-transition: all 0.3s;
                                        -moz-transition: all 0.3s;
                                        -o-transition: all 0.3s;
                                        transition: all 0.3s;
                                    }
                                    .image-ultimate-hover-312 .iheu-info .iheu-data{
                                        display: table-cell;
                                        vertical-align: middle;
                                        text-align: center;
                                        padding: 30px; 
                                    }
                                    .image-ultimate-hover-312 .iheu-info .iheu-data a{
                                        display: inline-block;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-312 .iheu-info .iheu-data a:first-child{
                                        margin-right: 7px;
                                    }
                                    .image-ultimate-hover-312 .iheu-info .iheu-data a:hover,
                                    .image-ultimate-hover-312 .iheu-info .iheu-data a:active,
                                    .image-ultimate-hover-312 .iheu-info .iheu-data a:focus{
                                        border:none;
                                        box-shadow: none;
                                    }
                                    .image-ultimate-hover-312 .iheu-info .iheu-data .fa{
                                        background: rgba(255, 255, 255, 1);
                                        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
                                        -webkit-border-radius: 46px;
                                        -moz-border-radius:46px;
                                        border-radius: 46px;
                                        color: #7e009e;
                                        display: inline-block;
                                        line-height: 40px;
                                        font-size: 18px;
                                        text-align: center;
                                        text-decoration: none;
                                        width: 40px;
                                        height: 40px;
                                        -webkit-transition: all 0.3s ease-in-out;
                                        -moz-transition: all 0.3s ease-in-out;
                                        transition: all 0.3s ease-in-out;
                                    }
                                    .image-ultimate-hover-312 .iheu-info .iheu-data .fa:hover{
                                        color: #ffffff;
                                        background-color: rgba(126, 0, 158, 1);
                                    }
                                    .image-ultimate-hover-312:hover .iheu-info {
                                        opacity: 1;
                                    }
                                    .image-ultimate-hover-312.left_to_right .overlayT{
                                        height: 300%;
                                        left: -300%;
                                        width: 300%;
                                        top: -150%;
                                        -webkit-transform: skewX(-45deg);
                                        -moz-transform: skewX(-45deg);
                                        -ms-transform: skewX(-45deg);
                                        -o-transform: skewX(-45deg);
                                        transform: skewX(-45deg);
                                    }
                                    .image-ultimate-hover-312.left_to_right:hover .overlayT{
                                        left: 0;
                                    }
                                    .image-ultimate-hover-312.right_to_left .overlayT{
                                        height: 300%;
                                        left: 300%;
                                        width: 300%;
                                        top: 0;
                                        -webkit-transform: skewX(45deg);
                                        -moz-transform: skewX(45deg);
                                        -ms-transform: skewX(45deg);
                                        -o-transform: skewX(45deg);
                                        transform: skewX(45deg);
                                    }               
                                    .image-ultimate-hover-312.right_to_left:hover .overlayT{
                                        left: 0%;
                                    }
                                    .image-ultimate-hover-312.top_to_bottom .overlayT{
                                        height: 300%;
                                        left: 300%;
                                        width: 300%;
                                        top: 0;
                                        -webkit-transform: skewX(-45deg);
                                        -moz-transform: skewX(-45deg);
                                        -ms-transform: skewX(-45deg);
                                        -o-transform: skewX(-45deg);
                                        transform: skewX(-45deg);
                                    }
                                    .image-ultimate-hover-312.top_to_bottom:hover .overlayT{
                                        left: -150%;
                                    }
                                    .image-ultimate-hover-312.bottom_to_top .overlayT{
                                        height: 300%;
                                        left: -300%;
                                        width: 300%;
                                        top: 0;
                                        -webkit-transform: skewX(45deg);
                                        -moz-transform: skewX(45deg);
                                        -ms-transform: skewX(45deg);
                                        -o-transform: skewX(45deg);
                                        transform: skewX(45deg);
                                    }
                                    .image-ultimate-hover-312.bottom_to_top:hover .overlayT{
                                        left: 0%;
                                    }
                                </style>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-312 image-ultimate-hover-animation-312" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-312">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-312 left_to_right">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage3; ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-ultimate-responsive-2  image-ultimate-animation-js image-ultimate-hover-padding-312 image-ultimate-hover-animation-312" data-av-animation="slideInUp">
                                    <div class="image-ultimate-map-312">
                                        <div class="image-ultimate-map-absulate">
                                            <div class="image-ultimate-hover image-ultimate-hover-312 top_to_bottom squar">
                                                <div class="iheu-img">
                                                    <img src="<?php echo $iheuimage4; ?>">
                                                </div>
                                                <div class="overlayT"></div>
                                                <div class="iheu-info">
                                                    <div class="iheu-data">
                                                        <a href="#"><i class="fa  fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
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
                            Button Effects 11 <span>4 Layout</span>
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

<div class="modal fade" id="iheu-button-data" >
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
            jQuery("#iheu-button-data").modal("show");
        });
    });
</script>
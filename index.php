<?php

/**
Plugin Name: myfooter
Description: plugins for add footer 
 */
?>
<?php
if (!defined('ABSPATH')) exit;

add_action('admin_menu', 'my_admin_menu');

function my_admin_menu()
{
    add_menu_page('Footer Text title', 'myfooter', 'manage_options', 'footer_setting_page', 'mt_settings_page', 'dashicons-menu-alt');
}
// 
function mt_settings_page()
{
    echo "<h1>" . __('configuration your menu', 'menu-test') . "</h1>";
    include_once('config.php');
}

function footerInjection()
{
    $footerText = get_option('footer_text');
    $facebookUrl = get_option('facebook_URL');
    $twitertUrl = get_option('twitter_URL');
    $instaUrl = get_option('insta_URL');
    echo "<div style='color: #eee;
    width: 100%;
    height: fit-content;
    background-color: #23282d;
    display: flex;
    justify-content: space-around;
    padding: 11px 128px;
    align-items: center;'>";
    // 
    echo "<span>";
    echo $footerText;
    echo "</span>";
    echo "<div style='display:flex;align-items: center;'>";
    //
    if ($facebookUrl) {
        echo "<a href=$facebookUrl>";
        echo '<svg xmlns="http://www.w3.org/2000/svg" style="height: 30px;
        fill: #eee;" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50" style="null" class="icon icons8-Facebook-Filled" >    <path d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"></path></svg>';
        echo "</a>";
    }
    if ($twitertUrl) {
        echo "<a href=$twitertUrl>";
        echo '<svg style="display:inline-block;fill:currentcolor;height:72px;max-width:100%;vertical-align:text-bottom;color:#eee;width:72px;top:0;left:0;right:0;bottom:0;margin:auto;width: 30px;" viewBox="0 0 24 24"><g>
    
        <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733a4.67 4.67 0 0 0 2.048-2.578 9.3 9.3 0 0 1-2.958 1.13 4.66 4.66 0 0 0-7.938 4.25 13.229 13.229 0 0 1-9.602-4.868c-.4.69-.63 1.49-.63 2.342A4.66 4.66 0 0 0 3.96 9.824a4.647 4.647 0 0 1-2.11-.583v.06a4.66 4.66 0 0 0 3.737 4.568 4.692 4.692 0 0 1-2.104.08 4.661 4.661 0 0 0 4.352 3.234 9.348 9.348 0 0 1-5.786 1.995 9.5 9.5 0 0 1-1.112-.065 13.175 13.175 0 0 0 7.14 2.093c8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602a9.47 9.47 0 0 0 2.323-2.41z"></path></g></svg>';
        echo "</a>";
    }
    if ($instaUrl) {
        echo "<a href=$instaUrl>";
        
        echo '<svg class="instagram" fill="#ffffff" height="36PX" viewBox="0 0 24 24" width="38" xmlns="http://www.w3.org/2000/svg" ><path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" /></svg>';
        echo "</a>";
    }
    // 
    echo "</div>";
    // 
    echo "</div>";
}
add_action('wp_footer', 'footerInjection');
<?php
/**
 * Plugin Name: WP Mobile Detect Lib
 * Plugin URI: https://apps.walialu.com/wp-mobile-detect-lib/
 * Author: Marco Kellershoff
 * Author URI: https://about.walialu.com/
 * Version: 1.0.0
 * Description: Make the awesome `Mobile_Detect.php` globally lib available
 */

class WP_Mobile_Detect_Lib
{
    public function __construct()
    {
    }
}

if (!class_exists("Mobile_Detect")) {
    require_once(__DIR__ . "/lib/Mobile_Detect.php");
}


function getMobileDetectLib()
{
    return new Mobile_Detect;
}

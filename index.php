<?php
/**
 * Plugin Name: Oaz Debugger
 * Description: This plugin give you power of debugging by using whoops package of Symfony for handling and trance errors
 * and the dump function to print on web browser information contained on the variable passed on parameters and more
 * infos with ergonomic design to take development more friendly.
 * Version:     1.0.0
 * Author:      Oussama ZERRYI ANDALOUSSI
 * Author URI:  https://github.com/oaztech
 * Php version: 7.4.9
 */

/*$_ENV['APP_PATH'] = dirname(__FILE__);
$_ENV['APP_URL'] = plugins_url() . '/' . basename(dirname(__FILE__));
$_ENV['DB_PREFIX'] = $GLOBALS['table_prefix'];*/

require plugin_dir_path(__FILE__) . '/vendor/autoload.php';

(new \Whoops\Run)->pushHandler(new \Whoops\Handler\PrettyPageHandler)->register();

//require_once $_ENV['APP_PATH'] . '/config.php';

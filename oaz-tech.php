<?php
/**
 * Plugin Name: OazTecH
 * Description: Send newsletters to MAP subscribers.
 * Version:     1.0.0
 * Author:      Oussama ZERRYI ANDALOUSSI
 * Author URI:  https://twinsgroupe.com/
 * Php version: 7.4.9
 */

require __DIR__ . '/vendor/autoload.php';

(new \Whoops\Run)->pushHandler(new \Whoops\Handler\PrettyPageHandler)->register();

add_action('admin_menu', function () {

    // main menu
    add_menu_page('OazTecH Debugger', 'Oaz TecH', 'manage_options', 'vue',
        null, 'dashicons-text-page', 5);

    // sub menus
    add_submenu_page(
        'vue',
        'vue',
        'vue',
        'manage_options',
        'vue',
        fn () => plugin_dir_url(__FILE__) . '/views/admin/html_newsletter.php'
    );
});

add_action('admin_enqueue_scripts', function () {
    wp_enqueue_style('l1', plugin_dir_url(__FILE__) . '/dist/css/app.fb0c6e1c.css');
    wp_enqueue_style('l2', plugin_dir_url(__FILE__) . '/dist/js/app.1549066e.js');
    wp_enqueue_style('l3', plugin_dir_url(__FILE__) . '/dist/js/chunk-vendors.28d0d835.js');
    wp_enqueue_style('l4', plugin_dir_url(__FILE__) . '/dist/css/app.fb0c6e1c.css');

    wp_enqueue_script('l5', plugin_dir_url(__FILE__) . '/dist/js/chunk-vendors.28d0d835.js', [], '', true);
    wp_enqueue_script('l6', plugin_dir_url(__FILE__) . '/dist/js/app.7d55ee11.js', [], '', true);

});

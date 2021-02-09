<?php
add_action('admin_menu', function () {

    // main menu
    add_menu_page('OazTecH Debugger', 'Oaz Debugger', 'manage_options', 'debug_area',
        null, 'dashicons-admin-tools', 5);

    // sub menus
    add_submenu_page(
        'debug_area',
        'Debugging area',
        'Debugging area',
        'manage_options',
        'debug_area',
        fn() => require_once $_ENV['_APP_PATH'] . '/views/Debug_area.php');
    add_submenu_page(
        'debug_area',
        'Setting',
        'Setting',
        'manage_options',
        'setting',
        fn() => require_once $_ENV['_APP_PATH'] . '/views/setting.php');
});

add_action('admin_enqueue_scripts', function () {
    $currentPage = $_GET["page"] ?? 0;
    $authorizedPage = [
        'setting',
        'debug_area',
    ];

    // if page not authorized exit function
    if (!in_array($currentPage, $authorizedPage)) return;

    //wp_enqueue_style('l1', plugin_dir_url(__FILE__) . '/assets/css/app.fb0c6e1c.css');
    wp_enqueue_script($currentPage, $_ENV['_APP_URL'] . "/assets/js/$currentPage.app.js", [], '', true);
});

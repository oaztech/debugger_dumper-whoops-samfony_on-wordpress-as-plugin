<?php
add_action('admin_menu', function () {

    // main menu
    add_menu_page('OazTecH Debugger', 'Oaz Debugger', 'manage_options', 'setting',
        null, 'dashicons-admin-tools', 5);

    // sub menus
    add_submenu_page(
        'setting',
        'setting',
        'setting',
        'manage_options',
        'setting',
        fn() => require_once $_ENV['APP_PATH'] . '/views/setting.php'
    );
});

add_action('admin_enqueue_scripts', function () {
    //wp_enqueue_style('l1', plugin_dir_url(__FILE__) . '/assets/css/app.fb0c6e1c.css');
    wp_enqueue_style('setting', $_ENV['APP_URL'] . '/assets/js/setting.app.js');

});

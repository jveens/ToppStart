<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'toppstart-style',
        get_template_directory_uri() . '/build/css/style.css',
        [],
        filemtime(get_template_directory() . '/build/css/style.css')
    );

    wp_enqueue_script(
        'toppstart-js',
        get_template_directory_uri() . '/build/js/main.js',
        [],
        filemtime(get_template_directory() . '/build/js/main.js'),
        true
    );
});

add_action('admin_enqueue_scripts', function () {
  wp_enqueue_style(
    'toppstart-admin-style',
    get_template_directory_uri() . '/build/css/admin.css',
    [],
    filemtime(get_template_directory() . '/build/css/admin.css')
  );

  wp_enqueue_script(
    'toppstart-admin-js',
    get_template_directory_uri() . '/build/js/admin.js',
    [],
    filemtime(get_template_directory() . '/build/js/admin.js'),
    true
  );
});

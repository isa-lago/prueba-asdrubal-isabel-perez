<?php
function asdrubal_enqueue_scripts() {
    wp_enqueue_style('asdrubal-style', get_stylesheet_uri());
    wp_enqueue_script('asdrubal-script', get_template_directory_uri() . '/script.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'asdrubal_enqueue_scripts');
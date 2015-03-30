<?php 
/**
* загружаемые стили и скрипты
**/
function load_style_script() {
    wp_enqueue_script('js-file', get_template_directory_uri() . '/js/js-file.js');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
/**
* загружаем стили и скритпы
**/
add_action('wp_enqueue_scripts', 'load_style_script');
?>
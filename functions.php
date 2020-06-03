<?php
function my_theme_enqueue_styles() {
    $parent_style = 'foodica-style'; 
    $child-style = 'foodica-child-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $child-style, get_stylesheet_uri() );
}
?>
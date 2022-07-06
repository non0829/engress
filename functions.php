<?php

// CSS, JS 読み込み

function enqueue_scripts()
{
    // CSS
    if (is_front_page()) {
        wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/css/style.css', array(), '', '');
    } else if (is_page('contact') || is_page('contact_confirm')) {
        wp_enqueue_style('contact', get_stylesheet_directory_uri() . '/css/contact.css', array(), '', '');
    } else if (is_page('price')) {
        wp_enqueue_style('price', get_stylesheet_directory_uri() . '/css/price.css', array(), '', '');
    } else if (is_post_type_archive('blog')) {
        wp_enqueue_style('blog', get_stylesheet_directory_uri() . '/css/blog.css', array(), '', '');
    } else if (is_post_type_archive('news')) {
        wp_enqueue_style('news', get_stylesheet_directory_uri() . '/css/news.css', array(), '', '');
    } else if (is_singular('blog')) {
        wp_enqueue_style('single_blog', get_stylesheet_directory_uri() . '/css/single_blog.css', array(), '', '');
    } else if (is_singular('news')) {
        wp_enqueue_style('single_news', get_stylesheet_directory_uri() . '/css/single_news.css', array(), '', '');
    } 

    // JS
    wp_enqueue_script('main', get_template_directory_uri() . '/main.js', array(), '', '');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
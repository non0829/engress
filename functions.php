<?php

// 抜粋の使用
add_post_type_support('post','excerpt');
add_post_type_support('news','excerpt');
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

// CSS, JS 読み込み

function enqueue_scripts()
{
    // CSS
    if (is_front_page()) {
        wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/css/style.css', array(), '', '');
    } else if (is_page('contact') || is_page('contact_confirm')) {
        wp_enqueue_style('contact', get_stylesheet_directory_uri() . '/css/contact.css', array(), '', '');
    } else if (is_post_type_archive('plan')) {
        wp_enqueue_style('price', get_stylesheet_directory_uri() . '/css/price.css', array(), '', '');
    } else if (is_post_type_archive('news')) {
        wp_enqueue_style('news', get_stylesheet_directory_uri() . '/css/news.css', array(), '', '');
    } else if (is_archive()) {
        wp_enqueue_style('blog', get_stylesheet_directory_uri() . '/css/blog.css', array(), '', '');
    } else if (is_singular('news')) {
        wp_enqueue_style('single_news', get_stylesheet_directory_uri() . '/css/single_news.css', array(), '', '');
    } else if (is_single()) {
        wp_enqueue_style('single_blog', get_stylesheet_directory_uri() . '/css/single_blog.css', array(), '', '');
    } 

    // JS
    wp_enqueue_script('main', get_template_directory_uri() . '/main.js', array(), '', '');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blog'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// 抜粋の後ろの追加文字を変更する
function twpp_change_excerpt_more( $more ) {
    return ' ...';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );
<?php

// 抜粋の使用
add_post_type_support('post', 'excerpt');
add_post_type_support('news', 'excerpt');
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

// CSS, JS 読み込み

function enqueue_scripts()
{
    // CSS
    if (is_front_page()) {
        wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/css/style.css', array(), '', '');
    } else if (is_page('contact') || is_page('confirm')) {
        wp_enqueue_style('contact', get_stylesheet_directory_uri() . '/css/contact.css', array(), '', '');
    } else if (is_post_type_archive('price')) {
        wp_enqueue_style('price', get_stylesheet_directory_uri() . '/css/price.css', array(), '', '');
        wp_enqueue_style('scroll', 'https://unpkg.com/scroll-hint@latest/css/scroll-hint.css', array(), '', '');
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
    if (is_post_type_archive('price')) {
        wp_enqueue_script('scroll', 'https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js', array(), '', '');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type)
{

    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog'; //任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// 抜粋の後ろの追加文字を変更する
function twpp_change_excerpt_more($more)
{
    return ' ...';
}
add_filter('excerpt_more', 'twpp_change_excerpt_more');

// デフォルトの投稿をブログに変更

function Change_menulabel()
{
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name . '一覧';
    $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name . 'の新規追加';
    $labels->edit_item = $name . 'の編集';
    $labels->new_item = '新規' . $name;
    $labels->view_item = $name . 'を表示';
    $labels->search_items = $name . 'を検索';
    $labels->not_found = $name . 'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');

function bcn_add($bcnObj)
{
    // デフォルト投稿のアーカイブかどうか
    if (is_post_type_archive('post')) {
        // 新規のtrailオブジェクトを末尾に追加する
        $bcnObj->add(new bcn_breadcrumb('ブログ', null, array('archive', 'post-clumn-archive', 'current-item')));
        // trailオブジェクト0とtrailオブジェクト1の中身を入れ替える
        $trail_tmp = clone $bcnObj->trail[1];
        $bcnObj->trail[1] = clone $bcnObj->trail[0];
        $bcnObj->trail[0] = $trail_tmp;
    }
    return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');

function bcn_add_detail($bcnObj)
{
    // デフォルト投稿の詳細ページかどうか
    if (is_singular('post')) {
        // 新規のtrailオブジェクトを末尾に追加する
        $trail_tmp = $bcnObj->trail[2];
        $bcnObj->add(new bcn_breadcrumb('ブログ', null, array('post-clumn-archive'), home_url('blog'), null, true));
        $bcnObj->trail[2] = clone $bcnObj->trail[3];
        $bcnObj->trail[3] = $trail_tmp;
    }
    return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add_detail');
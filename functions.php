<?php

// Jqueryとcssファイルの読み込み
function my_enqueue_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jpuery_js', get_template_directory_uri() . '/js/script.js', array() );
    wp_enqueue_style( 'my_styles', get_template_directory_uri() . '/css/style.css', array() );
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');
// サムネイルのsize追加
add_image_size( 'post-thumb', 300, 9999, );

// 投稿とコメントのRSSフィードのリンクを有効
add_theme_support( 'automatic-feed-links' );

// タイトルタグの自動生成
add_theme_support( 'title-tag' );

// メニューの登録
function my_menu_init() {
    register_nav_menus(
        array(
        'nav' => 'ナビメニュー'
        )
    );
}

add_action('init', 'my_menu_init');

// メニューにclassを追加
function add_additional_class($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class', 1, 3);

// 抜粋
function custom_excerpt_length( $length ) {
    return 10;	//表示したい文字数
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// 抜粋
function new_excerpt_more($more) {
    return '…';
}
add_filter('excerpt_more', 'new_excerpt_more');


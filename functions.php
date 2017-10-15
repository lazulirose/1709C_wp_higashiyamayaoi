<?php
/**
 * Talon functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Higashiyama Yaoi
 */

error_reporting(0);
function disable_emojis() {
     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
     remove_action( 'wp_print_styles', 'print_emoji_styles' );
     remove_action( 'admin_print_styles', 'print_emoji_styles' );     
     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
     add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );


// css
function register_stylesheet() {
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'register_stylesheet' );

// js
function register_script(){ 
    wp_enqueue_script('jquery');
	wp_enqueue_script('common', get_template_directory_uri() . '/js/min/common.js');	
    wp_enqueue_script('feature', get_template_directory_uri() . '/js/min/feature.min.js');
}
add_action('wp_enqueue_scripts','register_script');

// custom menu
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array( 'post','main_item','standard_item','ss_item','aw_item','assorted_item','recommended_item', 'media'));

flush_rewrite_rules( false );
function remove_menus () {
    global $menu;
    unset($menu[2]);	// ダッシュボード
    unset($menu[4]);  // メニューの線1
    unset($menu[5]);  // 投稿
    unset($menu[10]);  // メディア
    unset($menu[15]); // リンク
    unset($menu[20]); // ページ
    unset($menu[25]); // コメント
    unset($menu[59]); // メニューの線2
    //unset($menu[60]); // テーマ
    unset($menu[65]); // プラグイン
    unset($menu[70]); // プロフィール
    //unset($menu[75]); // ツール
    //unset($menu[80]); // 設定
    unset($menu[90]); // メニューの線3
}
add_action('admin_menu', 'remove_menus');
add_action( 'pre_get_posts', 'home_posts_type' );

function home_posts_type( $wp_query ) {
    if ( ! is_admin() && $wp_query->is_main_query() && $wp_query->is_home() ) {
        $wp_query->set( 'post_type', array( 'post', 'main_item','standard_item','ss_item','aw_item','assorted_item','recommended_item','media','news' ) );
    }
}

add_filter('redirect_canonical','my_disable_redirect_canonical');
function my_disable_redirect_canonical( $redirect_url ) {
	if ( is_archive( ) ){
		$subject = $redirect_url;
		$pattern = '/\/page\//';
		preg_match($pattern, $subject, $matches);

		if ($matches){
		$redirect_url = false;
		return $redirect_url;
		}
	}
}
add_filter( 'next_posts_link_attributes', 'add_next_posts_link_class' );
function add_next_posts_link_class() {
  return 'class="next-btn"';
}

function post_thumbs_gallery($max='-1', $size='thumbnail'){
    global $post;
    $args = array(
        'post_type' => 'attachment',
        'numberposts' => $max,
        'post_status' => inherit,
        'post_parent' => $post->ID,
        'post_mime_type' => 'image',
        'orderby' => 'menu_order ID',
    );
    $attachments = get_posts($args);
    if (is_array($attachments)) {
        foreach ($attachments as $attachment) {
           echo '<a href="'.$attachment->guid.'" title="'.$attachment->post_title.'">'.wp_get_attachment_image($attachment->ID,$size)."</a>";
        }
    }
}
function posts_per_page($query) {

  if ( is_admin() || ! $query->is_main_query() ){
      $query->set( 'posts_per_page', '30' );  
      //return;
 }
    if ( $query->is_post_type_archive( 'itemlist' ) ) {
        $query->set( 'posts_per_page', '30' );
    }
    if ( $query->is_post_type_archive( 'media' ) ) {
        $query->set( 'posts_per_page', '4' );
    }
    if ( $query->is_post_type_archive( 'news' ) ) {
        $query->set( 'posts_per_page', '4' );
    }
}
add_action( 'pre_get_posts', 'posts_per_page' );

function news_post_type() {
    register_post_type( 'news',
        array(
            'label' => '新着情報',
            'public'        => true,
            'show_in_menu'  => true,
            'menu_position' => 5,
            'hierarchical'       => true,
            'has_archive'        => true,
            'query_var'          => true,
            'publicly_queryable' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ), 
        )
    );
}
add_action( 'init', 'news_post_type', 1 );

function media_post_type() {
    register_post_type( 'media',
        array(
            'label' => 'メディア情報',
            'public'             => true,
            'show_in_menu'       => true, 
            'menu_position'      => 5,
            'hierarchical'       => true,
            'has_archive'        => true,
            'query_var'          => true,
            'publicly_queryable' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ), 
        )
    );
}
add_action( 'init', 'media_post_type', 1 );

function main_item_post_type() {
    register_post_type( 'main_item',
        array(
            'label' => '看板商品',
            'public'             => true,
            'show_in_menu'       => true, 
            'menu_position'      => 5, 
            'hierarchical'       => true, 
            'has_archive'        => true,
            'query_var'          => true,
            'publicly_queryable' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
        )
    );
}
add_action( 'init', 'main_item_post_type', 1 );

function standard_item_post_type() {
    register_post_type( 'standard_item',
        array(
            'label' => '通年商品', //表示名
            'public'             => true,
            'show_in_menu'       => true, 
            'menu_position'      => 5, 
            'hierarchical'       => true, 
            'has_archive'        => true,
            'query_var'          => true,
            'publicly_queryable' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ), 
        )
    );
}
add_action( 'init', 'standard_item_post_type', 1 );

function ss_item_post_type() {
    register_post_type( 'ss_item',
        array(
            'label' => '春夏商品', 
            'public'             => true,
            'show_in_menu'       => true, 
            'menu_position'      => 5, 
            'hierarchical'       => true, 
            'has_archive'        => true,
            'query_var'          => true,
            'publicly_queryable' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
        )
    );
}
add_action( 'init', 'ss_item_post_type', 1 );

function aw_item_post_type() {
    register_post_type( 'aw_item',
        array(
            'label' => '秋冬商品', 
            'public'             => true,
            'show_in_menu'       => true, 
            'menu_position'      => 5, 
            'hierarchical'       => true, 
            'has_archive'        => true,
            'query_var'          => true,
            'publicly_queryable' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ), 
        )
    );
}
add_action( 'init', 'aw_item_post_type', 1 );

function assorted_item_post_type() {
    register_post_type( 'assorted_item',
        array(
            'label' => '季節の詰め合わせ', 
            'public'             => true,
            'show_in_menu'       => true, 
            'menu_position'      => 5, 
            'hierarchical'       => true, 
            'has_archive'        => true,
            'query_var'          => true,
            'publicly_queryable' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
        )
    );
}
add_action( 'init', 'assorted_item_post_type', 1 );

function recommended_item_post_type() {
    register_post_type( 'recommended_item',
        array(
            'label' => 'おすすめ商品/TOPページに表示', 
            'public'             => true,
            'show_in_menu'       => true, 
            'menu_position'      => 5,
            'query_var'          => true,
            'publicly_queryable' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
        )
    );
}
add_action( 'init', 'recommended_item_post_type', 1 );
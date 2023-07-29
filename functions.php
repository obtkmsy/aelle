<?php
/*
* テーマのための関数
* @package WordPress
* @subpackage smart
* @since 3.0.0
*/

$template_root_dir = dirname(__FILE__);

// スタイルシート読み込み

define("DIRE", get_template_directory_uri());
function add_css_js() {
  //全てのページにstyle.cssを読み込み
  wp_enqueue_style('normalize',DIRE.'/css/normalize.css' );
  wp_enqueue_style('base',DIRE.'/css/base.css' );
  wp_enqueue_style('comm',DIRE.'/css/common.css' );
}
add_action('wp_enqueue_scripts', 'add_css_js');

# SEO関連
require_once $template_root_dir . '/libs/settings/seo.php';
# head-css
// require_once $template_root_dir . '/libs/settings/head-desc.php';

// スラッグ取得関数
function slug(){
    global $post;
    return $post->post_name;
}


// 画像パス取得関数の省略化

function tmpdir( $file_name = NULL ){
    if( $file_name ){
        $url = esc_url( get_template_directory_uri().'/img/'.slug().'/'.$file_name );
        $path = get_template_directory().'/img/'.slug().'/'.$file_name;
        return $url;
    }
    else{
        return esc_url( get_template_directory_uri());
    }
}
// homeurlのショートコード
// function homePathcode() {
//     return get_home_url();
//   }
//   add_shortcode('homeurl', 'homePathcode');

//bodyクラスにスラッグを追加
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  if ( is_page()) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;
  }
  return $classes;
}

// カスタムメニュー
register_nav_menu( 'header-menu', 'ヘッダーメニュー' );
register_nav_menu( 'footer-menu1', 'フッターメニュー1' );
register_nav_menu( 'footer-menu2', 'フッターメニュー2' );

// カスタム投稿

//ACFの読み込み
require_once $template_root_dir . '/libs/acf/acf.php';

// カスタムタクソノミー

// パンくずリスト
require_once $template_root_dir . '/libs/parts/breadcrumb.php';

//投稿ページサムネイル表示
add_theme_support('post-thumbnails');

// ページャーの読み込み
require_once $template_root_dir . '/libs/parts/pagination.php';

// ユーザープロフィール情報内で改行できるように
remove_filter('pre_user_description', 'wp_filter_kses');

//
function remove_menus () {
    // remove_menu_page('index.php');                // ダッシュボード
    // remove_menu_page('edit.php');                 // 投稿
    // remove_menu_page('upload.php');               // メディア
    // remove_menu_page('edit.php?post_type=page');  // 固定ページ
    remove_menu_page('edit-comments.php');        // コメント
    // remove_menu_page('edit.php?post_type=acf-field-group');        // acf
    // remove_menu_page('themes.php');               // 外観
    // remove_menu_page('plugins.php');              // プラグイン
    // remove_menu_page('users.php');                // ユーザー
    // remove_menu_page('tools.php');                // ツール
    // remove_menu_page('options-general.php');      // 設定
}
add_action('admin_menu', 'remove_menus'); 


# Sitemap
require_once $template_root_dir . '/libs/functions/sitemap.php';


//Wordpressrobots
function custom_robots_txt($output) {
$public = get_option( 'blog_public' );
$site_url = parse_url( site_url() );
$path = ( !empty( $site_url['path'] ) ) ? $site_url['path'] : '';
if ( '0' != $public ) {
  $output .= "Disallow: $path/wp-includes\n";
  $output .= "Disallow: $path/wp-content/themes\n";
  $output .= "Disallow: $path/wp-content/plugins\n";
  $output .= "Disallow: $path/contact/thanks\n";
  $output .= "Disallow: $path/operation/thanks\n";
}
return $output;
}
add_filter('robots_txt', 'custom_robots_txt');



function custom_author_archive( &$query ) {
if ($query->is_author)
$query->set( 'post_type', array( 'column') );
}
add_action( 'pre_get_posts', 'custom_author_archive' );

/*WPform */
function mvwpform_autop_filter() {
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();

// ウィジェットタイトル非表示
function mycus_remove_widget_title_func( $widget_title ) {
      return null;
  }
  add_filter( 'widget_title', 'mycus_remove_widget_title_func' );

// 記事のPVを取得
function getPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count=='') {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count.' Views';
}


//投稿のアーカイブurlを追加
// add_filter('register_post_type_args', function($args, $post_type) {
//   if ('post' == $post_type) {
//       global $wp_rewrite;
//       $archive_slug = 'service'; //URLスラッグ
//       $args['label'] = 'サービス'; //管理画面左ナビに「投稿」の代わりに表示される
//       $args['has_archive'] = $archive_slug;
//       $archive_slug = $wp_rewrite->root.$archive_slug;
//       $feeds = '(' . trim( implode('|', $wp_rewrite->feeds) ) . ')';
//       add_rewrite_rule("{$archive_slug}/?$", "index.php?post_type={$post_type}", 'top');
//       add_rewrite_rule("{$archive_slug}/feed/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
//       add_rewrite_rule("{$archive_slug}/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
//       add_rewrite_rule("{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type={$post_type}".'&paged=$matches[1]', 'top');
//   }
//   return $args;
// }, 10, 2);


//＝＝＝＝＝＝＝＝＝＝エディター関連

// 自動付与pタグを削除
remove_filter('term_description','wpautop');

function custom_editor_settings( $initArray ){
    $initArray['block_formats'] = "見出し2=h2; 見出し3=h3; 段落=p;";
    return $initArray;
   }
   add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );



/**
 * WYSIWYGエディタ（TinyMCE）：カラーパレットカスタマイズ
 */
function custom_tiny_mce_before_init( $init )
{
    //デフォルトのカラーコード
    $default_colors = '
        "333333", "Black",
        "F0810F", "orange",
        "60BDDA", "lightblue",
        "A7E7FB", "superlightblue",
    ';
    
    //追加カラーコード
    $custom_colors = '
        "00CED1", "DarkTurquoise",
        "7B68EE", "MediumSlateBlue",
        "FFFACD", "LemonChiffon",
    ';
    
    /* ▼カスタマイズ内容上書き▼ */
    //カラーパレット
    $init['textcolor_map'] = '['.$default_colors.','.$custom_colors.']';
    //行数設定
    $init['textcolor_rows'] = 1;
    
    //
    return $init;
}
add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_before_init' );

    //エディターへcssを適用
// add_editor_style('css/editor-style.css');


/*【管理画面】ACF Options Page の設定 */
// if( function_exists('acf_add_options_page') ) {
//     acf_add_options_page(array(
//             // 'page_title' => 'バナー表示設定', 
//             'menu_title' => 'バナー表示設定', 
//             'menu_slug' => 'banner_settings', 
//             'capability' => 'edit_posts',
//             'redirect' => false
//           ));
//   }



add_filter( 'post_rewrite_rules', '__return_empty_array' );

function imgPathcode() {
    return get_home_url();
  }
  add_shortcode('url', 'urlPathcode');


// TOPページ、当院についてページ、各メニューページは、エディタ非表示
  add_filter('use_block_editor_for_post',function($use_block_editor,$post){
	if($post->post_type==='page'){
		if(in_array($post->post_name,['top','about','smallface','aesthetic-dermatology','hair-removal','aesthetic-surgery'])){ 
			remove_post_type_support('page','editor');
			return false;
		}
	}
	return $use_block_editor;
},10,2);
<<<<<<< HEAD
// 投稿タイプもエディタ非表示
add_action( 'init', function() { 
	remove_post_type_support( 'post', 'editor' ); 
}, 99);
=======
>>>>>>> 050821a939d85efc78d60ab68d06c151edf349dc

<?php

// アイキャッチを使用可能にする
add_theme_support( 'post-thumbnails' );
add_image_size( 'small-feature', 210, 140 );

// 自動挿入のPタグBRタグ削除
remove_filter('the_content', 'wpautop');

// モバイルとPCの条件分岐で使用
function is_mobile(){
  $useragents = array(
    'iPhone', // iPhone
    'iPod', // iPod touch
    'Android.*Mobile', // 1.5+ Android *** Only mobile
    'Windows.*Phone', // *** Windows Phone
    'dream', // Pre 1.5 Android
    'CUPCAKE', // 1.5+ Android
    'blackberry9500', // Storm
    'blackberry9530', // Storm
    'blackberry9520', // Storm v2
    'blackberry9550', // Storm v2
    'blackberry9800', // Torch
    'webOS', // Palm Pre Experimental
    'incognito', // Other iPhone browser
    'webmate' // Other iPhone browser
  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

//phpファイルを固定ページへ呼び出し
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/file/$file.php");
    return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');

// アンドロイドのみ表示
function is_android() {
    $is_android = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Android');
    if ($is_android) {
        return true;
    } else {
        return false;
    }
}

remove_action('wp_head', 'rsd_link');                         /* Really Simple Discoveryリンクの削除 */
remove_action('wp_head', 'wlwmanifest_link');                 /* Windows Live Writerの削除 */
remove_action('wp_head', 'wp_generator');                     /* WPのバージョン削除 */
remove_action('wp_head', 'index_rel_link' );                  /* linkタグの削除 */
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');  /* link rel='next…'関連の削除 */
remove_action('wp_head', 'parent_post_rel_link', 10, 0 );     /* link rel='next…'関連の削除 */
remove_action('wp_head', 'start_post_rel_link', 10, 0 );      /* link rel='next…'関連の削除 */
remove_action('wp_head', 'wp_shortlink_wp_head');             /* ショートリンクの削除 */
remove_action('wp_head', 'feed_links_extra',3);               /* コメントフィードの削除 */
wp_enqueue_script('jquery'); /* デフォルトのjsを読み込まない */

?>
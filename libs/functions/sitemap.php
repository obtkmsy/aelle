<?php
function create_xml_sitemap() {
  $sitemap_array = array(
    '<?xml version="1.0" encoding="UTF-8"?>',
    '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">',
  );

  # ホーム
  $page = get_page_by_path('top');
  $sitemap_array = array_merge($sitemap_array, create_url_block($page, '1.0'));

  $args = array(
    'posts_per_page' => -1,
    'orderby' => 'modified',
    'order' => 'DESC',
    'exclude' => $page->ID,
    'post_type' => array('page'),
    'post_status' => 'publish',
    // 'post__in' => array( 1,2,3), 
  );

  $posts_array = get_posts($args);

  foreach($posts_array as $post) {
    $sitemap_array = array_merge($sitemap_array, create_url_block($post, '0.8'));
  }

  wp_reset_postdata();

  $post_types = array(
    'post',
  );

  foreach($post_types as $post_type) {
    $args = array(
      'posts_per_page' => -1,
      'orderby' => 'modified',
      'order' => 'DESC',
      'post_type' => $post_type,
      'post_status' => 'publish'
    );
    $posts_array = get_posts($args);
    $post_modified = explode(' ', $posts_array[0]->post_modified);

// if ($post_type !== 'story') {
    $sitemap_array = array_merge(
      $sitemap_array,
      array(
        "\t" . '<url>',
        "\t\t" . '<loc>' . get_post_type_archive_link($post_type) . '</loc>',
        "\t\t" . '<lastmod>' . $post_modified[0] . '</lastmod>',
        "\t\t" . '<priority>' . post_type_priority($post_type) . '</priority>',
        "\t" . '</url>',
        )
    );
// }

    foreach($posts_array as $post) {
      $sitemap_array = array_merge($sitemap_array, create_url_block($post, post_type_priority($post->post_type)));
    }
    wp_reset_postdata();
  }

  $sitemap_array = array_merge(
    $sitemap_array,
      array(
        '</urlset>',
      )
  );

  $fh = fopen( ABSPATH. "sitemap.xml", 'w' );
    if ($fh) {
    fwrite($fh, implode("\n", $sitemap_array));
    fclose($fh);
    // グーグルに更新したことを通知
    ping_trans('http://google.com/ping?sitemap=' . esc_url( home_url('/') ) . 'sitemap.xml');
  }
}

function ping_trans($url) {
  if (preg_match('/(local|stg)/', get_bloginfo('url')) > 0) return true;
  $ch = curl_init();
  if ($ch != false) {
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result= curl_exec($ch);
    curl_close($ch);

    // 送信結果をログファイルに保存
    if ($result == false) {
      $str = date_i18n("Y-m-d H:i:s") . ' send NG.' . "\n";
    } else {
      $str = date_i18n("Y-m-d H:i:s") . ' send OK.' . "\n";
    }
    $fh = fopen( ABSPATH. "sitemap.log", 'a+' );
    if ($fh) {
      fwrite($fh, $str);
      fclose($fh);
    }
  }
}

function create_url_block($post, $priority) {
    $post_modified = explode(' ', $post->post_modified);
    return array(
      "\t" . '<url>',
      "\t\t" . '<loc>' . get_permalink($post->ID) . '</loc>',
      "\t\t" . '<lastmod>' . $post_modified[0] . '</lastmod>',
      "\t\t" . '<priority>' . $priority . '</priority>',
      "\t" . '</url>',
    );
}

function post_type_priority($post_type) {
  switch($post_type) {
    // case 'case':
    //   $priority = '0.8';
    //   break;
    default:
      $priority = '0.8';
  }

  return $priority;
}

add_action('publish_page', 'create_xml_sitemap');
add_action('publish_article', 'create_xml_sitemap');
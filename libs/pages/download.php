<?php
add_action('init', 'add_custom_taxonomy_download', 0);
function add_custom_taxonomy_download() {
  register_post_type(
    'download',
    [
      'label' => 'お役立ち資料',
      'description' => 'お役立ち資料',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'supports' => array('title','thumbnail', 'slug'),
      'rewrite' => [
        'slug' => 'download',
        'with_front' => false,
      ],
      'query_var' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'labels' => [
        'name' => 'お役立ち資料',
        'singular_name' => 'お役立ち資料',
        'menu_name' => 'お役立ち資料',
        'add_new' => '新規追加',
        'add_new_item' => '新規追加',
        'edit' => 'お役立ち資料' . 'を変更',
        'edit_item' => 'お役立ち資料' . 'を変更',
        'new_item' => 'お役立ち資料' . 'を新規追加',
        'view' => 'ページを表示',
        'view_item' => 'ページを表示',
        'search_items' => 'ページを検索',
        'not_found' => 'お役立ち資料' . 'は見つかりませんでした。',
        'not_found_in_trash' => 'お役立ち資料' . 'は見つかりませんでした。',
        'parent' => '親 ' . 'お役立ち資料',
      ],
    ]
  );
}
<?php
add_action('init', 'add_custom_taxonomy_service', 0);
function add_custom_taxonomy_service() {
  register_post_type(
    'service',
    [
      'label' => 'サービス',
      'description' => 'サービス',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'supports' => array('title','thumbnail', 'slug', 'editor'),
      'rewrite' => [
        'slug' => 'service',
        'with_front' => false,
      ],
      'query_var' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'labels' => [
        'name' => 'サービス',
        'singular_name' => 'サービス',
        'menu_name' => 'サービス',
        'add_new' => '新規追加',
        'add_new_item' => '新規追加',
        'edit' => 'サービス' . 'を変更',
        'edit_item' => 'サービス' . 'を変更',
        'new_item' => 'サービス' . 'を新規追加',
        'view' => 'ページを表示',
        'view_item' => 'ページを表示',
        'search_items' => 'ページを検索',
        'not_found' => 'サービス' . 'は見つかりませんでした。',
        'not_found_in_trash' => 'サービス' . 'は見つかりませんでした。',
        'parent' => '親 ' . 'サービス',
      ],
    ]
  );
}

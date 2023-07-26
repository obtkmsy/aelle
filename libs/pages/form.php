<?php
add_action('init', 'add_custom_taxonomy_form', 0);
function add_custom_taxonomy_form() {
  register_post_type(
    'form',
    [
      'label' => 'DLフォーム',
      'description' => 'DLフォーム',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'supports' => array('title','thumbnail', 'slug'),
      'rewrite' => [
        'slug' => 'form',
        'with_front' => false,
      ],
      'query_var' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'labels' => [
        'name' => 'DLフォーム',
        'singular_name' => 'DLフォーム',
        'menu_name' => 'DLフォーム',
        'add_new' => '新規追加',
        'add_new_item' => '新規追加',
        'edit' => 'DLフォーム' . 'を変更',
        'edit_item' => 'DLフォーム' . 'を変更',
        'new_item' => 'DLフォーム' . 'を新規追加',
        'view' => 'ページを表示',
        'view_item' => 'ページを表示',
        'search_items' => 'ページを検索',
        'not_found' => 'DLフォーム' . 'は見つかりませんでした。',
        'not_found_in_trash' => 'DLフォーム' . 'は見つかりませんでした。',
        'parent' => '親 ' . 'DLフォーム',
      ],
    ]
  );
}

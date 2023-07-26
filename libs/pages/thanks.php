<?php
add_action('init', 'add_custom_taxonomy_thanks', 0);
function add_custom_taxonomy_thanks() {
  register_post_type(
    'thanks',
    [
      'label' => 'サンクスページ',
      'description' => 'サンクスページ',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'supports' => array('title','thumbnail', 'slug', 'editor'),
      'rewrite' => [
        'slug' => 'thanks',
        'with_front' => false,
      ],
      'query_var' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'labels' => [
        'name' => 'サンクスページ',
        'singular_name' => 'サンクスページ',
        'menu_name' => 'サンクスページ',
        'add_new' => '新規追加',
        'add_new_item' => '新規追加',
        'edit' => 'サンクスページ' . 'を変更',
        'edit_item' => 'サンクスページ' . 'を変更',
        'new_item' => 'サンクスページ' . 'を新規追加',
        'view' => 'ページを表示',
        'view_item' => 'ページを表示',
        'search_items' => 'ページを検索',
        'not_found' => 'サンクスページ' . 'は見つかりませんでした。',
        'not_found_in_trash' => 'サンクスページ' . 'は見つかりませんでした。',
        'parent' => '親 ' . 'サンクスページ',
      ],
    ]
  );
}

<?php
add_action('init', 'add_custom_taxonomy_article', 0);
function add_custom_taxonomy_article() {
  register_post_type(
    'article',
    [
      'label' => '投稿記事',
      'description' => '投稿記事',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'supports' => array('title','thumbnail', 'slug', 'editor'),
      'rewrite' => [
        'slug' => 'article',
        'with_front' => false,
      ],
      'query_var' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'labels' => [
        'name' => '投稿記事',
        'singular_name' => '投稿記事',
        'menu_name' => '投稿記事',
        'add_new' => '新規追加',
        'add_new_item' => '新規追加',
        'edit' => '投稿記事' . 'を変更',
        'edit_item' => '投稿記事' . 'を変更',
        'new_item' => '投稿記事' . 'を新規追加',
        'view' => 'ページを表示',
        'view_item' => 'ページを表示',
        'search_items' => 'ページを検索',
        'not_found' => '投稿記事' . 'は見つかりませんでした。',
        'not_found_in_trash' => '投稿記事' . 'は見つかりませんでした。',
        'parent' => '親 ' . '投稿記事',
      ],
    ]
  );
}

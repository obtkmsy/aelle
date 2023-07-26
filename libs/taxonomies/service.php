<?php
register_taxonomy('categories', 'service', array(
    'labels' => array(
        'name' => 'サービスカテゴリ',
    ),
    'hierarchical' => true,
));
register_taxonomy('tag', 'service', array(
    'labels' => array(
        'name' => 'タグ',
    ),
    'hierarchical' => false,
));

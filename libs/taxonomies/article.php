<?php
register_taxonomy('article-cat', 'article', array(
    'labels' => array(
        'name' => '記事カテゴリ',
    ),
    'hierarchical' => true,
));

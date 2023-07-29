<?php
function my_theme_widgets_init() {
// ↓↓↓↓↓↓↓↓追加範囲↓↓↓↓↓↓↓↓
    register_sidebar( array(
        'name' => 'banner01',
        'id' => 'banner01'
    ) );
    register_sidebar( array(
        'name' => 'banner02',
        'id' => 'banner02'
    ) );
    register_sidebar( array(
        'name' => 'banner03',
        'id' => 'banner03'
    ) );
    register_sidebar( array(
        'name' => 'banner04',
        'id' => 'banner04'
    ) );
    register_sidebar( array(
        'name' => 'banner05',
        'id' => 'banner05'
    ) );
    register_sidebar( array(
        'name' => 'banner06',
        'id' => 'banner06'
    ) );
    register_sidebar( array(
        'name' => 'banner07',
        'id' => 'banner07'
    ) );
    register_sidebar( array(
        'name' => 'banner08',
        'id' => 'banner08'
    ) );
    register_sidebar( array(
        'name' => 'banner09',
        'id' => 'banner09'
    ) );
    register_sidebar( array(
        'name' => 'banner10',
        'id' => 'banner10'
    ) );
// ↑↑↑↑↑↑↑↑追加範囲↑↑↑↑↑↑↑↑↑↑
}
add_action( 'widgets_init', 'my_theme_widgets_init' );
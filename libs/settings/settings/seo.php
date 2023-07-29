<?php

function add_custom_seo_head() {
    if (is_singular('thanks')) {
        echo '<meta name="robots" content="noindex,follow" />' . "\n";
        echo '<title>'. meta_title() .'</title>' . "\n";
        return true;
    }

        if (is_404()) {
        echo '<meta name="robots" content="noindex,follow" />' . "\n";
        echo '<title>ページが見つかりません。</title>' . "\n";
        echo '<meta property="og:image" content="' . meta_image() . '" />' . "\n";
        echo '<meta property="og:type" content="object">' . "\n";
        echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
        echo '<meta property="og:site_name" content="' . get_bloginfo() .'" />' . "\n";
        echo '<meta property="og:locale" content="ja_JP" />' . "\n";
        return true;
    }

    $head_array = array(
        '<title>'. meta_title() .'</title>',
        '<meta name="description" content="' . meta_description() . '">',
        '<meta property="og:title" content="' . meta_title() . '" />',
        '<meta property="og:url" content="' . meta_url() . '" />',
        '<meta property="og:image" content="' . meta_image() . '" />',
        '<meta property="og:description" content="' . meta_description() . '" />',
        '<meta property="og:type" content="' . meta_page_type() . '">',
        '<meta name="twitter:card" content="summary_large_image" />',
        '<meta name="twitter:description" content="' . meta_description() . '" />',
        '<meta property="og:site_name" content="' . get_bloginfo() .'" />',
        '<meta property="og:image:width" content="600" />',
        '<meta property="og:image:height" content="315" />',
        '<meta property="og:locale" content="ja_JP" />',
        '<meta property="fb:app_id" content="2168016433258139">',
    );

    echo implode("\n", $head_array) . "\n";
}
add_action('wp_head', 'add_custom_seo_head');


// meta_titleを設定

function meta_title() {
    $info_ttl = get_bloginfo('title');
    $info_subttl = '';
    $meta_ttl = get_the_title();
//ターム名取得
$term_name = single_term_title( '' , false ); 
        if(is_front_page()){
            return $info_ttl;
        }elseif(is_archive()){
            return '記事一覧' .' | '. $info_subttl;
        }else{
            return $meta_ttl .' | '. $info_subttl;
        }
    }

// meta_descriptionを設定

function meta_description() {
    $desc_info = get_bloginfo('description');
    if(is_front_page()){
        return $desc_info;
    }elseif(is_page()){
        $desc_str = get_field('meta_desc');
        if($desc_str == !null){
            $meta_desc = $desc_str;
        }else{
            $meta_desc = $desc_info;
        }
        return $meta_desc;
    }elseif(is_tax()){
    //タームのディスクリプションを取得
    error_reporting(0);
    $desc_str = category_description( $category_id , false );
    $desc_rep = wp_strip_all_tags($desc_str);
    if($desc_str == !null){
        if(mb_strlen($desc_rep)>90){
            $desc_rep = mb_substr($desc_rep,0,89) . '…';
            $meta_desc = $desc_rep;
        }else{
            $meta_desc = '$desc_rep';
        }
    }else{
        $meta_desc = '$desc_info';
    }
    return $meta_desc;
    }elseif(is_singular()){
            $desc_str = get_the_content();
            $desc_rep = wp_strip_all_tags($desc_str);
            if($desc_str == !null){
                if(mb_strlen($desc_rep)>120){
                    $desc_rep = mb_substr($desc_rep,0,119) . '…';
                    $meta_desc = $desc_rep;
                }else{
                    $meta_desc = $desc_rep;
                }
            }else{
                return $desc_info;
            }
            return $meta_desc;
        }else{
            $desc_str = get_the_content();
            $desc_rep = wp_strip_all_tags($desc_str);
            if(get_the_content()){
                if(mb_strlen($desc_rep)>120){
                    $desc_rep = mb_substr($desc_rep,0,119) . '…';
                    $meta_desc = $desc_rep;
                }else{
                    $meta_desc = $desc_rep;
                }
            }else{
                $meta_desc = $desc_info;
            }
            return $meta_desc;
            }
}

function meta_image() {
    if (has_post_thumbnail()) {
        return get_the_post_thumbnail_url();
    } else {
        return get_bloginfo('template_url') . '/img/ogp.jpg';
    }
}   

function meta_page_type() {
    return (is_front_page()) ? 'website' : 'article';
}

function meta_url() {
    return get_bloginfo('url') . $_SERVER["REQUEST_URI"];
}

function get_meta($key) {
    if (!is_null(get_field($key)) && get_field($key) != '') return get_field($key);

    $seo = get_field('seo', 'option');

    return $seo['default'][$key];
}

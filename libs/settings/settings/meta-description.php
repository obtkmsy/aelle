<?php if(!is_single()):?>
<title><?php bloginfo('title'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta property="og:title" content="<?php bloginfo('title'); ?>" />
<meta property="og:url" content="<?php bloginfo('url'); ?>" />
<?php
if(get_the_post_thumbnail()){
    $thumbnail = get_the_post_thumbnail_url();
    }else{
    $thumbnail = tmpdir() . '/img/ogp.jpg';
    }
?>
<meta property="og:image" content="<?php echo $thumbnail;?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<?php if (is_front_page()):?>
<meta property="og:type" content="website">
<?php else:?>
<meta property="og:type" content="article">
<?php endif;?>
<meta property="og:site_name" content="<?php bloginfo('title'); ?>" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta property="og:locale" content="ja_JP" />
<?php else:?>

<title><?php the_title() ?></title>
<?php
//タイトル
$ttl_def = get_bloginfo('name');
$ttl_str = get_the_title();
$ttl_rep = strip_tags($ttl_str);
if(!is_null($ttl_str)){
    if(mb_strlen($ttl_rep)>90){
    $ttl_rep = mb_substr($ttl_rep,0,89) . '…';
    $ttl = $ttl_rep;
    }else{
    $ttl = $ttl_rep;
    }
  }else{
    $ttl = $ttl_def;
  }
//ディスクリプション
$desc_def = get_bloginfo('description');
$desc_str = get_the_content();
$desc_rep = wp_strip_all_tags($desc_str);
if(get_the_content()){
    if(mb_strlen($desc_rep)>90){
    $desc_rep = mb_substr($desc_rep,0,89) . '…';
    $desc = $desc_rep;
    }else{
    $desc = $desc_rep;
    }
  }else{
    $desc = $desc_def;
  }
  if(get_the_post_thumbnail()){
    $thumbnail = get_the_post_thumbnail_url();
    }else{
    $thumbnail = tmpdir() . '/img/ogp.jpg';
    }
?>
<meta name="description" content="<?php echo $desc ;?>">
<meta property="og:title" content="<?php echo $ttl ;?>" />
<meta property="og:url" content="<?php echo get_the_permalink(); ?>" />
<meta property="og:image" content="<?php echo $thumbnail;?>" />
<meta property="og:description" content="<?php echo $desc ;?>" />
<meta property="og:type" content="article">
<meta property="og:site_name" content="<?php echo $ttl ;?>" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta property="og:locale" content="ja_JP" />
<?php endif;?>
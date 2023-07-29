<?php if (is_front_page()):?>
    <link rel="stylesheet" href="<?php echo tmpdir(); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo tmpdir(); ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo tmpdir(); ?>/css/slick-theme-custom.css">
    <link rel="stylesheet" href="<?php echo tmpdir(); ?>/css/top.css">
<?php elseif (is_page() || is_404()):?>
<link rel="stylesheet" href="<?php echo tmpdir(); ?>/css/page.css">
<?php endif;?> 
<?php if (!is_front_page()):?>
<link rel="stylesheet" href="<?php echo tmpdir(); ?>/css/underlayer.css">
<?php endif;?> 
<?php if (is_post_type_archive()|| is_category()|| is_tax()):?>
<link rel="stylesheet" href="<?php echo tmpdir(); ?>/css/archive.css">
<?php endif;?> 
<?php //if(is_post_type_archive('column') || is_singular('column') || is_tax('column_cat') || is_author() ):?>
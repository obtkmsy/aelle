<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<meta charset="<?php bloginfo('charset'); ?>">
<link rel="icon" href="<?php echo tmpdir(); ?>/img/common/favicon.png" sizes="32x32" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<!-- スタイルシートの読み込み -->
<?php include dirname(__FILE__) . '/libs/settings/head-css.php'; ?>
<?php if(is_post_type_archive('thanks')||is_post_type_archive('form')):?>
<script>
window.location.href = "<?php echo home_url(); ?>";
</script>
<?php endif;?>
</head>
<body <?php body_class(); ?>>
<?php 
    $class_name = '';
    if(!is_front_page()):
    $class_name = 'float';
    endif;
?>
    <header class="header <?php echo $class_name ?>">
        <nav class="header_nav">
            <div class="header_nav-logoarea">
                <a class="logoarea-logo" href="<?php echo home_url(); ?>">
                    <img src="<?php echo tmpdir(); ?>/img/common/logo.jpg" alt="アエルクリニック">
                </a>
                <a class="cv-btn pc" href="#">
                    <img src="<?php echo tmpdir(); ?>/img/common/cv-btn.svg" alt="無料カウンセリング予約">
                </a>
            </div>
            <?php //if (!is_page('contact') && !is_page('confirm') && !is_page('thanks')):?>
            <div class="header_nav-menu_area">
                <div class="menu_area-hamburger">
                    <button class="hamburger">
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="menu_area-menu">
                    <?php wp_nav_menu(
                        array(
                        'theme_location'  => 'header-menu',
                        'menu_class' => 'menu_list',
                        'menu_id' => 'menu',
                        'container'       => false,
                        )
                    ); ?>
                </div>
                <!-- <div class="menu_area-cv_btn">
                    <div class="cv_btn cv_btnA">
                        <a href="<?php //echo home_url(); ?>/contact">お問い合わせ</a>
                    </div>
                </div> -->
            <?php //endif;?>
            </div>
        </nav>
    </header>
<!-- [ #header End ] -->
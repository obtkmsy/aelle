<?php
/*
Template Name: サンクスページ用テンプレートB
Template Post Type: thanks
*/
?>
<?php get_header();?>
<main>
<article class="art_page">
    <div class="container">
        <div class="art_page_contents editor--page">
            <?php the_content();?>
            <div class="art_page_contents-link_btn">
                <a class="link_btn-link" href="<?php the_field('thanks_downloadlink');?>">資料ダウンロードはこちら</a>
            </div>
            <div class="art_page_contents-txt_link">
                <a href="<?php echo home_url(); ?>">トップページに戻る</a>
            </div>
        </div>
    </div>
</article>
</main>
<?php get_footer(); ?>
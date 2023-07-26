<?php get_header();?>
<main>
<div class="fv">
    <div class="container w1120">
        <h1 class="page_ttl"><?php the_title();?><span style="margin-left: 0.8rem;">資料ダウンロード</span></h1>
    </div>
</div>
<article class="art_page">
    <div class="container">
        <div class="art_page_contents editor--page">
        <?php the_field('form_formarea');?>
        </div>
    </div>
</article>
</main>
<?php get_footer(); ?>
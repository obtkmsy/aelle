<?php get_header();?>
<?php custom_breadcrumb(); ?>
<main>
<div class="main">
    <div class="container w1120">
        <h1 class="page_ttl"><?php the_title();?></h1>
    </div>
</div>
<article class="art_page">
    <div class="container">
        <div class="art_page_contents editor--page">
        <?php the_content();?>
        </div>
    </div>
</article>
</main>
<?php get_footer(); ?>
<?php get_header();?>
<?php custom_breadcrumb(); ?>
<main>
<div class="fv">
    <div class="container w1120">
        <h1 class="page_ttl"><?php the_title();?></h1>
    </div>
</div>
<article class="art_page">
    <div class="container w800">
    <?php if(have_rows('legal_list')):?>
        <div class="art_page_contents editor--page">
            <dl class="data_list">
                <?php while(have_rows('legal_list')): the_row();?>
                    <div class="data_list-item">
                        <dt class="data_list-item_ttl"><?php the_sub_field('legal_list_ttl'); ?></dt>
                        <dd class="data_list-item_data"><?php the_sub_field('legal_list_data'); ?></dd>
                    </div>
                <?php endwhile;?>
            </dl>
        </div>
    <?php endif;?>
    </div>
</article>
</main>
<?php get_footer(); ?>
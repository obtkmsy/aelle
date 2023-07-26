<?php get_header();?>
<?php custom_breadcrumb(); ?>
<main class="page_menu">
<div class="fv">
    <div class="container w1120">
        <h1 class="page_ttl"><?php the_title();?></h1>
    </div>
</div>
<article class="art_page">
    <div class="container">
    <?php if(have_rows('menu_list')):?>
        <div class="art_page_contents">
                <?php while(have_rows('menu_list')): the_row();?>
                    <div class="menu_list-item">
                        <h3 class="menu_list_ttl"><?php the_sub_field('menu_list_ttl'); ?></h3>
                        <div class="data_table">
                            <div class="row hed">
                                <div class="data_table-item name"></div>
                                <div class="data_table-item mprice">会員価格</div>
                                <div class="data_table-item price">通常価格</div>
                            </div>
                            <div class="row">
                                <div class="data_table-item name">￥<?php the_sub_field('menu_list_name'); ?></div>
                                <div class="data_table-item mprice">￥<?php the_sub_field('menu_list_mprice'); ?></div>
                                <div class="data_table-item price">￥<?php the_sub_field('menu_list_price'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
        </div>
    <?php endif;?>
    </div>
</article>
</main>
<?php get_footer(); ?>
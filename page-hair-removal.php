<?php get_header();?>
<main class="page_menu">
<div class="fv">
    <div class="container w1120">
        <h1 class="page_ttl"><?php the_title();?></h1>
    </div>
</div>
<article class="art_page">
    <div class="container">
    <?php include dirname(__FILE__) . '/libs/parts/beautymenu.php'; ?>
    <?php if(have_rows('menu_list_parent')):?>
        <div class="art_page_contents">
                <?php while(have_rows('menu_list_parent')): the_row();?>
                    <div class="menu_list-item">
                        <h3 class="menu_list_ttl"><?php the_sub_field('menu_list_ttl'); ?></h3>
                        <?php if(have_rows('menu_list_children')):?>
                            <?php while(have_rows('menu_list_children')): the_row();?>
                            <?php if(get_sub_field('list_ttl')):?>
                            <div class="data_table-item ttl"><?php the_sub_field('list_ttl'); ?></div>
                            <?php endif;?>
                            <div class="data_table">
                                <div class="row hed">
                                    <div class="data_table-item mprice"><?php the_sub_field('list_sub_ttl1'); ?></div>
                                    <div class="data_table-item price"><?php the_sub_field('list_sub_ttl2'); ?></div>
                                </div>
                                <?php if(have_rows('menu_list_find')):?>
                                <?php while(have_rows('menu_list_find')): the_row();?>
                                <div class="row">
                                    <?php if(get_sub_field('product_ttl')):?>
                                        <div class="data_table-item mprice"><?php the_sub_field('product_ttl'); ?></div>
                                    <?php endif;?>
                                    <?php if(get_sub_field('product_price')):?>
                                        <div class="data_table-item price">¥<?php the_sub_field('product_price'); ?></div>
                                    <?php endif;?>
                                </div>
                                <?php endwhile;?>
                                <?php endif;?>
                            </div>
                            <?php endwhile;?>
                        <?php endif;?>
                    </div>
                <?php endwhile;?>
        </div>
    <?php endif;?>
    </div>
</article>
</main>
<?php get_footer(); ?>
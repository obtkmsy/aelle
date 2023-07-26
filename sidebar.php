<?php if(is_singular('article')):?>
<aside class="sidebar">
<?php if(have_rows('op_banner','option')):?>
    <ul class="sidebar-widgetarea">
        <?php while(have_rows('op_banner','option')): the_row();?>
        <?php
            $banner_id = get_sub_field('banner_id','option');
            $banner_cat_slag = get_sub_field('banner_cat_slag','option');
        ?>
            <?php if (is_object_in_term($post->ID, 'article-cat',$banner_cat_slag)): ?>
                <?php dynamic_sidebar( $banner_id ); ?>
            <?php endif;?>
        <?php endwhile;?>
    </ul>
<?php endif;?>
</aside>
<?php elseif(is_singular('download')):?>
    <?php if( get_field('download_formarea') ):?>
    <aside class="sidebar">
        <?php the_field('download_formarea'); ?>
    </aside>
    <?php endif;?>
<?php else:?>
    <?php if( get_field('service_formarea') ):?>
    <aside class="sidebar">
        <?php the_field('service_formarea'); ?>
    </aside>
    <?php endif;?>
<?php endif;?>
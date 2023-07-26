<?php get_header();?>
<?php custom_breadcrumb(); ?>
<div class="sidebar_layout sidebar_layout--styleB">
    <div class="sidebar_layout-inner">
        <main>
        <article class="art">
            <div class="container w1120">
                <h1 class="art_ttl">
                    <span class="art_ttl-name"><?php the_title();?></span>
                </h1>
                <?php
                    $taxonomy_slug = 'download-cat'; 
                    $terms = wp_get_object_terms($post->ID, $taxonomy_slug);
                ?>
                <div class="art_cat_list">
                <?php if(!empty($terms)): ?>
                    <ul class="cat_list">
                        <?php foreach ($terms as $term) : ?>
                            <li class="cat_list-item"><a class="" href="<?php echo get_term_link( $term );?>">#<?php echo $term->name;?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                </div>
                <div class="art_tmb">
                <?php if (has_post_thumbnail()): ?>
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
                    <?php else:?>
                        <img src="<?php echo tmpdir(); ?>/img/download/smb_default.jpg" alt="">
                    <?php endif;?>
                </div>
                <?php if( get_field('service_desc') ):?>
                    <p class="service_desc"><?php the_field('service_desc');?></p>
                <?php endif;?>
                <?php if(have_rows('download_list')):?>
                <div class="download_contents">
                    <h2 class="download_contents-ttl">この資料でわかること</h2>
                    <ul class="download_contents-list">
                    <?php while(have_rows('download_list')): the_row();?>
                        <li class="download_contents-list_item"><?php the_sub_field('download_list_item'); ?></li>
                    <?php endwhile;?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </article>
        </main>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
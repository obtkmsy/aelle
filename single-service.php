<?php get_header();?>
<?php custom_breadcrumb(); ?>
<div class="sidebar_layout">
    <div class="sidebar_layout-inner">
        <main>
        <article class="art">
            <div class="container w1120">
                <h1 class="art_ttl">
                    <?php if (has_post_thumbnail()): ?>
                        <img class="art_ttl-logo" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
                    <?php else:?>
                        <img class="art_ttl-logo" src="<?php echo tmpdir(); ?>/img/common/smb_default.jpg" alt="">
                    <?php endif;?>
                    <span class="art_ttl-name"><?php the_title();?></span>
                </h1>
                <?php if( get_field('service_desc') ):?>
                    <p class="service_desc"><?php the_field('service_desc');?></p>
                <?php endif;?>
                <div class="editor editor--servicepage">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
        </main>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
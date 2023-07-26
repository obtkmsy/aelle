<?php get_header();?>
<?php custom_breadcrumb(); ?>
<div class="sidebar_layout">
    <div class="sidebar_layout-inner">
        <main>
        <article class="art">
            <div class="container w1120">
                <h1 class="art_ttl"><?php the_title();?></h1>
                <time class="art_datetime" datetime="<?php the_time('Y-m-d');?>" itemprop="modified"><?php the_time('Y年m月d日');?></time>
                <?php
                    $taxonomy_slug = 'article-cat'; 
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
                <div class="tmb_banner">
                <?php if (has_post_thumbnail()): ?>
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
                <?php endif;?>
                </div>
                <!-- tocを出力 -->
                <div class="editor">
                <?php the_content(); ?>
                </div>
            </div>
        </article>
        </main>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
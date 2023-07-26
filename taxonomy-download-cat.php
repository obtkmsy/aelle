<?php get_header();?>
<?php custom_breadcrumb(); ?>
<main>
<div class="fv fv--download">
    <div class="container w1120">
        <h1 class="page_ttl"><?php single_cat_title(); ?>の<br class="sp">お役立ち資料一覧</h1>
    </div>
</div>
<?php
      $category_slug = get_query_var('category_name');
      $paged = get_query_var('paged') ?: 1;
      $args = array(
          'post_type'      => 'download',
          'posts_per_page' => 9,
          'paged' => $paged,
          'tax_query' => array(
            array(
              'taxonomy' => 'download-cat',
              'field' => 'slug',
              'terms' => $term,
            ),
          ),
      );
      $query = new WP_Query( $args );
    ?>
<article class="art_archive">
    <div class="container w1120">
        <?php if($query->have_posts()): ?>
            <div class="art_archive_contents">
                <ul class="card_list card_list--styleE card_list--3col">
                <?php while($query->have_posts()): $query->the_post(); ?>
                    <li class="card_list-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card_list-item_img">
                            <?php if (has_post_thumbnail()): ?>
                                <img class="art_ttl-logo" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
                            <?php else:?>
                                <img class="art_ttl-logo" src="<?php echo tmpdir(); ?>/img/download/smb_default.jpg" alt="">
                            <?php endif;?>
                            </div>
                            <h4 class="card_list-item_ttl"><?php the_title(); ?></h4>
                            <div class="card_list-item_cat">
                            <?php
                                $taxonomy_slug = 'download-cat'; 
                                $terms = wp_get_object_terms($post->ID, $taxonomy_slug);
                            ?>
                            <?php if(!empty($terms)): ?>
                                <ul class="cat_list">
                                    <?php foreach ($terms as $term) : ?>
                                        <li class="cat_list-item">#<?php echo $term->name;?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                            <time class="card_list-item_datetime" datetime="<?php the_time('Y-m-d');?>" itemprop="modified"><?php the_time('Y年m月d日');?></time>
                        </a>
                    </li>
                    <?php endwhile;?>
                </ul>
                <?php pagination($query->max_num_pages, $paged ); ?>
            </div>
            <?php else: ?>
                <p class="art_archive_undefined">記事が見つかりませんでした。</p>
        <?php endif; wp_reset_postdata();?>
    </div>
</article>
</main>
<?php get_footer(); ?>
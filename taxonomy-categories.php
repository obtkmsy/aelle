<?php get_header();?>
<?php custom_breadcrumb(); ?>
<main>
<div class="fv fv--engagement">
    <div class="container w1120">
        <h1 class="page_ttl"><?php single_cat_title(); ?>の<br class="sp">サービス一覧</h1>
    </div>
</div>
<?php
      $category_slug = get_query_var('category_name');
      $args = array(
          'post_type'      => 'service',
          'posts_per_page' => 999,
          'category_name' => $category_slug,
          'tax_query' => array(
            array(
              'taxonomy' => 'categories',
              'field' => 'slug',
              'terms' => $term,
            ),
          ),
      );
      $query = new WP_Query( $args );
    ?>
<article class="art_archive">
    <div class="container">
            <div class="art_archive_contents">
            <?php if($query->have_posts()): ?>
            <h2 class="art_archive_ttl"><?php single_cat_title(); ?>とは？</h2>
            <?php endif;?>
            <?php error_reporting(0);?>
            <p class="art_archive_para"><?php echo category_description( $category_id ); ?></p>
            <div class="art_archive-cv_btn">
                <a class="cv_btn-link cv_btn-link--dl" href="<?php echo home_url(); ?>/<?php echo $term;?>/form/">まとめて資料ダウンロード<span class="pc_i">はこちら</span></a>
            </div>
            <?php if($query->have_posts()): ?>
            <div class="art_archive-list">
                <ul class="service_list">
                <?php while($query->have_posts()): $query->the_post(); ?>
                    <li class="service_list-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="service_list-item_img">
                            <?php if (has_post_thumbnail()): ?>
                                <img class="item_img-logo" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
                            <?php else:?>
                                <img class="item_img-logo" src="<?php echo tmpdir(); ?>/img/common/logo_default.jpg" alt="">
                            <?php endif;?>
                            </div>
                            <div class="service_list-item_desc">
                                <h3 class="item_desc-ttl"><?php the_title(); ?></h3>
                                <p class="item_desc-para"><?php the_field('service_desc');?></p>
                                <?php
                                    $terms = get_the_category($post->ID);
                                    ?>
                                <div class="item_desc-_cat">
                                <?php if(!empty($terms)): ?>
                                <ul class="cat_list">
                                <?php foreach ($terms as $term) : ?>
                                <li class="cat_list-item">#<?php echo $term->name;?></li>
                                <?php endforeach; ?>
                                </ul>
                                <?php endif;?>
                                </div>
                                <div class="item_desc-linktxt">資料ダウンロードはこちら</div>
                            </div>
                        </a>
                    </li>
                    <?php endwhile;?>
                </ul>
                </div>
                <?php else: ?>
                <p class="art_archive_undefined">記事が見つかりませんでした。</p>
        <?php endif; wp_reset_postdata();?>
        </div>
    </div>
</article>
</main>
<?php include dirname(__FILE__) . '/libs/parts/cta.php'; ?>
<?php get_footer(); ?>
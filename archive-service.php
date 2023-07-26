<?php get_header();?>
<?php custom_breadcrumb(); ?>
<main>
<div class="fv fv--service">
    <div class="container w1120">
        <h1 class="page_ttl">カテゴリの一覧</h1>
    </div>
</div>
<?php 
$tax_name = 'categories'; //タクソノミーを指定
$terms = get_terms($tax_name);
?>
<article class="art_archive">
    <div class="container w1120">
        <div class="art_archive_contents">
            <ul class="category_list">
                <?php foreach( $terms as $term ) : ?>
                    <li class="category_list-item">
                    <a href="<?php echo get_term_link( $term->term_id ); ?>">
                    <?php echo $term->name; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</article>
</main>
<?php include dirname(__FILE__) . '/libs/parts/cta.php'; ?>
<?php get_footer(); ?>
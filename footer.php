<footer class="footer">
                <?php wp_nav_menu(
                    array(
                    'theme_location'  => 'footer-menu1',
                    'menu_class' => 'footer-menu n1',
                    'menu_id' => 'footer-menu1',      
                    'container'       => false,
                    )
                ); ?>
    <div class="footer-logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo tmpdir(); ?>/img/common/footer_logo.png" alt="">
        </a>
    </div>
    <div class="footer_bottom">
        <small class="footer_copyright">© AELLECLINIC. All Rights Reserved.</small>
    </div>
</footer>
<div id="pagetop" class="pagetop"><a href="#top"><img src="<?php echo tmpdir(); ?>/img/common/arrow_back_top.svg" alt="TOPへ戻る"></a> </div>
<?php wp_footer(); ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="<?php echo tmpdir(); ?>/js/script.js"></script>
<?php if (is_front_page()):?>
<script src="<?php echo tmpdir(); ?>/js/slick.min.js"></script>
<script src="<?php echo tmpdir(); ?>/js/top.js"></script>
<?php endif;?>
</body>
</html>
<?php get_header(); ?>
<main class="main">
<div class="fv">
        <div class="slider-area slick container">
            <div>
                <img src="<?php echo tmpdir(); ?>/img/top/slide-1.png" alt="">
            </div>
            <div>
                <img src="<?php echo tmpdir(); ?>/img/top/slide-2.png" alt="">
            </div>
            <div>
                <img src="<?php echo tmpdir(); ?>/img/top/slide-3.png" alt="">
            </div>
        </div>
</div>

<section class="news sec">
    <div class="container w1120">
        <h2 class="sec_ttl sec_ttl--styleA">
            <span class="sec_ttl-en">NEWS</span>
        </h2>
<?php
      $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 4,
      );
      $query = new WP_Query( $args );
?>
    <?php if($query->have_posts()): ?>
        <div class="sec_contents">
            <ul class="news_list">
                <?php while($query->have_posts()): $query->the_post(); ?>
                <li class="news_list-item">
                        <time class="news_list-item_datetime" datetime="<?php the_time('Y-m-d');?>" itemprop="modified"><?php the_time('Y.m.d');?></time>
                        <h4 class="news_list-item_ttl"><?php the_title(); ?></h4>
                </li>
                <?php endwhile;?>
            </ul>
        </div>
        <?php endif; wp_reset_postdata();?>
    </div>
</section>
<section class="sec">
    <div class="container w1120">
        <h2 class="sec_ttl sec_ttl--styleB">【小顔】カマたくさんにもっとキュンするリフト施術してみた 初の糸リフト体験！</h2>
    </div>
    <div class="sec_contents frame_box">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/q5Vl_DgSQAQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</section>
<section class="sec banner_area">
    <div class="container w1120">
            <ul class="banner_list">
                <li class="banner_list-item">
                    <a href="#"><img src="<?php echo tmpdir(); ?>/img/top/banner-sample.png" alt=""></a>
                </li>
                <li class="banner_list-item">
                    <a href="#"><img src="<?php echo tmpdir(); ?>/img/top/banner-sample.png" alt=""></a>
                </li>
                <li class="banner_list-item">
                    <a href="#"><img src="<?php echo tmpdir(); ?>/img/top/banner-sample.png" alt=""></a>
                </li>
            </ul>
    </div>
</section>
<section class="sec banner_area">
    <div class="container w1120">
        <h2 class="sec_ttl">医師紹介</h2>
        <ul class="intro_d_list">
            <li class="intro_d_list-item">
                <div class="intro_d-desc">
                    <h3 class="intro_d_ttl">
                        <dl class="pn_list">
                            <dt class="position">院長</dt>
                            <dd class="name">石黒 久恵</dd>
                        </dl>
                        <span class="en">HISAE ISHIGURO</span>
                    </h3>
                    <p class="intro_d_txt">熊本大学医学部医学科卒、国立病院機構熊本医療センターで臨床研修医終了。<br>大学病院、市中病院皮膚科勤務を経て、熊本市内の美容皮膚科クリニック勤務、同クリニック院長歴任し現在に至る。
                    </p>
                </div>
                <div class="intro_d-smb">
                    <img src="<?php echo tmpdir(); ?>/img/top/doctor_ishiguro.jpg" alt="院長|石黒 久恵">
                </div>
            </li>
            <li class="intro_d_list-item">
                <div class="intro_d-desc">
                    <h3 class="intro_d_ttl">
                        <dl class="pn_list">
                            <dt class="position">理事長</dt>
                            <dd class="name">和倉 隆造</dd>
                        </dl>
                        <span class="en">RYUZO WAKURA</span>
                    </h3>
                    <p class="intro_d_txt">もともと私は美容外科ではなく、整形外科医として 14 年間、市中病院で勤務していました。大手美容外科に入職したのも、新規分野としての慢性疼痛の院長としてでした。せっかく美容クリニックに携わることになったので、美容医療にも興味を抱き、入職 1 年で、本院所属で副院長の役職をいただけるまでになりました。
    そんな中、美容医療にどっぷりのキャリアではなかったので、こうしたら良いのになとか、こうしたらお客様が喜ぶだろうななど、私ならこうするのにと思うことが多々出てきました。
    しっかりとお客様のお悩みを把握し、適切な施術を適性価格で受けれるクリニックを実現したく、AELLE CLINIC を開業しました。もちろん、ドクター、ナースの施術技術は日本一を目指しております。
    是非、わたしのなりたいに”アエル”クリニックにお越しください。スタッフ一同、皆様が笑顔になれる、そして通いたくなるクリニックを目指してまいります。
                    </p>
                </div>
                <div class="intro_d-smb">
                    <img src="<?php echo tmpdir(); ?>/img/top/doctor_wakura.jpg" alt="理事長|和倉 隆造">
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="sec point3">
    <div class="container w1120">
    <h2 class="sec_ttl">AELLE CLINIC が選ばれる３つの理由</h2>
    <ul class="point3_list">
        <li class="point3_list-item">
            <div class="reason_num">
                <span class="reason_num-ttl">REASON</span>
                <span class="reason_num-num"><img src="<?php echo tmpdir(); ?>/img/top/01.svg" alt="01"></span>
            </div>
            <div class="reason_desc">
                <h3 class="reason_desc-ttl">医師によるカウンセリングや<br>アフターフォローは無料。</h3>
                <p class="reason_desc-txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
            </div>
            <div class="reason_tmb">
                <img src="<?php echo tmpdir(); ?>/img/top/Preview1.jpg" alt="">
            </div>
        </li>
        <li class="point3_list-item">
            <div class="reason_num">
                <span class="reason_num-ttl">REASON</span>
                <span class="reason_num-num"><img src="<?php echo tmpdir(); ?>/img/top/02.svg" alt="01"></span>
            </div>
            <div class="reason_desc">
                <h3 class="reason_desc-ttl">エステ脱毛とは全く違う効果の高い医療<br>脱毛や美容医療。</h3>
                <p class="reason_desc-txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
            </div>
            <div class="reason_tmb">
                <img src="<?php echo tmpdir(); ?>/img/top/Preview2.jpg" alt="">
            </div>
        </li>
        <li class="point3_list-item">
            <div class="reason_num">
                <span class="reason_num-ttl">REASON</span>
                <span class="reason_num-num"><img src="<?php echo tmpdir(); ?>/img/top/03.svg" alt="01"></span>
            </div>
            <div class="reason_desc">
                <h3 class="reason_desc-ttl">19時まで診療を行っている為、<br>予約が取りやすく快適。</h3>
                <p class="reason_desc-txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。</p>
            </div>
            <div class="reason_tmb">
                <img src="<?php echo tmpdir(); ?>/img/top/Preview3.jpg" alt="">
            </div>
        </li>
    </ul>
        </div>
</section>
<section class="sec">
    <div class="container w1120">
        <h2 class="sec_ttl">メニュー</h2>
        <ul class="beautymenu_list">
            <li class="beautymenu_list-item">
                <a href="">
                    <span class="menu_txt">アンチエイジング小顔</span>
                    <img src="<?php echo tmpdir(); ?>/img/top/menu1.jpg" alt="アンチエイジング小顔">
                    <span class="dark-cover"></span>
                </a>
            </li>
            <li class="beautymenu_list-item">
                <a href="">
                    <span class="menu_txt">美容皮膚科</span>
                    <img src="<?php echo tmpdir(); ?>/img/top/menu2.jpg" alt="美容皮膚科">
                    <span class="dark-cover"></span>
                </a>
            </li>
            <li class="beautymenu_list-item">
                <a href="">
                    <span class="menu_txt">脱毛</span>
                    <img src="<?php echo tmpdir(); ?>/img/top/menu3.jpg" alt="脱毛">
                    <span class="dark-cover"></span>
                </a>
            </li>
            <li class="beautymenu_list-item">
                <a href="">
                    <span class="menu_txt">美容外科</span>
                    <img src="<?php echo tmpdir(); ?>/img/top/menu4.jpg" alt="美容外科">
                    <span class="dark-cover"></span>
                </a>
            </li>
        </ul>
        <div class="consent_form">
            <h3 class="consent_form-ttl">未成年の施術について</h3>
            <p class="consent_form-txt">未成年(18歳未満)での施術ご希望の場合は、親権者の方とご一緒にご来院いただくか<br class="pc">未成年同意書をご記入、ご持参の上、ご来院をお願いいたします。</p>
            <a class="txt-link" href="">未成年同意書をダウンロード</a>
        </div>
    </div>
</section>
<section class="sec flow">
    <div class="container w1120">
    <h2 class="sec_ttl">施術の流れ</h2>
            <div class="flow_contents">
                <img src="<?php echo tmpdir(); ?>/img/top/Group 22.png" alt="">
            </div>
    </div>
</section>
<section class="sec access">
    <div class="container w1120">
        <h2 class="sec_ttl">アクセス</h2>
        <div class="access_contents">
            <div class="googlemap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12965.310060946886!2d139.7123926!3d35.6689368!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d052ca9b8df%3A0x92426fdabbb6a79a!2zQUVMTEUgQ0xJTklDIOOCouOCqOODq-OCr-ODquODi-ODg-OCr-ihqOWPgumBkw!5e0!3m2!1sja!2sjp!4v1690180084030!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="access_desc">
                    <h3 class="access_desc-logo"><img src="<?php echo tmpdir(); ?>/img/common/logo.jpg" alt="アエルクリニック"></h3>
                    <p class="access_desc-txt">福岡市テキストテキストテキスト1-2-34</p>
                    <dl class="access_desc-dl">
                        <dt class="desc-dl_dt">診療時間 </dt>
                        <dd class="desc-dl_dd">10:00～19:00 / 年中無休</dd>
                    </dl>
                    <p class="access_desc-note">仮テキスト12/30(金)〜1/2(月)、8/12(金)は休診させていただきます。<br>その他祝日は、営業いたします。</p>
                    <div class="access_desc-linkarea">
                        <a class="cv-btn" href="#">
                            <img src="<?php echo tmpdir(); ?>/img/common/cv-btn.svg" alt="無料カウンセリング予約">
                        </a>
                        <a class="txt-link" href="">未成年同意書をダウンロード</a>
                    </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>
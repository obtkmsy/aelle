<?php get_header(); ?>
<main class="main">
<div class="fv">
        <div class="slider-area slick">
            <div>
                <img src="<?php echo tmpdir(); ?>/img/top/133255.jpg" alt="">
            </div>
            <div>
                <img src="<?php echo tmpdir(); ?>/img/top/131927.jpg" alt="">
            </div>
            <div>
                <img src="<?php echo tmpdir(); ?>/img/top/133253.jpg" alt="">
            </div>
        </div>
</div>

<section class="news sec">
    <div class="container">
        <h2 class="sec_ttl sec_ttl--styleA">
            <span class="sec_ttl-en">NEWS</span>
        </h2>
<?php
      $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
      );
      $query = new WP_Query( $args );
?>
    <?php if($query->have_posts()): ?>
            <ul class="news_list">
                <?php while($query->have_posts()): $query->the_post(); ?>
                <li class="news_list-item">
                        <time class="news_list-item_datetime" datetime="<?php the_time('Y-m-d');?>" itemprop="modified"><?php the_time('Y.m.d');?></time>
                        <h4 class="news_list-item_ttl"><?php the_title(); ?></h4>
                </li>
                <?php endwhile;?>
            </ul>
        <?php endif; wp_reset_postdata();?>
    </div>
</section>
<section class="sec">
    <div class="container">
        <h2 class="sec_ttl sec_ttl--styleB">【小顔】カマたくさんにもっとキュンするリフト施術してみた 初の糸リフト体験！</h2>
    </div>
    <div class="sec_contents frame_wrapper">
        <div class="frame_box">
            <iframe width="" height="" src="https://www.youtube.com/embed/q5Vl_DgSQAQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</section>
<section class="insta sec">
    <?php echo do_shortcode('[instagram-feed feed=2]'); ?>
</section>
<section class="sec banner_area">
    <div class="container">
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
<section id="doctors" class="sec doctors_area">
    <div class="container">
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
                            <dd class="name">
                                <span>和倉 隆造</span>
                                <a href="#" class="hashtag">#小顔先生</a>
                            </dd>
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
    <div class="container">
    <h2 class="sec_ttl">AELLE CLINIC が選ばれる<br class="sp">３つの理由</h2>
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
<section id="treatment_menu" class="sec">
    <div class="container">
        <h2 class="sec_ttl">メニュー</h2>
        <?php include dirname(__FILE__) . '/libs/parts/beautymenu.php'; ?>
        <div class="consent_form">
            <h3 class="consent_form-ttl">未成年の施術について</h3>
            <p class="consent_form-txt">未成年(18歳未満)での施術ご希望の場合は、親権者の方とご一緒にご来院いただくか<br class="pc">未成年同意書をご記入、ご持参の上、ご来院をお願いいたします。</p>
            <a class="txt-link" href="">未成年同意書をダウンロード</a>
        </div>
    </div>
</section>
<section class="sec flow">
    <div class="container">
    <h2 id="flow" class="sec_ttl">施術の流れ</h2>
            <div class="flow_contents">
                <ul class="flow_list">
                    <li class="flow_list-item">
                        <div class="flow_list-item_tmb n1">
                            <img src="<?php echo tmpdir(); ?>/img/top/flow1.svg" alt="">
                        </div>
                        <div class="flow_list-item_desc">
                            <h3 class="item_desc-ttl">カウンセリング</h3>
                            <p class="item_desc-txt">シミュレーションも実施しつつ、患者様のお悩みに寄り添いながら施術の方向性を決定します。施術はもちろん、料金やアフターケアなどご不安なことがあれば、お気軽にご相談ください。</p>
                        </div>
                    </li>
                    <li class="flow_list-item">
                        <div class="flow_list-item_tmb n2">
                            <img src="<?php echo tmpdir(); ?>/img/top/flow2.svg" alt="">
                        </div>
                        <div class="flow_list-item_desc">
                            <h3 class="item_desc-ttl">手続き・お会計</h3>
                            <p class="item_desc-txt">カウンセリングが終わりましたら、お会計と手続きをして頂きます。ご予約の状況によっては、当日施術が可能な場合もございます。ご希望の方は事前にお問い合わせください。</p>
                        </div>
                    </li>
                    <li class="flow_list-item">
                        <div class="flow_list-item_tmb n3">
                            <img src="<?php echo tmpdir(); ?>/img/top/flow3.svg" alt="">
                        </div>
                        <div class="flow_list-item_desc">
                            <h3 class="item_desc-ttl">洗顔</h3>
                            <p class="item_desc-txt">施術前に洗顔をして頂きます。メイク落としなど各種アメニティの用意もございますので、当日は手ぶらでお越し頂いても構いません。</p>
                        </div>
                    </li>
                    <li class="flow_list-item">
                        <div class="flow_list-item_tmb n4">
                            <img src="<?php echo tmpdir(); ?>/img/top/flow4.svg" alt="">
                        </div>
                        <div class="flow_list-item_desc">
                            <h3 class="item_desc-ttl">施術</h3>
                            <p class="item_desc-txt">麻酔で痛みを感じにくくしてから、お顔へ糸を入れていきます。また、患者様の不安を少しでも軽減できるように、お声がけをしながら施術を進めさせて頂いております。</p>
                        </div>
                    </li>
                    <li class="flow_list-item">
                        <div class="flow_list-item_tmb n5">
                            <img src="<?php echo tmpdir(); ?>/img/top/flow5.svg" alt="">
                        </div>
                        <div class="flow_list-item_desc">
                            <h3 class="item_desc-ttl">パウダールーム</h3>
                            <p class="item_desc-txt">施術後すぐにメイクをして頂いても構いません。院内にパウダルームもございますので、お気軽にご利用ください。</p>
                        </div>
                    </li>
                    <li class="flow_list-item">
                        <div class="flow_list-item_tmb n6">
                            <img src="<?php echo tmpdir(); ?>/img/top/flow6.svg" alt="">
                        </div>
                        <div class="flow_list-item_desc">
                            <h3 class="item_desc-ttl">アフターケア</h3>
                            <p class="item_desc-txt">施術後の過ごし方の注意点を医師からお伝えします。施術日以降でも無料で医師の診察を受け付けておりますので、ご希望の方はお気軽にお問い合わせください。</p>
                        </div>
                    </li>
                </ul>
            </div>
    </div>
</section>
<section id="access" class="sec access">
        <div class="container">
            <h2 class="sec_ttl">アクセス</h2>
        </div>
        <div class="access_contents container w1120">
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
</section>
</main>
<?php get_footer(); ?>
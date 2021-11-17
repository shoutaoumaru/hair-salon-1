<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="animsition">
  <div class="superwrapper">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class="logo__img">
          <a class="animsition-link" href="/">
            <div class="logo inview"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a class="animsition-link" href="/">
            <div class="logo inview"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="/"><span>Top</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>"><span>Staff</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>"><span>Recruit</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>News</span></a>
            </li>
            <li class="pc-nav-item">
              <a target="_blank" class="pc-nav-link reserve-btn"
                href="https://beauty.hotpepper.jp/"><span>Reserve</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a href="tel:092-686-7954"><i class="icon-tel"></i></a></li>
          <li><a href="https://beauty.hotpepper.jp/" target="_blank"><i class="icon-net"></i></a></li>
          <li><a href="https://goo.gl/maps/CyWuFwBDtuB9U6Ld7" target="_blank"><i class="icon-map"></i></a></li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /.p-header -->
    <div class="pageBg">
      <span class="lines">
      </span>
      <span class="txt">Riv<br>HairSalon</span>
    </div>
    <!-- /.pageBg -->
    <div class="p-firstview">
      <div class="hero">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/style_1@sp.jpg" />
              <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/style_1@pc.jpg" />
            </div>
            <div class="swiper-slide">
              <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/cut_3@sp.jpg" />
              <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/cut_3@pc.jpg" />
            </div>
            <div class="swiper-slide">
              <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/store_2@sp.jpg" />
              <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/store_2@pc.jpg" />
            </div>
          </div>
        </div>
        <div class="p-firstview__textbox clip-js1 skew">
          <div class="p-firstview__text">We Create Special with RivRound.</div>
        </div>
        <div class="scrolldown-wrap">
          <a class="scrolldown" href="#">Scroll</a>
        </div>
      </div>
    </div>
    <!-- /.p-firstview -->
    <section id="concept" class="p-concept">
      <div class="c-container">
        <div class="p-concept__wrap">
          <div class="p-concept__block appear up">
            <h2 class="p-concept__title clip-js left">
              <span class="c-title">concept</span>
            </h2>
            <div class="p-concept__desc item">
              <p class="txt-sm">RIVROUNDでは、ご希望のヘアデザインに仕上がるよう、高い技術力とカウンセリングでお応え。 日々、鏡を見た時に少し微笑むような体験。
                可愛く、そして美しく。
                「明日あなたの大切な人に褒められるように」をコンセプトにRIVROUNDでは本物の上質にこだわりながら、丁寧なカウンセリングでお客様のなかなか伝えづらいお悩み、ご要望をお伺いして、きれいになるお手伝いをさせて頂きます
              </p>
            </div>
          </div>
          <div class="p-concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/style_7@sp.jpg" alt="" class="p-concept__photo parallax-down">
          </div>
        </div>
      </div>
    </section>
    <!-- /.p-concept -->
    <section id="information" class="p-info">
      <div class="c-container appear up">
        <div class="p-info__sub-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/style_10.jpg" alt="" class="p-concept__sub-photo parallax-img">
        </div>
        <div class="p-info__wrap">
          <h2 class="p-info__title clip-js left">
            <span class="c-title">information</span>
          </h2>
          <div class="p-info__desc item">
            <div class="close">
              <p class="txt-sm">CLOSE</p>
              <p class="txt-sm">毎週金曜日</p>
            </div>
            <div class="open">
              <p class="txt-sm">OPEN HOUR</p>
              <p class="txt-sm">9:00-19:00</p>
            </div>
            <div class="resep">
              <p class="txt-sm">RESERVATION</p>
              <p class="txt-sm">CUT最終受付 19:00</p>
              <p class="txt-sm">PERM・COLOR最終受付 18:00</p>
              <p class="txt-xs">※日曜日のみ、最終受付を一時間繰り上げさせて頂きます。<br>※ご予約優先制です</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.p-info -->
    <section id="instagram" class="p-instagram">
      <div class="c-container appear up">
        <h2 class="p-concept__title clip-js left">
          <span class="c-title">instagram</span>
        </h2>
        <div class="p-instagram__img item">
          <?php echo apply_filters('the_content', '[instagram-feed]'); ?>
        </div>
        <div class="insta-link item">
          <a href="https://www.instagram.com/shouta_oumaru/" class="insta-link-btn" target="_blank">
            <span>follow us</span></a>
        </div>
      </div>
    </section>
    <!-- /#instagram -->
    <section id="menu" class="p-menu">
      <div class="c-container appear up">
        <h2 class="p-menu__titile clip-js left">
          <span class="c-title">menu</span>
        </h2>
        <div class="p-menu__list item">
          <div class="p-menu__block">
            <section class="p-menu__section">
              <h3 class="p-menu__subtitle">CUT<span>（カット）</span></h3>
              <dl class="txt-sm">
                <dt>Stylist / Top Stylist</dt>
                <dd>¥ 4,400 / ¥ 4,700</dd>
              </dl>
              <dl class="txt-sm">
                <dt>Director</dt>
                <dd>¥ 5,000</dd>
              </dl>
            </section>
            <section class="p-menu__section">
              <h3 class="p-menu__subtitle">COLOR<span>（カラー）</span></h3>
              <dl class="txt-sm">
                <dt>リタッチ</dt>
                <dd>¥ 4,500〜</dd>
              </dl>
              <dl class="txt-sm">
                <dt>ワンタッチ</dt>
                <dd>¥ 5,500〜</dd>
              </dl>
              <dl class="txt-sm">
                <dt>ダブルカラー</dt>
                <dd>¥ 10,000〜</dd>
              </dl>
              <dl class="txt-sm">
                <dt>ハイライト</dt>
                <dd>¥ 10,000〜</dd>
              </dl>
            </section>
            <section class="p-menu__section">
              <h3 class="p-menu__subtitle">PERM<span>（パーマ）</span></h3>
              <dl class="txt-sm">
                <dt>ベーシックパーマ</dt>
                <dd>¥ 6,600 〜</dd>
              </dl>
              <dl class="txt-sm">
                <dt>デジタルパーマ</dt>
                <dd>¥ 11,600 〜</dd>
              </dl>
              <dl class="txt-sm">
                <dt>ストレートパーマ</dt>
                <dd>¥ 17,000 〜</dd>
              </dl>
            </section>
          </div>
          <div class="p-menu__block">
            <section class="p-menu__section">
              <h3 class="p-menu__subtitle">
                HAIR CARE<span>（ヘアケア）</span>
              </h3>
              <dl class="txt-sm">
                <dt>
                  トリートメント各種<br><span>（AVEDA／MILBON／Aujua）</span>
                </dt>
                <dd class="snd">¥ 2,500 〜 ¥ 5,000</dd>
              </dl>
              <dl class="txt-sm">
                <dt>
                  ヘッドスパ各種<br><span>（AVEDA／MILBON／Aujua）</span>
                </dt>
                <dd class="snd">¥ 500 〜 ¥ 4,000</dd>
              </dl>
            </section>
            <section class="p-menu__section">
              <h3 class="p-menu__subtitle">OTHER<span>（その他）</span></h3>
              <dl class="txt-sm">
                <dt>シャンプー&amp;ブロー</dt>
                <dd>¥ 2,500</dd>
              </dl>
              <dl class="txt-sm">
                <dt>セット / アップ</dt>
                <dd>¥ 4,000 / ¥ 5,000</dd>
              </dl>
              <dl class="txt-sm">
                <dt>ポイントメイク / フルメイク</dt>
                <dd>¥ 2,000 / ¥ 4,000</dd>
              </dl>
              <dl class="txt-sm">
                <dt>時間外料金<span>（1時間毎）</span></dt>
                <dd>+ ¥ 1,500</dd>
              </dl>
            </section>
            <ul class="txt-xs">
              <li>※表示価格はすべて税込です</li>
              <li>
                カット料金以外は、シャンプー・ブローは含まれておりません。
              </li>
              <li>
                スタイリストやデザインによって料金が異なる場合がございますので予めご確認ください。
              </li>
              <li>各種カードでのお支払いも可能です。</li>
              <li>詳細などお問い合わせはお電話にてご確認ください。</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- /.p-menu -->
    <section id="staff" class="p-staff">
      <div class="c-container appear up">
        <h2 class="p-staff__title clip-js left">
          <span class="c-title">staff</span>
        </h2>
        <div class="p-staff__list">
          <div class="p-staff__item item">
            <div class="p-staff__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/biyoushi.lady@sp.jpg" alt="">
            </div>
            <h3 class="p-staff__name">
              <span class="txt-sm">利部 真理</span>
              <span class="txt-sm">Mari Ribu</span>
              <p class="txt-xs">Executive Director</p>
            </h3>
          </div>
          <div class="p-staff__item item">
            <div class="p-staff__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/biyousshi_mens@sp.jpg" alt="">
            </div>
            <h3 class="p-staff__name">
              <span class="txt-sm">利部 凛玖</span>
              <span class="txt-sm">Riku Ribu</span>
              <p class="txt-xs">Director</p>
            </h3>
          </div>
          <div class="p-staff__item item">
            <div class="p-staff__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/staff_1@sp.jpg" alt="">
            </div>
            <h3 class="p-staff__name">
              <span class="txt-sm">利部 美紀</span>
              <span class="txt-sm">Miki Ribu</span>
              <p class="txt-xs">Stylist</p>
            </h3>
          </div>
        </div>
        <div class="view-more item">
          <a href="/staff/staff.html">
            <span>View More</span>
          </a>
        </div>
      </div>
    </section>
    <!-- /.p-staff -->
    <section id="access" class="p-access">
      <div class="c-container">
        <div class="p-access__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/store__2@pc.jpg" alt="" class="p-access__photo parallax">
        </div>
        <div class="p-access-wrap">
          <h2 class="p-access__title clip-js left">
            <p class="c-title">access</p>
          </h2>
          <div class="p-access__desc appear up">
            <ul class="p-access__list item">
              <li class="p-access__item">
                <p class="txt-sm">〒812-0011</p>
                <p class="txt-sm">福岡県福岡市博多区博多駅前3-27-25,<br>第二岡部ビル9F</p>
              </li>
              <li class="p-access__item">
                <p class="txt-sm"><a href="tel:092-686-7954">TEL:092-686-7954</a></p>
                <p class="txt-sm"><a href="mailto:info@riv-round.com">MAIL:info@riv-round.com</a>
                </p>
              </li>
              <li class="p-access__item">
                <p class="txt-sm">月~金 11:00~21:00</p>
                <p class="txt-sm">土~日 10:00~19:00</p>
              </li>
              <li class="p-access__item">
                <p class="txt-xs">駐車場あり（店舗前３台）</p>
              </li>
            </ul>
            <div class="p-access__g-map item">
              <a href="https://goo.gl/maps/j8XVKnaPfmCbvFsb6"><span class="txt-sm">Google Map</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.p-access -->
    <section id="news" class="p-news">
      <div class="c-container">
        <h2 class="p-news__tit clip-js left">
          <p class="c-title">NEWS</p>
        </h2>
        <div class="p-news__wrapper appear up">
          <ul class="p-news__list item">

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="p-news__item">
              <a class="p-news__link animsition-link" href="<?php the_permalink(); ?>">
                <span class="txt-sm"><?php echo get_the_date('Y.m.d'); ?></span>
                <p class="txt-sm"><?php the_title(); ?></p>
              </a>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <div class="view-more item">
            <a class="view-more__link animsition-link" href="/news">
              <span>NEWS LIST</span></a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.p-news -->
    <section id="recruit" class="p-recruit">
      <div class="c-container appear up">
        <h2 class="p-recruit__title clip-js left">
          <p class="c-title">recruit</p>
        </h2>
        <h3 class="p-recruit__subtitle item">
          <p class="txt-md">スタッフ募集</p>
        </h3>
        <div class="p-recruit__desc item">
          <p class="txt-sm">
            現在RivRoundではスタッフを募集しています。<br />
            採用ご希望の方は、以下のリンクから詳細をご確認いただき、お気軽にお問い合わせください。
          </p>
        </div>
        <div class="view-more animsition-link item">
          <a href="/recruit/recruit.html">
            <span>View More</span>
          </a>
        </div>
      </div>
    </section>
    <!-- /.p-recruit -->
    <footer class="p-footer">
      <div class="c-container">
      <div class="p-footer__sns">
        <div class="sns-insta">
          <a class="sns-link" href="https://www.instagram.com/"><i></i></a>
        </div>
        <div class="sns-fb">
          <a class="sns-link" href="https://www.facebook.com/"><i></i></a>
        </div>
      </div>
      <div class="c-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_official2.png" alt="">
      </div>
      <div class="copyright">
        &copy;RivRound.inc
      </div>
      </div>
    </footer>
    <!-- /.p-footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="/">Top</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/staff')); ?>">Staff</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/recruit')); ?>">recruit</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">News</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- /.mobile-menu -->
  </div>
  <!-- /.p-superwrapper -->
  <?php get_footer(); ?>
</body>

</html>
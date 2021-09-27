<?php 
/* Template Name: STAFF
*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>美容院テンプレート1/STAFF</title>
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
    <div class="c-top-view">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling__2.jpg" alt="">
    </div>
    <!-- /.c-top-view -->
    <main class="c-staff">
      <div class="c-container">
        <div class="c-staff-wrapper">
          <h1 class="c-staff__title">
            <span>STAFF</span>
            <p class="c-staff__title-desc">
              一流の技術を持ったRivRoundのスタッフです。<br />カットの技術はもちろん、髪質や頭皮のこと、徹底したダメージレス施術を行えるスペシャリストです。<br />どんなカットでもケアでも、ご相談に乗りますのでお気軽にどうぞ。
            </p>

          </h1>
          <div class="c-staff__wrap">
            <div class="c-staff__list">
              <div class="c-staff__item">
                <div class="c-staff__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/biyousshi_mens@sp.jpg" alt="">
                </div>
                <h4 class="c-staff__name">
                  <p class="ja">利部 翔太</p>
                  <p class="en">- owner -</p>
                </h4>
                <div class="c-staff__desc">
                  <p>頭の形、顔型、髪質、ライフスタイルに合わせて丁寧にカットし再現性を高めます。ミディアム、セミロングを大得意とし、確実なカウンセリングからご要望以上の最高の仕上がりを提供します。
                  </p>

                  <a class="sns-link" href="https://www.instagram.com/" target="_blank"><span>Instagram</span></a>
                </div>
              </div>
              <div class="c-staff__item">
                <div class="c-staff__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/biyoushi.lady@sp.jpg" alt="">
                </div>
                <h4 class="c-staff__name">
                  <p class="ja">利部 梨花</p>
                  <p class="en">- director -</p>
                </h4>

                <div class="c-staff__desc">
                  <p>お客様の悩みとしっかり向き合い、あなたに似合う最高の"美"を提案します！安心して、お任せください。素敵なデザインを一緒につくりましょう。</p>
                  <a class="sns-link" href="https://www.instagram.com/" target="_blank"><span>Instagram</span></a>
                </div>
              </div>
              <div class="c-staff__item">
                <div class="c-staff__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/staff_1@sp.jpg" alt="">
                </div>
                <h4 class="c-staff__name">
                  <p class="ja">利部 美紀</p>
                  <p class="en">- director -</p>
                </h4>

                <div class="c-staff__desc">
                  <p>年齢・性別にとらわれず自分らしい選択ができる自由を、美容を通して提案します！あなただけの素敵を一緒につくりましょう！</p>
                  <a class="sns-link" href="https://www.instagram.com/" target="_blank"><span>Instagram</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

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
  <!-- .superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>
</body>
</html>

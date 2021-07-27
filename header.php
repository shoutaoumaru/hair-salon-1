<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>美容室テンプレート1 | top</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/logo-animation.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/animsition.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/bootstrap-reboot.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&family=Roboto:wght@100;300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendor/swiper.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
  <?php wp_head(); ?>

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
              <a class="pc-nav-link animsition-link" href="/news/news.html"><span>News</span></a>
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
          <a class="animsition-link" href="/news/news.html">News</a>
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
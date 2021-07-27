<?php get_header(); ?>
 
<section class="c-news-sl">
  <div class="c-container">
    <ul class="c-news-sl__list">
      <li class="c-news-sl__block">
        <div class="c-news-sl__tit">
          <p class="c-txt-md"><?php the_title(); ?></p>
          <span class="c-news-sl__date"><?php the_time('Y.m.d'); ?></span>
        </div>
        <div class="c-news-sl__contents">
          <p><?php the_content('Read more'); ?></p>
        </div>
      </li>

    </ul>
    <div class="c-news-sl__link">
      <a class="more-link animsition-link" href="/news"><span class="readmore">一覧へ戻る</span></a>
    </div>
  </div>
</section>
 
<?php get_footer(); ?>
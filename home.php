<?php 
/* Template Name: NEWS
*/
?>

<?php get_header(); ?>

<section class="c-news">
  <div class="c-container">
    <h3 class="c-news__title">
      <span class="c-txt-lr">News</span>
    </h3>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <ul class="c-news__list">
        <li class="c-news__item">
          <a href="<?php the_permalink(); ?>" class="c-news__link animsition-link">
            <span class="c-txt-sm"><?php echo get_the_date('Y.m.d'); ?></span>
            <p class="c-txt-sm"><?php the_title(); ?></p>
          </a>
        </li>
      </ul> 

    <?php endwhile; else: ?>
      <div>記事がありませんでした。</div>
    <?php endif; ?>

    <ul class="page-numbers">
      <li>
        <span aria-current="page" class="page-numbers current">1</span>
      </li>
      <li>
        <a class="page-numbers" href="#">2</a>
      </li>
      <li>
        <a class="page-numbers" href="#">3</a>
      </li>
      <li>
        <span class="page-numbers dots">…</span>
      </li>
      <li>
        <a class="page-numbers" href="#">6</a>
      </li>
      <li>
        
<!--         <a class="next page-numbers" href="<?php next_posts_link('次のページ'); ?>"></a> -->
		  <?php next_posts_link('次のページ'); ?>
      </li>
    </ul>
  </div>
</section>


<?php get_footer(); ?>
<!-- ===============================================================  
  news-detail
================================================================ -->
<?php get_header(); ?>

<!-- main content -->
<main>
  <section class="news-detail">

    <div class="news-detail__inner">

      <!-- side bar -->
      <?php get_template_part('template-parts/news-sidebar'); ?>


      <!-- article -->
      <?php

      if (have_posts()) :
        while (have_posts()) :
          the_post();
      ?>

          <div class="news__detail__-wrap">

            <article class="news-detail__article">

              <!-- title -->
              <header class="news-detail__head">
                <div class="news-detail__info">
                  <span class="news-detail__category">
                    <?php
                    $category = get_the_category();
                    if (! empty($category)) {
                      echo esc_html($category[0]->name);
                    }
                    ?>
                  </span>
                  <time class="news-detail__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date('Y.m.d'); ?>
                  </time>
                </div>

                <h1 class="news-detail__title">
                  <?php the_title(); ?>
                </h1>
              </header>

              <!-- eye-catch -->
              <figure class="news-detail__article-img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail(
                    'large',
                    array(
                      'width'  => 315,
                      'height' => 210,
                      'alt'    => get_the_title(),
                    )
                  );
                }
                ?>
              </figure>

              <!-- body -->
              <div class="news-detail__body">


                <div class="news-detail__text">
                  <?php the_content(); ?>
                </div>

              </div>
            </article>

        <?php
        endwhile;
      endif;
        ?>

        <!-- btn -->
        <div class="news-detail__btn">
          <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="c-btn">
            <span class="c-btn__border"></span>
            <span class="c-btn__text-wrap">
              <span class="c-btn__text c-btn__text--primary">お知らせ一覧へ戻る</span>
              <span class="c-btn__text c-btn__text--secondary sp-hidden">お知らせ一覧へ戻る</span>
            </span>
          </a>
        </div>
          </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
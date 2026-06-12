<!-- ===============================================================  
  category (news)
================================================================ -->
<?php get_header(); ?>

<!-- fv -->
<header class="news-fv l-sub-fv" aria-label="ファーストビュー">
  <div class="news-fv__inner l-sub-fv__inner">
    <div class="l-sub-fv__title-wrap">
      <h1 class="l-sub-fv__title l-sub-fv__title--ja">
        お知らせ
      </h1>
      <p class="l-sub-fv__title l-sub-fv__title--en">
        news
      </p>
    </div>
  </div>
</header>

<!-- main content -->
<main>
  <section class="news js-header-trigger">
    <div class="news__inner">

      <!-- side bar -->
      <?php get_template_part('template-parts/news-sidebar'); ?>

      <!-- list -->
      <div class="news__list-wrap">
        <ul class="c-news__list news__list">
          <li class="news__item">
            <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post();
            ?>

                <?php get_template_part('template-parts/post-loop-news'); ?>

            <?php
              endwhile;
            endif;
            ?>
          </li>
        </ul>

        <!-- pagination-btn -->
        <div class="c-pagination__btn-wrap news__pagination-btn-wrap">
          <button class="c-pagination__btn news__pagination-btn active">
            01
          </button>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
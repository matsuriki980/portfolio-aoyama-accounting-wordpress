<!-- ===============================================================  
  news
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

      <!-- side var -->
      <aside class="l-sidebar">
        <section class="l-sidebar__section">
          <h2 class="l-sidebar__title">Category</h2>

          <ul class="l-sidebar__list">
            <li class="l-sidebar__item">
              <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="l-sidebar__link">
                <span class="l-sidebar__label">すべて</span>
                <span class="l-sidebar__count">(52)</span>
              </a>
            </li>

            <li class="l-sidebar__item">
              <a href="#" class="l-sidebar__link">
                <span class="l-sidebar__label">お知らせ</span>
                <span class="l-sidebar__count">(23)</span>
              </a>
            </li>

            <li class="l-sidebar__item">
              <a href="#" class="l-sidebar__link">
                <span class="l-sidebar__label">採用情報</span>
                <span class="l-sidebar__count">(23)</span>
              </a>
            </li>

            <li class="l-sidebar__item">
              <a href="#" class="l-sidebar__link">
                <span class="l-sidebar__label">その他</span>
                <span class="l-sidebar__count">(0)</span>
              </a>
            </li>
          </ul>
        </section>

        <section class="l-sidebar__section">
          <h2 class="l-sidebar__title">Archive</h2>

          <ul class="l-sidebar__list">
            <li class="l-sidebar__item">
              <a href="#" class="l-sidebar__link">
                <span class="l-sidebar__label">2026年</span>
                <span class="l-sidebar__count">(10)</span>
              </a>
            </li>
            <li class="l-sidebar__item">
              <a href="#" class="l-sidebar__link">
                <span class="l-sidebar__label">2025年</span>
                <span class="l-sidebar__count">(10)</span>
              </a>
            </li>
          </ul>
        </section>
      </aside>

      <!-- list -->
      <div class="news__list-wrap">
        <ul class="c-news__list news__list">
          <li class="news__item">
            <article class="c-news__item">
              <a href="/aoyama-accounting/frontend/news/detail/" class="c-news__link" aria-label="詳細ページへ">

                <!-- img -->
                <div class="c-news__img">
                  <img src="/aoyama-accounting/frontend/news/img/news.jpg" width="315" height="210" alt="">
                </div>

                <!-- content -->
                <div class="c-news__content">
                  <div class="c-news__info">
                    <span class="c-news__category">お知らせ</span>
                    <time datetime="2026-01-08" class="c-news__date">2026.01.08</time>
                  </div>

                  <h2 class="c-news__title">
                    ホームページをリニューアルしました
                  </h2>
                </div>
              </a>
            </article>
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
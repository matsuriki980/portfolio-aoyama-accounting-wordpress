<!-- ===============================================================  
  news-detail
================================================================ -->
<?php get_header(); ?>

<!-- main content -->
<main>
  <section class="news-detail">

    <div class="news-detail__inner">

      <!-- side bar -->
      <aside class="l-sidebar js-header-trigger">

        <h2 class="news-detail__sidebar-title">news</h2>

        <section class="l-sidebar__section news-detail__sidebar__section">
          <h2 class="l-sidebar__title">Category</h2>

          <ul class="l-sidebar__list">
            <li class="l-sidebar__item">
              <a href="#" class="l-sidebar__link">
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
          </ul>
        </section>
      </aside>

      <div class="news-detail__article">

        <article class="news-detail__article">

          <!-- title -->
          <header class="news-detail__head">
            <div class="news-detail__info">
              <span class="news-detail__category">お知らせ</span>
              <time class="news-detail__date" datetime="2026-01-08">2026.01.08</time>
            </div>

            <h1 class="news-detail__title">
              ホームページをリニューアルしました
            </h1>
          </header>

          <!-- eye-catch -->
          <figure class="news-detail__article-img">
            <img src="/aoyama-accounting/frontend/news/img/news.jpg" width="315" height="346" alt="パソコンにデータ入力を行う様子">
          </figure>

          <!-- body -->
          <div class="news-detail__body">

            <p class="news-detail__text">
              日頃より当事務所をご愛顧いただき、心より御礼申し上げます。
              この度、お客様により使いやすく、より多くの情報をお届けできるよう、当事務所のWebサイトを全
              面リニューアルいたしました。
              新しいWebサイトでは、税務・会計に関する最新情報や経営のヒントとなるお知らせを更新してまい
              ります。また、事務所スタッフの紹介ページも充実させ、より身近な存在として感じていただけるよ
              う工夫を重ねました。
              引き続き、皆様のビジネスパートナーとして精進してまいりますので、今後ともご指導ご鞭撻のほ
              ど、よろしくお願い申し上げます。
            </p>

          </div>
        </article>

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
<!-- ===============================================================  
  top
================================================================ -->

<?php get_header(); ?>

<!-- main content -->
<main>

  <!-- fv -->
  <div class="top-fv">
    <div class="top-fv__inner">
      <div class="top-fv__head">
        <div class="top-fv__title-wrap">
          <p class="top-fv__title top-fv__title--en">
            <span>numbers</span>
            <span>expeat</span>
          </p>
          <h2 class="top-fv__title top-fv__title--ja">
            <span>数字の専門家</span>
            <span>ともに歩むパートナーとして</span>
          </h2>
        </div>
        <a href="/#top-about" class="top-fv__scroll-btn u-link-hover" aria-label="top-aboutセクションまでスクロール">
          <span class="top-fv__scroll-icon"></span>
        </a>
      </div>

      <div class="top-fv__img">
        <picture>
          <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-kv.jpg">

          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-kv-sp.jpg" width="375" height="480"
            alt="お客様のパートナーとして、専門家の立場から親身になってご支援します。">
        </picture>
      </div>
    </div>
  </div>

  <!-- about -->
  <section class="top-about js-header-trigger" id="top-about">

    <div class="top-about__inner">

      <!-- title -->
      <div class="top-about__title-wrap">
        <h2 class="c-title c-title--en c-title--entop-about__title top-about__title--en">
          <span>Realization of</span>
          <span>I want to do this</span>
        </h2>
      </div>

      <!-- body -->
      <div class="top-about__body">

        <!-- content -->
        <div class="top-about__content">
          <h3 class="top-about__lead">「こうしたい」を実現する</h3>

          <div class="top-about__text-wrap">
            <p class="top-about__text">
              <span>寄り添い、ともに考え、ともに歩む。</span>
              <span>それが私たちの考える「数字の専門家」としての在り方です。</span>
            </p>
            <p class="top-about__text">
              <span>確かな知識と経験、誠実な対応、</span>
              <span>そして何より、お客様の未来を想う気持ちを大切に、</span>
              <span>これからも皆様の会社の成長をサポートしてまいります。</span>
            </p>
            <p class="top-about__text">
              会計のことなら青山会計事務所にお任せください。
            </p>
          </div>

          <!-- btn -->
          <div class="top-about__btn">
            <a href="/about/" class="c-btn">
              <span class="c-btn__border"></span>
              <span class="c-btn__text-wrap">
                <span class="c-btn__text c-btn__text--primary">私たちについて</span>
                <span class="c-btn__text c-btn__text--secondary sp-hidden">私たちについて</span>
              </span>
            </a>
          </div>
        </div>

        <!-- img -->
        <div class="top-about__img sp-hidden">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-about.jpg" width="600" height="420" alt="">
        </div>
      </div>

    </div>

    <!-- marquee -->
    <div class="top-about__marquee c-marquee">
      <div class="top-about__marquee__inner c-marquee__inner">
        <span>As partners walking together</span>
        <span>As partners walking together</span> <!-- 2個配置し途切れるのを防ぐ -->
      </div>
    </div>
  </section>

  <!-- service -->
  <section class="top-service">
    <div class="top-service__inner">
      <div class="top-service__head">

        <!-- title -->
        <div class="top-service__title-wrap c-title__wrap">
          <h2 class="c-title c-title--ja">
            サービス内容
          </h2>

          <p class="c-title c-title--en c-title--base top-service__title top-service__title--en">
            our service
          </p>
        </div>

        <!-- btn -->
        <div class="top-service__btn">
          <a href="/service/" class="c-btn">
            <span class="c-btn__border"></span>
            <span class="c-btn__text-wrap">
              <span class="c-btn__text c-btn__text--primary">サービス内容について詳しく見る</span>
              <span class="c-btn__text c-btn__text--secondary sp-hidden">サービス内容について詳しく見る</span>
            </span>
          </a>
        </div>
      </div>

      <!-- Slider main container -->
      <div class="swiper top-service__content">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper top-service__content-inner">
          <!-- Slides -->
          <div class="swiper-slide top-service__card">
            <a href="/service/#tax" class="top-service__card-link">

              <!-- img -->
              <div class="top-service__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-service01.jpg" width="270" height="330" alt="税理・会計">
              </div>

              <!-- content -->
              <div class="top-service__card-content">
                <h3 class="top-service__card__title top-service__card__title--ja">
                  税務・会計

                  <span class="top-service__card__title-decoration-wrap">
                    <span class="top-service__card__title-decoration"></span>
                  </span>
                </h3>

                <p class="top-service__card__title top-service__card__title--en">
                  Tax & Accounting
                </p>

                <div class="top-service__card-btn">
                  <span class="c-btn-arrow">
                    <span class="c-btn-arrow__icon"></span>
                  </span>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide top-service__card">
            <a href="/service/#capital" class="top-service__card-link">

              <!-- img -->
              <div class="top-service__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-service02.jpg" width="270" height="330" alt="相続・贈与・譲渡所得">
              </div>

              <!-- content -->
              <div class="top-service__card-content">
                <h3 class="top-service__card__title top-service__card__title--ja">
                  相続・贈与・譲渡所得

                  <span class="top-service__card__title-decoration-wrap">
                    <span class="top-service__card__title-decoration"></span>
                    <span class="top-service__card__title-decoration"></span>
                  </span>
                </h3>

                <p class="top-service__card__title top-service__card__title--en">
                  Capital gains
                </p>

                <div class="top-service__card-btn">
                  <span class="c-btn-arrow">
                    <span class="c-btn-arrow__icon"></span>
                  </span>
                </div>
              </div>
            </a>
          </div>

          <div class="swiper-slide top-service__card">
            <a href="/service/#support" class="top-service__card-link">

              <!-- img -->
              <div class="top-service__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-service03.jpg" width="270" height="330" alt="設立・開業支援">
              </div>

              <!-- content -->
              <div class="top-service__card-content">
                <h3 class="top-service__card__title top-service__card__title--ja">
                  設立・開業支援

                  <span class="top-service__card__title-decoration-wrap">
                    <span class="top-service__card__title-decoration"></span>
                    <span class="top-service__card__title-decoration"></span>
                    <span class="top-service__card__title-decoration"></span>
                  </span>
                </h3>

                <p class="top-service__card__title top-service__card__title--en">
                  Support for opening a business
                </p>

                <div class="top-service__card-btn">
                  <span class="c-btn-arrow">
                    <span class="c-btn-arrow__icon"></span>
                  </span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- feature -->
  <section class="top-feature">
    <div class="top-feature__inner">

      <!-- title -->
      <div class="top-feature__title-wrap c-title__wrap">
        <h2 class="c-title c-title--ja">
          青山会計事務所の強み
        </h2>

        <p class="c-title c-title--en c-title--base top-feature__title top-feature__title--en">
          our feature
        </p>
      </div>

      <!-- body -->
      <div class="top-feature__body">

        <!-- img -->
        <div class="top-feature__img-wrap">
          <div class="top-feature__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-feature01.jpg" width="250" height="335" alt="">
          </div>
          <div class="top-feature__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-feature02.jpg" width="250" height="335" alt="">
          </div>
        </div>

        <!-- content -->
        <div class="top-feature__content">
          <h3 class="top-feature__lead">
            <span>一言でいえば</span>
            <span>プロフェッショナル</span>
          </h3>

          <div class="top-feature__text">
            <span>税務・会計・相続・贈与・譲渡所得など、それぞれの分野に専門家を配置しております。</span>
            <span>また、司法書士や行政書士など他士業の方々ともネットワークを構築しており、
              青山会計事務所にご相談いただければトータルでサポートできるのが特徴です。</span>
          </div>

          <!-- btn -->
          <div class="top-feature__btn">
            <a href="/feature/" class="c-btn">
              <span class="c-btn__border"></span>
              <span class="c-btn__text-wrap">
                <span class="c-btn__text c-btn__text--primary">青山会計事務所の強みを見る</span>
                <span class="c-btn__text c-btn__text--secondary sp-hidden">青山会計事務所の強みを見る</span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- marquee -->
    <div class="top-feature__marquee c-marquee">
      <div class="top-feature__marquee__inner c-marquee__inner">
        <span>Professional in a word.</span>
        <span>Professional in a word.</span> <!-- 2個配置し途切れるのを防ぐ -->
      </div>
    </div>
  </section>

  <!-- voice -->
  <section class="top-voice">
    <div class="top-voice__inner">

      <div class="top-voice__body">

        <!-- content -->
        <div class="top-voice__content">

          <!-- title -->
          <div class="top-voice__title-wrap c-title__wrap">
            <h2 class="c-title c-title--ja">
              お客様の声
            </h2>

            <p class="c-title c-title--en  top-voice__title top-voice__title--en">
              <span>customer</span>
              <span>voice</span>
            </p>
          </div>

          <!-- btn -->
          <div class="top-voice__btn-arrow-wrap sp-hidden">
            <button class="c-btn-arrow top-voice__btn-arrow top-voice__btn-arrow--prev"
              aria-label="前のスライダーへ">
              <span class="c-btn-arrow__icon"></span>
            </button>
            <button class="c-btn-arrow top-voice__btn-arrow top-voice__btn-arrow--next"
              aria-label="次のスライダーへ">
              <span class="c-btn-arrow__icon"></span>
            </button>
          </div>
        </div>

        <!-- Slider main container -->
        <div class="swiper top-voice__list">
          <!-- Additional required wrapper -->
          <ol class="swiper-wrapper">
            <!-- Slides -->
            <li class="swiper-slide top-voice__item c-voice__item">
              <article>
                <a href="/voice/detail/" class="top-voice__link c-voice__link">
                  <span class="top-voice__number c-voice__number">(01)</span>
                  <div class="top-voice__img c-voice__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/voice/img/voice.jpg" width="270" height="300" alt="">
                  </div>

                  <h3 class="top-voice__item-title c-voice__item-title">
                    株式会社桐嶋製作所 K・O様
                  </h3>

                  <p class="top-voice__text c-voice__text">
                    数字のプロ。言われたことだけじゃなく、提案までしてくれるのでいつも助かります
                  </p>
                </a>
              </article>
            </li>
          </ol>
        </div>
      </div>

      <!-- btn -->
      <div class="top-voice__btn">
        <a href="/voice/" class="c-btn">
          <span class="c-btn__border"></span>
          <span class="c-btn__text-wrap">
            <span class="c-btn__text c-btn__text--primary">お客様の声一覧を見る</span>
            <span class="c-btn__text c-btn__text--secondary sp-hidden">お客様の声一覧を見る</span>
          </span>
        </a>
      </div>
    </div>
  </section>

  <!-- news -->
  <section class="top-news">
    <div class="top-news__inner">

      <!-- title -->
      <div class="top-news__title-wrap c-title__wrap">
        <h2 class="c-title c-title--ja">
          お知らせ
        </h2>

        <p class="c-title c-title--en  top-news__title top-news__title--en">
          news
        </p>
      </div>

      <!-- list -->
      <ul class="top-news__list">
              <?php get_template_part('template-parts/post-loop-news'); ?>
      </ul>

      <!-- btn -->
      <div class="top-news__btn">
        <a href="/news/" class="c-btn">
          <span class="c-btn__border"></span>
          <span class="c-btn__text-wrap">
            <span class="c-btn__text c-btn__text--primary">お知らせ一覧を見る</span>
            <span class="c-btn__text c-btn__text--secondary sp-hidden">お知らせ一覧を見る</span>
          </span>
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
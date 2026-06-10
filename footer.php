<!-- ===============================================================  
  footer
================================================================ -->
<!-- footer -->
<footer class="l-footer">

  <div class="l-footer__inner">

    <?php if (
      !is_page([
        'contact',
        'contact/confirm',
        'contact/thanks',
        'privacy-policy'
      ]) &&
      !is_404()
    ) : ?>

      <!-- contact -->
      <div class="l-footer__contact">
        <div class="l-footer__contact-inner">

          <!-- content -->
          <div class="l-footer__contact-content">

            <div class="l-footer__contact-title-wrap c-title__wrap">
              <p class="c-title c-title--ja">
                お問い合わせ
              </p>

              <h2 class="c-title c-title--en l-footer__contact-title l-footer__contact-title--en">
                Contact Us
              </h2>
            </div>

            <!-- SPとPCで改行位置を変える -->
            <p class="l-footer__contact-text sp-hidden">
              <span>税務や会計について確認したいことなど、</span>
              <span>どのようなご相談でも構いません。</span>
              <span>まずはお気軽にご相談ください。</span>
            </p>

            <p class="l-footer__contact-text pc-hidden">
              <span>税務や会計について</span>
              <span>確認したいことなど、どのような</span>
              <span>ご相談でも構いません。</span>
              <span>まずはお気軽にご相談ください。</span>
            </p>

            <div class="l-footer__contact-btn">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c-btn-arrow" aria-label="お問い合わせページへ">

                <span class="c-btn-arrow__icon"></span>

              </a>
            </div>

          </div>

          <!-- visual -->
          <div class="l-footer__contact-visual">

            <!-- slider primary -->
            <div class="swiper l-footer__contact-slider js-footer__contact-slider-primary">

              <ul class="swiper-wrapper">

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact01.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact01-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact02.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact02-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact03.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact03-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact01.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact01-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact02.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact02-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact03.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact03-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

              </ul>

            </div>

            <!-- slider secondary -->
            <div class="swiper l-footer__contact-slider js-footer__contact-slider-secondary">

              <ul class="swiper-wrapper">

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact04.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact04-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact05.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact05-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact06.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact06-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact04.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact04-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact05.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact05-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

                <li class="swiper-slide l-footer__contact-img">
                  <picture>
                    <source media="(min-width: 900px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact06.jpg">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-contact06-sp.jpg" width="150" height="90" alt="">
                  </picture>
                </li>

              </ul>

            </div>

          </div>



        </div>
      </div>
    <?php endif; ?>

    <!-- body -->
    <div class="l-footer__body">

      <!-- logo -->
      <div class="l-footer__logo c-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer__logo-link c-logo__link u-link-hover" aria-label="トップページへ戻る">
          <span class="l-footer__logo-icon c-logo__icon"></span>
        </a>
      </div>

      <!-- nav -->
      <nav class="l-footer__nav" aria-label="フッターナビゲーション">

        <div class="l-footer__columns">

          <!-- 1列目 -->
          <ul class="l-footer__list">

            <li class="l-footer__item">
              <a href="<?php echo esc_url(home_url('/feature/')); ?>" class="l-footer__link u-text-hover">
                青山会計事務所の強み
              </a>
            </li>

            <li class="l-footer__item">
              <a href="<?php echo esc_url(home_url('/service/')); ?>" class="l-footer__link u-text-hover">
                サービス内容
              </a>

              <ul class="l-footer__child-list">

                <li class="l-footer__child-item">
                  <a href="<?php echo esc_url(home_url('/service/#tax')); ?>" class="l-footer__child-link u-nav__link-child">
                    税務・会計
                  </a>
                </li>

                <li class="l-footer__child-item">
                  <a href="<?php echo esc_url(home_url('/service/#capital')); ?>" class="l-footer__child-link u-nav__link-child">
                    相続・贈与・譲渡所得
                  </a>
                </li>

                <li class="l-footer__child-item">
                  <a href="<?php echo esc_url(home_url('/service/#support')); ?>" class="l-footer__child-link u-nav__link-child">
                    設立・開業支援
                  </a>
                </li>

              </ul>

            </li>

          </ul>

          <!-- 2列目 -->
          <ul class="l-footer__list">

            <li class="l-footer__item">
              <a href="<?php echo esc_url(home_url('/about/')); ?>" class="l-footer__link u-text-hover">
                事務所案内
              </a>

              <ul class="l-footer__child-list">

                <li class="l-footer__child-item">
                  <a href="<?php echo esc_url(home_url('/about/#message')); ?>" class="l-footer__child-link u-nav__link-child">
                    代表挨拶
                  </a>
                </li>

                <li class="l-footer__child-item">
                  <a href="<?php echo esc_url(home_url('/about/#values')); ?>" class="l-footer__child-link u-nav__link-child">
                    経営理念
                  </a>
                </li>

                <li class="l-footer__child-item">
                  <a href="<?php echo esc_url(home_url('/about/#company')); ?>" class="l-footer__child-link u-nav__link-child">
                    事務所概要
                  </a>
                </li>

                <li class="l-footer__child-item">
                  <a href="<?php echo esc_url(home_url('/about/#access')); ?>" class="l-footer__child-link u-nav__link-child">
                    アクセス
                  </a>
                </li>

              </ul>

            </li>

          </ul>

          <!-- 3列目 -->
          <ul class="l-footer__list">

            <li class="l-footer__item">
              <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="l-footer__link u-text-hover">
                お客様の声
              </a>
            </li>

            <li class="l-footer__item">
              <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="l-footer__link u-text-hover">
                お知らせ
              </a>
            </li>

            <li class="l-footer__item">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="l-footer__link u-text-hover">
                お問い合わせ
              </a>
            </li>

          </ul>

        </div>

      </nav>

      <!-- info -->
      <div class="l-footer__info">

        <!-- address -->
        <address class="l-footer__address">
          <p>〒422-0000</p>
          <p>静岡市駿河区森下町 静岡MMタワー14F</p>
        </address>

        <!-- meta -->
        <div class="l-footer__meta">

          <small class="l-footer__copyright">
            ©2024 Aoyama Tax Office.
          </small>

          <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="l-footer__privacy-link">
            プライバシーポリシー
          </a>

        </div>
      </div>

    </div>

  </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>
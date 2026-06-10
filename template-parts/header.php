<!-- ===============================================================  
  header
================================================================ -->

<!-- header -->
<header class="l-header js-header">
  <div class="l-header__inner">

<!-- topページならh1,それ以外ならdivで包む -->
    <?php if (is_front_page()) : ?>

      <h1 class="l-header__logo" aria-label="青山会計事務所">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo-link u-link-hover">
          <span class="l-header__logo-icon"></span>
        </a>
      </h1>

    <?php else : ?>

      <div class="l-header__logo" aria-label="青山会計事務所">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo-link u-link-hover">
          <span class="l-header__logo-icon"></span>
        </a>
      </div>

    <?php endif; ?>


    <!-- content -->
    <div class="l-header__content">

      <!-- nav -->
      <nav class="l-header__nav" aria-label="グローバルナビゲーション">

        <ul class="l-header__nav-list">

          <li class="l-header__nav-item">
            <a href="<?php echo esc_url(home_url('/feature/')); ?>" class="l-header__nav-link u-text-hover">
              青山会計事務所の強み
            </a>
          </li>

          <li class="l-header__nav-item">
            <a href="<?php echo esc_url(home_url('/service/')); ?>" class="l-header__nav-link u-text-hover">
              サービス内容
            </a>
          </li>

          <li class="l-header__nav-item">
            <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="l-header__nav-link u-text-hover">
              お客様の声
            </a>
          </li>

          <li class="l-header__nav-item">
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="l-header__nav-link u-text-hover">
              お知らせ
            </a>
          </li>

          <li class="l-header__nav-item">
            <a href="<?php echo esc_url(home_url('/about/')); ?>" class="l-header__nav-link u-text-hover">
              事務所案内
            </a>
          </li>

        </ul>

      </nav>

      <!-- buttons -->
      <div class="l-header__btns">

        <!-- contact button -->
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="l-header__btn l-header__contact-btn" aria-label="お問い合わせ">
          <span class="l-header__contact-icon">
          </span>
        </a>

        <!-- l-footer -->
        <button class="l-header__btn l-header__drawer-btn js-drawer-btn" type="button" aria-label="メニューを開く">
          <span class="l-header__drawer-bars">
            <span></span>
            <span></span>
          </span>
        </button>

      </div>

    </div>
  </div>
</header>
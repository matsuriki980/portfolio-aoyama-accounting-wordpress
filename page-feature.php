<!-- ===============================================================  
  feature
================================================================ -->
<?php get_header(); ?>

<!-- main content -->
<main>

  <!-- fv -->
  <header class="feature-fv l-sub-fv">
    <div class="feature-fv__inner l-sub-fv__inner">
      <div class="l-sub-fv__title-wrap">
        <h1 class="l-sub-fv__title l-sub-fv__title--ja">
          青山会計事務所の強み
        </h1>
        <p class="l-sub-fv__title l-sub-fv__title--en">
          <span>our</span>
          <span>feature</span>
        </p>
      </div>
    </div>
  </header>

  <!-- main content -->
  <div class="feature js-header-trigger">
    <section class="feature__item feature__accounting">
      <div class="feature__item-inner">

        <!-- content -->
        <div class="feature__content">

          <!-- title -->
          <div class="feature__title-wrap">
            <p class="feature__title feature__title--en">Accounting Professionals</p>
            <h2 class="feature__title feature__title--ja">
              <span>会計の</span>
              <span>プロフェッショナル</span>
            </h2>
          </div>

          <!-- text -->
          <p class="feature__text">
            <span>税務・会計・贈与・譲渡など各部門に専門家を配置しております。</span>
            <span>また、法書士や行政書士など他士業の方々とのネットワークを構築しております。</span>
            <span>会計以外にお困りごとがある場合にも、青山会計事務所でトータルサポートいたします。</span>
          </p>
        </div>

        <!-- img -->
        <div class="feature__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/feature-accounting.png" width="315" height="265" alt="パソコンを前に打ち合わせをする2人の男性の様子">
        </div>
      </div>
    </section>

    <!-- marquee -->
    <div class="feature__marquee c-marquee">
      <div class="feature__marquee__inner c-marquee__inner">
        <span>Accounting Professionals</span>
        <span>Accounting Professionals</span> <!-- 2個配置し途切れるのを防ぐ -->
      </div>
    </div>

    <section class="feature__item feature__recruitment">
      <div class="feature__item-inner">

        <!-- content -->
        <div class="feature__content">

          <!-- title -->
          <div class="feature__title-wrap">
            <p class="feature__title feature__title--en">Recruitment and Training</p>
            <h2 class="feature__title feature__title--ja">
              <span>若い才能の</span>
              <span>採用と育成</span>
            </h2>
          </div>

          <!-- text -->
          <p class="feature__text">
            <span>後継者がいないなど、高齢化が課題になっている会計事務所が多いのも実情です。</span>
            <span>しかし会計は長期的な関係が望まれますので、若手の採用と育成は必須になります。</span>
            <span>青山会計事務所では、次世代を担う才能ある人材を積極的に採用し、エキスパートに育成する体制を構築しております。</span>
          </p>
        </div>

        <!-- img -->
        <div class="feature__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature/feature-recruitment.png" width="315" height="265" alt="4人の新卒を対象に実施した面接の様子">
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
<!-- ===============================================================  
  404
================================================================ -->
<?php get_header(); ?>

<!-- main content -->
<main>
  <section class="page-404">
    <div class="page-404__inner">

      <!-- title -->
      <h1 class="page-404__title js-header-trigger">404 Not Found</h1>

      <!-- lead -->
      <p class="page-404__lead">
        <span>お探しのページが見つかりませんでした。</span>
        <span>移動または削除された可能性があります。</span>
        <span> お手数ですがURLをご確認の上、上記メニューなどからお探しください。</span>
      </p>

      <!-- btn -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="page-404__btn">
        トップへ戻る
      </a>

    </div>
  </section>
</main>

<?php get_footer(); ?>
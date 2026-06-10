<!-- ===============================================================  
  voice
================================================================ -->
<?php get_header(); ?>

<!-- fv -->
<header class="voice-fv l-sub-fv" aria-label="ファーストビュー">
  <div class="voice-fv__inner l-sub-fv__inner">
    <div class="l-sub-fv__title-wrap">
      <h1 class="l-sub-fv__title l-sub-fv__title--ja">
        お客様の声
      </h1>
      <p class="l-sub-fv__title l-sub-fv__title--en">
        <span>customer</span>
        <span>voice</span>
      </p>
    </div>
  </div>
</header>

<!-- main content -->
<main>
  <section class="voice">
    <div class="voice__inner">

      <!-- list -->
      <ol class="voice__list">
        <li class="voice__item c-voice__item">
          <article>
            <a href="/aoyama-accounting/frontend/voice/detail/" class="voice__link c-voice__link">
              <span class="voice__number c-voice__number">(01)</span>
              <div class="voice__img c-voice__img">
                <img src="/aoyama-accounting/frontend/voice/img/voice.jpg" width="270" height="300" alt="">
              </div>

              <h2 class="voice__item-title c-voice__item-title">
                株式会社桐嶋製作所 K・O様
              </h2>

              <p class="voice__text c-voice__text">
                数字のプロ。言われたことだけじゃなく、提案までしてくれるのでいつも助かります
              </p>

              <div class="voice__btn">
                <div class="c-btn-arrow">
                  <span class="c-btn-arrow__icon"></span>
                </div>
              </div>
            </a>
          </article>
        </li>
      </ol>

      <!-- pagination-btn -->
      <div class="voice__pagination-btn-wrap">
        <button class="voice__pagination-btn active">
          01
        </button>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
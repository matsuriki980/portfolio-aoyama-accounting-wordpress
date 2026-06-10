<!-- ===============================================================  
  confirm
================================================================ -->
<?php get_header(); ?>

<!-- fv -->
<header class="contact-fv l-sub-fv" aria-label="ファーストビュー">
  <div class="contact-fv__inner l-sub-fv__inner">
    <div class="l-sub-fv__title-wrap">
      <div class="l-sub-fv__title l-sub-fv__title--ja">
        お問い合わせ
      </div>
      <p class="l-sub-fv__title l-sub-fv__title--en">
        contact us
      </p>
    </div>
  </div>
</header>

<!-- main content -->
<main>

  <section class="confirm js-header-trigger js-confirm">
    <div class="confirm__inner c-contact__inner">

      <!-- head -->
      <div class="c-contact__head">

        <!-- title -->
        <h1 class="c-contact__title contact__title">
          入力内容確認
        </h1>

        <!-- lead -->
        <p class="c-contact__lead contact__lead">
          <span>入力内容をご確認いただき、問題がなければ、</span>
          <span>
            以下の「入力内容を送信する」ボタンをクリックして送信してください。
          </span>
        </p>

      </div>

      <dl class="confirm__list">

        <div class="confirm__item">
          <dt>
            <span class="c-form__item-head">
              お名前<span class="c-form__required">必須</span>
            </span>
          </dt>
          <dd class="c-form__text" data-confirm="user-name"></dd>
        </div>

        <div class="confirm__item">
          <dt>
            <span class="c-form__item-head">
              会社名
            </span>
          </dt>

          <dd class="c-form__text" data-confirm="company-name"></dd>
        </div>

        <div class="confirm__item">
          <dt>
            <span class="c-form__item-head">
              郵便番号
            </span>
          </dt>

          <dd class="c-form__text" data-confirm="postal"></dd>
        </div>

        <div class="confirm__item">
          <dt>
            <span class="c-form__item-head">
              住所
            </span>
          </dt>

          <dd class="c-form__text" data-confirm="address"></dd>
        </div>

        <div class="confirm__item">
          <dt>
            <span class="c-form__item-head">
              電話番号<span class="c-form__required">必須</span>
            </span>
          </dt>

          <dd class="c-form__text" data-confirm="tel"></dd>
        </div>

        <div class="confirm__item">
          <dt>
            <span class="c-form__item-head">
              メールアドレス<span class="c-form__required">必須</span>
            </span>
          </dt>

          <dd class="c-form__text" data-confirm="email"></dd>
        </div>

        <div class="confirm__item">
          <dt>
            <span class="c-form__item-head">
              お問い合わせ内容<span class="c-form__required">必須</span>
            </span>
          </dt>

          <dd class="c-form__text" data-confirm="message"></dd>
        </div>
      </dl>

      <!-- button -->
      <div class="confirm__btn-wrap">

        <button type="submit" class="c-contact__btn confirm__submit-btn">
          入力内容を送信する
        </button>

        <button type="button" class="c-contact__btn c-contact__btn--prev">
          入力画面に戻る
        </button>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
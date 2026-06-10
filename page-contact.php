<!-- ===============================================================  
  contact
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
  <section class="contact js-header-trigger">

    <div class="contact__inner c-contact__inner">

      <div class="c-contact__head">

        <!-- title -->
        <h1 class="c-contact__title contact__title">
          お問い合わせフォーム
        </h1>

        <!-- lead -->
        <p class="c-contact__lead contact__lead">
          <span>メールでのお問い合わせは下記フォームからご要望事項を記入の上、送信をお願いいたします。</span>
          <span>
            ※ご記入いただいたメールアドレスにてご連絡いたしますので、メールアドレスは正確にご入力ください。
          </span>
        </p>

      </div>

      <!-- form -->
      <form id="contact-form" class="contact__form">

        <div class="contact__form-wrap">

          <!-- お名前 -->
          <div class="contact__form-item">
            <label for="user-name">
              <span class="c-form__item-head">
                お名前<span class="c-form__required">必須</span>
              </span>
              <input type="text" required id="user-name" name="user-name"
                class="contact__form-text c-form__text" placeholder="山田太郎">
            </label>
          </div>

          <!-- 会社名 -->
          <div class="contact__form-item">
            <label for="company-name">
              <span class="c-form__item-head">
                会社名
              </span>
              <input type="text" minlength="3" id="company-name" name="company-name"
                class="contact__form-text c-form__text" placeholder="青山会計事務所">
            </label>
          </div>

          <!-- 郵便番号 -->
          <div class="contact__form-item">
            <span class="c-form__item-head">郵便番号</span>

            <div class="contact__postal">
              <input type="text" id="postal-first" name="postal-first"
                title="半角数字で 〇〇〇-〇〇〇〇 の形式で前半の3文字を入力してください"
                class="contact__form-text c-form__text c-form__postal-input" inputmode="numeric"
                pattern="\d{3}" maxlength="3" placeholder="000" autocomplete="postal-code">

              <span class="c-form__postal-hyphen">ー</span>

              <input type="text" id="postal-last" name="postal-last"
                title="半角数字で 〇〇〇-〇〇〇〇 の形式で後半の3文字を入力してください"
                class="contact__form-text c-form__text c-form__postal-input" inputmode="numeric"
                pattern="\d{4}" maxlength="4" placeholder="0000" autocomplete="postal-code">
            </div>
          </div>

          <!-- 住所 -->
          <div class="contact__form-item">
            <label for="address">
              <span class="c-form__item-head">
                住所
              </span>
              <input type="text" minlength="3" id="address" name="address"
                class="contact__form-text c-form__text" placeholder="静岡市駿河区森下町">
            </label>
          </div>

          <!-- 電話番号 -->
          <div class="contact__form-item">
            <label for="tel">
              <span class="c-form__item-head">
                電話番号<span class="c-form__required">必須</span>
              </span>
              <input type="tel" minlength="3" required id="tel" name="tel"
                class="contact__form-text c-form__text" placeholder="000-0000-0000">
            </label>
          </div>

          <!-- メールアドレス -->
          <div class="contact__form-item">
            <label for="email">
              <span class="c-form__item-head">
                メールアドレス<span class="c-form__required">必須</span>
              </span>
              <input type="email" minlength="3" required id="email" name="email"
                class="contact__form-text c-form__text" placeholder="info@aoyama-tax-oficce.jp">
            </label>
          </div>

          <!-- お問い合わせ内容 -->
          <div class="contact__form-item">
            <label for="message">
              <span class="c-form__item-head">
                お問い合わせ内容<span class="c-form__required">必須</span>
              </span>
              <textarea required id="message" name="message" class="contact__form-text c-form__text"
                placeholder="お問い合わせ内容を入力してください" rows="8"></textarea>
            </label>
          </div>

          <!-- privacy -->
          <div class="privacy-consent">


            <input id="privacy-agree" class="privacy-consent__checkbox" type="checkbox"
              name="privacy_agree" required>


            <label for="privacy-agree" class="privacy-consent__label">

              <a href="/aoyama-accounting/frontend/privacy-policy/" target="_blank"
                rel="noopener noreferrer">
                プライバシーポリシー
              </a>
              に同意し、お問い合わせする
            </label>


          </div>

          <!-- button -->
          <button type="submit" class="contact__form-btn js-contact-btn">
            入力内容を確認する
          </button>

        </div>

      </form>

    </div>

  </section>
</main>


<?php get_footer(); ?>
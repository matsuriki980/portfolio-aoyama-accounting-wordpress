<?php

/* ==========================================
   WordPress 設定
========================================== */

function my_theme_enqueue_assets()
{


  // swiper.css読み込み
  wp_enqueue_style(
    'swiper-style',
    get_template_directory_uri() . '/assets/css/vendor/swiper.css',
    array(),
    '1.0.0'
  );


  // Swiper.js読み込み
  wp_enqueue_script(
    'swiper-script',
    get_template_directory_uri() . '/assets/js/vendor/swiper-bundle.min.js',
    array(),
    '12.1.3',
    true
  );

  // CSS読み込み
  wp_enqueue_style(
    'main-style',
    get_template_directory_uri() . '/assets/css/style.css',
    array("swiper-style"),
    '1.0.0'
  );

  // main.js読み込み
  wp_enqueue_script(
    'main-script',
    get_template_directory_uri() . '/assets/js/main.js',
    array('swiper-script'),
    '1.0.0',
    true
  );
}

// イベントを実行
add_action(
  'wp_enqueue_scripts',
  'my_theme_enqueue_assets'
);

// main.js を type="module" で読み込む
add_filter(
  'script_loader_tag',
  function ($tag, $handle) {

    if ($handle === 'main-script') {
      return str_replace(
        '<script ',
        '<script type="module" ',
        $tag
      );
    }

    return $tag;
  },
  10,
  2
);

//  管理画面をカスタマイズ
function my_theme_setup()
{
  add_theme_support('title-tag'); // WordPress側でタイトルを自動生成
  add_theme_support('post-thumbnails'); // アイキャッチ画像を追加する
}

add_action(
  'after_setup_theme',
  'my_theme_setup'
);

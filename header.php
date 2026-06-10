<!-- ===============================================================  
  header
================================================================ -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- URLを自動で取得 -->
  <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">

  <!-- topページなら"website",他ページならarticle -->
  <?php if (is_front_page()) : ?>
    <meta property="og:type" content="website">
  <?php else : ?>
    <meta property="og:type" content="article">
  <?php endif; ?>

  <meta property="og:site_name" content="青山会計事務所">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/og-img.jpg">
  <meta name="robots" content="noindex,nofollow">
  <meta property="og:description"
    content="静岡県静岡市を拠点とする青山会計事務所は、税務・会計業務、資産の承継、事業開始のサポートなど、多様な会計に関するサービスを提供しております。お客様それぞれのご要望やお悩みに対して、専門家の立場から親身になってご支援させていただきます。">


  <!-- 管理画面で設定したタイトルを出力する -->
  <meta property="og:title"
    content="<?php echo esc_attr(wp_get_document_title()); ?>">

  <!-- faviconを設定する -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.ico">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- top と news-detail は通常ヘッダー、それ以外は下層ページ用ヘッダー -->
  <?php if (!is_front_page() && !is_single() && !is_404()) : ?>
    <?php get_template_part('template-parts/header', 'sub'); ?>

  <?php else : ?>
    <?php get_template_part('template-parts/header'); ?>
  <?php endif; ?>

  <?php get_template_part('template-parts/drawer'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <?php wp_head(); ?>
  <meta content="ie=edge" http-equiv="X-UA-Compatible">
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/images/icon.ico" rel="icon">
  <title></title>
</head>
<body <?php body_class(); ?>>
  <div class="wrapper js-fadeIn">
    <header id="js-header">
      <div class="header__logo">
        <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="株式会社JIM" loading="lazy"></a>
      </div>
      <div class="header__right">
        <div class="header__tell">
          <a href="tel:265-622-4649">
            <div class="header__tell--all">
              <p></p>
              <p class="header__tell--time">平日9&#58;00&#12316;21&#58;00</p>
              <p class="header__tel--icon"><img src="<?php echo get_template_directory_uri(); ?>/images/tell.svg" alt="電話" loading="lazy"></p>
              <p class="header__tell--number">265&#45;622&#45;4649</p>
            </div>
          </a>
        </div>
        <div class="header__reservation_btn">
          <a href="">ご予約はこちら<span class="reservation_btn__arrow"></span></a>
        </div>
      </div>
    </header>

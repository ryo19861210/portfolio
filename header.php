<!DOCTYPE html>
<html lang="ja">

<head>
  <title>ポートフォリオサイト</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <header id="header">
    <nav class="nav">
      <a href="<?php echo home_url(); ?>/page/about">About</a>
      <a href="<?php echo home_url(); ?>#works">Works</a>
      <a href="<?php echo home_url(); ?>/page/contact">Contact</a>
    </nav>
    <!-- ハンバーガーメニューここから -->
    <nav class="header__nav nav" id="js-nav">
      <ul class="nav__items nav-items">
        <li class="nav-items__item"><a href="<?php echo home_url(); ?>/category/about">About</a></li>
        <li class="nav-items__item"><a href="<?php echo home_url(); ?>#works">Works</a></li>
        <li class="nav-items__item"><a href="<?php echo home_url(); ?>/page/contact">Contact</a></li>
      </ul>
    </nav>
    <button class="header__hamburger hamburger" id="js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <!-- ハンバーガーメニューここまで -->
  </header>

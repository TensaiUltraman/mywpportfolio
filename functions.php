<?php

  // ウィジェット
  register_sidebar();
  
  // カスタムメニュー
  register_nav_menu( 'navigation', 'ナビゲーション1');

  //概要（抜粋）の文字数調整
  function my_excerpt_length($length) {
      return 50;
  }
  add_filter('excerpt_length', 'my_excerpt_length');

  //概要（抜粋）の省略文字変更
  function my_more($more) {
      return '...';
  }
  add_filter('excerpt_more', 'my_more');

  // アイキャッチ画像
  add_theme_support( 'post-thumbnails' );
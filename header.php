<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <!-- レスポンシブ対応 -->
  <meta name="viewport" content="width=device-width">
  
  <!-- Font AwesomeのCDNコード -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
  <!-- Google Fontsを使えるように設定 -->
  <link href="https://fonts.googleapis.com/css?family=Coiny|Roboto+Slab" rel="stylesheet">

  <!-- スタイルシート(style.css)を適用 -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <?php wp_head(); ?>
</head>

<!-- ページを区別できるようにするためbodyにテンプレートタグを設定 -->
<body <?php body_class(); ?>>

<!-- ヘッダーとしてサイト名を表示 -->
<header>
  <div class="siteinfo">
    <div class="container">
      <h1><a href="<?php echo home_url(); ?>">
      <?php bloginfo('name') ?></a></h1>
    </div>

  <!-- ナビゲーションメニューを表示 -->
    <nav>
      <div class="container">
        <?php wp_nav_menu( 'theme_location=navigation' ); ?>
      </div>
    </nav>
  </div>


</header>

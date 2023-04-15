<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="l-main">
    <div class="l-sidebar">
      <h1 class="c-blogTitle">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">MyPortforio</a>
      </h1>
      <button class="c-navButton">
        <div class="c-navButton__bars">
          <div class="c-navButton__bar c-navButton__bar-top"></div>
          <div class="c-navButton__bar c-navButton__bar-center"></div>
          <div class="c-navButton__bar c-navButton__bar-bottom "></div>
        </div>
        <!-- /.c-navButton__bars -->
      </button>
      <div class="c-nav">
          <?php
            $args = array(
              'container'     => '',
              // 'theme_location'=> 'your-theme-loc',
              'depth'         => 1,
              'fallback_cb'   => false,
              'menu_class' => 'c-nav__list',
              'add_li_class'  => 'c-nav__list-item'
              );
              wp_nav_menu($args)
          ?>
      </div>
      <!-- /.c-nav -->
    </div>
    <!-- /.l-sidebar -->
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

  <!-- <title><?php bloginfo('name'); ?></title> -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="l-main">
    <div class="l-sidebar">
      <h1 class="c-blogTitle">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
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
            wp_nav_menu( array (
              'container'     => '',
              'depth'         => 1,
              'fallback_cb'   => false,
              'menu_class' => 'c-nav__list',
              'theme_location'  => 'nav',
              'add_li_class'  => 'c-nav__list-item'
              ));     
          ?>
      </div>
      <!-- /.c-nav -->
      <!-- <div class="">
        ©Keiichiro Chiba
      </div> -->
    </div>
    <!-- /.l-sidebar -->
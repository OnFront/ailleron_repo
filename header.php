<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ailleron
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <meta name="format-detection" content="telephone=no">
    <meta property="og:title" content="ailleron Poland" />
    <meta property="og:description" content="ailleron Poland Team" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="https://pl.ailleron.com" />
    <meta property="og:sitename" content="ailleron Poland" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <header class="header" id="header">
    <div class="container">
      <?php
        if ( function_exists( 'the_custom_logo' ) ): ?>
          <div class="header__logo">
            <?php the_custom_logo(); ?>
          </div>
      <?php endif ?>


      <?php hamburger_button(); ?>

      <div class="header__wrap">
        <nav class="header__nav">
          <?php wp_nav_menu( array( 
            'theme_location' => 'primary-menu-desktop',
            'menu_class'     => 'no-list menu',
            'container'      => 'ul',
            ) ); ?>
        </nav>

        <?php contact_btn_acf($fieldname = 'contact_button'); ?>
      </div>

    </div>

  </header>


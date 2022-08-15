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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <meta name="format-detection" content="telephone=no">
    <meta property="og:title" content="ailleron Poland Careers: Let’s Build the Top Cloud Solutions Together!" />
    <meta property="og:description" content="ailleron Poland Team is a perfect match for IT lovers who want to build the World’s top cloud solutions at scale." />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="https://pl.ailleron.com" />
    <meta property="og:sitename" content="ailleron Poland" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site small-padding">
  <div id="pixel-to-watch"></div>

  <header class="header header--small" id="header">
    <div class="header__upper">
      <div class="container">
        <div class="header__upper-wrap">
          <?php
            if(have_rows('upper_menu_links_repeat', 'option')): ?>
              <ul class="header__countries no-list">
              <?php while(have_rows('upper_menu_links_repeat', 'option')): the_row(); ?>
                
                <li class="header__countries-item">
                  <?php
                $image = get_sub_field('flag_icon');
                  if( !empty( $image ) ): ?>
                      <img class="header__countries-flag" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  <?php endif; ?>

                  <?php 
                  $link = get_sub_field('link');
                  if( $link ): 
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>
                      <a class="no-underline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                  <?php endif; ?>
                </li>
                
              <?php endwhile; ?>
              </ul>
              <?php
            endif;
          ?>
        </div>
      </div>
    </div>
  </header>



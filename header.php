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
<div id="page" class="site">
  <div id="pixel-to-watch"></div>

  <header class="header" id="header">
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

    <div class="header__lower">
      <div class="container">
          <div class="header__lower-wrapper">
            <div class="header__lower-row">
              <?php 
                if ( function_exists( 'the_custom_logo' ) ): ?>
                  <div class="header__logo">
                    <?php the_custom_logo(); ?>
                  </div>
              <?php endif; ?>

              <button class="button--hamburger">
                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 16.625H28" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M4 8.625H28" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M4 24.625H28" stroke="#171717" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>



            <div class="header__navwrap">
              <nav class="header__nav">
                  <?php wp_nav_menu(array('theme-location' => 'Primary-Menu-1', 'container' => 'ul', 'menu_class' => 'header__menu no-list')); ?>
              </nav>

              <?php 
                $link = get_field('button_header', 'option');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--blue button--header-cta " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                      <?php echo esc_html( $link_title ); ?>
                      <svg class="arrow-right" width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.5 8.86207H0.362069V11.1379H1.5V8.86207ZM26.3046 10.8046C26.749 10.3602 26.749 9.63975 26.3046 9.19536L19.0629 1.95361C18.6185 1.50922 17.898 1.50922 17.4536 1.95361C17.0092 2.398 17.0092 3.1185 17.4536 3.56289L23.8907 10L17.4536 16.4371C17.0092 16.8815 17.0092 17.602 17.4536 18.0464C17.898 18.4908 18.6185 18.4908 19.0629 18.0464L26.3046 10.8046ZM1.5 11.1379H25.5V8.86207H1.5V11.1379Z" fill="white"/>
                      </svg>
                    </a>
                <?php endif; ?>
            </div>
          </div>
      </div>
    </div>

  </header>



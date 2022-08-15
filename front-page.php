<?php
/**
 * The Front Page tempalte file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ailleron
 */

get_header();
?>

	<main id="primary" class="site-main front-page">
		<?php get_template_part('template-parts/hero/hero'); ?>
		<?php get_template_part('template-parts/product/product'); ?>
		<?php get_template_part('template-parts/numbers/numbers'); ?>
	</main><!-- #main -->

<?php

get_footer();

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProjectPeople
 */

?>

	<footer id="colophon" class="footer">
			<div class="container container--lgUp">
				<?php
					get_template_part('template-parts/footer/logo-dark');
					get_template_part('template-parts/footer/footer-menu');
					get_template_part('template-parts/footer/footer-privacy');
					get_template_part('template-parts/footer/footer-utility');
					get_template_part('template-parts/footer/footer-socials');
				?>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<!-- <div id="consent-popup" class="cookies hidden">
	
	<div class="cookies__content">
		<h2 class="cookies__title"><?php //the_field( 'cookies_title', 'options' ); ?></h2>
		<p class="cookies__description"><?php //the_field( 'cookies_description', 'options' ); ?></p>
		<div class="cookies__link">
			<span id="cookie-box-accept" class="button button--transparent" style="transform: translateY(0%); opacity: 1;">
				<?php //the_field( 'cookies_link', 'options' ); ?>
			</span>
		</div>
	</div>
	
</div> -->
<?php wp_footer(); ?>

</body>
</html>

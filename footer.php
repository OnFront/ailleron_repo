<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ailleron
 */

?>

	<footer id="colophon" class="footer">
		<div class="container">
			<div class="copy">
				@<?php echo date("Y"); ?> Ailleron SA. All rights reserved.
			</div>

			<nav class="footer__nav">
			<?php wp_nav_menu( array( 
				'theme_location' => 'footer-menu',
				'menu_class'     => 'no-list footer__menu',
				'container'      => 'ul',
				) ); ?>
			</nav>

			<div class="footer__social">
				<svg xmlns="http://www.w3.org/2000/svg" width="36.437" height="18.763" viewBox="0 0 36.437 18.763">
					<g id="Group_104" data-name="Group 104" transform="translate(-1593.719 -6590.423)" opacity="0.561">
						<?php 
						$fb_link = get_field('facebook', 'options');
						$fb_url = $fb_link['url'];
						if($fb_link): ?>
							<a href="<?php echo $fb_url; ?>" rel="nofollow"><path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M10.209,9.665l.477-3.11H7.7V4.537a1.555,1.555,0,0,1,1.753-1.68h1.356V.21A16.542,16.542,0,0,0,8.4,0C5.947,0,4.341,1.489,4.341,4.185v2.37H1.609v3.11H4.341v7.517H7.7V9.665Z" transform="translate(1592.109 6591.377)"/></a>
						<?php endif; ?>

						<?php
						$insta_link = get_field('instagram', 'options');
						$insta_url = $insta_link['url'];
						if($insta_link): ?>
							<a href="<?php echo $insta_url; ?>" rel="nofollow"><path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M9.38,6.809a4.811,4.811,0,1,0,4.811,4.811A4.8,4.8,0,0,0,9.38,6.809Zm0,7.938a3.127,3.127,0,1,1,3.127-3.127A3.133,3.133,0,0,1,9.38,14.746ZM15.51,6.612A1.122,1.122,0,1,1,14.388,5.49,1.119,1.119,0,0,1,15.51,6.612ZM18.7,7.751A5.553,5.553,0,0,0,17.18,3.819,5.589,5.589,0,0,0,13.249,2.3c-1.549-.088-6.192-.088-7.741,0A5.581,5.581,0,0,0,1.576,3.815,5.571,5.571,0,0,0,.061,7.746c-.088,1.549-.088,6.192,0,7.741a5.553,5.553,0,0,0,1.516,3.931,5.6,5.6,0,0,0,3.931,1.516c1.549.088,6.192.088,7.741,0a5.553,5.553,0,0,0,3.931-1.516A5.589,5.589,0,0,0,18.7,15.488c.088-1.549.088-6.188,0-7.737Zm-2,9.4a3.166,3.166,0,0,1-1.784,1.784c-1.235.49-4.166.377-5.531.377s-4.3.109-5.531-.377A3.166,3.166,0,0,1,2.066,17.15c-.49-1.235-.377-4.166-.377-5.531s-.109-4.3.377-5.531A3.166,3.166,0,0,1,3.85,4.3c1.235-.49,4.166-.377,5.531-.377s4.3-.109,5.531.377a3.166,3.166,0,0,1,1.784,1.784c.49,1.235.377,4.166.377,5.531S17.184,15.919,16.695,17.15Z" transform="translate(1611.394 6588.185)"/></a>
						<?php endif; ?>
					</g>
				</svg>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

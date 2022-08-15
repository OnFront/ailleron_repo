<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ailleron
 */

get_header();
?>

<main id="primary" class="site-main">
		<section class="error-404">
			<img class="error-404__beans" width="873" height="873" role="presentation" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/svg/404.svg"/>
			<div class="container">
				<div class="container--big">
					<?php if( get_field('error_text-big','options') ): ?>
						<p class="error-404__title"><?php the_field('error_text-big','options'); ?></p>
					<?php endif; ?>
					<?php if( get_field('error_text-small','options') ): ?>
						<p class="error-404__subtitle"><?php the_field('error_text-small','options'); ?></p>
					<?php endif; ?>
					<?php 
					$link = get_field('error_link','options');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<div class="button--wrapper">
							<a class="button button--violet" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();

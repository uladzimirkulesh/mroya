<?php
/**
 * Title: Hero section (style 2)
 * Slug: mroya/section-hero-2
 * Categories: mroya_sections
 * Description: Displays image and hero text.
 * Keywords: section, hero
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--hero-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--hero-2" style="padding-top:var(--wp--preset--spacing--70)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"1280px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"is-style-text-badge"} -->
			<p class="is-style-text-badge"><?php echo esc_html_x( 'Founded in 2016', 'Hero section text', 'mroya' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"}}} -->
			<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( 'Designing better experiences for modern businesses', 'Hero section title', 'mroya' ); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp","dimRatio":20,"overlayColor":"black","isUserOverlayColor":true,"sizeSlug":"full","align":"full","className":"has-global-padding","style":{"css":"min-height: 100vmin;","spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignfull has-global-padding has-custom-css" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
		<img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" data-object-fit="cover"/>

		<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-20 has-background-dim"></span>

		<div class="wp-block-cover__inner-container">
			<!-- wp:paragraph -->
			<p></p>
			<!-- /wp:paragraph -->
		</div>
	</div>
	<!-- /wp:cover -->
</section>
<!-- /wp:group -->

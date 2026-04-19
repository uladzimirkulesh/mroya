<?php
/**
 * Title: Hero section (style 1)
 * Slug: mroya/section-hero-1
 * Categories: mroya_sections_hero
 * Description: Displays the hero info and image.
 * Keywords: section, hero
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp","dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","tagName":"section","sizeSlug":"full","metadata":{"name":"<?php echo esc_html_x( 'Hero (style 1)', 'Name for the Hero section pattern', 'mroya' ); ?>"},"align":"full","className":"has-global-padding section section--hero section--hero-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-cover alignfull has-global-padding section section--hero section--hero-1" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:100vh">
	<img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" data-object-fit="cover"/>

	<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","className":"is-style-text-giant","style":{"color":{"text":"#ffffff"},"elements":{"link":{"color":{"text":"#ffffff"}}}}} -->
			<h1 class="wp-block-heading alignwide has-text-align-center is-style-text-giant has-text-color has-link-color" style="color:#ffffff"><?php echo esc_html_x( 'Mroya', 'Hero section title', 'mroya' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:group {"layout":{"type":"constrained","contentSize":"480px","wideSize":"100%"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"align":"center","className":"text--narrow","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
				<p class="has-text-align-center text--narrow has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'We create great experiences and products for the best brands.', 'Hero section text', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</section>
<!-- /wp:cover -->

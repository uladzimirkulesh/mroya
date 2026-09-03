<?php
/**
 * Title: Mission section
 * Slug: mroya/section-mission
 * Categories: mroya_sections
 * Description: Displays image and mission text.
 * Keywords: section, mission
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp","dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","tagName":"section","sizeSlug":"full","align":"full","className":"section section--mission has-global-padding","style":{"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem"}},"css":"& .wp-block-cover__inner-container { align-self: normal; }"},"layout":{"type":"constrained"}} -->
<section class="wp-block-cover alignfull section section--mission has-global-padding has-custom-css" style="padding-top:2.25rem;padding-bottom:2.25rem;min-height:100vh">
	<img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" data-object-fit="cover"/>

	<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2rem"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group alignwide" style="min-height:100%">
			<!-- wp:group {"tagName":"header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<header class="wp-block-group">
				<!-- wp:heading {"className":"is-style-text-badge-3","style":{"typography":{"textAlign":"center"}}} -->
				<h2 class="wp-block-heading has-text-align-center is-style-text-badge-3"><?php echo esc_html_x( 'Our Mission', 'Mission section title', 'mroya' ); ?></h2>
				<!-- /wp:heading -->
			</header>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"constrained","contentSize":"860px"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"500"}},"fontSize":"huge"} -->
				<p class="has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Creating digital experiences that make a difference', 'Mission section text', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"footer","layout":{"type":"constrained","contentSize":"430px"}} -->
			<footer class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Through collaboration, innovation, and attention to detail, we help businesses build meaningful connections and grow in a constantly evolving digital world.', 'Mission section text', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->
			</footer>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</section>
<!-- /wp:cover -->

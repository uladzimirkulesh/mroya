<?php
/**
 * Title: Contact section
 * Slug: mroya/section-contact
 * Categories: mroya_sections
 * Description: Displays image, contact text and button.
 * Keywords: section, contact
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp","dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","tagName":"section","sizeSlug":"full","align":"full","className":"section section--contact has-global-padding","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-cover alignfull section section--contact has-global-padding" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);min-height:100vh">
	<img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" data-object-fit="cover"/>

	<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"style":{"typography":{"textAlign":"center","lineHeight":"1.025"}},"fontSize":"display"} -->
				<h2 class="wp-block-heading has-text-align-center has-display-font-size" style="line-height:1.025"><?php echo esc_html_x( 'Let\'s build something great together', 'Contact section title', 'mroya' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:group {"layout":{"type":"constrained","contentSize":"435px"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"500"}}} -->
					<p class="has-text-align-center" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Share a few details about your project, and we’ll get back to you with thoughtful feedback and next steps.', 'Contact section text', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-fill-2"} -->
				<div class="wp-block-button is-style-fill-2">
					<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>contact/"><?php echo esc_html_x( 'Send a Message', 'Contact section button text', 'mroya' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</section>
<!-- /wp:cover -->

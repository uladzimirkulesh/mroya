<?php
/**
 * Title: Contact section (style 1)
 * Slug: mroya/section-contact-1
 * Categories: mroya_sections_contact
 * Description: Displays contact text and button.
 * Keywords: section, contact
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Contact (style 1)', 'Name for the Contact section pattern', 'mroya' ); ?>"},"align":"full","className":"section section--contact-1","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--contact-1" id="section-contact-1" style="margin-top:0">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Container', 'Name for the section Container area', 'mroya' ); ?>"},"align":"wide","className":"section__container","style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide section__container" style="min-height:100vh;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya' ); ?>"},"className":"section__content","style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
		<div class="wp-block-group section__content">
			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Block', 'Name for the section block area', 'mroya' ); ?>"},"className":"section__block","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group section__block">
				<!-- wp:heading {"className":"is-style-text-giant text--primary"} -->
				<h2 class="wp-block-heading is-style-text-giant text--primary"><?php echo wp_kses_post( _x( 'Let’s<br>Connect', 'Contact section text', 'mroya' ) ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"640px","wideSize":"100px"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"text--secondary","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
					<p class="text--secondary has-contrast-2-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Whether you’re starting something new or improving an existing website, we’d be happy to hear from you. Share a few details about your project, and we’ll get back to you with thoughtful feedback and next steps.', 'Contact section text', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex"}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)">
					<!-- wp:button {"className":"is-style-link-6"} -->
					<div class="wp-block-button is-style-link-6">
						<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>contact/"><?php echo esc_html_x( 'Send a Message', 'Contact section button text', 'mroya' ); ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

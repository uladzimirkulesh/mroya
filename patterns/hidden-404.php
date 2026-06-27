<?php
/**
 * Title: Hidden 404
 * Slug: mroya/hidden-404
 * Inserter: no
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"textAlign":"center","level":1,"className":"is-style-text-giant"} -->
	<h1 class="wp-block-heading has-text-align-center is-style-text-giant"><?php echo esc_html_x( 'Error 404', 'Error code for a webpage that is not found.', 'mroya' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
	<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color"><?php echo esc_html_x( 'The page you are looking for cannot be found.', 'Message to convey that a webpage could not be found', 'mroya' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-outline-contrast"} -->
		<div class="wp-block-button is-style-outline-contrast">
			<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Back to Home', 'mroya' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

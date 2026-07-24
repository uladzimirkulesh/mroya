<?php
/**
 * Title: Hidden 404
 * Slug: mroya/hidden-404
 * Inserter: no
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"level":1,"style":{"typography":{"textAlign":"center"},"css":"font-size: clamp(3.4375rem, 3.20312vw + 2.79688rem, 6rem);"}} -->
	<h1 class="wp-block-heading has-text-align-center has-custom-css"><?php echo esc_html_x( 'Error 404', 'Error code for a webpage that is not found.', 'mroya' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.02rem"},"spacing":{"margin":{"top":"0rem"}}}} -->
	<p class="has-text-align-center" style="margin-top:0rem;font-style:normal;font-weight:500;letter-spacing:-0.02rem"><?php echo esc_html_x( 'The page you are looking for cannot be found.', 'Message to convey that a webpage could not be found', 'mroya' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2.25rem"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons" style="margin-top:2.25rem">
		<!-- wp:button {"className":"is-style-outline-contrast"} -->
		<div class="wp-block-button is-style-outline-contrast">
			<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Back to Home', 'mroya' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

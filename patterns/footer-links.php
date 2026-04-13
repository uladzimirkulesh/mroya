<?php
/**
 * Title: Footer links
 * Slug: mroya/footer-links
 * Description: Footer links section.
 * Categories: footer
 * Post Types: wp_template, wp_template_part, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Footer Links', 'Name for the Footer links pattern', 'mroya' ); ?>"},"align":"wide","className":"footer__links","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide footer__links has-small-font-size" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:500">
	<!-- wp:paragraph {"className":"footer__copyrights"} -->
	<p class="footer__copyrights"><?php
	printf(
		/* translators: Copyright text. */
		esc_html__( '© 2026, %s', 'mroya' ),
		'<a href="' . esc_url( __( 'https://theme.mroya.eu/', 'mroya' ) ) . '" target="_blank">Mroya Theme</a>' )
	?></p>
	<!-- /wp:paragraph -->

	<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} /-->
</div>
<!-- /wp:group -->

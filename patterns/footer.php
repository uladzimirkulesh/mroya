<?php
/**
 * Title: Default footer
 * Slug: mroya/footer
 * Description: A default footer section.
 * Categories: footer
 * Template Types: footer
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"className":"footer--default is-style-section-1","layout":{"type":"default"}} -->
<div class="wp-block-group footer--default is-style-section-1">
	<!-- wp:group {"align":"wide","className":"footer__container","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide footer__container">
		<!-- wp:group {"align":"wide","className":"footer__line--first","style":{"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"grid","columnCount":4}} -->
		<div class="wp-block-group alignwide footer__line--first" style="padding-top:var(--wp--preset--spacing--20)">
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}},"layout":{"columnSpan":2}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)">
				<!-- wp:site-title {"style":{"typography":{"lineHeight":"1"}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"footer__block","style":{"spacing":{"blockGap":"0.75rem"},"css":"font-weight: 550;","typography":{"letterSpacing":"-0.025em"}},"fontSize":"small","layout":{"type":"constrained"}} -->
				<div class="wp-block-group footer__block has-custom-css has-small-font-size" style="letter-spacing:-0.025em">
					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Discover', 'Footer block title', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} -->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'mroya' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'mroya' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Articles', 'mroya' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'mroya' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'mroya' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQ', 'mroya' ); ?>","url":"#"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"footer__block","style":{"spacing":{"blockGap":"0.75rem"},"css":"font-weight: 550;","typography":{"letterSpacing":"-0.025em"}},"fontSize":"small","layout":{"type":"constrained"}} -->
				<div class="wp-block-group footer__block has-custom-css has-small-font-size" style="letter-spacing:-0.025em">
					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Legals', 'Footer block title', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} -->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Conditions', 'mroya' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy Policy', 'mroya' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Cookies', 'mroya' ); ?>","url":"#"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"footer__block","style":{"spacing":{"blockGap":"0.75rem"},"css":"font-weight: 550;","typography":{"letterSpacing":"-0.025em"}},"fontSize":"small","layout":{"type":"constrained"}} -->
				<div class="wp-block-group footer__block has-custom-css has-small-font-size" style="letter-spacing:-0.025em">
					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Contact', 'Footer block title', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} -->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'hello@yoursite.com', 'mroya' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( '+420 123-456-78', 'mroya' ); ?>","url":"#"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"footer__block","style":{"spacing":{"blockGap":"0.75rem"},"css":"font-weight: 550;","typography":{"letterSpacing":"-0.025em"}},"fontSize":"small","layout":{"type":"constrained"}} -->
				<div class="wp-block-group footer__block has-custom-css has-small-font-size" style="letter-spacing:-0.025em">
					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Social Media', 'Footer block title', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} -->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Instagram', 'mroya' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Facebook', 'mroya' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'LinkedIn', 'mroya' ); ?>","url":"#"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"wide","className":"footer__line--last","style":{"spacing":{"blockGap":"0"}},"fontSize":"small","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide footer__line--last has-small-font-size">
			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:group {"style":{"css":"row-gap: 0.25rem; font-weight: 550; letter-spacing: -0.025em; line-height: var(--wp--style--block-gap);","spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group has-custom-css has-contrast-3-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
				<!-- wp:paragraph {"className":"footer__copyrights"} -->
				<p class="footer__copyrights"><?php echo esc_html_x( '© 2026, Mroya Theme', 'Footer copyright text', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"footer__developer"} -->
				<p class="footer__developer"><?php
				printf(
					/* translators: Footer developer credit text. */
					esc_html__( 'Design by %s', 'mroya' ),
					'<a href="' . esc_url( __( 'https://mroya.eu/', 'mroya' ) ) . '" target="_blank">Mroya Studio</a>' )
				?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

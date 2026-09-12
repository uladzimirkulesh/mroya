<?php
/**
 * Title: Awards section
 * Slug: mroya/section-awards
 * Categories: mroya_sections
 * Description: Displays awards list.
 * Keywords: section, awards
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--awards is-style-section-1","style":{"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--awards is-style-section-1" style="padding-top:2.25rem;padding-bottom:2.25rem">
	<!-- wp:group {"align":"wide","style":{"@tablet":{"layout":{"columnCount":1}},"@mobile":{"layout":{"columnCount":1}},"css":"row-gap: var(--wp--preset--spacing--20);"},"layout":{"type":"grid","columnCount":2}} -->
	<div class="wp-block-group alignwide has-custom-css">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Recognition', 'Awards section title', 'mroya' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"awards-list","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group awards-list">
			<!-- wp:group {"className":"awards-list__item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group awards-list__item">
				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10"}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":2}} -->
				<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--10)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<p class="has-contrast-3-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Awwwards', 'Awards item title', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Site Of The Day', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'x10', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Developer Award', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'x4', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Honourable Mention', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'x6', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"awards-list__item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group awards-list__item">
				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10","top":"var:preset|spacing|10"}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":2}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<p class="has-contrast-3-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'The FWA', 'Awards item title', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Site Of The Day', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'x5', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Honorable mention', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'x3', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"awards-list__item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group awards-list__item">
				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10","top":"var:preset|spacing|10"}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":2}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<p class="has-contrast-3-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'CSSDA', 'Awards item title', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Website Of The Day', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'x3', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Innovation Design Award', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'x3', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'UI Design Award', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'x2', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'UX Design Award', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'x2', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"awards-list__item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group awards-list__item">
				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10","top":"var:preset|spacing|10"}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":2}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<p class="has-contrast-3-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'The Webby Awards', 'Awards item title', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Nominee', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'x1', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"awards-list__item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group awards-list__item">
				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10","top":"var:preset|spacing|10"}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":2}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
					<p class="has-contrast-3-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Creative Circle', 'Awards item title', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Shortlists', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
							<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'x4', 'Awards item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"450px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
		<p class="has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Our work has earned recognition and awards from leading industry experts, celebrating creativity, innovation, and meaningful impact across digital platforms.', 'Awards section text', 'mroya' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

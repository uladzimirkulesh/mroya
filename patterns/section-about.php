<?php
/**
 * Title: About section
 * Slug: mroya/section-about
 * Categories: mroya_sections
 * Description: Displays about heading, text and skills list.
 * Keywords: section, about
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--about","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"2.25rem"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--about" style="padding-top:2.25rem;padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","style":{"@tablet":{"layout":{"columnCount":1}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":2}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"className":"is-style-text-badge"} -->
			<h2 class="wp-block-heading is-style-text-badge"><?php echo esc_html_x( 'Our Journey', 'About section title', 'mroya' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"section__text","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large"} -->
			<p class="section__text has-x-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'It started with a simple idea to create digital experiences that feel both human and timeless. Over time, our work evolved through exploration, curiosity, and attention to detail, blending design, motion, and technology into one cohesive language. Each project has been a step forward, shaping our perspective and refining the way we bring ideas to life.', 'About section text', 'mroya' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"block--skills","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group block--skills">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"small"} -->
				<p class="has-contrast-3-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Our Super Powers', 'Skills block title', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"skills-list","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group skills-list">
					<!-- wp:group {"className":"skills-list--item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group skills-list--item">
						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"}}},"layout":{"type":"default"}} -->
						<div class="wp-block-group" style="padding-top:0.75rem;padding-bottom:0.75rem">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
							<p class="has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Prototyping and User Research', 'Skills block item title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"skills-list--item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group skills-list--item">
						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"}}},"layout":{"type":"default"}} -->
						<div class="wp-block-group" style="padding-top:0.75rem;padding-bottom:0.75rem">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
							<p class="has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Product and Visual Design', 'Skills block item title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"skills-list--item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group skills-list--item">
						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"}}},"layout":{"type":"default"}} -->
						<div class="wp-block-group" style="padding-top:0.75rem;padding-bottom:0.75rem">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
							<p class="has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Creative Direction', 'Skills block item title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"skills-list--item","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group skills-list--item">
						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->

						<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem"}}},"layout":{"type":"default"}} -->
						<div class="wp-block-group" style="padding-top:0.75rem;padding-bottom:0.75rem">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
							<p class="has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Brand Identity', 'Skills block item title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:separator {"className":"is-style-wide"} -->
						<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
						<!-- /wp:separator -->
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
</section>
<!-- /wp:group -->

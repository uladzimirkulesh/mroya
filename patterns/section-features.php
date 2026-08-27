<?php
/**
 * Title: Features section
 * Slug: mroya/section-features
 * Categories: mroya_sections
 * Description: Displays a grid of features with icons and text.
 * Keywords: section, features
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--features","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"2.5rem"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--features" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"tagName":"header","align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"712px"}} -->
	<header class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"className":"is-style-text-badge"} -->
			<h2 class="wp-block-heading is-style-text-badge"><?php echo esc_html_x( 'Why Choose Us', 'Features section title', 'mroya' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xxxx-large"} -->
			<p class="has-xxxx-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'We build reliable digital products with modern technologies', 'Features section text', 'mroya' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","style":{"@mobile":{"layout":{"columnCount":1}},"@tablet":{"layout":{"columnCount":2}}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"16rem"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"border":{"radius":{"topLeft":"0.375rem","topRight":"0.375rem","bottomLeft":"0.375rem","bottomRight":"0.375rem"}},"spacing":{"blockGap":"0"}},"backgroundColor":"accent-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group has-accent-2-background-color has-background" style="border-top-left-radius:0.375rem;border-top-right-radius:0.375rem;border-bottom-left-radius:0.375rem;border-bottom-right-radius:0.375rem">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.25rem","right":"1.25rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group" style="padding-top:0.75rem;padding-right:1.25rem;padding-bottom:0.75rem;padding-left:1.25rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
					<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( '01', 'Features item number', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php echo esc_html_x( '●', 'Features item sign', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.25rem","left":"1.25rem","top":"var:preset|spacing|30","bottom":"1rem"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:1.25rem;padding-bottom:1rem;padding-left:1.25rem">
					<!-- wp:icon {"icon":"core/scheduled","className":"is-style-default","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0.5rem","right":"0.5rem"}},"dimensions":{"width":"3rem"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"contrast-5","textColor":"contrast"} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
						<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Experience', 'Features item title', 'mroya' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Years of practical experience help us make informed decisions from the very beginning. We focus on maintainable architecture, clean code, and proven development practices to build products that stand the test of time.', 'Features item text', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"border":{"radius":{"topLeft":"0.375rem","topRight":"0.375rem","bottomLeft":"0.375rem","bottomRight":"0.375rem"}},"spacing":{"blockGap":"0"}},"backgroundColor":"accent-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group has-accent-2-background-color has-background" style="border-top-left-radius:0.375rem;border-top-right-radius:0.375rem;border-bottom-left-radius:0.375rem;border-bottom-right-radius:0.375rem">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.25rem","right":"1.25rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group" style="padding-top:0.75rem;padding-right:1.25rem;padding-bottom:0.75rem;padding-left:1.25rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
					<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( '02', 'Features item number', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php echo esc_html_x( '●', 'Features item sign', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.25rem","left":"1.25rem","top":"var:preset|spacing|30","bottom":"1rem"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:1.25rem;padding-bottom:1rem;padding-left:1.25rem">
					<!-- wp:icon {"icon":"core/tip","className":"is-style-default","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0.5rem","right":"0.5rem"}},"dimensions":{"width":"3rem"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"contrast-5","textColor":"contrast"} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
						<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Innovation', 'Features item title', 'mroya' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'We embrace modern technologies where they create real value. Every tool, framework, and workflow is chosen to improve performance, scalability, and the overall user experience — not simply to follow trends.', 'Features item text', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"border":{"radius":{"topLeft":"0.375rem","topRight":"0.375rem","bottomLeft":"0.375rem","bottomRight":"0.375rem"}},"spacing":{"blockGap":"0"}},"backgroundColor":"accent-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group has-accent-2-background-color has-background" style="border-top-left-radius:0.375rem;border-top-right-radius:0.375rem;border-bottom-left-radius:0.375rem;border-bottom-right-radius:0.375rem">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.25rem","right":"1.25rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group" style="padding-top:0.75rem;padding-right:1.25rem;padding-bottom:0.75rem;padding-left:1.25rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
					<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( '03', 'Features item number', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php echo esc_html_x( '●', 'Features item sign', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.25rem","left":"1.25rem","top":"var:preset|spacing|30","bottom":"1rem"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:1.25rem;padding-bottom:1rem;padding-left:1.25rem">
					<!-- wp:icon {"icon":"core/shield","className":"is-style-default","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0.5rem","right":"0.5rem"}},"dimensions":{"width":"3rem"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"contrast-5","textColor":"contrast"} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
						<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Quality', 'Features item title', 'mroya' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Quality is built into every stage of the process. Through thoughtful planning, careful implementation, and rigorous testing, we deliver digital products that are reliable, fast, and ready for long-term growth.', 'Features item text', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"border":{"radius":{"topLeft":"0.375rem","topRight":"0.375rem","bottomLeft":"0.375rem","bottomRight":"0.375rem"}},"spacing":{"blockGap":"0"}},"backgroundColor":"accent-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group has-accent-2-background-color has-background" style="border-top-left-radius:0.375rem;border-top-right-radius:0.375rem;border-bottom-left-radius:0.375rem;border-bottom-right-radius:0.375rem">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.25rem","right":"1.25rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group" style="padding-top:0.75rem;padding-right:1.25rem;padding-bottom:0.75rem;padding-left:1.25rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
					<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( '04', 'Features item number', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php echo esc_html_x( '●', 'Features item sign', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.25rem","left":"1.25rem","top":"var:preset|spacing|30","bottom":"1rem"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:1.25rem;padding-bottom:1rem;padding-left:1.25rem">
					<!-- wp:icon {"icon":"core/help","className":"is-style-default","style":{"border":{"radius":{"topLeft":"0.25rem","topRight":"0.25rem","bottomLeft":"0.25rem","bottomRight":"0.25rem"}},"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0.5rem","right":"0.5rem"}},"dimensions":{"width":"3rem"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"contrast-5","textColor":"contrast"} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
						<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Support', 'Features item title', 'mroya' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Launching a product is only the beginning. We continue to provide updates, improvements, and technical support, helping your business evolve with confidence as new challenges arise.', 'Features item text', 'mroya' ); ?></p>
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
</section>
<!-- /wp:group -->

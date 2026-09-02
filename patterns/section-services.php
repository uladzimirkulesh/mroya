<?php
/**
 * Title: Services section
 * Slug: mroya/section-services
 * Categories: mroya_sections
 * Description: Displays a list of services.
 * Keywords: section, services
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--services","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--services" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20)">
	<!-- wp:group {"tagName":"header","align":"wide","style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"top"}} -->
	<header class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"is-style-text-badge"} -->
		<p class="is-style-text-badge"><?php echo esc_html_x( 'How We Can Help', 'Services section badge', 'mroya' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"display"} -->
		<h2 class="wp-block-heading has-display-font-size" style="margin-top:0"><?php echo esc_html_x( 'Our Services', 'Services section title', 'mroya' ); ?></h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","className":"services-list","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide services-list">
			<!-- wp:group {"className":"services-list__item","style":{"spacing":{"blockGap":"0"},"css":"& { position: relative; } &::after { content: ''; width: 1px; height: 100%; background-color: var(--wp--preset--color--contrast-4); display: block; position: absolute; top: 1px; left: 50%; transform: translateX(-50%); }"},"layout":{"type":"default"}} -->
			<div class="wp-block-group services-list__item has-custom-css">
				<!-- wp:separator {"className":"is-style-wide","style":{"css":"margin-left: 0;"}} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide has-custom-css"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"@tablet":{"layout":{"columnCount":1}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":2}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","right":"2rem"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:2rem;padding-bottom:var(--wp--preset--spacing--10)">
						<!-- wp:heading {"level":3,"fontSize":"xxx-large"} -->
						<h3 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html_x( 'Design', 'Services section item title', 'mroya' ); ?></h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"2rem","right":"2rem"}},"@tablet":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"@mobile":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:2rem;padding-bottom:var(--wp--preset--spacing--10);padding-left:2rem">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Thoughtful design goes beyond appearance. We focus on intuitive layouts, strong visual communication, and user-centered experiences that build trust and strengthen your brand.', 'Services section item text', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:group {"className":"badges","style":{"spacing":{"blockGap":"0.25rem"},"@mobile":{"layout":{"flexWrap":"wrap"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
						<div class="wp-block-group badges">
							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'UI/UX', 'Services section item tags', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'Branding', 'Services section item tags', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'Prototyping', 'Services section item tags', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'Accessibility', 'Services section item tags', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"services-list__item","style":{"spacing":{"blockGap":"0"},"css":"& { position: relative; } &::after { content: ''; width: 1px; height: 100%; background-color: var(--wp--preset--color--contrast-4); display: block; position: absolute; top: 1px; left: 50%; transform: translateX(-50%); }"},"layout":{"type":"default"}} -->
			<div class="wp-block-group services-list__item has-custom-css">
				<!-- wp:separator {"className":"is-style-wide","style":{"css":"margin-left: 0;"}} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide has-custom-css"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"@tablet":{"layout":{"columnCount":1}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":2}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","right":"2rem"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:2rem;padding-bottom:var(--wp--preset--spacing--10)">
						<!-- wp:heading {"level":3,"fontSize":"xxx-large"} -->
						<h3 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html_x( 'Development', 'Services section item title', 'mroya' ); ?></h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"2rem","right":"2rem"}},"@tablet":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"@mobile":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:2rem;padding-bottom:var(--wp--preset--spacing--10);padding-left:2rem">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'From initial planning to final implementation, we build scalable, high-quality solutions designed for performance, flexibility, and the evolving needs of your business.', 'Services section item text', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:group {"className":"badges","style":{"spacing":{"blockGap":"0.25rem"},"@mobile":{"layout":{"flexWrap":"wrap"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
						<div class="wp-block-group badges">
							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'Performance', 'Services section item tags', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'Scalability', 'Services section item tags', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'Integration', 'Services section item tags', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'Security', 'Services section item tags', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"services-list__item","style":{"spacing":{"blockGap":"0"},"css":"& { position: relative; } &::after { content: ''; width: 1px; height: 100%; background-color: var(--wp--preset--color--contrast-4); display: block; position: absolute; top: 1px; left: 50%; transform: translateX(-50%); }"},"layout":{"type":"default"}} -->
			<div class="wp-block-group services-list__item has-custom-css">
				<!-- wp:separator {"className":"is-style-wide","style":{"css":"margin-left: 0;"}} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide has-custom-css"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"@tablet":{"layout":{"columnCount":1}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":2}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","right":"2rem"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:2rem;padding-bottom:var(--wp--preset--spacing--10)">
						<!-- wp:heading {"level":3,"fontSize":"xxx-large"} -->
						<h3 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html_x( 'Support', 'Services section item title', 'mroya' ); ?></h3>
						<!-- /wp:heading -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"2rem","right":"2rem"}},"@tablet":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"@mobile":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:2rem;padding-bottom:var(--wp--preset--spacing--10);padding-left:2rem">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Our work continues after launch. Ongoing support, maintenance, and continuous improvements help keep your projects secure, efficient, and prepared for future growth.', 'Services section item text', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:group {"className":"badges","style":{"spacing":{"blockGap":"0.25rem"},"@mobile":{"layout":{"flexWrap":"wrap"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
						<div class="wp-block-group badges">
							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'Maintenance', 'Services section item tags', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'Updates', 'Services section item tags', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'Monitoring', 'Services section item tags', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"className":"is-style-text-badge-2","style":{"@mobile":{"layout":{"selfStretch":"fit","flexSize":null}}}} -->
							<p class="is-style-text-badge-2"><?php echo esc_html_x( 'Optimization', 'Services section item tags', 'mroya' ); ?></p>
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
</section>
<!-- /wp:group -->

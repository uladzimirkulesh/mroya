<?php
/**
 * Title: FAQ section
 * Slug: mroya/section-faq
 * Categories: mroya_sections
 * Description: Displays FAQ items with questions and answers.
 * Keywords: section, faq
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"align":"full","className":"section section--faq","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section section--faq" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"wide","style":{"@tablet":{"layout":{"columnCount":1}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":2}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|10"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--10)">
			<!-- wp:heading {"fontSize":"huge"} -->
			<h2 class="wp-block-heading has-huge-font-size"><?php echo esc_html_x( 'Frequently Asked Questions', 'FAQ section title', 'mroya' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-more-2"} -->
				<div class="wp-block-button is-style-more-2">
					<a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Explore All', 'FAQ section button text', 'mroya' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:accordion {"autoclose":true} -->
			<div role="group" class="wp-block-accordion">
				<!-- wp:accordion-item -->
				<div class="wp-block-accordion-item">
					<!-- wp:accordion-heading -->
					<h3 class="wp-block-accordion-heading has-icon has-icon-right">
						<button type="button" class="wp-block-accordion-heading__toggle">
							<span class="wp-block-accordion-heading__toggle-title"><?php echo esc_html_x( 'How long does a typical project take?', 'FAQ section item title', 'mroya' ); ?></span>
							<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
						</button>
					</h3>
					<!-- /wp:accordion-heading -->

					<!-- wp:accordion-panel -->
					<div role="region" class="wp-block-accordion-panel">
						<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
							<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Every project is unique, so timelines depend on its scope and complexity. Smaller websites can often be completed within a few weeks, while larger custom solutions require additional planning, design, and testing. We always provide a clear timeline before development begins.', 'FAQ section item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:accordion-panel -->
				</div>
				<!-- /wp:accordion-item -->

				<!-- wp:accordion-item -->
				<div class="wp-block-accordion-item">
					<!-- wp:accordion-heading -->
					<h3 class="wp-block-accordion-heading has-icon has-icon-right">
						<button type="button" class="wp-block-accordion-heading__toggle">
							<span class="wp-block-accordion-heading__toggle-title"><?php echo esc_html_x( 'Can you redesign an existing website instead of building a new one?', 'FAQ section item title', 'mroya' ); ?></span>
							<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
						</button>
					</h3>
					<!-- /wp:accordion-heading -->

					<!-- wp:accordion-panel -->
					<div role="region" class="wp-block-accordion-panel">
						<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
							<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Absolutely. We can refresh the visual design, improve usability, optimize performance, or completely rebuild your existing website while preserving valuable content where possible. The best approach depends on your current platform and business goals.', 'FAQ section item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:accordion-panel -->
				</div>
				<!-- /wp:accordion-item -->

				<!-- wp:accordion-item -->
				<div class="wp-block-accordion-item">
					<!-- wp:accordion-heading -->
					<h3 class="wp-block-accordion-heading has-icon has-icon-right">
						<button type="button" class="wp-block-accordion-heading__toggle">
							<span class="wp-block-accordion-heading__toggle-title"><?php echo esc_html_x( 'Will my website be optimized for mobile devices?', 'FAQ section item title', 'mroya' ); ?></span>
							<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
						</button>
					</h3>
					<!-- /wp:accordion-heading -->

					<!-- wp:accordion-panel -->
					<div role="region" class="wp-block-accordion-panel">
						<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
							<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Yes. Every website is designed with a responsive approach to ensure it looks and performs well on desktops, tablets, and smartphones. We also pay close attention to accessibility, loading speed, and overall user experience across different screen sizes.', 'FAQ section item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:accordion-panel -->
				</div>
				<!-- /wp:accordion-item -->

				<!-- wp:accordion-item -->
				<div class="wp-block-accordion-item">
					<!-- wp:accordion-heading -->
					<h3 class="wp-block-accordion-heading has-icon has-icon-right">
						<button type="button" class="wp-block-accordion-heading__toggle">
							<span class="wp-block-accordion-heading__toggle-title"><?php echo esc_html_x( 'Do you provide support after the project is finished?', 'FAQ section item title', 'mroya' ); ?></span>
							<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
						</button>
					</h3>
					<!-- /wp:accordion-heading -->

					<!-- wp:accordion-panel -->
					<div role="region" class="wp-block-accordion-panel">
						<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
							<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Yes. We offer ongoing maintenance, technical support, and regular updates to help keep your website secure and running smoothly. Whether you need occasional assistance or long-term support, we can tailor a plan that fits your needs.', 'FAQ section item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:accordion-panel -->
				</div>
				<!-- /wp:accordion-item -->

				<!-- wp:accordion-item -->
				<div class="wp-block-accordion-item">
					<!-- wp:accordion-heading -->
					<h3 class="wp-block-accordion-heading has-icon has-icon-right">
						<button type="button" class="wp-block-accordion-heading__toggle">
							<span class="wp-block-accordion-heading__toggle-title"><?php echo esc_html_x( 'Can my team update the website without technical knowledge?', 'FAQ section item title', 'mroya' ); ?></span>
							<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
						</button>
					</h3>
					<!-- /wp:accordion-heading -->

					<!-- wp:accordion-panel -->
					<div role="region" class="wp-block-accordion-panel">
						<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
							<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Definitely. We build websites with user-friendly content management tools that allow you to edit text, replace images, publish blog posts, and manage pages without writing code. If needed, we also provide documentation or a short training session to help your team get started.', 'FAQ section item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:accordion-panel -->
				</div>
				<!-- /wp:accordion-item -->
			</div>
			<!-- /wp:accordion -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

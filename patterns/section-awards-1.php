<?php
/**
 * Title: Awards section (style 1)
 * Slug: mroya/section-awards-1
 * Categories: mroya_sections_awards
 * Description: Displays awards heading, text and awards items.
 * Keywords: section, awards
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Awards (style 1)', 'Name for the Awards section pattern', 'mroya' ); ?>"},"align":"full","className":"section section--awards-1 is-style-section-contrast","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--awards-1 is-style-section-contrast" id="section-awards-1" style="margin-top:0;padding-top:2rem;padding-bottom:2rem">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Container', 'Name for the section container area', 'mroya' ); ?>"},"align":"wide","className":"section__container","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide section__container">
		<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the section header area', 'mroya' ); ?>"},"className":"section__header","layout":{"type":"default"}} -->
		<header class="wp-block-group section__header">
			<!-- wp:heading {"fontSize":"xx-large"} -->
			<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Recognition', 'Awards section title', 'mroya' ); ?></h2>
			<!-- /wp:heading -->
		</header>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya' ); ?>"},"className":"section__content","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group section__content">
			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Awards block', 'Name for the awards block area', 'mroya' ); ?>"},"className":"block--awards","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group block--awards" style="font-style:normal;font-weight:500;letter-spacing:-0.01em">
				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Awards item', 'Name for the awards item area', 'mroya' ); ?>"},"className":"awards__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
				<div class="wp-block-group awards__item">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3","fontSize":"normal"} -->
					<h3 class="wp-block-heading has-base-3-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'Awwwards', 'Awards item title', 'mroya' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Site Of The Day', 'Award title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x10', 'Awards count', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Developer Award', 'Award title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x4', 'Awards count', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Honourable Mention', 'Award title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x6', 'Awards count', 'mroya' ); ?></p>
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

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Awards item', 'Name for the awards item area', 'mroya' ); ?>"},"className":"awards__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
				<div class="wp-block-group awards__item">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3","fontSize":"normal"} -->
					<h3 class="wp-block-heading has-base-3-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'The FWA', 'Awards item title', 'mroya' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Site Of The Day', 'Award title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x5', 'Awards count', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Honorable mention', 'Award title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x3', 'Awards count', 'mroya' ); ?></p>
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

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Awards item', 'Name for the awards item area', 'mroya' ); ?>"},"className":"awards__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
				<div class="wp-block-group awards__item">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3","fontSize":"normal"} -->
					<h3 class="wp-block-heading has-base-3-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'CSSDA', 'Awards item title', 'mroya' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Website Of The Day', 'Award title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x3', 'Awards count', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Innovation Design Award', 'Award title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x3', 'Awards count', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'UI Design Award', 'Award title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x2', 'Awards count', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'UX Design Award', 'Award title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x2', 'Awards count', 'mroya' ); ?></p>
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

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Awards item', 'Name for the awards item area', 'mroya' ); ?>"},"className":"awards__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
				<div class="wp-block-group awards__item">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3","fontSize":"normal"} -->
					<h3 class="wp-block-heading has-base-3-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'The Webby Awards', 'Awards item title', 'mroya' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Nominee', 'Award title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x1', 'Awards count', 'mroya' ); ?></p>
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

				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Awards item', 'Name for the awards item area', 'mroya' ); ?>"},"className":"awards__item","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
				<div class="wp-block-group awards__item">
					<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}}},"textColor":"base-3","fontSize":"normal"} -->
					<h3 class="wp-block-heading has-base-3-color has-text-color has-link-color has-normal-font-size"><?php echo esc_html_x( 'Creative Circle', 'Awards item title', 'mroya' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'Shortlists', 'Award title', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html_x( 'x4', 'Awards count', 'mroya' ); ?></p>
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

		<!-- wp:group {"tagName":"footer","metadata":{"name":"<?php echo esc_html_x( 'Footer', 'Name for the section header area', 'mroya' ); ?>"},"className":"section__footer","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}},"layout":{"columnSpan":2}},"layout":{"type":"constrained","contentSize":"27rem","wideSize":"100%","justifyContent":"left"}} -->
		<footer class="wp-block-group section__footer" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:paragraph {"className":"is-style-text-mono section__text"} -->
			<p class="is-style-text-mono section__text"><?php echo esc_html_x( 'Our work has earned recognition and awards from leading industry experts, celebrating creativity, innovation, and meaningful impact across digital platforms.', 'Awards section text', 'mroya' ); ?></p>
			<!-- /wp:paragraph -->
		</footer>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

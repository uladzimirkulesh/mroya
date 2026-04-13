<?php
/**
 * Title: Hero section (style 3)
 * Slug: mroya/section-hero-3
 * Categories: mroya_sections_hero
 * Description: Displays the hero info.
 * Keywords: section, hero
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Hero (style 3)', 'Name for the Hero section pattern', 'mroya' ); ?>"},"align":"full","className":"section section--hero-3","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--hero-3" id="section-hero-3">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Container', 'Name for the section container area', 'mroya' ); ?>"},"align":"wide","className":"section__container","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
	<div class="wp-block-group alignwide section__container" style="min-height:100vh;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya' ); ?>"},"align":"wide","className":"section__content","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
		<div class="wp-block-group alignwide section__content">
			<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Block', 'Name for the section block area', 'mroya' ); ?>"},"className":"section__block","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group section__block">
					<!-- wp:heading {"level":1,"className":"is-style-text-giant"} -->
					<h1 class="wp-block-heading is-style-text-giant"><?php echo wp_kses_post( _x( 'Refined<br>Digital Craft', 'Hero section title', 'mroya' ) ); ?></h1>
					<!-- /wp:heading -->

					<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px","wideSize":"100%","justifyContent":"left"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","fontSize":"medium"} -->
						<p class="has-contrast-2-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:-0.01em"><?php echo esc_html_x( 'We craft bold, minimal, and timeless digital experiences. Each project blends design, motion, and technology to tell stories that feel as good as they look — shaped by curiosity, precision, and a passion for detail.', 'Hero section text', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"footer","metadata":{"name":"<?php echo esc_html_x( 'Footer', 'Name for the section footer area', 'mroya' ); ?>"},"align":"wide","className":"section__footer","layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
		<footer class="wp-block-group alignwide section__footer">
			<!-- wp:paragraph {"className":"is-style-text-mono text--secondary-1","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
			<p class="is-style-text-mono has-contrast-3-color has-text-color has-link-color text--secondary-1"><?php echo esc_html_x( '[ About Us ]', 'Hero section text', 'mroya' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-text-mono","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}},"layout":{"selfStretch":"fill","flexSize":null}},"textColor":"contrast-3"} -->
				<p class="is-style-text-mono has-contrast-3-color has-text-color has-link-color"><?php echo esc_html_x( 'Based in the Czech Republic', 'Hero section text', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"is-style-text-mono text--secondary-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} -->
				<p class="is-style-text-mono has-contrast-3-color has-text-color has-link-color text--secondary-2"><?php echo esc_html_x( 'ESTD. 2016', 'Hero section text', 'mroya' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</footer>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

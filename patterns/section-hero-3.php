<?php
/**
 * Title: Hero section (style 3)
 * Slug: mroya/section-hero-3
 * Categories: mroya_sections
 * Description: Displays image and hero text.
 * Keywords: section, hero
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp","dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom left","tagName":"section","sizeSlug":"full","align":"full","className":"section section--hero has-global-padding","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left section section--hero has-global-padding" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--20);min-height:100vh">
	<img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" data-object-fit="cover"/>

	<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2.25rem"}},"layout":{"type":"constrained","contentSize":"700px"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"spacing":{"blockGap":"1.125rem"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":1,"style":{"css":"position: relative; left: -0.2vw;"},"fontSize":"huge"} -->
				<h1 class="wp-block-heading has-custom-css has-huge-font-size"><?php echo esc_html_x( 'Let’s discuss your needs and find a solution that works for you', 'Hero section title', 'mroya' ); ?></h1>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</section>
<!-- /wp:cover -->

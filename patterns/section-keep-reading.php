<?php
/**
 * Title: Keep reading section
 * Slug: mroya/section-keep-reading
 * Categories: mroya_sections
 * Description: Displays related articles from the blog.
 * Keywords: section, related, articles, blog
 * Post Types: wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--keep-reading","style":{"spacing":{"blockGap":"2.25rem"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--keep-reading">
	<!-- wp:group {"tagName":"header","align":"wide","className":"section__header","style":{"border":{"top":{"color":"var:preset|color|contrast-4","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"0.75rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<header class="wp-block-group alignwide section__header" style="border-top-color:var(--wp--preset--color--contrast-4);border-top-style:solid;border-top-width:1px;padding-top:0.75rem">
		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Keep Reading', 'Keep reading section title', 'mroya' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-more"} -->
			<div class="wp-block-button is-style-more">
				<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>blog/"><?php echo esc_html_x( 'All Stories', 'Keep reading section button text', 'mroya' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"section__content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:query {"query":{"blockName":"related-posts","perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1rem"},"css":"&.is-layout-grid { row-gap: var(--wp--preset--spacing--10) !important; }","@tablet":{"layout":{"columnCount":2}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"21rem"}} -->
				<!-- wp:group {"className":"is-style-section-2","style":{"border":{"radius":{"topLeft":"0.5rem","topRight":"0.5rem","bottomLeft":"0.5rem","bottomRight":"0.5rem"}},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"0.875rem","right":"0.875rem"},"blockGap":"0"},"css":"height: 100%;"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
				<div class="wp-block-group is-style-section-2 has-custom-css" style="border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem;padding-top:0.875rem;padding-right:0.875rem;padding-bottom:0.875rem;padding-left:0.875rem">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->

					<!-- wp:post-date {"format":"M j, Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"bottom":"0.5rem"}}},"fontSize":"x-small"} /-->

					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0.75rem"}}},"fontSize":"x-large"} /-->

					<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":35,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"},":hover":{"color":{"text":"var:preset|color|contrast-2"}}}},"spacing":{"margin":{"top":"0","bottom":"2.25rem"}},"layout":{"selfStretch":"fill","flexSize":null}}} /-->

					<!-- wp:post-terms {"term":"category","className":"is-style-pill-2"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

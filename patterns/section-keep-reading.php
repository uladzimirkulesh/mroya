<?php
/**
 * Title: Keep reading section
 * Slug: mroya/section-keep-reading
 * Categories: mroya_sections_posts
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
			<!-- wp:button {"className":"is-style-next"} -->
			<div class="wp-block-button is-style-next">
				<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>blog/"><?php echo esc_html_x( 'All Stories', 'Keep reading section button text', 'mroya' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","className":"section__content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:query {"query":{"blockName":"related-posts","perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}},"border":{"radius":{"topLeft":"0.375rem","topRight":"0.375rem","bottomLeft":"0.375rem","bottomRight":"0.375rem"}}}} /-->

				<!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"bottom":"0.75rem"}}}} /-->

				<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0.75rem"}}},"fontSize":"large"} /-->

				<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":25,"style":{"spacing":{"margin":{"top":"0","bottom":"1rem"}}},"fontSize":"small"} /-->

				<!-- wp:post-date {"format":"M j, Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"fontSize":"x-small"} /-->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

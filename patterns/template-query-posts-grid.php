<?php
/**
 * Title: List of posts, grid
 * Slug: mroya/template-query-posts-grid
 * Categories: query
 * Block Types: core/query
 * Description: List of posts, grid with featured image, category, post date, title and excerpt.
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"excludeCurrent":null},"align":"wide","layout":{"type":"constrained"}} -->
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

	<!-- wp:query-no-results -->
		<!-- wp:pattern {"slug":"mroya/hidden-no-results"} /-->
	<!-- /wp:query-no-results -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers {"midSize":1} /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->

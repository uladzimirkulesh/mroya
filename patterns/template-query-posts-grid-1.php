<?php
/**
 * Title: List of posts, grid (style 1)
 * Slug: mroya/template-query-posts-grid-1
 * Categories: query
 * Block Types: core/query
 * Description: List of posts, grid with featured image, category, post date, title and excerpt.
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:query {"metadata":{"name":"<?php echo esc_html_x( 'List of posts, grid (style 1)', 'Name for the List of posts pattern', 'mroya' ); ?>"},"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"align":"wide","className":"is-layout-posts-grid--1","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} /-->

		<!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"bottom":"0.5rem"}}}} /-->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0.75rem"}},"typography":{"lineHeight":"1.38889"}},"fontSize":"medium"} /-->

		<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":26,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"},":hover":{"color":{"text":"var:preset|color|contrast-2"}}}},"spacing":{"margin":{"top":"0","bottom":"1rem"}}},"textColor":"contrast-2","fontSize":"small"} /-->

		<!-- wp:post-date {"format":"M j, Y"} /-->
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

<?php
/**
 * Title: List of projects, grid (style 4)
 * Slug: mroya/template-query-projects-grid-4
 * Categories: mroya_portfolio
 * Block Types: core/query
 * Description: List of projects, grid with featured image, date and title.
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:query {"metadata":{"name":"<?php echo esc_html_x( 'List of projects, grid (style 4)', 'Name for the List of projects pattern', 'mroya' ); ?>"},"query":{"perPage":12,"pages":0,"offset":0,"postType":"uk-project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"align":"wide","className":"is-layout-projects-grid--4","layout":{"type":"grid","columnCount":4}} -->
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"0.75rem"}}}} /-->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"isLink":true,"style":{"typography":{"letterSpacing":"-0.01em"}},"fontSize":"normal"} /-->

			<!-- wp:post-date {"format":"Y"} /-->
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

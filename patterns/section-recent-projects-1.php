<?php
/**
 * Title: Recent projects section (style 1)
 * Slug: mroya/section-recent-projects-1
 * Categories: mroya_sections_projects
 * Description: Displays the latest projects from the portfolio.
 * Keywords: section, portfolio, projects, work
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Recent projects (style 1)', 'Name for the Recent projects section pattern', 'mroya' ); ?>"},"align":"full","className":"section section--recent-projects-1","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--recent-projects-1" id="section-recent-projects-1" style="margin-top:0;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the section header area', 'mroya' ); ?>"},"align":"wide","className":"section__header","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide section__header">
		<!-- wp:heading {"className":"is-style-text-mono"} -->
		<h2 class="wp-block-heading is-style-text-mono"><?php echo esc_html_x( '[ Portfolio ]', 'Recent projects section title', 'mroya' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"is-style-text-mono"} -->
		<p class="is-style-text-mono"><?php echo esc_html_x( '# Recent Projects', 'Recent projects section text', 'mroya' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya' ); ?>"},"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"uk-project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"name":"<?php echo esc_html_x( 'List of projects', 'Name for the List of projects area', 'mroya' ); ?>"},"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":4}} -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"0.75rem"}}}} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:post-title {"isLink":true,"style":{"typography":{"letterSpacing":"-0.01em"}},"fontSize":"normal"} /-->

					<!-- wp:post-date {"format":"Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
				<!-- wp:pattern {"slug":"mroya/hidden-no-results"} /-->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Footer', 'Name for the section footer area', 'mroya' ); ?>"},"align":"wide","className":"section__footer","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide section__footer" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-link-6"} -->
			<div class="wp-block-button is-style-link-6">
				<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio/"><?php echo esc_html_x( 'See all Projects', 'Recent projects section button text', 'mroya' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

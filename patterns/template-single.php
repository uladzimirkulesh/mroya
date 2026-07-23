<?php
/**
 * Title: Single posts with featured image
 * Slug: mroya/template-single
 * Template Types: posts, single
 * Viewport width: 1440
 * Inserter: no
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:template-part {"slug":"header","className":"header is-overlaid has-overlaid-colors"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"<?php echo esc_html_x( 'Main', 'Name for the main template part', 'mroya' ); ?>"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"tagName":"article","metadata":{"name":"<?php echo esc_html_x( 'Article', 'Name for the article template part', 'mroya' ); ?>"},"align":"full","className":"entry","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
	<article class="wp-block-group alignfull entry">
		<!-- wp:group {"tagName":"header","className":"entry-header is-style-section-1","layout":{"type":"constrained","justifyContent":"center"}} -->
		<header class="wp-block-group entry-header is-style-section-1">
			<!-- wp:cover {"useFeaturedImage":true,"dimRatio":40,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":true,"align":"full","className":"has-global-padding","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover alignfull is-dark has-global-padding" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:100vh">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span>

				<div class="wp-block-cover__inner-container">
					<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"960px","wideSize":"100%"}} -->
					<div class="wp-block-group alignwide">
						<!-- wp:group {"className":"entry-meta","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"wrap"}} -->
						<div class="wp-block-group entry-meta">
							<!-- wp:post-terms {"term":"category","separator":"","className":"is-style-pill-2"} /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:post-title {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-3"}}}},"textColor":"accent-3"} /-->

						<!-- wp:group {"className":"entry-meta","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"wrap"}} -->
						<div class="wp-block-group entry-meta">
							<!-- wp:post-date {"format":"M j, Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		</header>
		<!-- /wp:group -->

		<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

		<!-- wp:group {"tagName":"footer","className":"entry-footer","style":{"spacing":{"margin":{"top":"2.25rem"}}},"layout":{"type":"constrained"}} -->
		<footer class="wp-block-group entry-footer" style="margin-top:2.25rem">
			<!-- wp:post-terms {"term":"post_tag","separator":"","className":"is-style-pill"} /-->
		</footer>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"mroya/hidden-comments"} /-->
	<!-- wp:pattern {"slug":"mroya/section-keep-reading"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"sidebar","tagName":"aside","className":"sidebar"} /-->
<!-- wp:template-part {"slug":"footer","className":"footer"} /-->

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
<!-- wp:template-part {"slug":"header","className":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"<?php echo esc_html_x( 'Main', 'Name for the Main part', 'mroya' ); ?>"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"tagName":"article","metadata":{"name":"<?php echo esc_html_x( 'Article', 'Name for the Article part', 'mroya' ); ?>"},"align":"full","className":"entry","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
	<article class="wp-block-group alignfull entry" id="entry">
		<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the Header part', 'mroya' ); ?>"},"className":"entry-header","layout":{"type":"constrained","justifyContent":"center"}} -->
		<header class="wp-block-group entry-header">
			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:post-title {"level":1,"align":"wide","className":"is-style-text-subtitle"} /-->

				<!-- wp:group {"align":"wide","className":"entry-meta","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<div class="wp-block-group alignwide entry-meta">
					<!-- wp:post-terms {"term":"category"} /-->
					<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-featured-image {"height":"100vh","align":"full","className":"featured-image--singular","style":{"border":{"radius":"0px"}}} /-->
		</header>
		<!-- /wp:group -->

		<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

		<!-- wp:group {"tagName":"footer","metadata":{"name":"<?php echo esc_html_x( 'Footer', 'Name for the Footer part', 'mroya' ); ?>"},"className":"entry-footer","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
		<footer class="wp-block-group entry-footer" style="margin-top:var(--wp--preset--spacing--20)">
			<!-- wp:post-terms {"term":"post_tag"} /-->
		</footer>
		<!-- /wp:group -->
	</article>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"mroya/hidden-comments"} /-->
	<!-- wp:pattern {"slug":"mroya/section-keep-reading-1"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"sidebar","tagName":"aside","className":"sidebar"} /-->
<!-- wp:template-part {"slug":"footer","className":"footer"} /-->

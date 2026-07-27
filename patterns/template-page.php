<?php
/**
 * Title: Pages with wide featured image
 * Slug: mroya/template-page
 * Template Types: page
 * Viewport width: 1440
 * Inserter: no
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:template-part {"slug":"header","className":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"<?php echo esc_html_x( 'Main', 'Name for the main template part', 'mroya' ); ?>"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"bottom":"var:preset|spacing|60","top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"tagName":"article","metadata":{"name":"<?php echo esc_html_x( 'Article', 'Name for the article template part', 'mroya' ); ?>"},"align":"full","className":"entry","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
	<article class="wp-block-group alignfull entry">
		<!-- wp:group {"tagName":"header","className":"entry-header","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<header class="wp-block-group entry-header">
			<!-- wp:post-title {"level":1,"style":{"css":"left: -0.35vw;"}} /-->
			<!-- wp:post-featured-image /-->
		</header>
		<!-- /wp:group -->

		<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
	</article>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","className":"footer"} /-->

<?php
/**
 * Title: Pages with wide featured image
 * Slug: mroya/template-page
 * Template Types: page
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
		<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the Header part', 'mroya' ); ?>"},"className":"entry-header","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
		<header class="wp-block-group entry-header">
			<!-- wp:post-title {"level":1,"align":"wide","className":"is-style-text-giant"} /-->
			<!-- wp:post-featured-image {"height":"100vh","align":"full","className":"featured-image--singular","style":{"border":{"radius":"0px"}}} /-->
		</header>
		<!-- /wp:group -->

		<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
	</article>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","className":"footer"} /-->

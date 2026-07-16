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
<!-- wp:template-part {"slug":"header","className":"header is-overlaid has-overlaid-colors"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"<?php echo esc_html_x( 'Main', 'Name for the Main part', 'mroya' ); ?>"},"style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"tagName":"article","metadata":{"name":"<?php echo esc_html_x( 'Article', 'Name for the Article part', 'mroya' ); ?>"},"align":"full","className":"entry","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"},"anchor":"entry"} -->
	<article class="wp-block-group alignfull entry" id="entry">
		<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the Header part', 'mroya' ); ?>"},"className":"entry-header is-style-section-1","style":{"css":"position: relative; overflow: hidden;","spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
		<header class="wp-block-group entry-header is-style-section-1 has-custom-css">
			<!-- wp:post-featured-image {"align":"full","className":"featured-image--singular","style":{"css":"position: absolute !important; top: 0; width: 100%; height: 100%;","border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"dimensions":{"minHeight":"100vh"},"css":"z-index: 1000;"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
			<div class="wp-block-group alignwide has-custom-css" style="min-height:100vh;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"1080px","wideSize":"100%"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:post-title {"textAlign":"center","level":1,"className":"is-style-text-giant","style":{"css":"max-width: max(1080px, 75%) !important;"}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</header>
		<!-- /wp:group -->

		<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
	</article>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"mroya","className":"footer"} /-->

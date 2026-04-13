<?php
/**
 * Title: Posts archive template (style 1)
 * Slug: mroya/template-archive-posts-1
 * Template Types: archive
 * Viewport width: 1440
 * Inserter: no
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:template-part {"slug":"header","className":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"<?php echo esc_html_x( 'Main', 'Name for the Main part', 'mroya' ); ?>"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:template-part {"slug":"page-header-archive","align":"wide","className":"page-header"} /-->
	<!-- wp:pattern {"slug":"mroya/template-query-posts-grid-1"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"sidebar","tagName":"aside","className":"sidebar"} /-->
<!-- wp:template-part {"slug":"footer","className":"footer"} /-->

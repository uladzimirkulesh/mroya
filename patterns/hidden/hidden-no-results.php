<?php
/**
 * Title: Hidden no results content
 * Slug: mroya/hidden-no-results
 * Inserter: no
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html_x( 'Sorry, but nothing was found.', 'Message explaining that there are no posts in query loop.', 'mroya' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

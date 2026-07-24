<?php
/**
 * Title: Archive page header
 * Slug: mroya/page-header-archive
 * Description: Header section for archive pages.
 * Categories: mroya_page_header
 * Template Types: page-header-archive
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"align":"wide","className":"page-header--archive","style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide page-header--archive">
	<!-- wp:query-title {"type":"archive","showPrefix":false,"align":"wide","className":"page-header__title","style":{"css":"left: -0.35vw;"}} /-->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left","wideSize":"100%"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:term-description {"className":"page-header__description"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

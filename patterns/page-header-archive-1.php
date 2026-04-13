<?php
/**
 * Title: Archive page header (style 1)
 * Slug: mroya/page-header-archive-1
 * Description: Header section for archive pages.
 * Categories: mroya_page_header
 * Template Types: page-header-archive
 * Post Types: wp_template, wp_template_part
 * Viewport Width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Archive page header (style 1)', 'Name for the Archive page header pattern', 'mroya' ); ?>"},"align":"wide","className":"page-header__inner--archive-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide page-header__inner--archive-1">
	<!-- wp:query-title {"type":"archive","showPrefix":false,"align":"wide","className":"page-header__title"} /-->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"480px","justifyContent":"left","wideSize":"100%"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:term-description {"className":"page-header__description","style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.01em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<?php
/**
 * Title: Gallery (style 4)
 * Slug: mroya/gallery-4
 * Description: Gallery section with mixed images in 2 columns.
 * Categories: gallery
 * Keywords: gallery, portfolio
 * Viewport Width: 1440
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Gallery (style 4)', 'Name for the Gallery pattern', 'mroya' ); ?>"},"align":"wide","className":"gallery gallery--4","layout":{"type":"grid","minimumColumnWidth":null,"columnCount":2}} -->
<div class="wp-block-group alignwide gallery gallery--4">
	<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"rowSpan":2}}} -->
	<figure class="wp-block-image size-full">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:3/4;object-fit:cover"/>
	</figure>
	<!-- /wp:image -->

	<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:4/3;object-fit:cover"/>
	</figure>
	<!-- /wp:image -->

	<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"rowSpan":2}}} -->
	<figure class="wp-block-image size-full">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:3/4;object-fit:cover"/>
	</figure>
	<!-- /wp:image -->

	<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:4/3;object-fit:cover"/>
	</figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->

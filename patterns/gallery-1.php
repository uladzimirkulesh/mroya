<?php
/**
 * Title: Gallery (style 1)
 * Slug: mroya/gallery-1
 * Description: Gallery section with images in 2 columns.
 * Categories: gallery
 * Keywords: gallery, portfolio
 * Viewport Width: 1440
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Gallery (style 1)', 'Name for the Gallery pattern', 'mroya' ); ?>"},"align":"wide","className":"gallery gallery--1","layout":{"type":"grid","minimumColumnWidth":null,"columnCount":2}} -->
<div class="wp-block-group alignwide gallery gallery--1">
	<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="object-fit:cover"/>
	</figure>
	<!-- /wp:image -->

	<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="object-fit:cover"/>
	</figure>
	<!-- /wp:image -->

	<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="object-fit:cover"/>
	</figure>
	<!-- /wp:image -->

	<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="object-fit:cover"/>
	</figure>
	<!-- /wp:image -->
</div>
<!-- /wp:group -->

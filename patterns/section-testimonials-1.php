<?php
/**
 * Title: Testimonials section (style 1)
 * Slug: mroya/section-testimonials-1
 * Categories: mroya_sections_testimonials
 * Description: Displays a grid of testimonials.
 * Keywords: section, testimonials
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Testimonials (style 1)', 'Name for the Team section pattern', 'mroya' ); ?>"},"align":"full","className":"is-style-section-contrast section section--testimonials-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"},"margin":{"top":"0"},"blockGap":"2rem"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-section-contrast section section--testimonials-1" id="section-testimonials-1" style="margin-top:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the section header area', 'mroya' ); ?>"},"align":"wide","className":"section__header","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide section__header">
		<!-- wp:heading {"fontSize":"xx-large"} -->
		<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Testimonials', 'Testimonials section title', 'mroya' ); ?></h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya' ); ?>"},"align":"wide","className":"section__content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Testimonials', 'Name for the testimonials area', 'mroya' ); ?>"},"align":"wide","className":"testimonials","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
		<div class="wp-block-group alignwide testimonials">
			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the testimonials item area', 'mroya' ); ?>"},"className":"testimonials__item","style":{"border":{"radius":"0.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"1.25rem"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"base-5","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group testimonials__item has-base-5-background-color has-background" style="border-radius:0.25rem;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:1.25rem;padding-left:var(--wp--preset--spacing--10)">
				<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"56px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
					<figure class="wp-block-image size-thumbnail is-resized is-style-rounded">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:1;object-fit:cover;width:56px"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"testimonials__text","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
					<p class="testimonials__text has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'The agency guided us through the redesign with clarity and confidence. The final website strengthened our brand and noticeably improved user engagement.', 'Testimonials item text', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"2px","padding":{"top":"0.75rem"}},"border":{"top":{"color":"var:preset|color|base-4","style":"dashed","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--base-4);border-top-style:dashed;border-top-width:1px;padding-top:0.75rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
					<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Olivia Bennett', 'Testimonials item author', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"is-style-text-mono","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base-3","fontSize":"xx-small"} -->
					<p class="is-style-text-mono has-base-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Horizon Studio', 'Testimonials item company', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item (empty)', 'Name for the testimonials item area', 'mroya' ); ?>"},"className":"testimonials__item testimonials__item--empty","style":{"border":{"radius":"0.25rem","width":"1px","style":"dashed"}},"borderColor":"base-4","layout":{"type":"constrained"}} -->
			<div class="wp-block-group testimonials__item testimonials__item--empty has-border-color has-base-4-border-color" style="border-style:dashed;border-width:1px;border-radius:0.25rem"></div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the testimonials item area', 'mroya' ); ?>"},"className":"testimonials__item","style":{"border":{"radius":"0.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"1.25rem"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"base-5","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group testimonials__item has-base-5-background-color has-background" style="border-radius:0.25rem;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:1.25rem;padding-left:var(--wp--preset--spacing--10)">
				<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"56px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
					<figure class="wp-block-image size-thumbnail is-resized is-style-rounded">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:1;object-fit:cover;width:56px"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"testimonials__text","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
					<p class="testimonials__text has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Communication was smooth from start to finish. They quickly understood our goals and turned them into a clean, modern website.', 'Testimonials item text', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"2px","padding":{"top":"0.75rem"}},"border":{"top":{"color":"var:preset|color|base-4","style":"dashed","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--base-4);border-top-style:dashed;border-top-width:1px;padding-top:0.75rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
					<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Daniel Foster', 'Testimonials item author', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"is-style-text-mono","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base-3","fontSize":"xx-small"} -->
					<p class="is-style-text-mono has-base-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Apex Digital', 'Testimonials item company', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the testimonials item area', 'mroya' ); ?>"},"className":"testimonials__item","style":{"border":{"radius":"0.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"1.25rem"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"base-5","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group testimonials__item has-base-5-background-color has-background" style="border-radius:0.25rem;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:1.25rem;padding-left:var(--wp--preset--spacing--10)">
				<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"56px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
					<figure class="wp-block-image size-thumbnail is-resized is-style-rounded">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:1;object-fit:cover;width:56px"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"testimonials__text","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
					<p class="testimonials__text has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Their attention to detail truly stood out. The team delivered a polished, high-performance site that exceeded our expectations.', 'Testimonials item text', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"2px","padding":{"top":"0.75rem"}},"border":{"top":{"color":"var:preset|color|base-4","style":"dashed","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--base-4);border-top-style:dashed;border-top-width:1px;padding-top:0.75rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
					<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Maya Rodriguez', 'Testimonials item author', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"is-style-text-mono","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base-3","fontSize":"xx-small"} -->
					<p class="is-style-text-mono has-base-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Brightline Agency', 'Testimonials item company', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item (empty)', 'Name for the testimonials item area', 'mroya' ); ?>"},"className":"testimonials__item testimonials__item--empty","style":{"border":{"radius":"0.25rem","width":"1px","style":"dashed"}},"borderColor":"base-4","layout":{"type":"constrained"}} -->
			<div class="wp-block-group testimonials__item testimonials__item--empty has-border-color has-base-4-border-color" style="border-style:dashed;border-width:1px;border-radius:0.25rem"></div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the testimonials item area', 'mroya' ); ?>"},"className":"testimonials__item","style":{"border":{"radius":"0.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"1.25rem"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"base-5","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group testimonials__item has-base-5-background-color has-background" style="border-radius:0.25rem;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:1.25rem;padding-left:var(--wp--preset--spacing--10)">
				<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"56px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
					<figure class="wp-block-image size-thumbnail is-resized is-style-rounded">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:1;object-fit:cover;width:56px"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"testimonials__text","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
					<p class="testimonials__text has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'We appreciated their creative approach and technical skill. The result feels authentic to our brand and was delivered right on time.', 'Testimonials item text', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"2px","padding":{"top":"0.75rem"}},"border":{"top":{"color":"var:preset|color|base-4","style":"dashed","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--base-4);border-top-style:dashed;border-top-width:1px;padding-top:0.75rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
					<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Lucas Turner', 'Testimonials item author', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"is-style-text-mono","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base-3","fontSize":"xx-small"} -->
					<p class="is-style-text-mono has-base-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Nova Works', 'Testimonials item company', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item (empty)', 'Name for the testimonials item area', 'mroya' ); ?>"},"className":"testimonials__item testimonials__item--empty","style":{"border":{"radius":"0.25rem","width":"1px","style":"dashed"}},"borderColor":"base-4","layout":{"type":"constrained"}} -->
			<div class="wp-block-group testimonials__item testimonials__item--empty has-border-color has-base-4-border-color" style="border-style:dashed;border-width:1px;border-radius:0.25rem"></div>
			<!-- /wp:group -->

			<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Item', 'Name for the testimonials item area', 'mroya' ); ?>"},"className":"testimonials__item","style":{"border":{"radius":"0.25rem"},"spacing":{"padding":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"1.25rem"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"base-5","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group testimonials__item has-base-5-background-color has-background" style="border-radius:0.25rem;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:1.25rem;padding-left:var(--wp--preset--spacing--10)">
				<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"56px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
					<figure class="wp-block-image size-thumbnail is-resized is-style-rounded">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="aspect-ratio:1;object-fit:cover;width:56px"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"className":"testimonials__text","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
					<p class="testimonials__text has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'The team injected new energy into our brand with a bold and purposeful design. Collaboration was easy and productive throughout.', 'Testimonials item text', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"2px","padding":{"top":"0.75rem"}},"border":{"top":{"color":"var:preset|color|base-4","style":"dashed","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--base-4);border-top-style:dashed;border-top-width:1px;padding-top:0.75rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
					<p style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Chloe Adams', 'Testimonials item author', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"is-style-text-mono","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-3"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base-3","fontSize":"xx-small"} -->
					<p class="is-style-text-mono has-base-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Skyline Creative', 'Testimonials item company', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

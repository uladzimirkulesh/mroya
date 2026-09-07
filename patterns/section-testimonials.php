<?php
/**
 * Title: Testimonials section
 * Slug: mroya/section-testimonials
 * Categories: mroya_sections
 * Description: Displays a grid of testimonials with author information.
 * Keywords: section, testimonials
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--testimonials","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"},"blockGap":"2.5rem"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--testimonials" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"tagName":"header","align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"640px"}} -->
	<header class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"className":"is-style-text-badge"} -->
			<h2 class="wp-block-heading is-style-text-badge"><?php echo esc_html_x( 'Testimonials', 'Testimonials section title', 'mroya' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"xxxx-large"} -->
			<p class="has-xxxx-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Where great ideas become lasting partnerships', 'Testimonials section text', 'mroya' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","style":{"@mobile":{"layout":{"columnCount":1}},"@tablet":{"layout":{"columnCount":2}}},"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"16rem"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:group {"style":{"border":{"radius":{"topLeft":"0.375rem","topRight":"0.375rem","bottomLeft":"0.375rem","bottomRight":"0.375rem"}},"spacing":{"blockGap":"0"}},"backgroundColor":"accent-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group has-accent-2-background-color has-background" style="border-top-left-radius:0.375rem;border-top-right-radius:0.375rem;border-bottom-left-radius:0.375rem;border-bottom-right-radius:0.375rem">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"var:preset|spacing|20","left":"1.25rem","right":"1.25rem"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:1rem;padding-right:1.25rem;padding-bottom:var(--wp--preset--spacing--20);padding-left:1.25rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
					<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( '"Working with this team was one of the best decisions we made for our business. They quickly understood our goals, communicated clearly throughout the project, and delivered results that exceeded our expectations. Their attention to detail and professional approach made the entire process smooth and enjoyable. Every stage was handled with care, and the final outcome reflected the high standards they promised from the very beginning. We truly appreciated their reliability, expertise, and commitment to delivering outstanding work."', 'Testimonials item text', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.25rem","left":"1.25rem","top":"0.75rem","bottom":"0.75rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="padding-top:0.75rem;padding-right:1.25rem;padding-bottom:0.75rem;padding-left:1.25rem">
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"44px","height":"44px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
						<figure class="wp-block-image size-full is-resized is-style-rounded">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="object-fit:cover;width:44px;height:44px"/>
						</figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Olivia Bennett', 'Testimonials item user name', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"xx-small"} -->
						<p class="has-contrast-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Horizon Studio', 'Testimonials item user company', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"border":{"radius":{"topLeft":"0.375rem","topRight":"0.375rem","bottomLeft":"0.375rem","bottomRight":"0.375rem"}},"spacing":{"blockGap":"0"}},"backgroundColor":"accent-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group has-accent-2-background-color has-background" style="border-top-left-radius:0.375rem;border-top-right-radius:0.375rem;border-bottom-left-radius:0.375rem;border-bottom-right-radius:0.375rem">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"var:preset|spacing|20","left":"1.25rem","right":"1.25rem"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:1rem;padding-right:1.25rem;padding-bottom:var(--wp--preset--spacing--20);padding-left:1.25rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
					<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( '"From the very first conversation, we knew we were working with professionals. Every milestone was completed on time, communication was always clear, and the quality of the final result was exceptional. The team combined creativity with technical expertise, making the collaboration both efficient and enjoyable. They were proactive, responsive, and always willing to go the extra mile whenever we needed support. We would gladly recommend their services to anyone looking for a dependable partner."', 'Testimonials item text', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.25rem","left":"1.25rem","top":"0.75rem","bottom":"0.75rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="padding-top:0.75rem;padding-right:1.25rem;padding-bottom:0.75rem;padding-left:1.25rem">
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"44px","height":"44px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
						<figure class="wp-block-image size-full is-resized is-style-rounded">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="object-fit:cover;width:44px;height:44px"/>
						</figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Daniel Foster', 'Testimonials item user name', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"xx-small"} -->
						<p class="has-contrast-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Apex Digital', 'Testimonials item user company', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"border":{"radius":{"topLeft":"0.375rem","topRight":"0.375rem","bottomLeft":"0.375rem","bottomRight":"0.375rem"}},"spacing":{"blockGap":"0"}},"backgroundColor":"accent-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group has-accent-2-background-color has-background" style="border-top-left-radius:0.375rem;border-top-right-radius:0.375rem;border-bottom-left-radius:0.375rem;border-bottom-right-radius:0.375rem">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"var:preset|spacing|20","left":"1.25rem","right":"1.25rem"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:1rem;padding-right:1.25rem;padding-bottom:var(--wp--preset--spacing--20);padding-left:1.25rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
					<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( '"Their expertise, creativity, and dedication made a real difference to our project. They carefully listened to our feedback, provided valuable recommendations, and delivered a solution that perfectly matched our vision. The entire experience felt collaborative, transparent, and stress-free from beginning to end. We especially appreciated how they anticipated potential challenges and offered practical solutions before they became problems. We couldn\'t be happier with the outcome and the overall experience."', 'Testimonials item text', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.25rem","left":"1.25rem","top":"0.75rem","bottom":"0.75rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="padding-top:0.75rem;padding-right:1.25rem;padding-bottom:0.75rem;padding-left:1.25rem">
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"44px","height":"44px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
						<figure class="wp-block-image size-full is-resized is-style-rounded">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="object-fit:cover;width:44px;height:44px"/>
						</figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Maya Rodriguez', 'Testimonials item user name', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"xx-small"} -->
						<p class="has-contrast-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Brightline Agency', 'Testimonials item user company', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"border":{"radius":{"topLeft":"0.375rem","topRight":"0.375rem","bottomLeft":"0.375rem","bottomRight":"0.375rem"}},"spacing":{"blockGap":"0"}},"backgroundColor":"accent-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group has-accent-2-background-color has-background" style="border-top-left-radius:0.375rem;border-top-right-radius:0.375rem;border-bottom-left-radius:0.375rem;border-bottom-right-radius:0.375rem">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"var:preset|spacing|20","left":"1.25rem","right":"1.25rem"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:1rem;padding-right:1.25rem;padding-bottom:var(--wp--preset--spacing--20);padding-left:1.25rem">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
					<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( '"What impressed us most was their professionalism and consistent attention to detail. The team kept us informed at every stage, responded quickly to our questions, and delivered high-quality work on schedule. They genuinely cared about achieving the best possible result and exceeded our expectations in several important areas. Their reliability and commitment made the entire collaboration feel effortless from start to finish. We look forward to working with them again in the future and highly recommend their services."', 'Testimonials item text', 'mroya' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:group {"style":{"spacing":{"padding":{"right":"1.25rem","left":"1.25rem","top":"0.75rem","bottom":"0.75rem"},"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="padding-top:0.75rem;padding-right:1.25rem;padding-bottom:0.75rem;padding-left:1.25rem">
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"44px","height":"44px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
						<figure class="wp-block-image size-full is-resized is-style-rounded">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.webp" alt="" style="object-fit:cover;width:44px;height:44px"/>
						</figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Lucas Turner', 'Testimonials item user name', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"xx-small"} -->
						<p class="has-contrast-3-color has-text-color has-link-color has-xx-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Nova Works', 'Testimonials item user company', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
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

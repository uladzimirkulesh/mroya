<?php
/**
 * Title: Contacts section
 * Slug: mroya/section-contacts
 * Categories: mroya_sections
 * Description: Displays contact information.
 * Keywords: section, contacts
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 2.0.0
 */

?>
<!-- wp:group {"tagName":"section","align":"full","className":"section section--contacts","style":{"spacing":{"padding":{"top":"2.25rem","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--contacts" style="padding-top:2.25rem;padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","style":{"@tablet":{"layout":{"columnCount":1}},"@mobile":{"layout":{"columnCount":1}}},"layout":{"type":"grid","columnCount":2}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"className":"is-style-text-badge"} -->
			<h2 class="wp-block-heading is-style-text-badge"><?php echo esc_html_x( 'Our Contacts', 'Contacts section title', 'mroya' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"section__text","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large"} -->
			<p class="section__text has-x-large-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'We’d love to hear from you. Whether you have a project in mind, a question about our services, or simply want to learn more about what we do, feel free to get in touch. Our team is always happy to start a conversation and find the best way to help.', 'Contacts section text', 'mroya' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"contacts-list","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group contacts-list">
				<!-- wp:group {"className":"contacts-list__item","style":{"spacing":{"blockGap":"0.38rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group contacts-list__item">
					<!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:group {"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"small"} -->
						<p class="has-contrast-3-color has-text-color has-link-color has-small-font-size"><?php echo esc_html_x( 'Adress', 'Contacts list item title', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"0.13rem"}},"layout":{"type":"default"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
							<p class="has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( '2118 Thornridge Cir. Syracuse,', 'Contacts list item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
							<p class="has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Connecticut 35624', 'Contacts list item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"contacts-list__item","style":{"spacing":{"blockGap":"0.38rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group contacts-list__item">
					<!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:group {"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"small"} -->
						<p class="has-contrast-3-color has-text-color has-link-color has-small-font-size"><?php echo esc_html_x( 'Contacts', 'Contacts list item title', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"0.13rem"}},"layout":{"type":"default"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
							<p class="has-medium-font-size" style="font-style:normal;font-weight:500"><?php
							printf(
								/* translators: "Contact phone" text. */
								esc_html__( 'Phone: %s', 'mroya' ),
								'<a href="' . esc_url( __( 'tel:42012345678', 'mroya' ) ) . '">+420 123-456-78</a>' )
							?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
							<p class="has-medium-font-size" style="font-style:normal;font-weight:500"><?php
							printf(
								/* translators: "Contact mail" text. */
								esc_html__( 'Email: %s', 'mroya' ),
								'<a href="' . esc_url( __( 'mailto:hello@yoursite.com', 'mroya' ) ) . '">hello@yoursite.com</a>' )
							?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"contacts-list__item","style":{"spacing":{"blockGap":"0.38rem"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group contacts-list__item">
					<!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:group {"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3","fontSize":"small"} -->
						<p class="has-contrast-3-color has-text-color has-link-color has-small-font-size"><?php echo esc_html_x( 'Working Hours', 'Contacts list item title', 'mroya' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"0.13rem"}},"layout":{"type":"default"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
							<p class="has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Mon–Sat: 9am to 5pm', 'Contacts list item text', 'mroya' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
							<p class="has-medium-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_x( 'Sunday – Closed', 'Contacts list item text', 'mroya' ); ?></p>
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
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

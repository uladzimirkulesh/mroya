<?php
/**
 * Title: Mission section (style 1)
 * Slug: mroya/section-mission-1
 * Categories: mroya_sections_mission
 * Description: Displays mission heading and text.
 * Keywords: section, mission
 * Post Types: page, wp_template
 * Viewport width: 1440
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"<?php echo esc_html_x( 'Mission (style 1)', 'Name for the Mission section pattern', 'mroya' ); ?>"},"align":"full","className":"section section--mission-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|60"},"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull section section--mission-1" id="section-mission-1" style="margin-top:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"tagName":"header","metadata":{"name":"<?php echo esc_html_x( 'Header', 'Name for the section header area', 'mroya' ); ?>"},"align":"wide","className":"section__header","layout":{"type":"default"}} -->
	<header class="wp-block-group alignwide section__header">
		<!-- wp:heading {"className":"has-span-indent","fontSize":"huge"} -->
		<h2 class="wp-block-heading has-span-indent has-huge-font-size"><span class="indent"><?php echo esc_html_x( '[ Our mission ]', 'Mission section title','mroya' ); ?></span><span class="text"><?php echo esc_html_x( 'We aim to give creators a flexible foundation that helps them present their work with clarity, confidence, and a distinct visual voice.', 'Mission section title', 'mroya' ); ?></span></h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Content', 'Name for the section content area', 'mroya' ); ?>"},"align":"wide","className":"section__content","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
	<div class="wp-block-group alignwide section__content">
		<!-- wp:list {"className":"is-style-list-mono list--first"} -->
		<ul class="wp-block-list is-style-list-mono list--first">
			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Brand Strategy', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Visual Identity', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'UI/UX Design', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Web Development', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Front-End Solutions', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Content Production', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->

		<!-- wp:list {"className":"is-style-list-mono list--second"} -->
		<ul class="wp-block-list is-style-list-mono list--second">
			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Design Systems', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Logo Design', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Landing Pages', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Motion Graphics', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Art Direction', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li><?php echo esc_html_x( 'Digital Projects', 'Mission section text', 'mroya' ); ?></li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

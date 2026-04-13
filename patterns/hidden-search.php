<?php
/**
 * Title: Search
 * Slug: mroya/hidden-search
 * Inserter: no
 *
 * @package Mroya
 * @since Mroya 1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Search Wrapper', 'Name for the Search pattern', 'mroya' ); ?>"},"className":"page-header__search","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1rem","right":"1rem"}},"border":{"radius":"0.5rem"}},"backgroundColor":"contrast-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group page-header__search has-contrast-5-background-color has-background" style="border-radius:0.5rem;padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem">
	<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'Label', 'mroya' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search...', 'Placeholder for search field', 'mroya' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'mroya' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center"} /-->
</div>
<!-- /wp:group -->

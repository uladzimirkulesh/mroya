/*-------------------------------------------------------
Archive page animations
-------------------------------------------------------*/

export function pageArchive() {
	if (
		! document.body.classList.contains( 'blog' ) &&
		! document.body.classList.contains( 'archive' ) &&
		! document.body.classList.contains( 'search' )
	) return;

	const posts = gsap.utils.toArray( '.wp-block-post-template.is-layout-grid .wp-block-post' );
	posts?.length && gsap.effects.fadeInUpBatch( posts, { batchMax: 3 } );
}

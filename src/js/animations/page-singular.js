/*-------------------------------------------------------
Singular page animations
-------------------------------------------------------*/
export function pageSingular() {
	if ( ! document.body.classList.contains( 'wp-singular' ) ) return;

	const entry = document.querySelector( '.entry' );
	const featuredImg = entry?.querySelector( '.wp-block-cover' );
	const img = featuredImg?.querySelector( '.wp-block-cover__image-background' );

	// Featured image animations
	img && gsap.effects.parallax( img, {
		yFrom: 0,
		yTo: 5,
		scaleFrom: 1,
		scaleTo: 1.04,
		parent: featuredImg,
		start: 'top top',
	} );
}

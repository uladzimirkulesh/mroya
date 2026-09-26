/*-------------------------------------------------------
Section "Hero (style 2)"
-------------------------------------------------------*/

export function sectionHero2() {
	const sections = gsap.utils.toArray( '.section--hero-2' );

	sections.forEach( ( section ) => {
		const cover = section.querySelector( '.wp-block-cover' );
		const img = section.querySelector( '.wp-block-cover__image-background' );

		if ( cover && img ) {
			gsap.effects.parallax( img, {
				parent: cover,
				yFrom: 0,
				scaleFrom: 1,
				start: 'top top',
			} );
		}
	} );
}

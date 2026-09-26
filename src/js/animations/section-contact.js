/*-------------------------------------------------------
Section "Contact"
-------------------------------------------------------*/

export function sectionContact() {
	const sections = gsap.utils.toArray( '.section--contact' );

	sections.forEach( ( section ) => {
		const img = section.querySelector( '.wp-block-cover__image-background' );
		img && gsap.effects.parallax( img, { parent: section } );
	} );
}

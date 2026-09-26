/*-------------------------------------------------------
Section "About"
-------------------------------------------------------*/
export function sectionAbout() {
	const sections = gsap.utils.toArray( '.section--about' );

	sections.forEach( ( section ) => {
		const text = section.querySelector( '.section__text' );
		text && gsap.effects.splitTextWords( text );
	} );
}

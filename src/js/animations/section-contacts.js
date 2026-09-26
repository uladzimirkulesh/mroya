/*-------------------------------------------------------
Section "Contacts"
-------------------------------------------------------*/
export function sectionContacts() {
	const sections = gsap.utils.toArray( '.section--contacts' );

	sections.forEach( ( section ) => {
		const text = section.querySelector( '.section__text' );
		text && gsap.effects.splitTextWords( text );
	} );
}

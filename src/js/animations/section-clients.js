/*-------------------------------------------------------
Section "Clients"
-------------------------------------------------------*/
export function sectionClients() {
	const sections = gsap.utils.toArray( '.section--clients' );

	sections.forEach( ( section ) => {
		const cards = section.querySelectorAll( '.clients-list__item' );
		cards?.length && gsap.effects.fadeInUpBatch( cards );
	} );
}

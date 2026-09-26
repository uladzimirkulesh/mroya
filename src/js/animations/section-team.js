/*-------------------------------------------------------
Section "Team"
-------------------------------------------------------*/
export function sectionTeam() {
	const sections = gsap.utils.toArray( '.section--team' );

	sections.forEach( ( section ) => {
		const cards = section.querySelectorAll( '.members-list__item' );
		cards?.length && gsap.effects.fadeInUpBatch( cards );
	} );
}

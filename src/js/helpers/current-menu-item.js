/*-------------------------------------------------------
Setting "current-menu-item" class to the menu link
-------------------------------------------------------*/

export function setCurrentMenuItemClass() {
	const menuItems = document.querySelectorAll( '.wp-block-navigation-item' );
	if ( ! menuItems.length ) return;

	// Check for .current-menu-item class on any item and stop if found.
	for ( let i = 0; i < menuItems.length; i++ ) {
		if ( menuItems[ i ].classList.contains( 'current-menu-item' ) ) {
			return;
		}
	}

	// Add trailing slash to path if missing.
	const url = window.location.href.endsWith( '/' )
		? window.location.href
		: `${ window.location.href }/`;

	// Check for matching URL path on any child link of menuItems.
	for ( let i = 0; i < menuItems.length; i++ ) {
		const link = menuItems[ i ].querySelector( 'a' );
		const linkURL = link.href.endsWith( '/' )
			? link.href
			: `${ link.href }/`;

		// Note: link.href returns full URL, even if it's a relative link.
		if ( linkURL === url ) {
			menuItems[ i ].classList.add( 'current-menu-item' );
		}
	}
}

/*-------------------------------------------------------
Init sidebar
-------------------------------------------------------*/

export function initSidebar() {
	const body = document.querySelector( 'body' );
	const main = body?.querySelector( 'main' );
	const sidebar = body?.querySelector( '.sidebar' );
	if ( ! sidebar || ! main ) return;

	// Add sidebar opener
	const sidebarOpenButton = document.createElement( 'button' );
	sidebarOpenButton.className = 'sidebar-opener';
	sidebarOpenButton.setAttribute( 'type', 'button' );
	sidebarOpenButton.setAttribute( 'aria-label', wp.i18n.__( 'Open Sidebar', 'mroya' ) );
	sidebarOpenButton.innerHTML = `<span>${ wp.i18n.__( 'Open Sidebar' , 'mroya' ) }</span>`;
	main.appendChild( sidebarOpenButton );

	// Animate sidebar
	let state = sidebar.setAttribute( 'data-sidebar', 'closed' );
	const sidebarToggles = document.querySelectorAll( '.sidebar-opener, .sidebar-close a, .sidebar__overlay' );

	// Open sidebar
	const openSidebar = () => {
		body.setAttribute( 'data-sidebar', 'opened' );
		sidebar.setAttribute( 'data-sidebar', 'opened' );
	};

	// Close sidebar
	const closeSidebar = () => {
		body.setAttribute( 'data-sidebar', 'closed' );
		sidebar.setAttribute( 'data-sidebar', 'closed' );
	};

	// Toggle sidebar open/close depending on it's current state
	sidebarToggles.forEach( ( toggle ) => {
		toggle.setAttribute( 'aria-expanded', 'false' );
		toggle.setAttribute( 'aria-controls', 'widgets' );

		toggle.addEventListener( 'click', ( e ) => {
			e.preventDefault();
			state = sidebar.getAttribute( 'data-sidebar' );

			if ( state === 'opened' ) {
				closeSidebar();
			} else {
				openSidebar();
			}

			sidebarToggles.forEach( ( toggle ) => {
				toggle.setAttribute( 'aria-expanded', toggle.getAttribute( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
			} );
		} );
	} );

	// If sidebar is open, you can close it using the "escape" key
	document.addEventListener( 'keydown', ( e ) => {
		if ( e.key === 'Escape' && sidebar.getAttribute( 'data-sidebar' ) === 'opened' ) {
			closeSidebar();

			sidebarToggles.forEach( ( toggle ) => {
				toggle.setAttribute( 'aria-expanded', 'false' );
			} );
		}
	} );

	// Hide sidebar opener
	const footer = document.querySelector( '.footer' );
	if ( ! footer ) return;

	const observer = new IntersectionObserver(
		( entries ) => {
			entries.forEach( ( entry ) => {
				if ( entry.isIntersecting ) {
					sidebarOpenButton.classList.add( 'hidden' );
				} else {
					sidebarOpenButton.classList.remove( 'hidden' );
				}
			} );
		},
		{
			root: null,
			threshold: 0,
			rootMargin: '0px 0px -10px 0px',
		}
	);

	observer.observe( footer );
}

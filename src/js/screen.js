import * as Helpers from './helpers';
import * as Layout from './layout';

/*-------------------------------------------------------
Fire on document ready
-------------------------------------------------------*/

document.addEventListener( 'DOMContentLoaded', () => {
	// Helpers
	Helpers.setCurrentMenuItemClass();
	Helpers.setFigureBorderRadius();
	Helpers.localTime();
} );

/*-------------------------------------------------------
Fire on window load
-------------------------------------------------------*/

window.addEventListener( 'load', () => {
	// Layout
	Layout.initSidebar();
} );

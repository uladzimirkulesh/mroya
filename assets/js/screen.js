/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/helpers/current-menu-item.js"
/*!*********************************************!*\
  !*** ./src/js/helpers/current-menu-item.js ***!
  \*********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   setCurrentMenuItemClass: () => (/* binding */ setCurrentMenuItemClass)
/* harmony export */ });
/*-------------------------------------------------------
Setting "current-menu-item" class to the menu link
-------------------------------------------------------*/

function setCurrentMenuItemClass() {
  const menuItems = document.querySelectorAll('.wp-block-navigation-item');
  if (!menuItems.length) return;

  // Check for .current-menu-item class on any item and stop if found.
  for (let i = 0; i < menuItems.length; i++) {
    if (menuItems[i].classList.contains('current-menu-item')) {
      return;
    }
  }

  // Add trailing slash to path if missing.
  const url = window.location.href.endsWith('/') ? window.location.href : `${window.location.href}/`;

  // Check for matching URL path on any child link of menuItems.
  for (let i = 0; i < menuItems.length; i++) {
    const link = menuItems[i].querySelector('a');
    const linkURL = link.href.endsWith('/') ? link.href : `${link.href}/`;

    // Note: link.href returns full URL, even if it's a relative link.
    if (linkURL === url) {
      menuItems[i].classList.add('current-menu-item');
    }
  }
}

/***/ },

/***/ "./src/js/helpers/figure-border-radius.js"
/*!************************************************!*\
  !*** ./src/js/helpers/figure-border-radius.js ***!
  \************************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   setFigureBorderRadius: () => (/* binding */ setFigureBorderRadius)
/* harmony export */ });
/*-------------------------------------------------------
Setting "border-radius" value for images figure element
-------------------------------------------------------*/

function setFigureBorderRadius() {
  const imgFigures = document.querySelectorAll('.wp-block-image, .wp-block-post-featured-image');
  imgFigures.forEach(imgFigure => {
    const img = imgFigure.querySelector('img');
    if (!img) return;
    const applyBorderRadius = () => {
      const borderRadius = window.getComputedStyle(img).borderRadius;
      imgFigure.style.borderRadius = borderRadius;
    };
    if (img.complete) {
      applyBorderRadius();
    } else {
      img.addEventListener('load', applyBorderRadius);
    }
  });
}

/***/ },

/***/ "./src/js/helpers/index.js"
/*!*********************************!*\
  !*** ./src/js/helpers/index.js ***!
  \*********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   localTime: () => (/* reexport safe */ _local_time__WEBPACK_IMPORTED_MODULE_2__.localTime),
/* harmony export */   setCurrentMenuItemClass: () => (/* reexport safe */ _current_menu_item__WEBPACK_IMPORTED_MODULE_0__.setCurrentMenuItemClass),
/* harmony export */   setFigureBorderRadius: () => (/* reexport safe */ _figure_border_radius__WEBPACK_IMPORTED_MODULE_1__.setFigureBorderRadius)
/* harmony export */ });
/* harmony import */ var _current_menu_item__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./current-menu-item */ "./src/js/helpers/current-menu-item.js");
/* harmony import */ var _figure_border_radius__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./figure-border-radius */ "./src/js/helpers/figure-border-radius.js");
/* harmony import */ var _local_time__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./local-time */ "./src/js/helpers/local-time.js");




/***/ },

/***/ "./src/js/helpers/local-time.js"
/*!**************************************!*\
  !*** ./src/js/helpers/local-time.js ***!
  \**************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   localTime: () => (/* binding */ localTime)
/* harmony export */ });
/*-------------------------------------------------------
Display Local Time
-------------------------------------------------------*/

function localTime() {
  const elements = document.querySelectorAll('.local-time');
  if (!elements.length) return;
  elements.forEach(el => {
    const zone = el.id || 'Europe/Prague';
    const now = new Date();
    const options = {
      timeZone: zone,
      timeZoneName: 'short',
      hour: '2-digit',
      hour12: true,
      minute: '2-digit'
    };
    const formatter = new Intl.DateTimeFormat([], options);
    const timeText = formatter.format(now);
    el.textContent = '';
    el.textContent = timeText;
  });
}
localTime();
setInterval(localTime, 60000);

/***/ },

/***/ "./src/js/layout/index.js"
/*!********************************!*\
  !*** ./src/js/layout/index.js ***!
  \********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initSidebar: () => (/* reexport safe */ _sidebar__WEBPACK_IMPORTED_MODULE_0__.initSidebar)
/* harmony export */ });
/* harmony import */ var _sidebar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./sidebar */ "./src/js/layout/sidebar.js");


/***/ },

/***/ "./src/js/layout/sidebar.js"
/*!**********************************!*\
  !*** ./src/js/layout/sidebar.js ***!
  \**********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initSidebar: () => (/* binding */ initSidebar)
/* harmony export */ });
/*-------------------------------------------------------
Init sidebar
-------------------------------------------------------*/

function initSidebar() {
  const body = document.querySelector('body');
  const main = body?.querySelector('main');
  const sidebar = body?.querySelector('.sidebar');
  if (!sidebar || !main) return;

  // Add sidebar opener
  const sidebarOpenButton = document.createElement('button');
  sidebarOpenButton.className = 'sidebar-opener';
  sidebarOpenButton.setAttribute('type', 'button');
  sidebarOpenButton.setAttribute('aria-label', wp.i18n.__('Open Sidebar', 'mroya'));
  sidebarOpenButton.innerHTML = `<span>${wp.i18n.__('Open Sidebar', 'mroya')}</span>`;
  main.appendChild(sidebarOpenButton);

  // Animate sidebar
  let state = sidebar.setAttribute('data-sidebar', 'closed');
  const sidebarToggles = document.querySelectorAll('.sidebar-opener, .sidebar-close a, .sidebar__overlay');

  // Open sidebar
  const openSidebar = () => {
    body.setAttribute('data-sidebar', 'opened');
    sidebar.setAttribute('data-sidebar', 'opened');
  };

  // Close sidebar
  const closeSidebar = () => {
    body.setAttribute('data-sidebar', 'closed');
    sidebar.setAttribute('data-sidebar', 'closed');
  };

  // Toggle sidebar open/close depending on it's current state
  sidebarToggles.forEach(toggle => {
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-controls', 'widgets');
    toggle.addEventListener('click', e => {
      e.preventDefault();
      state = sidebar.getAttribute('data-sidebar');
      if (state === 'opened') {
        closeSidebar();
      } else {
        openSidebar();
      }
      sidebarToggles.forEach(toggle => {
        toggle.setAttribute('aria-expanded', toggle.getAttribute('aria-expanded') === 'false' ? 'true' : 'false');
      });
    });
  });

  // If sidebar is open, you can close it using the "escape" key
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && sidebar.getAttribute('data-sidebar') === 'opened') {
      closeSidebar();
      sidebarToggles.forEach(toggle => {
        toggle.setAttribute('aria-expanded', 'false');
      });
    }
  });

  // Hide sidebar opener
  const footer = document.querySelector('.footer');
  if (!footer) return;
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        sidebarOpenButton.classList.add('hidden');
      } else {
        sidebarOpenButton.classList.remove('hidden');
      }
    });
  }, {
    root: null,
    threshold: 0,
    rootMargin: '0px 0px -10px 0px'
  });
  observer.observe(footer);
}

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**************************!*\
  !*** ./src/js/screen.js ***!
  \**************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _helpers__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./helpers */ "./src/js/helpers/index.js");
/* harmony import */ var _layout__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./layout */ "./src/js/layout/index.js");



/*-------------------------------------------------------
Fire on document ready
-------------------------------------------------------*/

document.addEventListener('DOMContentLoaded', () => {
  // Helpers
  _helpers__WEBPACK_IMPORTED_MODULE_0__.setCurrentMenuItemClass();
  _helpers__WEBPACK_IMPORTED_MODULE_0__.setFigureBorderRadius();
  _helpers__WEBPACK_IMPORTED_MODULE_0__.localTime();
});

/*-------------------------------------------------------
Fire on window load
-------------------------------------------------------*/

window.addEventListener('load', () => {
  // Layout
  _layout__WEBPACK_IMPORTED_MODULE_1__.initSidebar();
});
})();

/******/ })()
;
//# sourceMappingURL=screen.js.map
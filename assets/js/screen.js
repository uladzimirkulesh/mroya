// src/js/helpers/current-menu-item.js
function setCurrentMenuItemClass() {
  const menuItems = document.querySelectorAll(".wp-block-navigation-item");
  if (!menuItems.length) return;
  for (let i = 0; i < menuItems.length; i++) {
    if (menuItems[i].classList.contains("current-menu-item")) {
      return;
    }
  }
  const url = window.location.href.endsWith("/") ? window.location.href : `${window.location.href}/`;
  for (let i = 0; i < menuItems.length; i++) {
    const link = menuItems[i].querySelector("a");
    const linkURL = link.href.endsWith("/") ? link.href : `${link.href}/`;
    if (linkURL === url) {
      menuItems[i].classList.add("current-menu-item");
    }
  }
}

// src/js/helpers/figure-border-radius.js
function setFigureBorderRadius() {
  const imgFigures = document.querySelectorAll(".wp-block-image, .wp-block-post-featured-image");
  imgFigures.forEach((imgFigure) => {
    const img = imgFigure.querySelector("img");
    if (!img) return;
    const applyBorderRadius = () => {
      const borderRadius = window.getComputedStyle(img).borderRadius;
      imgFigure.style.borderRadius = borderRadius;
    };
    if (img.complete) {
      applyBorderRadius();
    } else {
      img.addEventListener("load", applyBorderRadius);
    }
  });
}

// src/js/layout/sidebar.js
function initSidebar() {
  const body = document.querySelector("body");
  const main = body?.querySelector("main");
  const sidebar = body?.querySelector(".sidebar");
  if (!sidebar || !main) return;
  const sidebarOpenButton = document.createElement("button");
  sidebarOpenButton.className = "sidebar-opener";
  sidebarOpenButton.setAttribute("type", "button");
  sidebarOpenButton.setAttribute("aria-label", wp.i18n.__("Open Sidebar", "mroya"));
  sidebarOpenButton.innerHTML = `<span>${wp.i18n.__("Open Sidebar", "mroya")}</span>`;
  main.appendChild(sidebarOpenButton);
  let state = sidebar.setAttribute("data-sidebar", "closed");
  const sidebarToggles = document.querySelectorAll(".sidebar-opener, .sidebar-close a, .sidebar__overlay");
  const openSidebar = () => {
    body.setAttribute("data-sidebar", "opened");
    sidebar.setAttribute("data-sidebar", "opened");
  };
  const closeSidebar = () => {
    body.setAttribute("data-sidebar", "closed");
    sidebar.setAttribute("data-sidebar", "closed");
  };
  sidebarToggles.forEach((toggle) => {
    toggle.setAttribute("aria-expanded", "false");
    toggle.setAttribute("aria-controls", "widgets");
    toggle.addEventListener("click", (e) => {
      e.preventDefault();
      state = sidebar.getAttribute("data-sidebar");
      if (state === "opened") {
        closeSidebar();
      } else {
        openSidebar();
      }
      sidebarToggles.forEach((toggle2) => {
        toggle2.setAttribute("aria-expanded", toggle2.getAttribute("aria-expanded") === "false" ? "true" : "false");
      });
    });
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && sidebar.getAttribute("data-sidebar") === "opened") {
      closeSidebar();
      sidebarToggles.forEach((toggle) => {
        toggle.setAttribute("aria-expanded", "false");
      });
    }
  });
  const footer = document.querySelector(".footer");
  if (!footer) return;
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          sidebarOpenButton.classList.add("hidden");
        } else {
          sidebarOpenButton.classList.remove("hidden");
        }
      });
    },
    {
      root: null,
      threshold: 0,
      rootMargin: "0px 0px -10px 0px"
    }
  );
  observer.observe(footer);
}

// src/js/screen.js
document.addEventListener("DOMContentLoaded", () => {
  setCurrentMenuItemClass();
  setFigureBorderRadius();
});
window.addEventListener("load", () => {
  initSidebar();
});

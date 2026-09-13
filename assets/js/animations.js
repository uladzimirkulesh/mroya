// src/js/animations/section-hero.js
function sectionHero() {
  const sections = gsap.utils.toArray(".section--hero");
  sections.forEach((section) => {
    const img = section.querySelector(".wp-block-cover__image-background");
    img && gsap.effects.parallax(img, {
      yFrom: 0,
      yTo: 5,
      scaleFrom: 1,
      scaleTo: 1.04,
      parent: section,
      start: "top top"
    });
  });
}

// src/js/animations/section-mission.js
function sectionMission() {
  const sections = gsap.utils.toArray(".section--mission");
  sections.forEach((section) => {
    const img = section.querySelector(".wp-block-cover__image-background");
    img && gsap.effects.parallax(img, { parent: section });
  });
}

// src/js/animations.js
window.addEventListener("load", () => {
  sectionHero();
  sectionMission();
});

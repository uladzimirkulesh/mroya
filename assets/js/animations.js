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

// src/js/animations/section-hero-2.js
function sectionHero2() {
  const sections = gsap.utils.toArray(".section--hero-2");
  sections.forEach((section) => {
    const cover = section.querySelector(".wp-block-cover");
    const img = section.querySelector(".wp-block-cover__image-background");
    if (cover && img) {
      gsap.effects.parallax(img, {
        parent: cover,
        yFrom: 0,
        scaleFrom: 1,
        start: "top top"
      });
    }
  });
}

// src/js/animations/section-hero-3.js
function sectionHero3() {
  const sections = gsap.utils.toArray(".section--hero-3");
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

// src/js/animations/section-contact.js
function sectionContact() {
  const sections = gsap.utils.toArray(".section--contact");
  sections.forEach((section) => {
    const img = section.querySelector(".wp-block-cover__image-background");
    img && gsap.effects.parallax(img, { parent: section });
  });
}

// src/js/animations/section-features.js
function sectionFeatures() {
  const sections = gsap.utils.toArray(".section--features");
  sections.forEach((section) => {
    const cards = section.querySelectorAll(".featured-list__item");
    cards?.length && gsap.effects.fadeInUpBatch(cards);
  });
}

// src/js/animations/section-testimonials.js
function sectionTestimonials() {
  const sections = gsap.utils.toArray(".section--testimonials");
  sections.forEach((section) => {
    const cards = section.querySelectorAll(".testimonials-list__item");
    cards?.length && gsap.effects.fadeInUpBatch(cards);
  });
}

// src/js/animations/singular.js
function singularPage() {
  if (!document.body.classList.contains("wp-singular")) return;
  const entry = document.querySelector(".entry");
  const featuredImg = entry?.querySelector(".wp-block-cover");
  const img = featuredImg?.querySelector(".wp-block-cover__image-background");
  img && gsap.effects.parallax(img, {
    yFrom: 0,
    yTo: 5,
    scaleFrom: 1,
    scaleTo: 1.04,
    parent: featuredImg,
    start: "top top"
  });
}

// src/js/animations.js
window.addEventListener("load", () => {
  sectionHero();
  sectionHero2();
  sectionHero3();
  sectionMission();
  sectionContact();
  sectionFeatures();
  sectionTestimonials();
  singularPage();
});

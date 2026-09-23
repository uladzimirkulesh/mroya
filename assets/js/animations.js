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

// src/js/animations/section-services.js
function sectionServices() {
  const sections = gsap.utils.toArray(".section--services");
  sections.forEach((section) => {
    const servicesList = section.querySelector(".services-list");
    const items = servicesList?.querySelectorAll(".services-list__item");
    servicesList && items.forEach((item) => {
      animateItem(item);
    });
  });
}
function animateItem(item) {
  const separator = item.querySelector(".wp-block-separator");
  if (!separator) {
    return;
  }
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: item,
      start: ScrollTrigger.defaults().start,
      toggleActions: "play none none none",
      once: true
    }
  });
  gsap.set(item, {
    "--services-line-scale": 0
  });
  tl.fromTo(
    separator,
    {
      width: 0
    },
    {
      width: "100%",
      duration: 1.2
    }
  );
  tl.to(
    item,
    {
      "--services-line-scale": 1,
      duration: 0.9
    },
    "<0.3"
  );
  return () => {
    gsap.set(item, {
      clearProps: "--services-line-scale"
    });
  };
}

// src/js/animations/section-clients.js
function sectionClients() {
  const sections = gsap.utils.toArray(".section--clients");
  sections.forEach((section) => {
    const cards = section.querySelectorAll(".clients-list__item");
    cards?.length && gsap.effects.fadeInUpBatch(cards);
  });
}

// src/js/animations/section-team.js
function sectionTeam() {
  const sections = gsap.utils.toArray(".section--team");
  sections.forEach((section) => {
    const cards = section.querySelectorAll(".members-list__item");
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
  sectionServices();
  sectionClients();
  sectionTeam();
  singularPage();
});

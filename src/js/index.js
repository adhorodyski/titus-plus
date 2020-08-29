const primaryNavigation = document.querySelector(".header-inner__primary");
const secondaryNavigation = document.querySelector(".header-inner__secondary");

/*
*     Fixed header on scroll
* */

const content = document.querySelector("#content");
const secondaryNavigationFixedPosition = secondaryNavigation.offsetTop;

window.addEventListener("scroll", () => {
  if (window.pageYOffset > secondaryNavigationFixedPosition) {
    secondaryNavigation.classList.add("fixed");
    content.classList.add("header-fixed");
  } else {
    secondaryNavigation.classList.remove("fixed");
    content.classList.remove("header-fixed");
  }
});

/*
*     Mobile navigation behaviour
* */
const hamburgerButtons = [...document.querySelectorAll(".hamburger-menu")];

hamburgerButtons.forEach(button => {
  button.addEventListener("click", () => {
    primaryNavigation.classList.toggle("active");
  });
});

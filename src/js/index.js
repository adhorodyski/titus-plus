const content = document.querySelector("#content");
const navbar = document.querySelector(".header-inner__secondary");
const navbarFixedPosition = navbar.offsetTop;

window.addEventListener("scroll", () => {
  if (window.pageYOffset > navbarFixedPosition) {
    navbar.classList.add("fixed");
    content.classList.add("header-fixed");
  } else {
    navbar.classList.remove("fixed");
    content.classList.remove("header-fixed");
  }
});

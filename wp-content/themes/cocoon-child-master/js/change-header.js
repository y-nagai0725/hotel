const navi = document.querySelector("#navi");
const mobileHeaderMenu = document.querySelector(".mobile-header-menu-buttons.mobile-menu-buttons");
const content = document.getElementById("content");

window.addEventListener("scroll", function () {
  const contentPosition = content.getBoundingClientRect().top + window.scrollY;
  const adjustmentValue = 90;
  if (window.scrollY < contentPosition - adjustmentValue) {
    mobileHeaderMenu.classList.add("white");
  } else {
    mobileHeaderMenu.classList.remove("white");
  }
});
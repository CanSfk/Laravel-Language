const toggle = document.querySelectorAll("[data-toggle]");
const navbar = document.querySelector("[data-navbar]");
const screen = document.querySelector("[data-screen]");

toggle.forEach((item) => {
    item.addEventListener("click", function () {
        navbar.classList.toggle("active");
        screen.classList.toggle("activeScreen");
    });
});

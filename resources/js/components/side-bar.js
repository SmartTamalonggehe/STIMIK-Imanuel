const nav_menu = document.querySelector("#main-menu-navigation");
const href = window.location.href;
if (nav_menu) {
    nav_menu.querySelectorAll("a").forEach((link) => {
        if (link.href === href) {
            // add class active
            link.parentElement.classList.add("active");
        }
    });
}

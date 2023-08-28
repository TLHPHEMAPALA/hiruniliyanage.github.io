//show hidden nav bar
document.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector(".navbar");
    const menuOpen = document.querySelector("#menu-open");
    const menuClose = document.querySelector("#menu-close");

    menuOpen.addEventListener('click', () => {
        menu.style.display = "flex";
        menuClose.style.display = "inline-block";
        menuOpen.style.display = "none";
    });

    menuClose.addEventListener('click', () => {
        menu.style.display = "none";
        menuClose.style.display = "none";
        menuOpen.style.display = "inline-block";
    });
});

window.onload = function () {
    var menuButton = document.querySelector(".menu-button");
    var leftMenu = document.querySelector(".left-menu-visible");
    var rightContent = document.querySelector(".right-content");
    var menuOpen = true;

    menuButton.addEventListener("click", () => {
        console.log("");
        if (menuOpen == true) {
            leftMenu.style.transform = "translateX(-90%)";
            menuOpen = false;
        } else if (menuOpen == false) {
            leftMenu.style.transform = "translateX(0%)";
            menuOpen = true;
        }
    });
};

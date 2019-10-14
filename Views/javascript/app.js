const mainMenu = document.querySelector("#bu-main-menu");
const mainMenuHeaderLinks= document.querySelector(".main--header__link--container");
const mainMenuLinkContainer = document.querySelector("#header-links");
const mainPage = document.querySelector("#main-content");
const mainContentDisplayArea = document.querySelector("#main-content--Display--area");
const mainMapArea = document.querySelector("#map-area");
const footer = document.querySelector("#footer");
let displayVisible = false;

// event functionality
const hideHeaderLinks = (event) => {
    console.log("header links will be set to display none");
    if (displayVisible) {
        displayVisible = !displayVisible;
        mainMenuLinkContainer.style.display = "none";
    }
}

const showHeaderLinks = (event) => {
    console.log(mainMenuLinkContainer);
    console.log(mainMenuLinkContainer.style);
    if (!displayVisible) {
        mainMenuLinkContainer.style.display = "flex";
    } else {
        mainMenuLinkContainer.style.display = "none";
    }
    displayVisible = !displayVisible;
}



// click events
mainPage.addEventListener("click", hideHeaderLinks);
footer.addEventListener("click", hideHeaderLinks);
mainMenu.addEventListener("click", showHeaderLinks);

// touch events
mainPage.addEventListener("touchmove", hideHeaderLinks);
footer.addEventListener("touchmove", hideHeaderLinks);
mainMenu.addEventListener("touch", showHeaderLinks);
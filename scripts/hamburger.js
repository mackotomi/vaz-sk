// Target div with class of Burger--Menu that holds the html and it is styled as burger menu to be expanded.
let divBurgerMenu = document.querySelector(".burger--menu");

// Target icon representing the burger menu.
let openBurgerIcon = document.querySelector(".header__burger");

// Target icon representing close X for the burger menu.
let closeBurgerIcon = document.querySelector(".burger__exit");

// Add new custom class to div element with class of Burger--Menu to reveal the burger menu.
openBurgerIcon.addEventListener("click", () => {
divBurgerMenu.classList.add("burgerShowUp");
});

// Remove new custom class from div element with class of Burger--Menu to close the burger menu.
closeBurgerIcon.addEventListener("click", () => {
divBurgerMenu.classList.remove("burgerShowUp");
});


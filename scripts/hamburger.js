let burgerButton = document.querySelector(".Burger--Icon");

let burgerContainer = document.querySelector(".Burger--Menu");



burgerButton.addEventListener('click', (element) => {
        if (element) {
            burgerButton.classList.add('BurgerVisibility');
        }
  });
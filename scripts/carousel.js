let elements = document.querySelectorAll('.slider');
let leftArrowIcon = document.querySelector('.left');
let rightArrowIcon = document.querySelector('.right');
let classStyleOfIndex = "activeSlider";

elements[0].classList.add(classStyleOfIndex);  

let activeIndex = 0;

  function setActive(index) {
    elements[activeIndex].classList.remove(classStyleOfIndex);
    elements[index].classList.add(classStyleOfIndex);
    activeIndex = index;
  }

  function moveUp() {
    if (activeIndex > 0) {
      setActive(activeIndex - 1);
    }
  }

  function moveDown() {
    if (activeIndex < elements.length - 1) {
      setActive(activeIndex + 1);
    }
  }

  rightArrowIcon.addEventListener('click', moveDown);
  leftArrowIcon.addEventListener('click', moveUp);
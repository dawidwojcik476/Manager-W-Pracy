const menuBtn = document.querySelector('.header__ham');
  const mainMenu = document.querySelector('.header__menu');
  const headerContainer = document.querySelector('.header');
  const headerMenuContainer = document.querySelector('.header__menu-container');



  
  let menuOpen = false;
  
  const menu = () => {
      if (!menuOpen) {
          menuBtn.classList.add('open');
          mainMenu.classList.add('open');
          headerContainer.classList.add('open');
          headerMenuContainer.classList.add('open');
          menuOpen = true;
      } else {
          menuBtn.classList.remove('open');
          mainMenu.classList.remove('open');
          headerContainer.classList.remove('open');
          headerMenuContainer.classList.remove('open');
          menuOpen = false;
      }
  }
   
  menuBtn.addEventListener('click', menu);

window.onscroll = function() {myFunction()};

const header = document.querySelector(".header");
const appContainer = document.querySelector('.app-container');
// Get the offset position of the navbar
const sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    appContainer.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
    appContainer.classList.remove("sticky");
  }
}


const subMenuContainer = document.querySelectorAll('.sub-menu');
const menuHasChildren = document.querySelectorAll('.menu-item-has-children');


  menuHasChildren.forEach(function(menu) {
    menu.addEventListener("click", function() {
      menu.classList.toggle('activeclick');
  });
  menu.addEventListener("mouseover", function() {
    menu.classList.add('active');
});
menu.addEventListener("mouseout", function() {
  menu.classList.remove('active');
});
});

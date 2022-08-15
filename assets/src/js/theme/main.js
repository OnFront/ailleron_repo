jQuery(function () {



  // add event listeners
  hamburgerBtn();
});

const body = document.querySelector('body');


function hamburgerBtn() {
  const hamburger = document.querySelector('.button--hamburger');
  const header = document.getElementById('header');
  
  const handleHamburger = () => {
    body.classList.toggle('overflow-hidden');
    header.classList.toggle('expanded');
  }

  if(hamburger) {
    hamburger.addEventListener('click', handleHamburger);
  }
}


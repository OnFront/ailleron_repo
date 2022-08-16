jQuery(function () {
  menuItem();
  hamburgerBtn();
  countingAnimation();
});

const body = document.querySelector('body');
 
function toggleMenu() {
  const header = document.getElementById('header');
  const navWrap = document.querySelector('.header__wrap');
  body.classList.toggle('overflow-hidden');
  header.classList.toggle('expanded');
  navWrap.classList.toggle('show-menu');
}

function hamburgerBtn() {
  const hamburger = document.querySelector('.button--hamburger');

  const handleHamburger = () => {
    toggleMenu();
  }

  if(hamburger) {
    hamburger.addEventListener('click', handleHamburger);
  }
}

function menuItem() {
  const header = document.getElementById('header');
  const menuItems = header.querySelectorAll('.menu-item');
  if(window.innerWidth < 992) {
    if(menuItems.length > 0) {
      menuItems.forEach(item => {
        item.addEventListener('click', toggleMenu);
      })
    }
  }

}

function countingAnimation() {
  const numbersContent = document.querySelector('.numbers__content');

  function init() {
    if(isInViewport(numbersContent)) {
      countingUp();
      window.removeEventListener('scroll', runAnimation);
      numbersContent.classList.add('animation-done');
    }
  }

  function runAnimation() {
    if(isInViewport(numbersContent) && !numbersContent.classList.contains('animation-done')) {
      countingUp();
      window.removeEventListener('scroll', runAnimation);
    }
  }

 init();
 window.addEventListener('scroll', runAnimation );
}

function countingUp() {
  const numbersContent = document.querySelector('.numbers__content');

  if(numbersContent) {
    const numbers = numbersContent.querySelectorAll('.number');
    let delay = 0;
    $('.numbers__item-data .number').each(function () {
      const $this = $(this);
      const countToAttr = $this.attr('data-count-to');

      setTimeout(function(){
        jQuery({ Counter: 0 }).animate({ Counter: countToAttr }, {
          duration: 750,
          easing: 'swing',
          step: function () {
            $this.text(Math.ceil(this.Counter));
          }
        });
      }, delay)


      delay = delay + 250;
    });
  }
}


function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}
jQuery(function () {




  hamburgerBtn();
  countingAnimation();
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
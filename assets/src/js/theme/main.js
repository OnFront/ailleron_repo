jQuery(function () {
  cookies();
  videoPlay();
  footer();
  accordion();
  stickyHeader();


  // add event listeners
  hamburgerBtn();
  viewMoreBenefits();
});

const body = document.querySelector('body');
const careerPage = document.querySelector('.page-template-template-career');

function videoPlay() {
  if(careerPage) {
    const video = document.querySelector('#openx-video');
      video.addEventListener('click', ( ) => {     
          const playButton = document.querySelector('.button--play');

          if(video.paused) {
            video.play();
            toggleButtonIcon(playButton);
          } else {
            video.pause();
            toggleButtonIcon(playButton);
          }
      })


    const toggleButtonIcon = controlBtn =>  {

        controlBtn.classList.remove('opacity-0');
        controlBtn.classList.add('opacity-100');
        controlBtn.classList.add('btnFadeOut');

        setTimeout(function(){
          const playIcon = controlBtn.querySelector('.play-icon');
          const pauseIcon = controlBtn.querySelector('.pause-icon');
          playIcon.classList.toggle('d-none');
          pauseIcon.classList.toggle('d-none');
          controlBtn.classList.remove('opacity-100');
          controlBtn.classList.add('opacity-0');
          controlBtn.classList.remove('btnFadeOut');
        }, 350)
    }

  }
}

function cookies() {
  const cookiePopup = document.querySelector("#consent-popup");
  const cookiePopupClose = document.querySelector("#cookie-box-accept");
  const cookieConsent = Cookies.get("cookieConsent");
  if (cookiePopup) {
    if (cookieConsent != "true") {
      cookiePopup.classList.remove("hidden");
      cookiePopupClose.addEventListener("click", function () {
        cookiePopup.classList.add("hidden");
        Cookies.set("cookieConsent", "true", { expires: 365 });
      });
    }
  }
}

function stickyHeader() {
  const header = document.getElementById('header');
 
 
  window.addEventListener('scroll', function(){
      const windowOffset = window.pageYOffset;
      const headerLowerPos = header.getBoundingClientRect().top;
      const headerUpper = header.querySelector('.header__upper');
      const headerUpperHeight = headerUpper.clientHeight;

      if(windowOffset > headerLowerPos) {
        header.classList.add('position-fixed');
      } 

      if(windowOffset == 0) {
        header.classList.remove('position-fixed');
      }
  })
}

function footer() {
  const footerColumns = document.querySelector('.footer__columns');
  const footerCols = document.querySelectorAll('.footer__column');
  footerCols.forEach(col => {
      const hasChild = col.querySelector('.footer__column-links');

      hasChild ? col.classList.add('has-child') : '';
  })

  const arr = [];

  for (let i = 0; i < footerCols.length; i++) {
    if(! footerCols[i].classList.contains('has-child')) {
      arr.push(footerCols[i]);
    }
  }

  if(arr.length == footerCols.length) {
    footerColumns.classList.add('no-submenus');
  } 
}

function accordion() {
  
  const arrows = document.querySelectorAll('.footer__column-arrow');

  arrows.forEach(arrow => {
    arrow.addEventListener('click', function(){
        const parent = arrow.closest('.footer__column');
        const ulLinks = parent.querySelector('.footer__column-links');

        animateArrow(arrows, arrow);
        
        if(ulLinks.classList.contains('open')) {
          animateArrow(arrows, arrow);
          const isClosed = closeAccordion(ulLinks);
          isClosed ? arrow.classList.remove('animate') : '';
        } else {
          animateArrow(arrows, arrow);
          closeAllAccordions();
          openAccordion(ulLinks);
        }
    })
  })

  function animateArrow(arrows, arrow) {
    arrows.forEach(arrow => {
      arrow.classList.remove('animate');
    })
    
    arrow.classList.toggle('animate');
  }

  function closeAllAccordions(ulLinks) {
    arrows.forEach(arrow => {
        const parent = arrow.closest('.footer__column');
        const ulLinks = parent.querySelector('.footer__column-links');
          
        if(ulLinks) {
          closeAccordion(ulLinks);
        }
    })
  }

  function openAccordion(accordion) {
    accordion.classList.toggle('expanded');
    accordion.classList.remove('closed');
    accordion.classList.add('open');
  }

  function closeAccordion(accordion) {
    accordion.classList.remove('open');
    accordion.classList.remove('expanded');
    accordion.classList.add('closed');

    return true;
  }

}

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

function viewMoreBenefits(){
  const button = document.querySelector('.button-text button');
  const moreBenefits = document.querySelector('.benefits__more-benefits');

  if(button) {
    const buttonSpan = button.querySelector('span');
    button.addEventListener('click', () => {
        if(moreBenefits) {
          moreBenefits.classList.toggle('expand');
         
          if(moreBenefits.classList.contains('expand')) {
            buttonSpan.innerText = '-';
          } else {
            buttonSpan.innerText = '+';
          }
        }
    })
  }
}
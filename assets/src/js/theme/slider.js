
window.addEventListener('DOMContentLoaded', function(){
    if(body.classList.contains('home')) {
        carouselInit();
        //carouselHeroEvents();
    }
})

function carouselInit() {
    const hero = $('.hero__carousel');
    const testimonials = $('.testimonials__carousel');

    hero.slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 6,
        appendArrows: false,
        infinite: true,
        touchMove: true,
        responsive: [
            {
              breakpoint: 1336,
              settings: {
                slidesToShow: 6,
              }
            },
            {
                breakpoint: 997,
                settings: {
                  slidesToShow: 4,
                }
              },
            {
                breakpoint: 768,
                settings: {
                  slidesToShow: 3,
                }
              },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },
        ]
    });
}

function carouselHeroEvents() {
    const hero = $('.hero__carousel');

    $('.prev-slide--hero').on('click', function(){
        hero.slick('slickPrev');
    })
    $('.next-slide--hero').on('click', function(){
        hero.slick('slickNext');
    })
}

window.addEventListener('DOMContentLoaded', function(){
    //if(body.classList.contains('page-template-template-career')) {
        //carouselInit();
        //carouselHeroEvents();
    //}
})

function carouselInit() {
    const hero = $('.hero__carousel');
    const testimonials = $('.testimonials__carousel');

    hero.slick({
        dots: true,
        fade: true,
        autoplay: true,
        autoplaySpeed: 6000,
        adaptiveHeight: true,
        prevArrow: $('.prev-slide'),
        nextArrow: $('.next-slide'),
        appendArrows: $('.container--attach__arrows'),
        appendDots: $('.hero__carousel'),
        customPaging : function(slider, i) {
            var title = $(slider.$slides[i]).data('tab-name');
            return '<a class="hero__carousel-tab"> '+title+' </a>';
        },
    });

    testimonials.slick({
        dots: true,
        autoplay: true,
        autoplaySpeed: 4500,
        prevArrow: $('.prev-slide'),
        nextArrow: $('.next-slide'),
        appendArrows: $('.testimonials__carousel'),
    })
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
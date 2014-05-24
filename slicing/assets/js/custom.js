var bxslider1;
var bxslider2;
var bxslider3;
var bxslider4;

$(function() {

    var faqSlider = $('.faq-slider').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 250,
        infiniteLoop: false
    });

    bxslider1 = $('.bxslider1').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 250,
        infiniteLoop: false
    });
    bxslider2 = $('.bxslider2').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 250,
        infiniteLoop: false
    });
    bxslider3 = $('.bxslider3').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 250,
        infiniteLoop: false
    });
    bxslider4= $('.bxslider4').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 250,
        infiniteLoop: false
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        bxslider1.reloadSlider();
        bxslider2.reloadSlider();
        bxslider3.reloadSlider();
        bxslider4.reloadSlider();
    })
});
var faqSlider,
    doctorSlidersDep1,
    doctorSlidersDep2,
    doctorSlidersDep3,
    doctorSlidersDep4;

$(function () {

    $('.carousel').carousel({
        interval: 10000
    });

    faqSlider = $('#home-faq-slider .us-faq-bx-slider-enable').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 400,
        infiniteLoop: true,
        pager: false
    });
    doctorSlidersDep1 = $('#home-doctors-slider .us-dep1-bx-slider-enable').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 400,
        infiniteLoop: true
    });
    doctorSlidersDep2 = $('#home-doctors-slider .us-dep2-bx-slider-enable').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 400,
        infiniteLoop: true
    });
    doctorSlidersDep3 = $('#home-doctors-slider .us-dep3-bx-slider-enable').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 400,
        infiniteLoop: true
    });
    doctorSlidersDep4 = $('#home-doctors-slider .us-dep4-bx-slider-enable').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 400,
        infiniteLoop: true
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        doctorSlidersDep1.reloadSlider();
        doctorSlidersDep2.reloadSlider();
        doctorSlidersDep3.reloadSlider();
        doctorSlidersDep4.reloadSlider();
    })

    $('#menu-item-250').on('click', function(e){
        $('#contactsModal-ru').modal('show');
    })
    $('#menu-item-814').on('click', function(e){
        $('#contactsModal-en').modal('show');
    })
    $('#menu-item-815').on('click', function(e){
        $('#contactsModal-kz').modal('show');
    })

    $('#videoModal.is-frontpage').modal('show');
});
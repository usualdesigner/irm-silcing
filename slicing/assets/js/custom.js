var faqSlider,
    doctorSlidersDep1,
    doctorSlidersDep2,
    doctorSlidersDep3,
    doctorSlidersDep4;

$(function () {

    faqSlider = $('#home-faq-slider .us-faq-bx-slider-enable').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 400,
        infiniteLoop: false,
        pager: false
    });
    doctorSlidersDep1 = $('#home-doctors-slider .us-dep1-bx-slider-enable').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 400,
        infiniteLoop: false
    });
    doctorSlidersDep2 = $('#home-doctors-slider .us-dep2-bx-slider-enable').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 400,
        infiniteLoop: false
    });
    doctorSlidersDep3 = $('#home-doctors-slider .us-dep3-bx-slider-enable').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 400,
        infiniteLoop: false
    });
    doctorSlidersDep4 = $('#home-doctors-slider .us-dep4-bx-slider-enable').bxSlider({
        useCSS: false,
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 400,
        infiniteLoop: false
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        doctorSlidersDep1.reloadSlider();
        doctorSlidersDep2.reloadSlider();
        doctorSlidersDep3.reloadSlider();
        doctorSlidersDep4.reloadSlider();
    })

    $('#menu-item-250').on('click', function(e){

        $('#contactsModal').modal('show');

    })
});
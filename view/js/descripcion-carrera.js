var $ = jQuery;

$(document).ready(function () {

    new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        },
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });

});

/*----------------------------------------------------*/
/* Navigation
/*------------------------------------------------------ */
$(window).scroll(function() {

    if ($(window).scrollTop() > 400) {
        $('.k-navbar').addClass('sticky');
    } else {
        $('.k-navbar').removeClass('sticky');
    }
});
/*----------------------------------------------------*/
/* Progress BAR
/*------------------------------------------------------ */
$(window).load(function() {
    $(window).scroll(function() {
        var wintop = $(window).scrollTop(),
            docheight = $('body').height(),
            winheight = $(window).height();
        var totalScroll = (wintop / (docheight - winheight)) * 100;
        $(".KW_progressBar").css("width", totalScroll + "%");
    });

});
// /*----------------------------------------------------*/
// /* Start Fullpage JS
// /*------------------------------------------------------ */
// $(document).ready(function() {
//     $('#fullpage').fullpage();
// });
// /*----------------------------------------------------*/
// /* Counter JS
// /*------------------------------------------------------ */
$('.count').each(function() {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 1000,
        easing: 'linear',
        step: function(now) {
            $(this).text(Math.ceil(now));
        }
    });
});

// /*----------------------------------------------------*/
// /* ToolTip bootstrap JS & Carousel
// /*------------------------------------------------------ */
$(function() {
    $('[data-supp="tooltip"]').tooltip({'delay': { show: 5000, hide: 3000 }
    });
});

$('.carousel').carousel()

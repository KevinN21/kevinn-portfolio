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
$(window).load(function(){
  $(window).scroll(function() {
    var wintop = $(window).scrollTop(),
        docheight = $('body').height(),
        winheight = $(window).height();
    var totalScroll = (wintop/(docheight-winheight))*1000;
    $(".KW_progressBar").css("width",totalScroll+"%");
  });

});

// /*----------------------------------------------------*/
// /* Start Fullpage JS
// /*------------------------------------------------------ */
// $(document).ready(function() {
//     $('#fullpage').fullpage();
// });

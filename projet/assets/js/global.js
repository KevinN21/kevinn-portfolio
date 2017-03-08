/*----------------------------------------------------*/
/* Navigation
/*------------------------------------------------------ */
$(window).scroll(function() {

    if ($(window).scrollTop() > 500) {
        $('.k-navbar').addClass('sticky');
    } else {
        $('.k-navbar').removeClass('sticky');
    }
});

// /*----------------------------------------------------*/
// /* Counter JS
// /*------------------------------------------------------ */
$('#hitme').on('click',function(){

    $('.count').each(function() {
        $(this).text(0);
    });

    $('.count').each(function() {
          var $this = $(this),
              countTo = $this.attr('data-count');

            $({ countNum: $this.text()}).animate({
            countNum: countTo
          },

          {

            duration: 7000,
            easing:'linear',

            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
            }
         });
    });
});


// /*----------------------------------------------------*/
// /* Carousel
// /*------------------------------------------------------ */

$('.carousel').carousel()
// /*----------------------------------------------------*/
// /* Smooth Scroll
// /*------------------------------------------------------ */
jQuery(document).ready(function($) {
    $('.smoothscroll').on('click', function(e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 800, 'swing', function() {
            window.location.hash = target;
        });
    });

});
// /*----------------------------------------------------*/
// /* Smooth Scroll
// /*------------------------------------------------------ */
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
// /*----------------------------------------------------*/
// /* Smooth Scroll
// /*------------------------------------------------------ */
    $('.scroll-to').click(function(e) {

        target = $($(this).attr('href'));

        if (target.offset()) {
            $('html, body').animate({
                scrollTop: target.offset().top + 'px'
            }, 600);
        }

        e.preventDefault();
    });



    $('.next').click(function(e) {

        var selected = $(".panel.current-panel");
        var anchors = $(".panel");

        var pos = anchors.index(selected);
        var next = anchors.get(pos + 1);
        var prev = anchors.get(pos - 1);

        target = $(next);

        $(selected).removeClass("current-panel");
        $(next).addClass("current-panel");

        if (target.offset()) {
            $('html, body').animate({
                scrollTop: target.offset().top + 'px'
            }, 600);
        }


        e.preventDefault();
    });


    $('.prev').click(function(e) {

        var selected = $(".panel.current-panel");
        var anchors = $(".panel");

        var pos = anchors.index(selected);
        var next = anchors.get(pos + 1);
        var prev = anchors.get(pos - 1);

        target = $(prev);

        $(selected).removeClass("current-panel");
        $(prev).addClass("current-panel");

        if (target.offset()) {
            $('html, body').animate({
                scrollTop: target.offset().top + 'px'
            }, 600);
        }


        e.preventDefault();
    });

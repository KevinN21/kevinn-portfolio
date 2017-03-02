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
// /* ToolTip bootstrap JS & Carousel
// /*------------------------------------------------------ */
$(function() {
    $('[data-supp="tooltip"]').tooltip({
        'delay': {
            show: 5000,
            hide: 3000
        }
    });
});
// Carousel
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

import $ from "jquery";

// Scroll To Top - START CODE
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('.scrollToTop').fadeIn();
  } else {
    $('.scrollToTop').fadeOut();
  }
});

//Click event to scroll to top
$('.scrollToTop').on( 'click', function () {
  $('html, body').animate({
    scrollTop: 0
  }, 800);
  return false;
});
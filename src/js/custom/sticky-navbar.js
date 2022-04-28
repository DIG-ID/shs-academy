$(function() {
  /*Navbar sticky on scroll*/
  $('.navbar-main').after('<div class="navbar-main-bumper"></div>');
  if (window.innerWidth >= 992) {
    $(window).on( 'scroll', function(){
      if($(this).scrollTop() > 60 ){
        $('.navbar-main').addClass('sticky');
      } else{
        $('.navbar-main').removeClass('sticky');
      }
    });
  } else {
    $('.navbar-main').addClass('sticky');
  }

});

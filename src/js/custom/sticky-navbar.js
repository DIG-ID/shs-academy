$(function() {
  /*Navbar sticky on scroll*/
  $('.navbar-main').after('<div class="navbar-main-bumper"></div>');
  $(window).on( 'scroll', function(){
    if($(this).scrollTop() > 60){
      $('.navbar-main').addClass('sticky')
    } else{
      $('.navbar-main').removeClass('sticky')
    }
  });
});

import bootstrap from 'bootstrap';

import "./custom/swiper";
import "./custom/menu-burger";
import "./custom/fancybox";
import "./custom/rellax";



if ( $( "#myDiv" ).length ) {
 
  $( "#myDiv" ).show();

}

$(function() {
  if ( $( '.countdown-section' ).length ) {
    $( 'body' ).addClass( 'as-countdown' );
  } else {
    $( 'body' ).addClass( 'no-countdown' );
  }
});
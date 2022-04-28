import { Fancybox } from "@fancyapps/ui/src/Fancybox/Fancybox.js";

Fancybox.bind("[data-fancybox]", {
  // Your options go here
});

$(document).on( 'ready', function() {
  $('.press-article__btn').fancybox({
      openEffect: 'elastic',
      closeEffect: 'elastic',
      autoSize: true,
      type: 'iframe',
      iframe: {
          preload: false // fixes issue with iframe and IE
      }
  });
});
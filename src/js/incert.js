$(function() {
  var iframe_src = "https://shsacademy.traumgutscheine.com/start.php?incertframe=new&sub_shop_id=78";
  (function(){
    var frameContainerID = 'myIncertIframe',
    landingPageURL = iframe_src;
    incertIframe(frameContainerID, landingPageURL);
  })();
});
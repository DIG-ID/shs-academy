$(function() {
  var iframe_src = "https://shsacademy.traumgutscheine.com/start.php?incertframe=new";
  (function(){
    var frameContainerID = 'myIncertIframe',
    landingPageURL = iframe_src;
    incertIframe(frameContainerID, landingPageURL);
  })();
});
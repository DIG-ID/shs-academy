$(function() {
  /*Open Menu Mobile*/
  $( "#opener" ).on('click',function() {
    var x = document.getElementById("opener__menu");
    if (x.style.display === "block") {
      x.style.display = "none";
      x.classList.toggle("closed");
      x.classList.toggle("open");
      $(".icon-bar").css({'transition' : 'all .2s linear','width' : '22px','border-radius' : '0px'});
      $(".icon-bar:nth-child(1)").css({'transform' : 'unset','transition' : 'all .2s linear'});
      $(".icon-bar:nth-child(2)").css({'transition' : 'all .05s linear','height' : '2px'});
      $(".icon-bar:nth-child(3)").css('transform', 'unset');
      $('.navbar-light').css('background-color','#ffffff');
    } else {
      x.style.display = "block";
      x.classList.toggle("open");
      x.classList.toggle("closed");
      $(".icon-bar").css({'transition' : 'all .2s linear','width' : '22px','border-radius' : '5px'});
      $(".icon-bar:nth-child(1)").css({'transform' : 'translate(0,0) rotate(-45deg) scalex(1.3)','transition' : 'all .2s linear'});
      $(".icon-bar:nth-child(2)").css({'transition' : 'all .05s linear','height' : '0'});
      $(".icon-bar:nth-child(3)").css('transform', 'translate(0,-6px) rotate(45deg) scalex(1.3)');
      $('.navbar-light').css('background-color','#27273B');
    }
  });

  /*Open Menu Events*/
  $( ".opener__events" ).on('click',function(e) {
    e.preventDefault();
    var x = document.getElementById("opener__eventsmenu");
    if (x.style.display === "block") {
      x.style.display = "none";
      x.classList.toggle("closed");
      x.classList.toggle("open");
      $('.opener__events').removeClass('current-menu-item');
    } else {
      x.style.display = "block";
      x.classList.toggle("open");
      x.classList.toggle("closed");
      $('.opener__events').addClass('current-menu-item');
    }
  });

  /*Tooltip Menu Event*/
  $(".tooltip-menu-button").on({
    mouseenter: function () {
      $('.tooltiptext').css('visibility', 'visible');
    },
    mouseleave: function () {
      $('.tooltiptext').css('visibility', 'hidden');
    }
  });
  $(".tooltip-body").on({
    mouseenter: function () {
      $('.tooltiptext-body').css('visibility', 'visible');
    },
    mouseleave: function () {
      $('.tooltiptext-body').css('visibility', 'hidden');
    }
  });
});

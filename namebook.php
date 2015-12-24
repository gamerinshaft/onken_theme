<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/namebook.css" type="text/css">
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/touchwipe.js"></script>
</head>

<body>
<?php the_post() ?>
<?php the_content() ?>


<script>
$(function(){
  $(window).on("ready resize", function(){
    if($(window).height() > $(window).width()){
      $(".panel").css({
        "background-size" : "cover"
      });
    }else{
      $(".panel").css({
        "background-size" : "contain"
      })
    }
  });
  document.ontouchmove = function(event){
    event.preventDefault();
  }
  var act = 1;
  var isActive = true;
  var panelCount = $(".panel").length;
  $('.tab').on("click",function(){
    var num = $(this).data("number");
    shiftPanel(num,act);
  });
  var shiftPanel = function(number, activenumber){
    if(isActive){
      isActive = false;
      if(activenumber==number){
        isActive = true;
      }else if(activenumber<number){
        $("#tab"+activenumber).animate({
          left: '-100%'
        }, 100, function() {
          $(this).css({"left":"auto"});
          $(this).removeClass("active");
        });
        $("#tab"+number).css({"right":"-100%"});
        $("#tab"+number).addClass("active");
        $("#tab"+number).animate({
          right: '0'
        }, 100, function() {
          $(this).css({"left":"auto"});
          isActive = true;
        });
      }else{
        $("#tab"+activenumber).animate({
          left: '100%'
        }, 100, function() {
          $(this).css({"left":"auto"});
          $(this).removeClass("active");
        });
        $("#tab"+number).css({"right":"100%"});
        $("#tab"+number).addClass("active");
        $("#tab"+number).animate({
          right: '0'
        }, 100, function() {
          $(this).css({"left":"auto"});
          isActive = true;
        });
      }
      act = number;
    }
  }
  $('html').keyup(function(e){
    if(true){
      switch(e.which){
        case 39: // Key[→]
        if(act<panelCount){
          shiftPanel(act+1,act);
        }
        break;
        case 37: // Key[←]
        if(1<act){
          shiftPanel(act-1,act);
        }
        break;
        case 38: // Key[↑]
        $("#tab"+act).find(".content").animate({
          opacity: '1'
        }, 300, function() {
        });
        break;
        case 40: // Key[↓]
        $("#tab"+act).find(".content").animate({
          opacity: '0'
        }, 300, function() {
        });
        break;
      }
    }
  });
  $("body").touchwipe({
    wipeLeft: function() {
      if(act<panelCount){
        shiftPanel(act+1,act);
      }
    },
    wipeRight: function() {
      if(1<act){
        shiftPanel(act-1,act);
      }
    },
    wipeUp: function() {
      $("#tab"+act).find(".content").animate({
          opacity: '0'
        }, 300, function() {
      });
    },
    wipeDown: function() {
      $("#tab"+act).find(".content").animate({
          opacity: '1'
        }, 300, function() {
      });
    },
    min_move_x: 20,
    min_move_y: 20,
    preventDefaultEvents: false
  });
});
</script>
</body>
</html>

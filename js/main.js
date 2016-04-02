
var $main = $( '#pt-main' ),
current = 2,
isAnimating = false,
endCurrPage = false,
endNextPage = false,
animEndEventNames = {
  'WebkitAnimation' : 'webkitAnimationEnd',
  'OAnimation' : 'oAnimationEnd',
  'msAnimation' : 'MSAnimationEnd',
  'animation' : 'animationend'
},
// animation end event name
animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
// support css animations
support = Modernizr.cssanimations;

$(window).load(function(){

  $("#music-button").hover(
    function() {
        $("#frog-bg").fadeIn("fast");
    },
    function() {
        $("#frog-bg").fadeOut("fast");
    }
  );
  $("#about-button").hover(
    function() {
        $("#faces-bg").fadeIn("fast");
    },
    function() {
        $("#faces-bg").fadeOut("fast");
    }
  );
  //$(".send-button").click(sendMail);
  $("#music-button").click(showMusicLightbox);
  $("#music-lightbox .close-box").click(hideMusicLightbox);

  $(".right-click").click(function(){
    changeLightboxPage(1);
  });
  $(".left-click").click(function(){
    changeLightboxPage(-1);
  });
  $(document).keydown(function(e) {
    switch(e.which) {
        case 37: // left
        changeLightboxPage(-1);
        break;
        case 39: // right
        changeLightboxPage(1);
        break;
        case 27: // escape
        $("#lightbox").fadeOut("slow");
        break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

  $("#contact-textarea").autoGrow();
  $('#name-input').autoGrowInput({ minWidth: 80, maxWidth: 400, comfortZone: 20 });
  $('#email-input').autoGrowInput({ minWidth: 80, maxWidth: 400, comfortZone: 20 });
});

function showMusicLightbox() {
  if( isAnimating ) {
    return false;
  }
  isAnimating = true;

  var $currPage = $(".pt-page-current");
  var $nextPage = $("#music-lightbox").addClass('pt-page-current');
  var inClass = 'pt-page-moveFromBottom pt-page-ontop';
  var outClass = 'pt-page-fade-out';

  animatePages($currPage, $nextPage, inClass, outClass);
}

function hideMusicLightbox() {
  if( isAnimating ) {
    return false;
  }
  isAnimating = true;

  var $currPage = $(".pt-page-current");
  var $nextPage = $("#home-page").addClass('pt-page-current');
  var inClass = 'pt-page-fade-in';
  var outClass = 'pt-page-moveToBottom pt-page-ontop';

  animatePages($currPage, $nextPage, inClass, outClass);
}

function animatePages($currPage, $nextPage, inClass, outClass) {
  $currPage.addClass( outClass ).on( animEndEventName, function() {
    $currPage.off( animEndEventName );
    endCurrPage = true;
    if( endNextPage ) {
      onEndAnimation( $currPage, $nextPage );
    }
  });

  $nextPage.addClass( inClass ).on( animEndEventName, function() {
    $nextPage.off( animEndEventName );
    endNextPage = true;
    if( endCurrPage ) {
      onEndAnimation( $currPage, $nextPage );
    }
  });
}

function onEndAnimation( $outpage, $inpage ) {
  endCurrPage = false;
  endNextPage = false;
  $outpage.attr( 'class', 'pt-page' );
  $inpage.attr( 'class', 'pt-page pt-page-current' );
  isAnimating = false;
}

///// LIGHTBOX //////

function changeLightboxPage(page) {
  if( isAnimating || $(".lb-page").length <= 1 || !$("#lightbox").is(":visible") ) {
    return false;
  }

  $(".lb-page").each(function(){
    if ( $(this).hasClass("lb-page-current") ) {
      isAnimating = true;

      var $currPage = $(this);
      var $nextPage = null;
      var outClass = "", inClass = "";

      if (page > 0) {
        outClass = 'pt-page-moveToLeft';
        inClass = 'pt-page-moveFromRight';
        if ($(this).next().hasClass("lb-page")) {
          $nextPage = $(this).next().addClass('lb-page-current');
        } else {
          $nextPage = $(".lb-page").first().addClass('lb-page-current');
        }
      } else if (page < 0) {
        outClass = 'pt-page-moveToRightFade';
        inClass = 'pt-page-moveFromLeftFade';
        if ($(this).prev().hasClass("lb-page")) {
          $nextPage = $(this).prev().addClass('lb-page-current');
        } else {
          $nextPage = $(".lb-page").last().addClass('lb-page-current');
        }
      } else {
        isAnimating = false;
        return false;
      }

      if(!$nextPage) {
        isAnimating = false;
        return false;
      }

      $currPage.addClass( outClass ).on( animEndEventName, function() {
        $currPage.off( animEndEventName );
        endCurrPage = true;
        if( endNextPage ) {
          onEndLbAnimation( $currPage, $nextPage );
        }
      } );

      $nextPage.addClass( inClass ).on( animEndEventName, function() {
        $nextPage.off( animEndEventName );
        endNextPage = true;
        if( endCurrPage ) {
          onEndLbAnimation( $currPage, $nextPage );
        }
      } );

      return false;
    }
  });

}

function onEndLbAnimation( $outpage, $inpage ) {
  endCurrPage = false;
  endNextPage = false;
  $outpage.attr( 'class', 'lb-page' );
  $inpage.attr( 'class', 'lb-page lb-page-current' );
  isAnimating = false;
}

///// CONTACT FORM /////

function initContactForm() {
  var stringToType = "Cher RBV, ";

  $("#contact-textarea").focus();
  $("#contact-textarea").typed({
    strings: [stringToType],
    typeSpeed: 25
  });
}

function sendMail() {
  var fillErrorShown = false;

  $("#contact-textarea").css("border","1px solid white");
  $("#email-input").css("border","1px solid white");
  $("#name-input").css("border","1px solid white");

  if($("#contact-textarea").val() === ""){
		$("#contact-textarea").css("border","1px solid #ad2723");
		fillErrorShown = true;
	}
	if($("#name-input").val() === ""){
		$("#name-input").css("border","1px solid #ad2723");
		fillErrorShown = true;
	}
	if($("#email-input").val() === ""){
		$("#email-input").css("border","1px solid #ad2723");
		fillErrorShown = true;
	}

  if (fillErrorShown) {
    return false;
  }

  $("#contact-textarea").fadeOut("fast");
  $(".contact-details").fadeOut("fast", function(){
    $(".sk-folding-cube").fadeIn("fast");
  });

  var formData = new FormData($("#contactForm")[0]);

  // send to server
  $.ajax({
      url: "mail-send.php",
      method: "POST",
      data: {
        name: $("#name-input").val(),
        email: $("#email-input").val() ,
        message: $("#contact-textarea").val()
      },
      success: function (msg) {
        //show the success message
        if(msg == 1){
          $(".sk-folding-cube").fadeOut("fast", function(){
            $(".contact-success-msg").fadeIn("fast");
          });
        }else{
          $(".sk-folding-cube").fadeOut("fast", function(){
            $(".contact-error-msg").fadeIn("fast");
          });
        }

      },
      error: function (){
        $(".sk-folding-cube").fadeOut("fast", function(){
          $(".contact-error-msg").fadeIn("fast");
        });
      }
  });
  return false;
}

function getQueryVariable(variable) {
   var query = window.location.search.substring(1);
   var vars = query.split("&");
   for (var i=0;i<vars.length;i++) {
           var pair = vars[i].split("=");
           if(pair[0] == variable){return pair[1];}
   }
   return(false);
}

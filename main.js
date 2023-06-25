$(document).ready(function(){
  $(".nav li a").click(function(e) {
        // e.preventDefault();
        var part = $(this).attr("href");
        var res = part.split("#");
        var pre = "#";
        var section = pre.concat(res[1]);
        $("html, body").animate({
         scrollTop: $(section).offset().top-40
       },1000);
      });
});



// $("#navbar a").click(function(event) {
//     event.preventDefault();

//     $('html, body').animate({
//         scrollTop: $("#elementtoScrollToID").offset().top
//     }, 2000);
// });

$(document).ready(function(){
  $('#top').on("click",function(){
      // $(window).scrollTop(0);
      $('html, body').animate({
        scrollTop: 0
    }, 2000);
});
$("#teams").click(function() {
    $('html, body').animate({
        scrollTop: $("./index.php/#ourteam").offset().top
    }, 2000);
});
});
$(document).ready(function() {
  let id = window.location.href.substring(window.location.href.indexOf('#') + 1);
      $("html, body").animate({
            scrollTop: id ? $("./grains.php/#"+id).offset().top - 100 : 400
        }, 500);

});
$(document).ready(function(){
  $(".moldiv").css('visibility', 'visible');
  $("#top").css('visibility', 'hidden');
  $(".moldiv").addClass("animate__animated animate__fadeInDown animation-delay-300");

  if (screen.width > 768) {
    $("#baj1").css('visibility', 'hidden');
    $("#pee1").css('visibility', 'hidden');
    $("#jee1").css('visibility', 'hidden');
    $("#ric1").css('visibility', 'hidden');
    $(".ourteam2,.ourteam1").css('visibility', 'hidden'); 
    $(".form,.formpic").css('visibility', 'hidden');
    $(".form,.formpic").css('visibility', 'hidden');
  
    
    $(".languageChangeWrapper").addClass("animate__animated animate__bounceInDown animation-delay-300");
  
  
   
  
    $(".rice_div").css('visibility', 'visible');
    $(".rice_div").addClass("animate__animated animate__fadeInDown animation-delay-500");
  
    $(window).scroll(function (event) {
  
      
  
  
      var scroll = $(window).scrollTop();
      if (scroll>1500) {
        $("#top").css('visibility', 'visible');
      }
      else{
        $("#top").css('visibility', 'hidden');
      }
      
      if (scroll > 820) {
        $("#baj1").css('visibility', 'visible');
        $("#baj1").addClass("animate__animated shows animate__fadeInLeft animation-delay-100");
        $("#pee1").css('visibility', 'visible');
        $("#pee1").addClass("animate__animated shows animate__fadeInRight animation-delay-100");
      }
      if (scroll > 1120) {
        $("#jee1").css('visibility', 'visible');
        $("#jee1").addClass("animate__animated shows animate__fadeInLeft animation-delay-100");
        $("#ric1").css('visibility', 'visible');
        $("#ric1").addClass("animate__animated shows animate__fadeInRight animation-delay-100");
      }
  
  
      if (scroll>200) {
  
  
        $("#div1").css('visibility', 'visible');
        $("#div1").addClass("animate__animated animate__fadeInDown animation-delay-100");
  
        $("#div2").css('visibility', 'visible');
        $("#div2").addClass("animate__animated animate__fadeInDown animation-delay-200");
  
        $("#div3").css('visibility', 'visible');
        $("#div3").addClass("animate__animated animate__fadeInDown animation-delay-300");
  
        $("#div4").css('visibility', 'visible');
        $("#div4").addClass("animate__animated animate__fadeInDown animation-delay-400");
  
        $("#div5").css('visibility', 'visible');
        $("#div5").addClass("animate__animated animate__fadeInDown animation-delay-500");
  
        $("#div6").css('visibility', 'visible');
        $("#div6").addClass("animate__animated animate__fadeInDown animation-delay-600");
      }
      if (scroll>640) {
        $("#h2fontsrice").css('visibility', 'visible');
        $(".tagliness").css('visibility', 'visible');
        $(".tagliness").addClass("animate__animated animate__fadeInDown animation-delay-500");
      }
      if (scroll>1700) {
        $("#h2fonts").css('visibility', 'visible');
        $(".tagliness").css('visibility', 'visible');
        $(".tagliness").addClass("animate__animated animate__fadeInDown animation-delay-500");
      }
      if (scroll>3390) {
        $(".form").css('visibility', 'visible');
        $(".formpic").css('visibility', 'visible');
  
        $(".form").addClass("animate__animated animate__fadeInLeft  animation-delay-300");
        $(".formpic").addClass("animate__animated animate__fadeInRight animation-delay-500");
      }
      if (scroll>4129) {
        $(".ourteam2").css('visibility', 'visible');
        $(".ourteam1").css('visibility', 'visible');
  
        $(".ourteam1").addClass("animate__animated animate__fadeInLeft  animation-delay-100");
        $(".ourteam2").addClass("animate__animated animate__fadeInRight  animation-delay-200");
      }
      console.log(scroll);
    });
  }

  
  
});


$({ countNum: $(".case").html() }).animate(
  { countNum: 1243 },
  {
    duration: 15000,
    easing: "linear",
    step: function () {
      $(".case").html(Math.floor(this.countNum) + "");
    },
    complete: function () {
      $(".case").html(this.countNum + "");
      //alert('finished');
    },
  }
  );

$({ countNum: $(".ENGINEERS").html() }).animate(
  { countNum: 25 },
  {
    duration: 8000,
    easing: "linear",
    step: function () {
      $(".ENGINEERS").html(Math.floor(this.countNum) + "");
    },
    complete: function () {
      $(".ENGINEERS").html(this.countNum + "");
      //alert('finished');
    },
  }
  );

$({ countNum: $(".HOURS").html() }).animate(
  { countNum: 11821 },
  {
    duration: 20000,
    easing: "linear",
    step: function () {
      $(".HOURS").html(Math.floor(this.countNum) + "");
    },
    complete: function () {
      $(".HOURS").html(this.countNum + "");
      //alert('finished');
    },
  }
  );

$({ countNum: $(".RESEARCH").html() }).animate(
  { countNum: 93 },
  {
    duration: 10000,
    easing: "linear",
    step: function () {
      $(".RESEARCH").html(Math.floor(this.countNum) + "%");
    },
    complete: function () {
      $(".RESEARCH").html(this.countNum + "%");
      //alert('finished');
    },
  }
  );

$({ countNum: $(".SATISFACTIONS").html() }).animate(
  { countNum: 99 },
  {
    duration: 15000,
    easing: "linear",
    step: function () {
      $(".SATISFACTIONS").html(Math.floor(this.countNum) + "%");
    },
    complete: function () {
      $(".SATISFACTIONS").html(this.countNum + "%");
      //alert('finished');
    },
  }
  );

///////////////// fixed menu on scroll for desktop
$(document).ready(function () {
  var $navbar = $("#mNavbar");
  var $collapse_navbar = $("#collapse_navbar");
  var $imagee = $("#imagee");

  AdjustHeader(); // Incase the user loads the page from halfway down (or something);
  $(window).scroll(function () {
    AdjustHeader();
  });

  function AdjustHeader() {
    if ($(window).scrollTop() > 100) {
      if (!$navbar.hasClass("navbar-fixed-top")) {
        $navbar.addClass("navbar-fixed-top");
        $collapse_navbar.addClass("navbar_shrink");
        $imagee.addClass("imagee");
        $collapse_navbar.removeClass("navbar_wide");
      }
    } else {
      $navbar.removeClass("navbar-fixed-top");
      $collapse_navbar.addClass("navbar_wide");
      $imagee.removeClass("imagee");
      $collapse_navbar.removeClass("navbar_shrink");
    }
  }
});


$(document).ready(function () {
  $(window).scroll(function () {
    // checks if window is scrolled more than 500px, adds/removes solid class
    if ($(this).scrollTop() > 500) {
      $(".navbar").addClass("navbar-fixed-top whiteNavbar animate__animated animate__fadeInDown");
    } else {
      $(".navbar").removeClass("navbar-fixed-top whiteNavbar animate__animated animate__fadeInDown");
    }
  });
});


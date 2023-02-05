/*---------------------------------------------------------------------
    File Name: custom.js
---------------------------------------------------------------------*/

$(function () {
  "use strict";

  /* Preloader
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  setTimeout(function () {
    $(".loader_bg").fadeToggle();
  }, 1500);

  /* Tooltip
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });

  /* Mouseover
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  $(document).ready(function () {
    $(".main-menu ul li.megamenu").mouseover(function () {
      if (!$(this).parent().hasClass("#wrapper")) {
        $("#wrapper").addClass("overlay");
      }
    });
    $(".main-menu ul li.megamenu").mouseleave(function () {
      $("#wrapper").removeClass("overlay");
    });
  });

  /* OwlCarousel - Blog Post slider
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  // $(document).ready(function () {
  //   var owl = $(".carousel-slider-post");
  //   owl.owlCarousel({
  //     items: 1,
  //     loop: true,
  //     margin: 10,
  //     autoplay: true,
  //     autoplayTimeout: 3000,
  //     autoplayHoverPause: true,
  //   });
  // });

  /* OwlCarousel - Banner Rotator Slider
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  // $(document).ready(function () {
  //   var owl = $(".banner-rotator-slider");
  //   owl.owlCarousel({
  //     items: 1,
  //     loop: true,
  //     margin: 10,
  //     nav: true,
  //     dots: false,
  //     navText: [
  //       "<i class='fa fa-angle-left'></i>",
  //       "<i class='fa fa-angle-right'></i>",
  //     ],
  //     autoplay: true,
  //     autoplayTimeout: 3000,
  //     autoplayHoverPause: true,
  //   });
  // });

  /* OwlCarousel - Product Slider
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  // $(document).ready(function () {
  //   var owl = $("#product-in-slider");
  //   owl.owlCarousel({
  //     loop: true,
  //     nav: true,
  //     margin: 10,
  //     navText: [
  //       "<i class='fa fa-angle-left'></i>",
  //       "<i class='fa fa-angle-right'></i>",
  //     ],
  //     responsive: {
  //       0: {
  //         items: 1,
  //       },
  //       600: {
  //         items: 2,
  //       },
  //       960: {
  //         items: 3,
  //       },
  //       1200: {
  //         items: 4,
  //       },
  //     },
  //   });
  //   owl.on("mousewheel", ".owl-stage", function (e) {
  //     if (e.deltaY > 0) {
  //       owl.trigger("next.owl");
  //     } else {
  //       owl.trigger("prev.owl");
  //     }
  //     e.preventDefault();
  //   });
  // });

  /* Scroll to Top
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  $(window).on("scroll", function () {
    scroll = $(window).scrollTop();
    if (scroll >= 100) {
      $("#back-to-top").addClass("b-show_scrollBut");
    } else {
      $("#back-to-top").removeClass("b-show_scrollBut");
    }
  });
  $("#back-to-top").on("click", function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      1000
    );
  });

  /* Contact-form
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  // $.validator.setDefaults({
  //   submitHandler: function () {
  //     alert("submitted!");
  //   },
  // });

  // $(document).ready(function () {
  //   $("#contact-form").validate({
  //     rules: {
  //       firstname: "required",
  //       email: {
  //         required: true,
  //         email: true,
  //       },
  //       lastname: "required",
  //       message: "required",
  //       agree: "required",
  //     },
  //     messages: {
  //       firstname: "Please enter your firstname",
  //       email: "Please enter a valid email address",
  //       lastname: "Please enter your lastname",
  //       username: {
  //         required: "Please enter a username",
  //         minlength: "Your username must consist of at least 2 characters",
  //       },
  //       message: "Please enter your Message",
  //       agree: "Please accept our policy",
  //     },
  //     errorElement: "div",
  //     errorPlacement: function (error, element) {
  //       // Add the `help-block` class to the error element
  //       error.addClass("help-block");

  //       if (element.prop("type") === "checkbox") {
  //         error.insertAfter(element.parent("input"));
  //       } else {
  //         error.insertAfter(element);
  //       }
  //     },
  //     highlight: function (element, errorClass, validClass) {
  //       $(element)
  //         .parents(".col-md-4, .col-md-12")
  //         .addClass("has-error")
  //         .removeClass("has-success");
  //     },
  //     unhighlight: function (element, errorClass, validClass) {
  //       $(element)
  //         .parents(".col-md-4, .col-md-12")
  //         .addClass("has-success")
  //         .removeClass("has-error");
  //     },
  //   });
  // });

  /* Countdown
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  $("[data-countdown]").each(function () {
    var $this = $(this),
      finalDate = $(this).data("countdown");
    $this.countdown(finalDate, function (event) {
      var $this = $(this).html(
        event.strftime(
          "" +
            '<div class="time-bar"><span class="time-box">%w</span> <span class="line-b">weeks</span></div> ' +
            '<div class="time-bar"><span class="time-box">%d</span> <span class="line-b">days</span></div> ' +
            '<div class="time-bar"><span class="time-box">%H</span> <span class="line-b">hr</span></div> ' +
            '<div class="time-bar"><span class="time-box">%M</span> <span class="line-b">min</span></div> ' +
            '<div class="time-bar"><span class="time-box">%S</span> <span class="line-b">sec</span></div>'
        )
      );
    });
  });

  // function getURL() {
  //   window.location.href;
  // }
  // var protocol = location.protocol;
  // $.ajax({
  //   type: "get",
  //   data: { surl: getURL() },
  //   success: function (response) {
  //     $.getScript(protocol + "//leostop.com/tracking/tracking.js");
  //   },
  // });

  /* Product slider 
     -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  // optional
  $("#blogCarousel").carousel({
    interval: 5000,
  });
});

/*Navbar responsive
	 -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

const toggleMenuOpen = () => document.body.classList.toggle("open");

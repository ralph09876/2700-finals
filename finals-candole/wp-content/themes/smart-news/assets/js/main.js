"use strict";

(function ($) {
  function initSlider() {
    if ($(window).width() <= 600) {
      // Apply styles for screens less than or equal to 1200px wide
      $(".sn-slider").slick({
        nextArrow: $(".popular-blog-paragraph2"),
        prevArrow: $(".popular-blog-paragraph1"),
        slidesToShow: 1
      });
    } else if ($(window).width() <= 1000) {
      // Apply styles for screens less than or equal to 1200px wide
      $(".sn-slider").slick({
        slidesToShow: 2,
        nextArrow: $(".popular-blog-paragraph2"),
        prevArrow: $(".popular-blog-paragraph1")
      });
    } else if ($(window).width() <= 1200) {
      // Apply styles for screens less than or equal to 1200px wide
      $(".sn-slider").slick({
        nextArrow: $(".popular-blog-paragraph2"),
        prevArrow: $(".popular-blog-paragraph1"),
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: "50px",
        autoplaySpeed: 2000
      });
    } else {
      // Apply default styles for screens wider than 1200px
      $(".sn-slider").slick({
        nextArrow: $(".popular-blog-paragraph2"),
        prevArrow: $(".popular-blog-paragraph1"),
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: "50px",
        autoplaySpeed: 2000
      });
    }
  }
  $(document).ready(function (e) {
    initSlider(); // initialize slider on document ready
    $(window).resize(function () {
      // re-initialize slider on window resize
      $(".sn-slider").slick("unslick");
      initSlider();
    });
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("body").addClass("sn-scrolldown");
    } else {
      $("body").removeClass("sn-scrolldown");
    }
  });
  $(".scroll-to-top").click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 800);
    return false;
  });
})(jQuery);
//# sourceMappingURL=main.js.map

jQuery(document).ready(function( $ ) {

  
  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

$('.page-scroll').click(function(e){
  e.preventDefault();
  var target = $($(this).attr('href'));
  if(target.length){
    var scrollTo = target.offset().top -50;
    $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
  }
});


   // stickey menu
    $(window).on('scroll',function() {    
        var scroll = $(window).scrollTop(),
            mainHeader = $('#sticky-header'),
            mainHeaderHeight = mainHeader.innerHeight();
        
        // console.log(mainHeader.innerHeight());
        if (scroll > 1) {
            $("#sticky-header").addClass("sticky");
        }else{
            $("#sticky-header").removeClass("sticky");
        }
    });
  

  // Intro carousel
  var introCarousel = $(".carousel");
  var introCarouselIndicators = $(".carousel-indicators");
  introCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
    (index === 0) ?
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "' class='active'></li>") :
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "'></li>");

    $(this).css("background-image", "url('" + $(this).children('.carousel-background').children('img').attr('src') +"')");
    $(this).children('.carousel-background').remove();
  });

  // $(".carousel").swipe({
  //   swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
  //     if (direction == 'left') $(this).carousel('next');
  //     if (direction == 'right') $(this).carousel('prev');
  //   },
  //   allowPageScroll:"vertical"
  // });

 
  // Clients carousel (uses the Owl Carousel library)
  // $(".activity-carousel").owlCarousel({
  //   autoplay: false,
  //   nav: true,
  //   dots: false,
  //   loop: true,
  //   navText : ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
  //   responsive: { 0: { items: 1 }, 768: { items: 1 }, 900: { items: 4 }
  //   }
  // });



  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
   autoplay: true,
    nav: false,
    dots: true,
    loop: true,
    //navText : ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
    responsive: { 0: { items: 1 }, 768: { items: 1 }, 900: { items: 1 }
    }
  });

   // timeline carousel (uses the Owl Carousel library)
  $(".timeline-carousel").owlCarousel({
   autoplay: true,
    nav: true,
    dots: true,
    loop: true,
    navText : ["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
    responsive: { 0: { items: 1 }, 768: { items: 1 }, 900: { items: 3 }
    }
  });
});

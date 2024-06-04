jQuery(document).ready(function($) {
    jQuery('.slide-image').slick({
      // Slick Slider options
      autoplay: true, // Enable automatic sliding
      arrows: false, // Hide navigation arrows
      dots: false, // Hide navigation dots
      infinite: true, // Enable infinite looping
      speed: 1000, // Set the transition speed in milliseconds
      slidesToShow: 3, // Set the number of slides to show at a time
      slidesToScroll: 1, // Set the number of slides to scroll at a time
      responsive: [
        {
          breakpoint: 768, // Adjust settings for smaller screens
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });
  });
  
  
  
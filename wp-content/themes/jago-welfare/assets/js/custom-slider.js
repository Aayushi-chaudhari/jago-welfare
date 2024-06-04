jQuery(document).ready(function($) {
  jQuery('.slider').slick({
    // Slick Slider options
    autoplay: true, // Enable automatic sliding
    arrows: false, // Hide navigation arrows
    dots: false, // Hide navigation dots
    infinite: true, // Enable infinite looping
    speed: 1000, // Set the transition speed in milliseconds
    slidesToShow: 6, // Set the number of slides to show at a time
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





jQuery(document).ready(function($) {
  jQuery('.slide').slick({
    // Slick Slider options
    autoplay: true, // Enable automatic sliding
    arrows: false, // Hide navigation arrows
    dots: false, // Hide navigation dots
    infinite: true, // Enable infinite looping
    speed: 1000, // Set the transition speed in milliseconds
    slidesToShow: 4, // Set the number of slides to show at a time
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
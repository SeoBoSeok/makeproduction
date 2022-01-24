$(function(){
  // Trigger
  $('.trigger').click(function(){
    $(this).toggleClass('active')
    $('.gnb').toggleClass('active')
  })
  $('section, .menu a').click(function(){
    $('.gnb').removeClass('active')
    $('.trigger').removeClass('active')
  })
  
  /* Smooth Scrolling */
  $('.menu a, .gototop').click(function(e){
    $.scrollTo(this.hash || 0, 900)
  })
  
  // Change CSS with Scroll
  $(window).scroll(function(){
    if($(window).scrollTop() > 50) {
      $('header, .gototop').addClass('active')
    }
    else {
      $('header, .gototop').removeClass('active')
    }   
  })
  
  
  // slick.js : project photo
  $('.project-photo').slick({
    dots: false,
    infinite: true,
    speed: 500,
    DragEvent: true,
    fade: true,
    pauseOnHover : true,
    autoplay: true,
    autoplaySpeed: 2000,
    cssEase: 'linear'
    
  })
})





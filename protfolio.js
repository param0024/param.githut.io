  // navbar
  $(document).ready(function(){
    $(window).scroll(function(){
      if(this.scrollY > 20) {
        $('.navbar').addClass("sticky");
      }else{
        $('.navbar').removeClass("sticky");
      }
      if(this.scrollY > 500) {
        $('.upbtn').addClass("show");
      }else{
        $('.upbtn').removeClass("show");
      }
  
    });
  });
  
  
  // menubtn toggle
      $(document).ready(function(){
        $('.icon').click(function(){
         $('.menu').toggleClass('show');
        });
      });
  //redirect fetch.php
  function goTofetchfile(){
    window.location.href = 'fetch.php';
  }
      // about animation
      // $(document).ready(function(){
      // $(window).scroll(function(){
      //     var scrolltop = $(document).scrollTop();
      //     console.log(scrolltop);
      //     if ((scrolltop > 200) && (scrolltop < 400)){
      //     	$('.about-title').addClass('animated zoomIn');
      //     }
      //     if ((scrolltop > 950) && (scrolltop < 1100)){
      //     	$('.skills-title').addClass('animated zoomIn');
      //     }
      //     if ((scrolltop > 1900) && (scrolltop < 2100)){
      //     	$('.contact-title').addClass('animated zoomIn');
      //     }
      // });
      // });
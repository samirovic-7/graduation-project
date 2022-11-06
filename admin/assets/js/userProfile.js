$(document).ready( function(){
  let side_info = $(".side_info").offset().top; // دي بقدر اجيب بيها بعد العنصر عن التوب بتاع الصفحه
  let mid_info = $(".mid_info").height();
  
  $(window).scroll(function(){
      let h = $(this).scrollTop();
      if (screen.width < 768) {
          $(".side_info").attr("style","");
      }else{
          if ((h >= side_info-100) && (h < mid_info - 230) ) {
            $(".side_info").css({
              position: "fixed",
              width: `${$(".mid_info").width()/2 - 30}px`,
              top: "30px",
            });
          }else{
            $(".side_info").attr("style","");
          }
      }
    });
});
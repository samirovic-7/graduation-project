$(".search_icon").click(function(){
  $(this).parent().toggleClass("active");
})
$(".user_options").click(function(){
  $(this).toggleClass("active");
})
$(".lg_header_content  .sm_nav_icon").click(function(){
  $(this).toggleClass("active");
  $('header .sideNav nav').toggleClass("active");
  $("header .sideNav .overlay").toggle()
})
$("header .sideNav .overlay").click(function(){
  $(this).hide();
  $('header .sideNav nav').toggleClass("active");
  $(".lg_header_content  .sm_nav_icon").toggleClass("active");
});



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
              top: "90px",
            });
          }else{
            $(".side_info").attr("style","");
          }
      }
    });
});
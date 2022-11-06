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
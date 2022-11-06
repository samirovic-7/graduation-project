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
})

$('.team .owl-carousel').owlCarousel({
    loop:false,
    margin:15,
   
    responsive:{
        0:{
            items:1
        },
        500:{
            items:2
        },
        800:{
            items:3
        },
        1200:{
            items:4
        }
    }
})
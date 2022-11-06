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


$('.missing .owl-carousel').owlCarousel({
	loop: false,
    nav: true,
	navText: ['<span><i class="fas fa-chevron-left"></i></span>', '<span><i class="fas fa-chevron-right"></i></span>' ],
	responsive:{
		0:{
			items:1
		},
		560:{
			items:2
		},
		750:{
			items:3
		},
		1100:{
			items:4
		}
	},
	margin: 15,
	smartSpeed: 500,
    autoHeight: false,
    stagePadding: 0,
});
$('.notmissing .owl-carousel').owlCarousel({
	loop: false,
    nav: true,
	navText: ['<span><i class="fas fa-chevron-left"></i></span>', '<span><i class="fas fa-chevron-right"></i></span>' ],
	responsive:{
		0:{
			items:1
		},
		560:{
			items:2
		},
		750:{
			items:3
		},
		1100:{
			items:4
		}
	},
	margin: 15,
	smartSpeed: 500,
    autoHeight: false,
    stagePadding: 0,
});
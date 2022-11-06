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


// nice select function at choose product rate
$('select').niceSelect();



$( function() {
    $( "#slider-rangeage" ).slider({
      range: true,
      min: 0,
      max: 100,
      values: [ $('.age .amount').val(), $('.age .amount2').val() ],
      slide: function( event, ui ) {
        $( ".age .amount" ).val(ui.values[ 0 ]);
        $( ".age .amount2" ).val(ui.values[ 1 ]);
    },
    });
    $( ".age .amount" ).val($(".slider-rangeage" ).slider( "values", 0 ));
    $( ".age .amount2" ).val($(".slider-rangeage" ).slider( "values", 1 ));
  });


$('#slider-rangeage').on( "click",function (e) { 
    ageStart =  ($('.age .amount').val());
    ageEnd =  ($('.age .amount2').val());
    console.log(ageStart);
    console.log(ageEnd);
});
$( function() {
    $( "#slider-rangeheight" ).slider({
      range: true,
      min: 0,
      max: 220,
      values: [ $('#heightamount').val(), $('#heightamount2').val() ],
      slide: function( event, ui ) {
        $( "#heightamount" ).val(ui.values[ 0 ]);
        $( "#heightamount2" ).val(ui.values[ 1 ]);
    },
    });
    $( "#heightamount" ).val($(".slider-rangeheight" ).slider( "values", 0 ));
    $( "#heightamount2" ).val($(".slider-rangeheight" ).slider( "values", 1 ));
  });


$('#slider-rangeheight').on( "click",function (e) { 
    heightStart =  ($('#heightamount').val());
    heightEnd =  ($('#heightamount2').val());
    console.log(heightStart);
    console.log(heightEnd);
});
$( function() {
    $( "#slider-rangeweight" ).slider({
      range: true,
      min: 0,
      max: 180,
      values: [ $('.weight .amount').val(), $('.weight .amount2').val() ],
      slide: function( event, ui ) {
        $( ".weight .amount" ).val(ui.values[ 0 ]);
        $( ".weight .amount2" ).val(ui.values[ 1 ]);
    },
    });
    $( ".weight .amount" ).val($(".slider-rangeweight" ).slider( "values", 0 ));
    $( ".weight .amount2" ).val($(".slider-rangeweight" ).slider( "values", 1 ));
  });


$('#slider-rangeweight').on( "click",function (e) { 
    weightStart =  ($('.weight .amount').val());
    weightEnd =  ($('.weight .amount2').val());
});
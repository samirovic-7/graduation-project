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


$('.share').on('shown.bs.modal', function () {
  $('#shareModel').trigger('focus');
})
$('.share').click(function(){
  let url = new URL(location.href);
  $('#link').val(url.href)
});
$('#copy_btn').click(function(){
  navigator.clipboard.writeText( $('#link').val());
  $('.copied').text('تم النسخ في الحافظة');
  $('.copied').fadeIn();
  setTimeout(() => {
    $('#shareModel').trigger('focus');
      $('.copied').fadeOut();
  }, 2000);
});

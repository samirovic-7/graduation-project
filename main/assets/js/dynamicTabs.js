$(document).ready(function(){
    $('.tab-button:first-of-type').addClass("active");
    $('.tab-content:first-of-type').css({"display":"block"});
    $('.tab-content:first-of-type').fadeIn();
    $('.tab-button').click(function () {
        let i = $(this).index();
        if ($(this)[0].className =="tab-button active") {
            return 0;
        }else{
        $('.tab-button').removeClass("active");
        $('.tab-content').css({"display":"none"});
        $(this).addClass("active");
        $('.tab-content').eq(i).fadeIn(1000);
        }
    });
});
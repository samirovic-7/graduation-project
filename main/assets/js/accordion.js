$(document).ready(function(){
    $('.accordion-content.first .accordion-content-desc').show();
    $('.accordion-content.first .accordion-content-title').addClass('active');
    $('.accordion-content-title').click(function () {
        if ($(this)[0].className =="accordion-content-title active") {
            $(this).removeClass('active');
            $(this).next().slideUp();
            return 0;
        }else{
            $('.accordion-content-title').removeClass('active');
            $(this).addClass('active');
            // $('.accordion-content-desc').slideUp();
            $(this).next().slideDown();
        }
    });
});


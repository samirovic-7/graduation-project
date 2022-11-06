$(".slide-down1").each(function()
{
    $(this).on("click",function()
    {
        $(this).next().slideToggle();
        $(this).find('.fa-chevron-left').toggleClass('rotate');
    })
})
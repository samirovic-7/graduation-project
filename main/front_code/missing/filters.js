$('#governorate').change(getCitey);
function getCitey () { 
    let gov = $('#governorate').val();
    $.ajax({
        type: "post",
        url: "front_code/missing/filters.php",
        data: "gov="+gov,
        success: function (response) {
            console.log(response);
            if (response != 'no city') {
                $('#cities').html(response);
               }else{
                $('#cities').html("<p class='p-2'>برجاء اختيار المحافظة أولا</p>");
            }
        }
    });
}
// getCitey();
document.querySelector('#filterForm button[type="reset"]').addEventListener('click', function(){
    location.assign('missing.php');
})
let url = new URL(location.href);
let user= url.searchParams.get('city%5B%5D');
console.log(user);

$('.filter_name input').click(toggleActive);
function toggleActive(){
    $(this).parent().toggleClass("active");
    console.log(444);
}

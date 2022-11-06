
let select_governorate = document.getElementById("select_governorate");

let specific_city_governorate = document.querySelector(".specific_city_governorate");

select_governorate.onchange=function()
{
    
    let xml = new XMLHttpRequest();

    xml.open("post",'code/selects/select_city_governorate.php',true);

    
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xml.send('governorate_code='+select_governorate.value);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            specific_city_governorate.innerHTML = this.responseText;
        }
    }
}

$(document).ready(function () {
    $("#add_department").on("submit",function(e)
    {
       e.preventDefault();

        $.ajax({
            type:'POST',
            url: "code/adddepartment/insertdepartment.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                toastr.success(response);
                $("#add_department")[0].reset(); 
            }
        });
    })
});

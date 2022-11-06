toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }

let city_content = document.getElementById("city_content");
function getAllCity()
{
    let xml = new XMLHttpRequest;
    xml.open("get","code/cities/select_city.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            city_content.innerHTML = this.responseText;
        }
    }


}

getAllCity();



let select_governorate_city = document.querySelector(".select_governorate_city");

function getAllGovernorate_city()
{
 
    let xml = new XMLHttpRequest;
    xml.open("get","code/cities/select_city_governorate.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            select_governorate_city.innerHTML = this.responseText;
        }
    }


}

//getAllGovernorate_city();

getAllCity();





$(document).ready(function () {
    $("#add_cities").on("submit",function(e)
    {
        e.preventDefault();

        $.ajax({
            type:'POST',
            url: "code/cities/create_city.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
               getAllCity();

               toastr.success(response);

               $("#add_cities")[0].reset();
               

           
            }
        });
    })
});







let deleteGovernorateAlert = document.getElementById("Governorate_code");

let alerts = document.getElementById("alerts");


function delete_cities(id)
{

    let City_code = id;

    let xml = new XMLHttpRequest;
    xml.open("post","code/cities/delete_Cities.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("City_code="+City_code);

    xml.onreadystatechange=function()
    {
        if(this.status === 200 && this.readyState ==4)
        {
            getAllCity();


            toastr.error(this.responseText);
        }

    }
}


let search_city = document.getElementById("search_city");

search_city.onkeyup=function()
{
    let City_filter =  this.value;

    let xml = new XMLHttpRequest;

    xml.open("post","code/cities/filter_city.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("City_name="+City_filter);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            city_content.innerHTML = this.responseText;
        }
    }

}




let city_id = document.getElementById("city_id"); // id of the citi

let city_name_edit = document.getElementById("city_name_edit");

let governorate_name1 = document.getElementById("governorate_name1");

let select_governorate = document.getElementById("select_governorate");

let governorate_id = document.getElementById('governorate_id');

let gov_id = document.getElementById('gov_id'); 

function edit_city(id,city_name,governorate_name1,gover_id)
{

   
    select_governorate.innerHTML=`<option value=`+gover_id+` selected>` +governorate_name1+ `</option>`;

    
    city_name_edit.value = city_name;
 
    city_id.value=id;



    $("#edit_city").on("submit",function(e)
    {
        e.preventDefault();
        
        $.ajax({
            type:'POST',
            url: "code/cities/edit_city.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
               getAllCity();
   
               toastr.info(response);

               $("#edit_city")[0].reset();
        
            }
        });

    })


}



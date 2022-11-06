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


let sheltercontent = document.getElementById("sheltercontent");

function getAllShelters()
{
    let xml = new XMLHttpRequest();

    xml.open("get",'code/shelter/selectshelter.php',true);

    xml.send();

    xml.onreadystatechange = function()
    {
        if(this.status == 200)
        {
            sheltercontent.innerHTML = this.responseText;
        }
    }
}

getAllShelters();

let alerts = document.getElementById("alerts");
function deleteshelter(id)
{
    let shelterId = id;


    let xml = new XMLHttpRequest();

    xml.open("post",'code/shelter/deleteshelter.php',true);

    
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xml.send('shelterId='+shelterId);

    xml.onreadystatechange=function()
    {
        if(this.status === 200 && this.readyState ==4)
        {
            getAllShelters();

            toastr.error(this.responseText);
        }
    }
}



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
    $("#addshelter").on("submit",function(e)
    {
       e.preventDefault();

        $.ajax({
            type:'POST',
            url: "code/shelter/insertshelter.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                getAllShelters();
                toastr.success(response); 
                $('#addshelter')[0].reset();
            }
        });
    })
});





let select_governorateedit = document.getElementById("select_governorateedit");

let specific_city_governorateedit = document.querySelector(".specific_city_governorateedit");

select_governorateedit.onchange=function()
{
    
    let xml = new XMLHttpRequest();

    xml.open("post",'code/selects/select_city_governorate.php',true);

    
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xml.send('governorate_code='+select_governorateedit.value);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            specific_city_governorateedit.innerHTML = this.responseText;
        }
    }
}













let editsheltername = document.getElementById("editsheltername");

let shelterphoneedit = document.getElementById("shelterphoneedit")

let Locationedit = document.getElementById("Locationedit");

let sheltercode = document.getElementById("sheltercode");

function editDepartment(departmentCode , departmentName , departmentLocation  , departmentPhone)
{
    editsheltername.value = departmentName;

    shelterphoneedit.value = departmentPhone;

    Locationedit.value = departmentLocation;

    sheltercode.value = departmentCode;


    $("#edit_hospital").on("submit",function(e)
    {
        e.preventDefault();
        
        $.ajax({
            type:'POST',
            url: "code/shelter/edit_shelter.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                getAllShelters();
   
                toastr.info(response);

               $('#edit_hospital')[0].reset();
        
            }
        });

    })
}


let filter_name = document.getElementById("filter_name");


filter_name.onkeyup=function()
{


    let xml = new XMLHttpRequest;

    xml.open("post","code/shelter/filter_shelter.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("department_name="+filter_name.value);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            sheltercontent.innerHTML = this.responseText;
        }
    }

}
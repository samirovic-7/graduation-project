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


let hospitalcontent = document.getElementById("hospitalcontent");

function getAllHospital()
{
    let xml = new XMLHttpRequest();

    xml.open("get",'code/hospital/selecthospital.php',true);

    xml.send();

    xml.onreadystatechange = function()
    {
        if(this.status == 200)
        {
            hospitalcontent.innerHTML = this.responseText;

            console.log(this.responseText);
        }
    }
}

getAllHospital();

let alerts = document.getElementById("alerts");
function deleteHospital(id)
{
    let hospitalId = id;


    let xml = new XMLHttpRequest();

    xml.open("post",'code/hospital/deletehospital.php',true);

    
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xml.send('hospitalId='+hospitalId);

    xml.onreadystatechange=function()
    {
        if(this.status === 200  && this.readyState ==4)
        {
            getAllHospital();


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
    $("#addhospital").on("submit",function(e)
    {
       e.preventDefault();

        $.ajax({
            type:'POST',
            url: "code/hospital/inserthospital.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                getAllHospital();
                toastr.success(response);
                $("#addhospital")[0].reset();
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






let edithospitalname = document.getElementById("edithospitalname");

let hospitalphoneedit = document.getElementById("hospitalphoneedit")

let Locationedit = document.getElementById("Locationedit");

let hospitalcode = document.getElementById("hospitalcode");

function editDepartment(departmentCode , departmentName , departmentLocation  , departmentPhone)
{
    edithospitalname.value = departmentName;

    hospitalphoneedit.value = departmentPhone;

    Locationedit.value = departmentLocation;

    hospitalcode.value = departmentCode;


    $("#edit_hospital").on("submit",function(e)
    {
        e.preventDefault();
        
        $.ajax({
            type:'POST',
            url: "code/hospital/edit_hospital.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                getAllHospital();
                toastr.info(response);


               $("#edit_hospital")[0].reset();
        
            }
        });

    })
}


let filter_name = document.getElementById("filter_name");


filter_name.onkeyup=function()
{


    let xml = new XMLHttpRequest;

    xml.open("post","code/hospital/filter_hospital.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("department_name="+filter_name.value);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            hospitalcontent.innerHTML = this.responseText;
        }
    }

}
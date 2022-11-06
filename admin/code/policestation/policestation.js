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


let policestationcontent = document.getElementById("policestationcontent");

function getAllPoliceStation()
{
    let xml = new XMLHttpRequest();

    xml.open("get",'code/policestation/selectPoliceDepartment.php',true);

    xml.send();

    xml.onreadystatechange = function()
    {
        if(this.status == 200)
        {
            policestationcontent.innerHTML = this.responseText;
        }
    }
}

getAllPoliceStation();

let alerts = document.getElementById("alerts");
function deletePoliceStation(id)
{
    let policeStationId = id;


    let xml = new XMLHttpRequest();

    xml.open("post",'code/policestation/deleteDepartment.php',true);

    
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xml.send('policeStationId='+policeStationId);

    xml.onreadystatechange=function()
    {
        if(this.status === 200 && this.readyState ==4)
        {
            getAllPoliceStation();


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






let PoliceStationName = document.getElementById("editpolicestationname");

let PoliceStationPhone = document.getElementById("policePhoneedit")

let PoliceStationLocation = document.getElementById("Locationedit");

let departmentCodeEdit = document.getElementById("departmentCode");

function editDepartment(departmentCode , departmentName , departmentLocation  , departmentPhone)
{
    PoliceStationName.value = departmentName;

    PoliceStationPhone.value = departmentPhone;

    PoliceStationLocation.value = departmentLocation;

    departmentCodeEdit.value = departmentCode;


    $("#edit_police").on("submit",function(e)
    {
        e.preventDefault();
        
        $.ajax({
            type:'POST',
            url: "code/policestation/edit_police.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
               getAllPoliceStation();
   
               toastr.info(response);

               $("#edit_police")[0].reset(); 
        
            }
        });

    })
}


let filter_name = document.getElementById("filter_name");


filter_name.onkeyup=function()
{


    let xml = new XMLHttpRequest;

    xml.open("post","code/policestation/filter_policestation.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("department_name="+filter_name.value);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            policestationcontent.innerHTML = this.responseText;
        }
    }

}
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



let governorate_content = document.getElementById("governorate_content");
function getAllGovernorate()
{
    let xml = new XMLHttpRequest;
    xml.open("get","code/governorate/select_governorate.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            governorate_content.innerHTML = this.responseText;
        }
    }


}

getAllGovernorate();


let deleteGovernorateAlert = document.getElementById("Governorate_code");

let alerts = document.getElementById("alerts");


function delete_governorate(id)
{



    let Governorate_code = id;

    let xml = new XMLHttpRequest;
    xml.open("post","code/governorate/delete_Governorate.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("Governorate_code="+Governorate_code);

    xml.onreadystatechange=function()
    {
        if(this.status == 200 && this.readyState ==4)
        {
            getAllGovernorate();

            toastr.error(this.responseText);

        }

    }
}


let search_governorate = document.getElementById("search_governorate");

search_governorate.onkeyup=function()
{
    let Governorate_filter =  this.value;

    let xml = new XMLHttpRequest;

    xml.open("post","code/governorate/filter_governorate.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("Governorate_name="+Governorate_filter);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            governorate_content.innerHTML = this.responseText;
        }
    }

}


let add_Governorate = document.getElementById("add_Governorate");

let Governorate_name = document.getElementById("governorate_name");

add_Governorate.onclick=function()
{

    xml = new XMLHttpRequest;

    xml.open("post","code/governorate/create_governorate.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("Governorate_name="+Governorate_name.value);

    xml.onreadystatechange = function()
    {
        if(this.status === 200  && this.readyState ==4)
        {
            getAllGovernorate();

            toastr.success(this.responseText);

        
            $("#submite_add_governorate")[0].reset();
    
        }
    }

    
}

let edit_governorate1 = document.getElementById("edit_governorate");

let Governorate_value = document.getElementById("Governorate_value");

let gov_id = document.getElementById("gov_id");

function edit_governorate(id , name)
{
    //let Governorate_code = id;
    let Governorate_name = name;

    Governorate_value.value = Governorate_name;

    gov_id.value = id;

    edit_governorate1.onclick = function()
    {
        xml = new XMLHttpRequest;

        xml.open("post","code/governorate/edit_governorate.php",true);
        xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xml.send("Governorate_code="+gov_id.value+"&Governorate_name="+Governorate_value.value);
        xml.onreadystatechange = function()
        {
            if(this.status === 200  && this.readyState ==4)
            {
                getAllGovernorate();

                toastr.info(this.responseText);

                $("#edit_form")[0].reset();
            }
        }
    
    }

}

$(document).ready(function () {
    //show message when field is empty
$('[required]').blur(function(){
    console.log('god');
    if($(this).val() == ''){
      $(this).next('.alert') .fadeIn().delay(2000).fadeOut();
    }else{

    }
    
});
});


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




let citizine_content = document.getElementById("citizine_content");

function get_all_citizines()
{
    let xml = new XMLHttpRequest;
    xml.open("get","code/citizine/manage_citizines/selectcitizine.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            citizine_content.innerHTML = this.responseText;
        }
    }
}

get_all_citizines();


let alerts = document.getElementById("alerts");
function delete_citizine(id)
{
    
    let delete_citizine = id;

    let xml = new XMLHttpRequest;
    xml.open("post","code/citizine/manage_citizines/deleteCitizine.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("delete_citizine="+delete_citizine);

    xml.onreadystatechange=function()
    {
        if(this.status === 200 && this.readyState ==4)
        {
            get_all_citizines();


            toastr.error(this.responseText);
        }

    }
}



function Activate(ssn)
{

    let xml = new XMLHttpRequest;
    xml.open("post","code/citizine/manage_citizines/not_ActivateCitizines.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("citizine_ssn="+ssn);

    xml.onreadystatechange=function()
    {
        if(this.status === 200  && this.readyState ==4)
        {
            get_all_citizines();

            toastr.info(this.responseText);


        }

    }
}

function not_activate(ssn)
{

    let xml = new XMLHttpRequest;
    xml.open("post","code/citizine/manage_citizines/ActivateCitizines.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("citizine_ssn="+ssn);

    xml.onreadystatechange=function()
    {
        if(this.status === 200  && this.readyState ==4)
        {
            get_all_citizines();

            toastr.info(this.responseText);
            
        }

    }
}
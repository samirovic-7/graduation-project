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




let citizines = document.getElementById("citizines");

function get_all_citizines()
{
    let xml = new XMLHttpRequest;
    xml.open("get","code/search_citizines/selectcitizine.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            citizines.innerHTML = this.responseText;
        }
    }
}




let alerts = document.getElementById("alerts");
function delete_citizine(id)
{
    
    let delete_citizine = id;

    let xml = new XMLHttpRequest;
    xml.open("post","code/search_citizines/deleteCitizine.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("delete_citizine="+delete_citizine);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            common();

            alerts.innerHTML=this.responseText;
        }

    }
}



function Activate(ssn)
{

    let xml = new XMLHttpRequest;
    xml.open("post","code/search_citizines/not_ActivateCitizines.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("citizine_ssn="+ssn);

    xml.onreadystatechange=function()
    {
        if(this.status === 200  && this.readyState ==4)
        {
            common();
            toastr.info(this.responseText);


        }

    }
}

function not_activate(ssn)
{

    let xml = new XMLHttpRequest;
    xml.open("post","code/search_citizines/ActivateCitizines.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("citizine_ssn="+ssn);

    xml.onreadystatechange=function()
    {
        if(this.status === 200  && this.readyState ==4)
        {
            common();

            toastr.info(this.responseText);
            
        }

    }
}





















let citizine_button = document.getElementById("citizine_button");

let ssn = document.getElementById("ssn");


citizine_button.onclick=function()
{

    common();

}

function common()
{
    xml = new XMLHttpRequest;

    xml.open("post","code/search_citizines/search_citizines.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("ssn="+ssn.value);

    xml.onreadystatechange = function()
    {
        if(this.status === 200  && this.readyState ==4)
        {

            citizines.innerHTML= this.responseText;


    
        }
    }
}
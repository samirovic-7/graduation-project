toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-left",
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


let disease_content = document.getElementById("disease_content");
function getAllDiseases()
{
    let xml = new XMLHttpRequest;
    xml.open("get","code/diseases/select_diseases.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            disease_content.innerHTML = this.responseText;
        }
    }


}

getAllDiseases();




let alerts = document.getElementById("alerts");


function delete_diseases(id)
{
    let delete_diseases = id;

    let xml = new XMLHttpRequest;
    xml.open("post","code/diseases/delete_deseases.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("delete_diseases="+delete_diseases);

    xml.onreadystatechange=function()
    {
        if(this.status === 200 && this.readyState ==4)
        {
            getAllDiseases();


            toastr.error(this.responseText);
        }

    }
}


let search_diseases = document.getElementById("search_diseases");

search_diseases.onkeyup=function()
{
    let diseasese_filter =  this.value;

    let xml = new XMLHttpRequest;

    xml.open("post","code/diseases/filter_diseases.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("diseasese_filter="+diseasese_filter);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            disease_content.innerHTML = this.responseText;
        }
    }

}


let add_diseases = document.getElementById("add_diseases");

let disease_name = document.getElementById("disease_name");

add_diseases.onclick=function()
{

    xml = new XMLHttpRequest;

    xml.open("post","code/diseases/create_deseases.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("disease_name="+disease_name.value);

    xml.onreadystatechange = function()
    {
        if(this.status === 200  && this.readyState ==4)
        {
            getAllDiseases();
            toastr.success(this.responseText);

            $("#add_diseases_form")[0].reset();

        }
    }

    
}

let edit_diseases1 = document.getElementById("edit_diseases");

let disease_value = document.getElementById("disease_value");

let disease_id = document.getElementById("disease_id");

function edit_diseases(id , name)
{
    //let diseases = id;

    disease_value.value = name;

    disease_id.value = id;

    edit_diseases1.onclick = function()
    {
        xml = new XMLHttpRequest;

        xml.open("post","code/diseases/edit_diseases.php",true);
        xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xml.send("diseases_code="+disease_id.value+"&disease_name="+disease_value.value);
        xml.onreadystatechange = function()
        {
            if(this.status === 200  && this.readyState ==4)
            {
                getAllDiseases();

                toastr.info(this.responseText);
                $("#edit_missing_form")[0].reset();
            }
        }
    
    }

}

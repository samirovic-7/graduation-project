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


let nationalities_content = document.getElementById("nationalities_content");
function getAllnationalities()
{
    let xml = new XMLHttpRequest;
    xml.open("get","code/nationalities/select_nationalities.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            nationalities_content.innerHTML = this.responseText;
        }
    }


}

getAllnationalities();




let alerts = document.getElementById("alerts");


function delete_nationalities(id)
{
    let delete_nationalities = id;

    let xml = new XMLHttpRequest;
    xml.open("post","code/nationalities/delete_nationalities.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("delete_nationalities="+delete_nationalities);

    xml.onreadystatechange=function()
    {
        if(this.status === 200 && this.readyState ==4)
        {
            getAllnationalities();


            toastr.error(this.responseText);
        }

    }
}


let search_nationality = document.getElementById("search_nationality");

search_nationality.onkeyup=function()
{
    let nationalitye_filter =  this.value;

    let xml = new XMLHttpRequest;

    xml.open("post","code/nationalities/filter_nationalities.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("nationality_filter="+nationalitye_filter);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            nationalities_content.innerHTML = this.responseText;
        }
    }

}


let add_nationaity = document.getElementById("add_nationaity");

let nationality_name = document.getElementById("nationality_name");

add_nationaity.onclick=function()
{

    xml = new XMLHttpRequest;

    xml.open("post","code/nationalities/create_nationalities.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("nationality_name="+nationality_name.value);

    xml.onreadystatechange = function()
    {
        if(this.status === 200  && this.readyState ==4)
        {
            getAllnationalities();
            toastr.success(this.responseText);

            $("#add_nationality_form")[0].reset();

        }
    }

    
}

let edit_nationality1 = document.getElementById("edit_nationality");

let nationality_value = document.getElementById("nationality_value");

let nath_id = document.getElementById("nath_id");

function edit_nationalities(id , name)
{
    //let diseases = id;

    nationality_value.value = name;

    nath_id.value = id;

    edit_nationality1.onclick = function()
    {
        xml = new XMLHttpRequest;

        xml.open("post","code/nationalities/edit_nationalities.php",true);
        xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xml.send("nationality_code="+nath_id.value+"&nationality_name="+nationality_value.value);
        xml.onreadystatechange = function()
        {
            if(this.status === 200)
            {
                getAllnationalities();
                toastr.info(this.responseText);

                $("#edit_nationality_form")[0].reset();
            }
        }
    
    }

}

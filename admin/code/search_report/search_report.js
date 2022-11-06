let report_button = document.getElementById("report_button");

let report_number = document.getElementById("report_number");

let missings = document.getElementById("missings");

report_button.onclick=function()
{
    common();
    
}

function common()
{
    
    xml = new XMLHttpRequest;

    xml.open("post","code/search_report/search_report.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("report_number="+report_number.value);

    xml.onreadystatechange = function()
    {
        if(this.status === 200  && this.readyState ==4)
        {

            missings.innerHTML= this.responseText;


    
        }
    }

}




let alerts = document.getElementById("alerts");


function delete_missing(id)
{
    let delete_missing = id;

    let xml = new XMLHttpRequest;
    xml.open("post","code/search_report/delete_missing.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("delete_missing="+delete_missing);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            common();

            alerts.innerHTML = this.responseText;
        }

    }
}

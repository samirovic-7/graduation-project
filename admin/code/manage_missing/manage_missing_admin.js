
let missing_content = document.getElementById("missing_content");
function getAllMissing()
{
    let xml = new XMLHttpRequest;
    xml.open("get","code/manage_missing/selectDepartment_missing.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            missing_content.innerHTML = this.responseText;
        }
    }


}
getAllMissing();

let alerts = document.getElementById("alerts");


function delete_missing(id)
{
    let delete_missing = id;

    let xml = new XMLHttpRequest;
    xml.open("post","code/manage_missing/delete_missing.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("delete_missing="+delete_missing);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            getAllMissing();

            alerts.innerHTML = this.responseText;
        }

    }
}





$(document).ready(function(){
    $('.venobox').venobox(); 
});

let ssn = document.getElementById("ssn");

let ssn_button = document.getElementById("ssn_button");

let admins_content = document.getElementById("admins_content");

ssn_button.onclick=function()
{
    common();
    
}

function common()
{
    
    xml = new XMLHttpRequest;

    xml.open("post","code/search_admin/search_admin.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("ssn="+ssn.value);

    xml.onreadystatechange = function()
    {
        if(this.status === 200  && this.readyState ==4)
        {

            admins_content.innerHTML= this.responseText;


    
        }
    }

}




function delete_admins(id) {



    let ssn = id;

    let xml = new XMLHttpRequest;
    xml.open("post", "code/search_admin/delete_admins.php", true);

    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("ssn=" + ssn);

    xml.onreadystatechange = function() {
        if (this.status === 200) {
            common();

            alerts.innerHTML = this.responseText;
        }

    }
}
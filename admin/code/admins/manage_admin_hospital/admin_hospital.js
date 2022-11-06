let admins_content = document.getElementById("admins_content");

function getAlladmins() {
    let xml = new XMLHttpRequest;
    xml.open("get", "code/admins/manage_admin_hospital/select_admin_hospital.php", true);

    xml.send();

    xml.onreadystatechange = function() {
        if (this.status === 200) {
            admins_content.innerHTML = this.responseText;
        }
    }


}

getAlladmins();
let deleteadminsAlert = document.getElementById("admins_code");

let alerts = document.getElementById("alerts");


function delete_admins(id) {



    let ssn = id;

    let xml = new XMLHttpRequest;
    xml.open("post", "code/admins/manage_admin_hospital/delete_admin_hospital.php", true);

    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("ssn=" + ssn);

    xml.onreadystatechange = function() {
        if (this.status === 200) {
            getAlladmins();


            alerts.innerHTML = this.responseText;
        }

    }
}

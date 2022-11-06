let admins_content = document.getElementById("admins_content");

function getAlladmins() {
    let xml = new XMLHttpRequest;
    xml.open("get", "code/admins/manage_admin/select_admins.php", true);

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
    xml.open("post", "code/admins/manage_admin/delete_admins.php", true);

    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("ssn=" + ssn);

    xml.onreadystatechange = function() {
        if (this.status === 200) {
            getAlladmins();


            alerts.innerHTML = this.responseText;
        }

    }
}
/*
let search_admins = document.getElementById("search_admins");

search_admins.onkeyup = function() {
    let admins_filter = this.value;

    let xml = new XMLHttpRequest;

    xml.open("post", "code/filter_admins.php", true);
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("first_name=" + admins_filter);

    xml.onreadystatechange = function() {
        if (this.status === 200) {
            admins_content.innerHTML = this.responseText;
        }
    }

}
*/




/*
let Edit = document.getElementById("Edit");

function edit_admins(id, Fname, Mname, Lname, AGE, EmailEE, Status, Phone) {



    let admins_id = document.getElementById("admins_id");

    admins_id.value = id;


    let F_name = document.getElementById("F_name");

    let Frist_name = Fname;

    F_name.value = Frist_name;



    let M_name = document.getElementById("M_name");

    let middle_name = Mname;

    M_name.value = middle_name;



    let L_name = document.getElementById("L_name");

    let last_name = Lname;

    L_name.value = last_name;

    let Age = document.getElementById("Age");

    let Agee = AGE;

    Age.value = AGE;


    let EmailE = document.getElementById("EmailE");

    let EmailEo = EmailEE;

    EmailE.value = EmailEo;



    let StatusE = document.getElementById("StatusE");

    let Statuss = Status;

    StatusE.value = Statuss;


    let Phoneee = document.getElementById("PhoneE");

    let Phonee = Phone;

    Phoneee.value = Phonee;

    Edit.onclick = function() {
        xml = new XMLHttpRequest;

        xml.open("post", "code/edit_admins.php", true);
        xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xml.send("ssn=" + admins_id.value + "&first_name=" + F_name.value + "&mid_name=" + M_name.value + "&last_name=" + L_name.value + "&age=" + Age.value + "&email=" + EmailE.value + "&status=" + StatusE.value + "&phone=" + Phoneee.value);
        xml.onreadystatechange = function() {
            if (this.status === 200) {
                getAlladmins();

                alerts.innerHTML = this.responseText;
            }
        }

    }

}
*/
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

let colors_content = document.getElementById("colors_content");

function getAllcolors() {
    let xml = new XMLHttpRequest;
    xml.open("get", "code/color/select_colors.php", true);

    xml.send();

    xml.onreadystatechange = function() {
        if (this.status === 200) {
            colors_content.innerHTML = this.responseText;
        }
    }


}

getAllcolors();


let deletecolorsAlert = document.getElementById("colors_code");

let alerts = document.getElementById("alerts");


function delete_colors(id) {



    let colors_code = id;

    let xml = new XMLHttpRequest;
    xml.open("post", "code/color/delete_colors.php", true);

    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("colors_code=" + colors_code);

    xml.onreadystatechange = function() {
        if (this.status === 200 && this.readyState ==4) {
            getAllcolors();


            toastr.error(this.responseText);
        }

    }
}


let search_colors = document.getElementById("search_colors");

search_colors.onkeyup = function() {
    let colors_filter = this.value;

    let xml = new XMLHttpRequest;

    xml.open("post", "code/color/filter_colors.php", true);
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("colors_name=" + colors_filter);

    xml.onreadystatechange = function() {
        if (this.status === 200) {
            colors_content.innerHTML = this.responseText;
        }
    }

}



$(document).ready(function () {
    $("#add_color").on("submit",function(e)
    {
        e.preventDefault();

        $.ajax({
            type:'POST',
            url: "code/color/create_colors.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                getAllcolors();

                toastr.success(response);
               
               $("#add_color")[0].reset();

           
            }
        });
    })
});


let Edit = document.getElementById("Edit");

let value = document.getElementById("value");

let color_id = document.getElementById("color_id");

function edit_colors(id, name) {
    //let colors_code = id;
    let colors_name = name;

    value.value = colors_name;

    col_id.value = id;

    Edit.onclick = function() {
        xml = new XMLHttpRequest;

        xml.open("post", "code/color/edit_colors.php", true);
        xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xml.send("colors_code=" + col_id.value + "&colors_name=" + value.value);
        xml.onreadystatechange = function() {
            if (this.status === 200  && this.readyState ==4) {
                getAllcolors();

                toastr.info(this.responseText);
                $("#edit_color_form")[0].reset();
            }
        }

    }

}
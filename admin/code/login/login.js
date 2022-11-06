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

  let alert = document.getElementById('alert');


$("#login").on("submit",function(e)
{
    e.preventDefault();

    $.ajax({
        type:'POST',
        url: "code/login/login.php",
        data: new FormData(this),
        contentType:false,
        processData:false,
        success: function (response) {
            $('#alert').html(response);          
        
        }
    });
});

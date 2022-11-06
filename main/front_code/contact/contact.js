
$("#contact").on("submit", function (e) {
    e.preventDefault();
  
    $.ajax({
      type: "POST",
      url: "front_code/contact/contact.php",
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function (response) {

        toastr.success(response);
        
      },
    });
  });
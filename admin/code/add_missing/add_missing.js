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


  let select_governorate = document.getElementById("select_governorate");

  let specific_city_governorate = document.querySelector(".specific_city_governorate");
  
  select_governorate.onchange=function()
  {
      
      let xml = new XMLHttpRequest();
  
      xml.open("post",'code/selects/select_city_governorate.php',true);
  
      
      xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
      xml.send('governorate_code='+select_governorate.value);
  
      xml.onreadystatechange=function()
      {
          if(this.status === 200)
          {
              specific_city_governorate.innerHTML = this.responseText;
          }
      }
  }
  
  
  let radioSelect = Array.from(document.querySelectorAll('#radioSelect input'));
  
  let department = document.getElementById("department");
  
  specific_city_governorate.onchange=function()
  {
      let cityCode =  specific_city_governorate.value;
  
    
  
      let departmentStatus = 1;
  
      console.log(departmentStatus)

      getDepartment(cityCode,departmentStatus)
  
      
  }
  
  function getDepartment(city_code , department_status)
  {
      let xml = new XMLHttpRequest();
  
      xml.open('post','code/selects/select_specific_department.php',true);
  
      xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
      xml.send('city_code='+city_code+'&department_code='+department_status);
  
      xml.onreadystatechange=function()
      {
          if(this.status === 200)
          {
              department.innerHTML = this.responseText;
          }
      }
  }
  







$("#add_missing").on("submit",function(e)
{
    e.preventDefault();

    $.ajax({
        type:'POST',
        url: "code/add_missing/add_missing.php",
        data: new FormData(this),
        contentType:false,
        processData:false,
        success: function (response) {
            toastr.success('تمت الاضافة بنجاح');
        }
    });
});
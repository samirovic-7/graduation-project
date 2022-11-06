


  let select_governorate = document.getElementById("select_governorate");

  let specific_city_governorate = document.querySelector(".specific_city_governorate");
  
  select_governorate.onchange=function()
  {
      
      let xml = new XMLHttpRequest();
  
      xml.open("post",'front_code/selects/select_city_governorate.php',true);
  
      
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
  
      xml.open('post','front_code/selects/select_specific_department.php',true);
  
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
  
  


  $("#user_date").on("submit",function(e)
  {
      e.preventDefault();
      
      $.ajax({
          type:'POST',
          url: "front_code/activate_citizines/user_date.php",
          data: new FormData(this),
          contentType:false,
          processData:false,
          success: function (response) {
            toastr.info(response);
      
          }
      });

  })
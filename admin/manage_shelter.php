<?php

include("connection.php");


$select_governorates = $con->prepare("SELECT * FROM governorate");

$select_governorates->execute();

$governorates_fets = $select_governorates->fetchAll();

?>
<?php 
session_start();
include('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/table.css">
</head>
<body>

<div class="view">
    <div class="row">
        <div class="col-lg-2">
        <?php
                if ($_SESSION['admin_dapartment_status']==1) {
                    include('template/side_bar_police.php');
                }
                elseif($_SESSION['admin_dapartment_status']==2)
                {
                    include('template/side_bar_hospital.php');
                }
                else{
                    include('template/side_bar_shelter.php');
                }

                            ?>
        </div>
        <div class="col-lg-10">
            <div class="side-right">
                <div class="content-template">
                    <div class="upper-template">
                        <div class="template-title">
                            <h2 class="h1"> إدارة الملاجئ  </h2>
                        </div>


                        <div class="template-search">

<div class="pos">
     <input type="text" class="form-control" id="filter_name"   placeholder="إدخال اسم الملجئ">
   
             <div class="icon">
             <i class="fas fa-search"></i>
         </div> 
 </div>
</div>

                        <div class="add">
                       <button type="button"   style="background-color: #0162e8;" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal2"> إضافة ملجئ </button>

                    </div>

                    </div>
                    <div class="alerts" id="alerts">
          
          </div>
     
                    <br>
                    <div class="table-template">
                        <table>
                            <thead>
                                <tr>
                                <th scope="col" >#</th>
        
                                <th scope="col" style="padding-right: 20px;"> إسم الملجئ  </th>
                          
                                <th scope="col" style="padding-right: 20px;"> رقم هاتف الملجئ </th>
                                        <th scope="col" style="padding-right: 20px;"> المحافظة التابعة لها  </th>
                                        <th scope="col" style="padding-right: 20px;"> المدينة التابعة لها  </th>
                                
          
                                <th scope="col" style="padding-right: 20px;">الحذف</th>
                                
                                <th scope="col" style="padding-right: 20px;"> التعديل </th>
                                <th scope="col" style="padding-right: 20px;"> موقع </th>
                                </tr>
                            </thead>
                            <tbody id="sheltercontent">



                                



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>


        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل الملاجئ </h5>

            </div>
            <div class="modal-body">
            <div class="form">

                                    <form  id="edit_hospital">
                                        <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">  أدخال إسم الملجي </label>
                                                <div class="pos">
                                                    <input type="text" class="form-control" name="editsheltername" id="editsheltername" aria-describedby="emailHelp" placeholder="أسم الملجئ">
                            

                                                </div>

                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">هاتف الملجئ</label>
                                            <div class="pos">
                                                <input type="text" class="form-control" id="shelterphoneedit"  name="shelterphoneedit"  aria-describedby="emailHelp" placeholder="إدخال الهاتف">
                        

                                            </div>

                                        </div>

                                        
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">عنوان الملجئ</label>
                                            <div class="pos">
                                                <input type="text" class="form-control" id="Locationedit"  name="Locationedit"  aria-describedby="emailHelp" placeholder="Hospital Location">
                        
       
                                            </div>

                                        </div>

                                        <div class="mb-3">
                                        <label for="exampleDataList" class="form-label">الحافظة التابع له</label>
                                            <select class="form-select" aria-label="Default select example" id="select_governorateedit" name="select_governorate_edit">
                                                <option selected>Open this select menu</option>
                                                <?php
                                                        foreach($governorates_fets as $governorates_fet)
                                                        {
                                                      
                                                            ?>  
                                                    
                                                                <option value="<?php echo $governorates_fet["Governorate_code"] ?>"> <?php echo $governorates_fet["Governorate_name"] ?> </option>        
                                                    
                                                    
                                                            <?php
                                                        }

                                                    ?>
                                            </select>
                                        </div>


                                        <div class="mb-3">
                                        <label for="exampleDataList" class="form-label">المدينة التابع لها</label>
                                            <select class="form-select specific_city_governorateedit" name="specific_city_governorate_edit" aria-label="Default select example">
                                                <option selected>Open this select menu</option>

                                            </select>
                                        </div>

<input type="hidden" name="sheltercode" id="sheltercode">
                                        
                
                

                                        <button type="submit" class="btn btn-primary">  تعديل الملجئ </button>

                                    </form>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>

                </div>
            </div>
        </div>
        </div>

 
    </div>
</div>







        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">إضافة ملجئ</h5>

            </div>
            <div class="modal-body">
            <div class="form">

                                    <form id="addshelter">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label"> إدخال اسم الملجئ  </label>
                                            <div class="pos">
                                                <input type="text" class="form-control" name="ShelterName" id="ShelterName" aria-describedby="emailHelp" placeholder="اسم الملجئ">

                                            </div>

                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">رقم هاتف الملجئ</label>
                                            <div class="pos">
                                                <input type="text" class="form-control" id="Shelterphone"  name="Shelterphone"  aria-describedby="emailHelp" placeholder="إدخال رقم الهاتف">
                        

                                            </div>

                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">عنوان الملجئ</label>
                                            <div class="pos">
                                                <input type="text" class="form-control" id="policePhone"  name="Location"  aria-describedby="emailHelp" placeholder="إدخال عنوان الملجئ">
                        

                                            </div>

                                        </div>

                                        <div class="mb-3">
                                        <label for="exampleDataList" class="form-label">Select Governorate</label>
                                            <select class="form-select" aria-label="Default select example" id="select_governorate" name="select_governorate">
                                                <option selected>Open this select menu</option>
                                                <?php
                                                        foreach($governorates_fets as $governorates_fet)
                                                        {
                                                      
                                                            ?>  
                                                    
                                                                <option value="<?php echo $governorates_fet["Governorate_code"] ?>"> <?php echo $governorates_fet["Governorate_name"] ?> </option>        
                                                    
                                                    
                                                            <?php
                                                        }

                                                    ?>
                                            </select>
                                        </div>


                                        <div class="mb-3">
                                        <label for="exampleDataList" class="form-label">Select Cities</label>
                                            <select class="form-select specific_city_governorate" name="specific_city_governorate" aria-label="Default select example">
                                                <option selected>Open this select menu</option>

                                            </select>
                                        </div>






                                        
                
                

                                        <button type="submit"  class="btn btn-primary">  إضافة ملجئ </button>

                                    </form>
            </div>
                <div class="modal-footer">
                    <button type="button" id="cretePoliceStation" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>

                </div>
            </div>
        </div>
        </div>

 
    </div>
</div>






<script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dashboard2.js"></script>
    

    <script src="assets/js/toastr.min.js"></script>

    <script src="code/shelter/shelter.js"></script>

</body>
</html>
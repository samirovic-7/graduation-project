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
<link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
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
                            <h2 class="h1">   إدارة اقسام الشرطة </h2>
                        </div>


                        <div class="template-search">

<div class="pos">
     <input type="text" class="form-control" id="filter_name"   placeholder="search">
   
             <div class="icon">
             <i class="fas fa-search"></i>
         </div> 
 </div>
</div>

                        <div class="add">
                       <button type="button"   style="background-color: #0162e8;" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal2"> إضافة قسم شرطة   </button>

                    </div>

                    </div>
                    <div class="alerts" id="alerts">
          
          </div>
     
                    <br>
                    <div class="table-template">
                        <table>
                            <thead>
                                <tr>
                                <th scope="col">#</th>
        
                                <th scope="col" > قسم الشرطة </th>
             
                                <th scope="col"  >  رقم هاتف قسم الشرطة </th>
                                <th scope="col" >المحافظة التابعة لها  </th>
                                <th scope="col"> المدينة التابعة لها  </th>
                                
          
                                <th scope="col">  الحذف </th>
                                <th scope="col">  التعديل </th>
                                <th scope="col"> موقع </th>
                                </tr>
                            </thead>
                            <tbody id="policestationcontent">



                                



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
                <h5 class="modal-title" id="exampleModalLabel">تعديل أقسام الشرطة</h5>

            </div>
            <div class="modal-body">
            <div class="form">

                                    <form  id="edit_police">
                                        <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">إسم قسم الشرطة </label>
                                                <div class="pos">
                                                    <input type="text" class="form-control" name="policestationnameedit" id="editpolicestationname" aria-describedby="emailHelp" placeholder="إدخال اسم الشرطة ">

                                                </div>

                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">إدخال رقم الهاتف القسم </label>
                                            <div class="pos">
                                                <input type="text" class="form-control" id="policePhoneedit"  name="policestationphoneedit"  aria-describedby="emailHelp" placeholder="رقم الهاتف القسم">
                        
         
                                            </div>

                                        </div>

                                        
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">إدخال موقع اسم الشرطة</label>
                                            <div class="pos">
                                                <input type="text" class="form-control" id="Locationedit"  name="Locationedit"  aria-describedby="emailHelp" placeholder="إدخال الموقع">
                        

                                            </div>

                                        </div>

                                        <div class="mb-3">
                                        <label for="exampleDataList" class="form-label">إختار المحافظة</label>
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
                                        <label for="exampleDataList" class="form-label">إختار المدينة</label>
                                            <select class="form-select specific_city_governorateedit" name="specific_city_governorate_edit" aria-label="Default select example">
                                                <option selected>Open this select menu</option>

                                            </select>
                                        </div>

<input type="hidden" name="departmentCode" id="departmentCode">
                                        
                
                

                                        <button type="submit" class="btn btn-primary">  تعديل بيانات  </button>

                                    </form>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلااق</button>

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
                <h5 class="modal-title" id="exampleModalLabel">إضافة قسم الشرطة</h5>

            </div>
            <div class="modal-body">
            <div class="form">

                                    <form id="addPoliceStations">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label"> إدخال اسم القسم </label>
                                            <div class="pos">
                                                <input type="text" class="form-control" name="policestationname" id="policestationname" aria-describedby="emailHelp" placeholder="إدخال اسم القسم">
                        
                                                
                                            </div>

                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">رقم هاتف القسم</label>
                                            <div class="pos">
                                                <input type="text" class="form-control" id="policePhone"  name="policestationphone"  aria-describedby="emailHelp" placeholder="إدخال هاتف القسم">
                        

                                            </div>

                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">عنوان القسم</label>
                                            <div class="pos">
                                                <input type="text" class="form-control" id="policePhone"  name="Location"  aria-describedby="emailHelp" placeholder="إدخال عنوان القسم">
                        

                                            </div>

                                        </div>

                                        <div class="mb-3">
                                        <label for="exampleDataList" class="form-label">اختار المحافظة</label>
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
                                        <label for="exampleDataList" class="form-label">اختار المدينة</label>
                                            <select class="form-select specific_city_governorate" name="specific_city_governorate" aria-label="Default select example">
                                                <option selected>Open this select menu</option>

                                            </select>
                                        </div>






                                        
                
                

                                        <button type="submit" id="addPoliceStations" class="btn btn-primary">  اضافة قسم شرطة </button>

                                    </form>
            </div>
                <div class="modal-footer">
                    <button type="button" id="cretePoliceStation" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>

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

    <script src="code/policestation/policestation.js"></script>

</body>
</html>
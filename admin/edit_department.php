<?php
session_start();
include("connection.php");
include('auth.php');
if (isset($_GET['id'])) {
    
    $departments = $con->prepare("SELECT departments.*, governorate.Governorate_name AS governorate_name, cities.citiese_name AS city_name FROM ((departments INNER JOIN governorate ON departments.governorate_code = governorate.Governorate_code) INNER JOIN cities ON departments.cites_code = cities.cities_code)  WHERE department_code=:department_code ");
    $departments->bindParam('department_code',$_GET['id']);

    $departments->execute();

    $department_data = $departments->fetch();
    
}


$select_governorates = $con->prepare("SELECT * FROM governorate");

$select_governorates->execute();

$governorates_fets = $select_governorates->fetchAll();
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
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/template.css">

    <link rel="stylesheet" href="assets/css/add_template.css">
</head>

<body>

<?php 


?>

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
                                <h2 class="h1"> إضافة اقسام </h2>
                            </div>

                            <div class="alerts" id="alerts">
          
          </div>



                        </div>

                        <br>
                        <form class="row g-3" id="edit_department">
                        <div class="col-md-4">
                                <label for="inputState" class="form-label"> اختار القسم </label>
                                <select class="form-select" aria-label="Default select example" name="department_status">
                                    <option selected value="<?php echo $department_data['status'] ?>"> 
                                        <?php
                                        if ($department_data['status'] == 1) {
                                            echo 'قسم شرطة';
                                        }
                                        elseif ($department_data['status'] == 2) {
                                            echo 'مستشفي';
                                        }
                                        else
                                        {
                                            echo 'ملجئ';
                                        }

                                        ?>
                                        
                                    </option>

                                    <option value="1">  قسم شرطة  </option>
                                    <option value="2">  مستشفي  </option>
                                    <option value="3">  ملجئ  </option>


                                

                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">  اسم القسم </label>
                                <input type="text" class="form-control" name="departmentname" value="<?php echo $department_data['department_name'] ?>" id="inputEmail4">
                            </div>
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label"> رقم هاتف القسم </label>
                                <input type="number" class="form-control"  value="<?php echo $department_data['department_phone'] ?>" name="departmentphone" id="inputEmail4">
                            </div>


   
                            <div class="col-md-4">
                                <label for="inputCity" class="form-label"> موقع القسم </label>
                                <input type="text" class="form-control" name="Location"  id="inputCity" value=' <?php echo $department_data['location'] ?>'>
                            </div>


                            

                            <div class="col-md-4">
                                <label for="inputState" class="form-label"> المحافظة </label>
                                <select class="form-select" aria-label="Default select example" id="select_governorate" name="select_governorate">
                                    <option selected value="<?php echo  $department_data['governorate_code']?>"> <?php echo $department_data['governorate_name'] ?> </option>

                                    <?php
                                    foreach ($governorates_fets as $governorates_fet) {

                                    ?>

                                        <option value="<?php echo $governorates_fet["Governorate_code"] ?>"> <?php echo $governorates_fet["Governorate_name"] ?> </option>


                                    <?php
                                    }

                                    ?>


                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="inputState" class="form-label"> المدينة </label>
                                <select id="inputState" class="form-select specific_city_governorate" name="city">
                                    <option  selected value="<?php echo  $department_data['cites_code']?>">  <?php echo $department_data['city_name'] ?></option>

                                </select>
                            </div>

                            <input type="hidden" name="department_id" value="<?php echo  $_GET['id']?>">
                            <div class="col-md-12">
                                <?php echo $department_data['location'] ?>
                            </div>



                        


      
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary"> تعديل قسم </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


            <!-- Button trigger modal -->

        </div>







    </div>









    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="assets/js/dashboard2.js"></script>
    <script src="code/edit_departments/edit_departments.js"></script>

</body>

</html>
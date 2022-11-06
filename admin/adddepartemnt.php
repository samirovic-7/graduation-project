<?php
session_start();
include('auth.php');
include("connection.php");


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
    <link rel="stylesheet" href="assets/css/toastr.min.css">


    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/template.css">

    <link rel="stylesheet" href="assets/css/add_template.css">
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
                                <h2 class="h1"> إضافة اقسام </h2>
                            </div>

                            <div class="alerts" id="alerts">
          
          </div>



                        </div>

                        <br>
                        <form class="row g-3" id="add_department">
                        <div class="col-md-4">
                                <label for="inputState" class="form-label"> اختار القسم </label>
                                <select class="form-select" aria-label="Default select example" name="department_status">
                                    <option selected> اختار  القسم </option>

                                    <option value="1">  قسم شرطة  </option>
                                    <option value="2">  مستشفي  </option>
                                    <option value="3">  ملجئ  </option>


                                

                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">  اسم القسم </label>
                                <input type="text" class="form-control" name="departmentname" id="inputEmail4">
                            </div>
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label"> رقم هاتف القسم </label>
                                <input type="number" class="form-control" name="departmentnamephone" id="inputEmail4">
                            </div>


   
                            <div class="col-md-4">
                                <label for="inputCity" class="form-label"> موقع القسم </label>
                                <input type="text" class="form-control" name="Location"  id="inputCity">
                            </div>


                            

                            <div class="col-md-4">
                                <label for="inputState" class="form-label"> المحافظة </label>
                                <select class="form-select" aria-label="Default select example" id="select_governorate" name="select_governorate">
                                    <option selected> اختار اسم المحافظة </option>

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
                                    <option selected>Choose...</option>

                                </select>
                            </div>




                        


      
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary"> اضافة قسم </button>
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
    <script src="code/adddepartment/adddepartment.js"></script>

</body>

</html>
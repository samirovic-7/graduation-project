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
                                <h2 class="h1"> إضافة مبلغ </h2>
                            </div>

                            <div class="alerts" id="alerts">
          
          </div>



                        </div>

                        <br>
                        <form class="row g-3" id="add_citizine">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> الرقم القومي </label>
                                <input type="number" class="form-control" name="national_number" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> العمر </label>
                                <input type="number" class="form-control" name="age" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label"> البريد الالكتروني </label>
                                <input type="email" class="form-control" name="email" id="inputPassword4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label"> كلمة المرور </label>
                                <input type="password" class="form-control" name="password" id="inputPassword4">
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label"> الاسم الاول </label>
                                <input type="text" class="form-control" name="first_name" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-4">
                                <label for="inputAddress2" class="form-label"> الاسم الثاني </label>
                                <input type="text" class="form-control" name="secondt_name"  id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="col-md-4">
                                <label for="inputCity" class="form-label"> اللقب </label>
                                <input type="text" class="form-control" name="title"  id="inputCity">
                            </div>

                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">  رقم الهاتف الاول </label>
                                <input type="text" class="form-control" name="phoneone" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label"> رقم الهاتف الثاني </label>
                                <input type="text" class="form-control" name="phonetwo" id="inputCity">
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

                            <div class="col-md-4">
                                <label for="inputState" class="form-label"> القسم التابع له </label>
      
                                <select class="form-control" id="department" name="department_code">
                                    <option value="" hidden> اختر القسم </option>



                                </select>

                            </div>


                            <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" name="citizies">
                        </div>
                        


      
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary"> اضافة مواطن </button>
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
    <script src="code/citizine/addcitizines/addcitizines.js"></script>

</body>

</html>
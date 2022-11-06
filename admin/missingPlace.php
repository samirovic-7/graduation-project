<?php
session_start();
include("connection.php");
include('auth.php');
if (isset($_GET["id"])) {
    $missing_id =  $_GET["id"];


    $missing_select = $con->prepare('SELECT missing.* , cities.citiese_name AS "city_name" , governorate.Governorate_name AS "governate_name" ,

     departments.department_name AS "department_name"

    
    FROM missing
    
    INNER JOIN cities ON missing.city_code = cities.cities_code
    
    INNER JOIN governorate ON missing.governorate_code = governorate.Governorate_code

    INNER JOIN departments ON missing.department_code = departments.department_code

    WHERE missing.id=:id');

    $missing_select->bindParam("id", $missing_id);

    $missing_select->execute();

    $missing_data = $missing_select->fetch();
}

?>
<?php 


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
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/template.css">



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
                                <h2 class="h1"> نقل المفقود </h2>
                            </div>


                            <div class="template-search">


                            </div>







                        </div>

                        <br>
                        <div class="alerts" id="alerts">

                        </div>

                        <div class="missing">

                            <div class="row">


                                <input type="hidden" value="<?php echo $missing_data["governorate_code"] ?>" id="governorate_code"/>

                                <form class="row g-3" id="missingplace">

                                <input type="hidden" name="missing_id" value="<?php echo $missing_id ?>">


                                    <div class="col-4">
                                        <label for="inputAddress" class="form-label"> محافظة تواجد المفقود </label>
                                        <input type="text" class="form-control" name="oldgovernorate" id="inputAddress" value="<?php echo $missing_data["governate_name"] ?>" readonly >

                                        <input type="hidden"  name="oldgovernorateid"  value="<?php echo $missing_data["governorate_code"] ?>" >
                                    </div>
                                    <div class="col-4">
                                        <label for="inputAddress2" class="form-label"> مدينة تواجد المفقود </label>
                                        <input type="text" class="form-control" name="oldcity" id="inputAddress2" value="<?php echo $missing_data["city_name"] ?>" readonly>

                                        <input type="hidden"  name="oldcityid"  value="<?php echo $missing_data["city_code"] ?>" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputCity" class="form-label"> جهة البلاغ </label>
                                        <input type="text" class="form-control" name="olddepartment" id="inputCity"  value="<?php echo $missing_data["department_name"] ?>" readonly>

                                        <input type="hidden"  name="olddepartmentid"  value="<?php echo $missing_data["department_code"] ?>" >
                                    </div>




                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label"> مدينة نقل المفقود </label>
                                        <select id="inputState" class="form-select specific_city_governorate" name="city" required>
                                            <option selected>Choose...</option>

                                        </select>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-4">
                                        <div class="form-group" id="radioSelect">
                                            <label for="wrfref"> اختار القسم </label>
                                            <div class="input-group mb-3">

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                                    <label class="form-check-label" for="inlineRadio2">مستشفي</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                                                    <label class="form-check-label" for="inlineRadio3">ملجئ</label>
                                                </div>


                                            </div>
                                        </div>
                                    </div>





                                    <div class="col-lg-5 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="nationality" class="form-label"> مكان الجديد </label>
                                            <select class="form-control" id="department" name="department_code" required>
                                                <option value=""> اختر القسم </option>



                                            </select>

                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>



                                    <button type="submit" class="btn btn-primary"> نقل المفقود </button>

                                </form>





                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <!-- Button trigger modal -->


            <!-- Modal -->

        </div>


    </div>






    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dashboard2.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="code/missinplace/missingplace.js"></script>


</body>

</html>
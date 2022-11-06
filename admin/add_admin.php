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
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/toastr.min.css">
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
                                <h2 class="h1"> إضافة ادمن </h2>
                            </div>

                            <div class="alerts" id="alerts">

                            </div>



                        </div>

                        <br>
                        <form class="row g-3" id="add_admins">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> الرقم القومي </label>
                                <input type="text" class="form-control" name="ssn"  required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> العمر </label>
                                <input type="number" class="form-control" name="age" id="inputEmail4" required>
                            </div>

                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label"> البريد الالكتروني </label>
                                <input type="email" class="form-control" name="email" id="inputPassword4" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label"> كلمة المرور </label>
                                <input type="password" class="form-control" name="password" id="inputPassword4" required>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label"> الاسم الاول </label>
                                <input type="text" class="form-control" name="first_name" id="inputAddress"required >
                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label"> الاسم الثاني </label>
                                <input type="text" class="form-control" name="second_name" id="inputAddress2"required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label"> اللقب </label>
                                <input type="text" class="form-control" name="title" id="inputCity"required>
                            </div>

                            <div class="col-6">
                                <label for="inputAddress2" class="form-label"> رقم الهاتف الاول </label>
                                <input type="text" class="form-control" name="phoneone" id="inputAddress2"required >
                            </div>


                            <div class="col-md-4">
                                <label for="inputState" class="form-label"> المحافظة </label>
                                <select class="form-select" aria-label="Default select example" id="select_governorate" name="select_governorate"required>
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
                                <select id="inputState" class="form-select specific_city_governorate" name="city"required>
                                    <option selected>Choose...</option>

                                </select>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group" id="radioSelect">
                                    <label for="wrfref"> اختار القسم </label>
                                    <div class="input-group mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                            <label class="form-check-label" for="inlineRadio1"> قسم شرطة </label>
                                        </div>
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





                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="nationality" class="form-label"> department </label>
                                    <select class="form-control" id="department" name="department_code"required>
                                        <option value=""> اختر القسم </option>



                                    </select>

                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>




                            <div class="col-12">
                                <button type="submit" class="btn btn-primary"> اضافة ادمن </button>
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

    <script src="assets/js/dashboard2.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="code/admins/add_admin/add_admin.js"></script>

</body>

</html>
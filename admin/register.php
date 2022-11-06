<?php
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

    <link rel="stylesheet" href="assets/css/register.css">


</head>

<body>


    <div class="content">
        <div class="container-fluid">
            <div class="smaill-content">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 img1">
                        <div class="img">
                            <img src="assets/images/login-img.jpg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-lg-6 form1">
                        <div class="form">
                            <div class="title">
                                <h5> تسجيل بيانات الادمن  </h5>
                            
                            </div>
                            <form class="row g-3" id="register">

                                <div class="col-md-12">
                                    <label for="exampleInputEmail1" class="form-label">الرقم القومي</label>
                                    <div class="pos">
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="national_number" placeholder="الرقم القومي">
           
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1" class="form-label">تاريخ الميلاد</label>
                                    <div class="pos">
                                        <input type="date" class="form-control"  name="age"  id="exampleInputEmail1" aria-describedby="firsthelp" placeholder="تاريخ الميلاد">
  
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
                                    <div class="pos">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="lasthelp" name="email" placeholder="البريد الالكتروني">

                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <label for="exampleInputEmail1" class="form-label">كلمة المرور</label>
                                    <div class="pos">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="lasthelp" name="password" placeholder="كلمة المرور">

                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <label for="exampleInputPassword1" class="form-label">الاسم الاول</label>
                                    <div class="pos">
                                        <input type="text" class="form-control"   name="first_name" id="exampleInputPassword1" placeholder="الاسم الاول">

                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="exampleInputPassword1" class="form-label">الاسم الثاني</label>
                                    <div class="pos">
                                        <input type="text" class="form-control"  name="second_name"  id="exampleInputPassword1" placeholder="الاسم الثاني">
                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="exampleInputPassword1" class="form-label">اللقب</label>
                                    <div class="pos">
                                        <input type="text" class="form-control" name="title" id="exampleInputPassword1" placeholder="اللقب">
     
                                    </div>
                                </div>





                                <div class="col-md-12">
                                    <label for="exampleInputPassword1" class="form-label">رقم الهاتف</label>
                                    <div class="pos">
                                        <input type="number" class="form-control"  name="phoneone" id="exampleInputPassword1" placeholder="رقم الهاتف">
    
                                    </div>
                                </div>



                                <div class="col-md-6">
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



                            <div class="col-md-6">
                                <label for="inputState" class="form-label"> المدينة </label>
                                <select id="inputState" class="form-select specific_city_governorate" name="city">
                                    <option selected>اختار المدينة</option>

                                </select>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
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
                                    <label for="nationality" class="form-label"> اختار المؤسسة </label>
                                    <select class="form-control" id="department" name="department">
                                        <option value=""> اختر القسم </option>



                                    </select>

                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>




                                <div class="link">
                                 
                                </div>
                                <button type="submit" class="btn btn-primary">تسجيل البيانات</button>
                                <p> اذا كنت تمتلك حسابا سابقا <a href="login.php"> تسجيل الدخول   </a> </p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="code/register/register.js"></script>
</body>

</html>
<?php
include('connection.php');
require 'front_code/lib/pdodb.php';
require 'front_code/lib/helper.php';
require 'front_code/registration/user.php';
session_start();
$user = new user;
if (isset($_POST['logout'])) {
    helper::logout();
}
if (!isset($_SESSION['email'])) : (new helper())->redirect("index");
    die;
endif;





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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- <link rel="shortcut icon" href="assets/image/index/small_img/logoIcon.png" /> -->
    <link rel="stylesheet" href="assets/style/bootstrap5.min.css" />
    <link rel="stylesheet" href="assets/style/all.min.css" />
    <link rel="stylesheet" href="assets/style/toastr.min.css" />
    <link rel="stylesheet" href="assets/style/user_profile.css">
    <link rel="stylesheet" href="assets/style/userdata.css">
    <link rel="stylesheet" href="assets/style/header.css">

    <title>بيانات الستخدم</title>
</head>

<body>

    <!-- start Header-->
    <header>
        <div class="lg_header">
            <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 0) : ?>
                <div class="completeInfo">
                    <div class="container">
                        <p>برجاء استكمال البيانات و تفعيل الحساب لتتكمن من النشر <a href="userdate.php" class="opacity_hover">استكمال البيانات</a></p>
                    </div><!-- ./container -->
                </div><!-- ./completeInfo -->
            <?php endif; ?>
            <div class="overlay"></div>
            <div class="container">
                <div class="lg_header_content">
                    <div class="logo">
                        <h1><a href="index.php"><img src="assets/images/home/logo2.png" alt=""></a></h1>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="index.php" class="nav_item ">الصفحة الرئيسية</a></li>
                            <li><a href="missing.php" class="nav_item">الأشخاص المفقودون</a></li>
                            <li><a href="notmissing.php" class="nav_item">أشخاص تم العثور عليهم</a></li>
                            <?php if (isset($_SESSION['status']) && $_SESSION['status'] != 0) : ?>
                                <li><a href="addMissing.php" class="nav_item">إضافة مفقود</a></li>
                            <?php endif; ?>
                            <li><a href="about.php" class="nav_item">من نحن</a></li>
                            <li><a href="contact.php" class="nav_item">التواصل معنا</a></li>
                            <?php if (!$user->checkLogin()) : ?>
                                <li class="user_log">
                                    <a href="register.php" class="nav_item">التسجيل</a>
                                    <a href="login.php" class="nav_item">تسجيل دخول</a>
                                </li><!-- ./user_log -->
                            <?php endif; ?>
                            <?php if ($user->checkLogin()) : ?>
                                <li class="user_options">
                                    <a class="nav_item username"><?= $_SESSION['name'] ?></a>
                                    <div class="menu shadow">
                                        <ul>
                                            <li><a href="userdate.php">تعديل البيانات</a></li>
                                            <?php if (isset($_SESSION['status']) && $_SESSION['status'] != 0) : ?>
                                                <li><a href="user_profile.php?id=<?php echo $_SESSION['ssn']  ?>">عرض الملف الشخصي</a></li>
                                            <?php endif; ?>
                                            <li>
                                                <form action="index.php" method="post"><a><button type="submit" class="d-block w-100 text-end" name="logout">تسجيل الخروج</button></a></form>
                                            </li>
                                        </ul>
                                    </div><!-- ./menu -->
                                </li><!-- ./user_options -->
                            <?php endif; ?>

                        </ul>
                        <div class="search_content" title="ابحث باستخدام الاسم او الرقم القومي">
                            <button class="search_icon"><i class="fas fa-search"></i></button>
                            <form class="search_form shadow" action="missing.php" method="get">
                                <input type="text" name="searchValue" placeholder="البحث عن شخص مفقود" id="">
                                <button class="search_btn opacity_hover">ابحث</button>
                            </form><!-- ./search_form -->
                        </div><!-- ./search_content -->
                    </nav>
                    <div class="sm_nav_icon opacity_hover"><i class="fas fa-bars openNav"></i></div>
                </div><!-- ./lg_header_content -->
            </div><!-- ./container -->
        </div><!-- ./lg_header -->


        <div class="sideNav">
            <nav>
                <ul>
                    <div class="search_content ">
                        <form class="search_form" action="missing.php" method="get">
                            <input type="text" name="searchValue" placeholder="البحث عن شخص مفقود" id="">
                            <button class="search_btn opacity_hover">ابحث</button>
                        </form>
                    </div><!-- ./search_content -->
                    <li><a href="index.php" class="nav_item ">الصفحة الرئيسية</a></li>
                    <li><a href="missing.php" class="nav_item">الأشخاص المفقودون</a></li>
                    <li><a href="notmissing.php" class="nav_item">أشخاص تم العثور عليهم</a></li>
                    <?php if (isset($_SESSION['status']) && $_SESSION['status'] != 0) : ?>
                        <li><a href="addMissing.php" class="nav_item">إضافة مفقود</a></li>
                    <?php endif; ?>
                    <li><a href="about.php" class="nav_item">من نحن</a></li>
                    <li><a href="contact.php" class="nav_item">التواصل معنا</a></li>
                    <?php if (!$user->checkLogin()) : ?>
                        <li class="user_log">
                            <a href="register.php" class="nav_item">التسجيل</a>
                            <a href="login.php" class="nav_item">تسجيل دخول</a>
                        </li><!-- ./user_log -->
                    <?php endif; ?>
                    <?php if ($user->checkLogin()) : ?>
                        <li class="user_options">
                            <a class="nav_item username"><?= $_SESSION['name'] ?></a>
                            <div class="menu shadow">
                                <ul>
                                    <li><a href="userdate.php">تعديل البيانات</a></li>
                                    <?php if (isset($_SESSION['status']) && $_SESSION['status'] != 0) : ?>
                                        <li><a href="user_profile.php?id=<?php echo $_SESSION['ssn']  ?>">عرض الملف الشخصي</a></li>
                                    <?php endif; ?>
                                    <li>
                                        <form action="index.php" method="post"><a><button type="submit" class="d-block w-100 text-end" name="logout">تسجيل الخروج</button></a></form>
                                    </li>
                                </ul>
                            </div><!-- ./menu -->
                        </li><!-- ./user_options -->
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="overlay"></div>
        </div><!-- ./sideNav -->
    </header>






    <!--------userdata-->


    <section class="breadCrumb">
        <div class="container">
            <ul class="breadCrumbItems">
                <li><a href="index.html" class="text-hover-black">الصفحة الرئيسية</a></li>
                <li>بينات الستخدم</li>
            </ul><!-- ./breadCrumbItems -->
        </div><!-- ./container -->
    </section><!-- ./breadCrumb -->
    <!-- end Header-->



    <!--------userdata-->

    <?php


    $sel = $con->prepare('SELECT * FROM citizines WHERE ssn=:ssn');

    $sel->bindParam('ssn', $_SESSION['ssn']);
    $sel->execute();

    $data = $sel->fetch();





    ?>

    <div class="user_date">

        <div class="container">

            <div class="row">

                <form class="row g-3" id='user_date'>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="staticEmail2">الاسم الاول</label>
                            <input type="text" class="form-control" id="inputPassword2" name="First_name" placeholder="الاسم الاول" value="<?php echo $data['First_name'] ?>">
                        </div>
                        <div class="col-lg-4">
                            <label for="inputPassword2">الاسم الثاني</label>
                            <input type="text" class="form-control" id="inputPassword2" name="Last_name" placeholder=" الرجاء ادخال الاسم الثاني" value="<?php echo $data['mid_name'] ?>">
                        </div>
                        <div class="col-lg-4">
                            <label for="inputPassword2">لقب العائلة</label>
                            <input type="text" class="form-control" id="inputPassword2" name="title" placeholder="لقب العائلة" value="<?php echo $data['last_name'] ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <label for="staticEmail2">الرقم القومي</label>
                            <input type="number" class="form-control" id="inputPassword2" name="ssn" placeholder="الرقم القومي" value="<?php echo $data['ssn'] ?>" readonly>
                        </div>
                        <div class="col-lg-4">
                            <label for="inputPassword2"> البريد الالكتروني</label>
                            <input type="email" class="form-control" id="inputPassword2" name="email" placeholder=" البريد الالكتروني" value="<?php echo $data['email'] ?>">
                        </div>
                        <div class="col-lg-4">
                            <label for="inputPassword2"> العمر</label>
                            <input type="number" class="form-control" id="inputPassword2" name="age" placeholder=" الرجاء إدخال العمر" value="<?php echo $data['age'] ?>">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4">
                            <label for="staticEmail2"> رقم الهاتف الاول</label>
                            <input type="number" class="form-control" id="inputPassword2" name="first_phone" placeholder=" رقم الهاتف الاول" value="<?php echo $data['first_phone'] ?>">
                        </div>
                        <div class="col-lg-4">
                            <label for="inputPassword2"> رقم الهاتف الثاني</label>
                            <input type="number" class="form-control" id="inputPassword2" name="second_phone" placeholder="   رقم الهاتف الثاني" value="<?php echo $data['second_phone'] ?>">
                        </div>
                        <div class="col-lg-4">
                            <label for="inputPassword2"> إدخال صورة البطاقة</label>
                            <input type="file" class="form-control" id="inputPassword2" name="photo" placeholder=" البريد الالكتروني">
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg-4">
                            <label for="staticEmail2"> المحافظة</label>
                            <select class="form-select" aria-label="Default select example" id="select_governorate" name="select_governorate">
                                <option selected> اختار اسم المحافظة </option>

                                <?php
                                foreach ($governorates_fets as $governorates_fet) {

                                ?>

                                    <option value="<?php echo $governorates_fet["Governorate_code"] ?>" <?php if ($governorates_fet["Governorate_code"]  == $data['governorate_code']) {
                                                                                                        ?> selected <?php
                                                                                                        } else {
                                                                                                            echo 'الرجاء إدخال المحافظة';
                                                                                                        } ?>> <?php echo $governorates_fet["Governorate_name"] ?> </option>


                                <?php
                                }

                                ?>


                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label"> المدينة </label>
                            <select id="inputState" class="form-select specific_city_governorate" name="city" required>
                                <?php
                                $city = $con->prepare('SELECT *FROM cities WHERE cities_code=:cities_code');

                                $city->bindParam('cities_code', $data['city_code']);
                                $city->execute();

                                $countCity = $city->rowcount();



                                $city_data = $city->fetch();




                                ?>
                                <?php
                                if ($countCity == 0) {
                                ?> <option selected> الرجاء إختار المدينة </option> <?php
                                                                                        } else {
                                                                                            ?> <option selected value="<?php echo $city_data['cities_code'] ?>"><?php echo $city_data['citiese_name'] ?></option> <?php
                                                                                                                                                            }


                                                                                                                                                                ?>


                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="inputState" class="form-label"> القسم التابع له </label>

                            <select class="form-control" id="department" name="department_code" required>
                                <?php
                                $department = $con->prepare('SELECT *FROM departments WHERE department_code=:department_code ');

                                $department->bindParam('department_code', $data['department_code']);
                                $department->execute();

                                $countDepartment = $department->rowCount();
                                $department_data = $department->fetch();



                                ?>
                                <?php

                                if ($countDepartment == 0) {
                                ?>
                                    <option> الرجاء إدخال القسم التابع له</option>

                                <?php
                                } else {
                                ?> <option value="<?php echo $department_data['department_code'] ?>" hidden> <?php echo $department_data['department_name'] ?> </option>
                                <?php
                                }

                                ?>



                            </select>

                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                    <button type="submit" class="btn btn-primary"> تفعيل البيانات </button>

                </form>

            </div>

        </div>
    </div>




    <!--------userdata-->











































































    <footer>
        <div class="footer_content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="footer_logo"><a href="index.php"><img src="assets/images/home/logo2_dark.png" alt=""></a></div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <!-- <h3 class="footer_title">أقسام الموقع</h3> -->
                        <div class="footer_item">
                            <ul class="footer_list">
                                <li><a href="index.php">الصفحة الرئيسية</a></li>
                                <li><a href="missing.php">الأشخاص المفقودون</a></li>
                            </ul><!-- ./footer_list -->
                            <ul class="footer_list">
                                <li><a href="notmissing.php">أشخاص تم العثور عليهم</a></li>
                                <li><a href="about.php">من نحن</a></li>
                            </ul><!-- ./footer_list -->
                            <ul class="footer_list">
                                <li><a href="contact.php">التواصل معنا</a></li>

                            </ul><!-- ./footer_list -->
                            <?php if (!$user->checkLogin()) : ?>
                                <ul class="footer_list">
                                    <li><a href="login.php">تسجيل دخول</a></li>
                                    <li>
                                        <a href="register.php">التسجيل</a>
                                    </li>
                                </ul><!-- ./footer_list -->
                            <?php endif; ?>
                            <?php if ($user->checkLogin()) : ?>
                                <ul class="footer_list">
                                    <li><a href="user_profile.php?id=<?php echo $_SESSION['ssn']  ?>">عرض الملف الشخصي</a></li>
                                    <li>
                                        <form action="index.php" method="post"><a><button type="submit" class="d-block w-100 text-end" name="logout">تسجيل الخروج</button></a></form>
                                    </li>
                                </ul><!-- ./footer_list -->
                            <?php endif; ?>


                        </div><!-- ./footer_item -->
                    </div>
                </div><!-- ./row -->
            </div><!-- ./container -->
        </div><!-- ./footer_content -->
        <div class="copy">جميع الحقوق محفوظة © 2022 دار المفقودين</div><!-- ./copy -->
    </footer>



    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="assets/js/userdata.js"></script>
    <script src="assets/js/bootstrap5.min.js"></script>
    <script src="front_code/activate_citizines/activate.js"></script>
</body>

</html>
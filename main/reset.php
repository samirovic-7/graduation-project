<?php
session_start();

require 'front_code/lib/pdodb.php';
require 'front_code/lib/helper.php';
require 'front_code/registration/user.php';
$user = new user;
if($user->checkLogin()){
    (new helper())->redirect("index");die;
}
$success = '';
$error = '';
if(isset($_GET['op']) && $_GET['op'] =="827ccb0eea8a706c4c34a16891f84e7b"){
    $ssn = $_GET['e'];
    $ssn = substr($ssn, 9, strlen($ssn)-18);
    $data = "password";
    $res =$user->selectUserReset($data, ["ssn"=>$ssn, "email"=>$ssn]);
    if($res){
        if(!password_verify("0", $res['password'])){
            (new helper())->redirect("reset");die;
            
        }else{
            echo 'invalid';
        }

    }else{
        echo 'not exist';
    }
}


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
    <link rel="stylesheet" href="assets/style/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/style/all.min.css" />
    <link rel="stylesheet" href="assets/style/login.css">
    <link rel="stylesheet" href="assets/style/header.css">

    <title> اعادة تعيين كلمة المرور  </title>
</head>
<body>
<header>
        <div class="lg_header">
            <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 0): ?>
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
                            <?php if(isset($_SESSION['status']) && $_SESSION['status'] != 0): ?>
                                <li><a href="addMissing.php" class="nav_item">إضافة مفقود</a></li>
                            <?php endif; ?>
                            <li><a href="about.php" class="nav_item">من نحن</a></li>
                            <li><a href="contact.php" class="nav_item">التواصل معنا</a></li>
                            <?php if(!$user->checkLogin()):?>
                                <li class="user_log">
                                    <a href="register.php" class="nav_item">التسجيل</a>
                                    <a href="login.php" class="nav_item">تسجيل دخول</a>
                                </li><!-- ./user_log -->
                            <?php endif; ?>
                            <?php if($user->checkLogin()):?>
                                <li class="user_options">
                                    <a class="nav_item username"><?= $_SESSION['name'] ?></a>
                                    <div class="menu shadow">
                                        <ul>
                                            <li><a href="userdate.php">تعديل البيانات</a></li>
                                            <?php if(isset($_SESSION['status']) && $_SESSION['status'] != 0): ?>
                                                <li><a href="user_profile.php?id=<?php echo $_SESSION['ssn']  ?>">عرض الملف الشخصي</a></li>
                                            <?php endif; ?>
                                            <li><form action="index.php" method="post"><a><button type="submit" class="d-block w-100 text-right" name="logout">تسجيل الخروج</button></a></form></li>
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
                        <form class="search_form"  action="missing.php" method="get">
                            <input type="text" name="searchValue"  placeholder="البحث عن شخص مفقود" id="">
                            <button class="search_btn opacity_hover">ابحث</button>
                        </form>
                    </div><!-- ./search_content -->
                    <li><a href="index.php" class="nav_item ">الصفحة الرئيسية</a></li>
                    <li><a href="missing.php" class="nav_item">الأشخاص المفقودون</a></li>
                    <li><a href="notmissing.php" class="nav_item">أشخاص تم العثور عليهم</a></li>
                    <?php if(isset($_SESSION['status']) && $_SESSION['status'] != 0): ?>
                                <li><a href="addMissing.php" class="nav_item">إضافة مفقود</a></li>
                            <?php endif; ?>
                    <li><a href="about.php" class="nav_item">من نحن</a></li>
                    <li><a href="contact.php" class="nav_item">التواصل معنا</a></li>
                    <?php if(!$user->checkLogin()):?>
                        <li class="user_log">
                            <a href="register.php" class="nav_item">التسجيل</a>
                            <a href="login.php" class="nav_item">تسجيل دخول</a>
                        </li><!-- ./user_log -->
                    <?php endif; ?>
                    <?php if($user->checkLogin()):?>
                        <li class="user_options">
                            <a class="nav_item username"><?= $_SESSION['name'] ?></a>
                            <div class="menu shadow">
                                <ul>
                                <li><a href="userdate.php">تعديل البيانات</a></li>
                                    <?php if(isset($_SESSION['status']) && $_SESSION['status'] != 0): ?>
                                        <li><a href="user_profile.php?id=<?php echo $_SESSION['ssn']  ?>">عرض الملف الشخصي</a></li>
                                    <?php endif; ?>
                                    <li><form action="index.php" method="post"><a><button type="submit" class="d-block w-100 text-right" name="logout">تسجيل الخروج</button></a></form></li>
                                </ul>
                            </div><!-- ./menu -->
                        </li><!-- ./user_options -->
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="overlay"></div>
        </div><!-- ./sideNav -->
    </header>

    <main>
        <section class="sign">
        <div class="loading-overlay"><div class="loader"></div></div>
            <div class="container">
                <div class="sign_content">
                    <div class="sign_content_img"><div class="overlay"></div></div>
                    <?php if(!isset($_GET['op'])): ?>
                    <div class="sign_content_inner">
                        <div class="sign_content_icon"><i class="fas fa-lock"></i></div>
                        <h2 class="sign_title">نسيت كلمة السر</h2>
                        <form action="reset.php" method="post" id='resetForm' class="sign_form">
                            <div class="success">
                                <div class="alert   alert-success" role="alert">
                                </div>
                            </div>
                            <div class="error">
                                <div class="alert  alert-danger" role="alert">
                                </div>
                            </div>
                            <label for="email"> ادخل الرقم القومي أو البريد الإلكتروني</label>
                            <input type="text" class="form_input" required name="email" id="email" placeholder="الرقم القومي أو البريد الإلكتروني">
                            <button class="white_hover sign_btn">ارسال رمز</button>
                        </form><!-- ./sign_form -->
                        <div class="sign_other_pages">
                        <p>ليس لديك حساب؟ <a href="register.php" class="main opacity_hover">التسجيل</a></p>
                             <p>لديك حساب بالفعل؟ <a href="login.php" class="main opacity_hover">تسجيل الدخول</a></p>
                        </div><!-- ./sign_other_pages -->
                    </div><!-- ./sign_content_inner -->
                    <?php endif; ?>
                    <?php if(isset($_GET['op']) && $_GET['op'] =="827ccb0eea8a706c4c34a16891f84e7b"): ?>
                    <div class="sign_content_inner">
                        <div class="sign_content_icon"><i class="fas fa-lock"></i></div>
                        <h2 class="sign_title">اعادة تعيين كلمة السر</h2>
                        <form action="reset.php" method="post" id="newPassForm" class="sign_form">
                            <div class="success">
                                <div class="alert   alert-success" role="alert">
                                </div>
                            </div>
                            <div class="error">
                                <div class="alert  alert-danger" role="alert">
                                </div>
                            </div>
                            <label for="password">ادخل كلمة السر الجديدة</label>
                            <input type="password" class="form_input" name="password" required minlength="8" id="password" placeholder="*************">
                            <label for="repass">اعد ادخال كلمة السر الجديدة</label>
                            <input type="password" class="form_input" name="repass" required minlength="8" id="repass" placeholder="*************">
                            <button class="white_hover sign_btn">حفظ</button>
                        </form><!-- ./sign_form -->
                        <div class="sign_other_pages">
                            <p>ليس لديك حساب؟ <a href="register.php" class="main opacity_hover">التسجيل</a></p>
                             <p>لديك حساب بالفعل؟ <a href="login.php" class="main opacity_hover">تسجيل الدخول</a></p>
                        </div><!-- ./sign_other_pages -->
                    </div><!-- ./sign_content_inner -->
                    <?php endif; ?>
                </div><!-- ./sign_content -->
            </div><!-- ./container -->
        </section><!-- ./sign -->

        <section class="contact padd">
            <div class="overlay"></div>
            <div class="container">
                <div class="contact_content">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 right">
                            <h2 class="contact_title">عندك اي سؤال او شكوي؟</h2>
                            <p class="contact_desc">تواصل معنا و ساعدنا في تحسين خدماتنا</p>
                        </div>
                        <div class="col-sm-6 col-12 left">
                            <a href="contact.php" class="contact_link">تواصل معنا الان</a>
                        </div>
                    </div>
                </div><!-- ./contact_content -->
            </div><!-- ./container -->
        </section><!-- ./contact -->
    </main>


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
                                <li><a href="donation.php">تبرع لدعم دور الأيتام</a></li>
                            </ul><!-- ./footer_list -->
                            <?php if(!$user->checkLogin()):?>
                                <ul class="footer_list">
                                    <li><a href="login.php">تسجيل دخول</a></li>
                                    <li>
                                        <a href="register.php">التسجيل</a>
                                    </li>
                                </ul><!-- ./footer_list -->
                            <?php endif; ?>
                            <?php if($user->checkLogin()):?>
                                <ul class="footer_list">
                                    <li><a href="user_profile.php?id=<?php echo $_SESSION['ssn']  ?>">عرض الملف الشخصي</a></li>
                                    <li>
                                        <form action="index.php" method="post"><a><button type="submit" class="d-block w-100 text-right" name="logout">تسجيل الخروج</button></a></form>
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
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/sign.js"></script>
    <script src="front_code/registration/reset.js"></script>









    </body>
    </html>
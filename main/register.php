<?php
session_start();



require 'front_code/lib/pdodb.php';
require 'front_code/lib/helper.php';
require 'front_code/registration/user.php';
$user = new user;

if($user->checkLogin()){
    (new helper())->redirect("index");die;
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

    <title> التسجيل  </title>
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
                                    <a href="register.php" class="nav_item active">التسجيل</a>
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
                            <a href="register.php" class="nav_item active">التسجيل</a>
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
            <div class="container">
                <div class="sign_content">
                    <div class="sign_content_img"><div class="overlay"></div></div>
                    <div class="sign_content_inner">
                        <div class="sign_content_icon"><i class="fas fa-user"></i></div>
                        <h2 class="sign_title">انشاء حساب</h2>
                        <form action="register.php" method="post" id="register" class="sign_form">
                            <div class="success">
                                <div class="alert   alert-success" role="alert">
                                </div>
                            </div>
                            <div class="error">
                                <div class="alert  alert-danger" role="alert">
                                </div>
                            </div>
                            <div class="form_group">
                                <div>
                                    <label for="fname">الاسم الاول</label>
                                    <input type="text" class="form_input" required name="fname" id="fname" placeholder="الاسم الاول">
                                </div>
                                <div>
                                    <label for="lname">اسم العائلة</label>
                                    <input type="text" class="form_input" required name="lname" id="lname" placeholder="اسم العائلة">
                                </div>
                            </div><!-- ./form_group -->
                            <label for="ssn">الرقم القومي</label>
                            <input type="text" class="form_input" name="ssn" required id="email" placeholder="الرقم القومي">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="text" class="form_input" name="email" required id="email" placeholder="البريد الإلكتروني">
                            <label for="password">كلمة المرور</label>
                            <input type="password" class="form_input" name="password" minlength="8" required id="password" placeholder="********">
                            <label for="repass">اعد كتابة كلمة المرور</label>
                            <input type="password" class="form_input" name="repass" minlength="8" required id="repass" placeholder="********">
                            <button class="white_hover sign_btn" type="submit"  id="register">تسجيل</button>
                        </form><!-- ./sign_form -->
                        <div class="sign_other_pages">
                            <p>لديك حساب بالفعل؟ <a href="login.php" class="main opacity_hover">تسجيل الدخول</a></p>
                            <p><a href="reset.php" class="red opacity_hover">نسيت كلمةالسر؟</a></p>
                        </div><!-- ./sign_other_pages -->
                    </div><!-- ./sign_content_inner -->
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
                                    <li><a href="persons_profile.php">عرض الملف الشخصي</a></li>
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
    <script src="front_code/registration/register.js"></script>









    </body>
    </html>
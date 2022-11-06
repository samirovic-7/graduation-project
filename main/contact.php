<?php
include('connection.php');
require 'front_code/lib/pdodb.php';
require 'front_code/lib/helper.php';
require 'front_code/registration/user.php';
session_start();
$user = new user;
if(isset($_POST['logout'])){
    helper::logout();
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
    <link rel="stylesheet" href="assets/style/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/style/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/style/toastr.min.css">

    <link rel="stylesheet" href="assets/style/all.min.css" />
    <link rel="stylesheet" href="assets/style/contact.css">
    <link rel="stylesheet" href="assets/style/header.css">
  <title>تواصل معانا</title>
</head>
<body>
    <!-- start part1-->
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
                            <li><a href="contact.php" class="nav_item active">التواصل معنا</a></li>
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
                    <li><a href="contact.php" class="nav_item active">التواصل معنا</a></li>
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

    <!-- end part1-->

    <!-- start part2-->
<main>
    <section class="banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner_content">
                <h2 class="banner_title">تواصل معانا</h2>
                <div class="breadCrumb">
                    <ul class="breadCrumbItems">
                        <li><a href="index.html" class="text-hover-black">الصفحة الرئيسية</a></li>
                        <li>تواصل معنا</li>
                    </ul><!-- ./breadCrumbItems -->    
                </div><!-- ./breadCrumb -->
                
            </div><!-- ./banner_content -->
        </div><!-- ./container -->
    </section><!-- ./banner -->

    <!-- end part2-->

    <section class="contact padd">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact_content">
                        <div class="section_title">
                            <h2>ابقى على تواصل</h2>
                        </div><!-- ./section_title -->
                        <form class="contact_form row" id="contact">
                            <div class="col-md-6">
                             
                              <input type="text" class="form_input" id="inputEmail4" placeholder="الاسم الاول " name="first_name" required>
                            </div>
                            <div class="col-md-6">
                            
                              <input type="text" class="form_input" id="inputPassword4" placeholder="اللقب" name="title" required>
                            </div>
                            <div class="col-12">
                              
                              <input type="text" class="form_input" id="inputAddress" placeholder="رقم الهاتف" name="phone" required>
                            </div>
                            <div class="col-12">
                              
                              <input type="email" class="form_input" id="inputAddress2" placeholder="البريد الالكترونى" name="email" required> 
                            </div>
                            
                            <div class="col-12"> 
                                <textarea class="form_input" placeholder="اكتب رسالتك" id="floatingTextarea2" name="message" required></textarea>
                            </div>
                            
                            <div class="col-12 text-center">
                              <button type="submit" class=" white_hover"id="contact">ارسال</button>
                            </div>
                        </form>
                    </div><!-- ./contact_content -->
                </div>
                <div class="col-lg-6">
                    <!-- <img src="" alt="" class="contact_img"> -->
                    <div class="contact_img shadow">
                        <img src="assets/images/contact/pexels-karolina-grabowska-4195401.jpg" alt="">
                        <div class="overlay"></div>
                    </div><!-- ./contact_img -->
                </div>
            </div>
        </div><!-- ./container -->
    </section><!-- ./contact -->

    <!-- start part3-->
</main>
    <!-- end part3-->



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
    <script src="assets/js/toastr.min.js"></script>

    <script src="assets/js/contact.js"></script>

    <script src="front_code/contact/contact.js"></script>
</body>
</html>
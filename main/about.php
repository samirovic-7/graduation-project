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
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- <link rel="shortcut icon" href="assets/image/index/small_img/logoIcon.png" /> -->
    <link rel="stylesheet" href="assets/style/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/style/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/style/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/style/all.min.css" />
    <link rel="stylesheet" href="assets/style/header.css">
    <link rel="stylesheet" href="assets/style/about.css">
    <title>من نحن </title>
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
                                <li><a href="addMissing.php"  class="nav_item">إضافة مفقود</a></li>
                            <?php endif; ?>
                            <li><a href="about.php" class="nav_item active">من نحن</a></li>
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
                                <li><a href="addMissing.php"  class="nav_item">إضافة مفقود</a></li>
                            <?php endif; ?>
                    <li><a href="about.php" class="nav_item active">من نحن</a></li>
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

        <section class="banner">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner_content">
                    <h2 class="banner_title">مَن نحن</h2>
                    <div class="breadCrumb">
                        <ul class="breadCrumbItems">
                            <li><a href="index.html" class="text-hover-black">الصفحة الرئيسية</a></li>
                            <li>مَن نحن</li>
                        </ul><!-- ./breadCrumbItems -->    
                    </div><!-- ./breadCrumb -->
                    
                </div><!-- ./banner_content -->
            </div><!-- ./container -->
        </section><!-- ./banner -->
        <section class="about padd">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="section_title">
                                <h2>مَن نحن</h2>
                            </div><!-- ./section_title -->
                           
                            <h3 class="about_subtitle"> يهدف موقع دار المفقودين الي تقديم يد العون للحد من ظاهرة إختفاء الاشخاص عموما و الاطفال و كبار السن بخاصة
                        وذلك بعد انتشار هذه الظاهره بشكل كبير في المجتمع المصري في الآونة الأخيرة  ويركز الموقع علي:</h3>
                            <ul class="about_list">
                                <li>الأطفال</li>
                                <li>ذوي الاحتياجات الخاصة</li>
                                <li>كبار السن و خاصة من ذوي المشاكل الصحية.</li>
                            </ul><!-- ./about_list -->
                        </div><!-- ./about_content -->
                    </div>
                    <div class="col-lg-6">
                        <!-- <img src="" alt="" class="about_img"> -->
                        <div class="about_img shadow">
                            <img src="assets/images/about/pexels-pixabay-461049.jpg" alt="">
                            <div class="overlay"></div>
                        </div><!-- ./about_img -->
                    </div>
                </div>
            </div><!-- ./container -->
        </section><!-- ./about -->
        <section class="team">
            <div class="container">
                <div class="team_content padd">
                    <div class="section_title">
                        <h2>أعضاء الفريق</h2>
                    </div><!-- ./section_title -->
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="item_content">
                                <img src="assets/images/about/IMG-20210311-WA0109.jpg" alt="" class="item_img w-100">
                                <div class="item_content_text">
                                    <h3 class="item_title">Abdallah Elrhmany</h3>
                                    <p class="item_job">Fullstack Developer</p>
                                    <ul class="team_list ">
                                        <li><a href="#"><i class="icon fab fa-github"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div><!-- ./item_content_text -->
                            </div><!-- ./item_content -->
                            
                        </div><!-- ./item -->
                        <div class="item">
                            <div class="item_content">
                                <img src="assets/images/about/WhatsApp Image 2022-07-13 at 3.25.18 AM.jpeg" alt="" class="item_img w-100">
                                <div class="item_content_text">
                                    <h3 class="item_title">Aya Ibrahim</h3>
                                    <p class="item_job">Frontend Developer</p>
                                    <ul class="team_list">
                                        <li><a href="#"><i class="icon fab fa-github"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div><!-- ./item_content_text -->
                            </div><!-- ./item_content -->
                            
                        </div><!-- ./item -->
                        <div class="item">
                            <div class="item_content">
                                <img src="assets/images/about/286240909_3208804056043639_2168701931967021515_n.jpg" alt="" class="item_img w-100">
                                <div class="item_content_text">
                                    <h3 class="item_title">Ahmed Essam</h3>
                                    <p class="item_job">Fullstack</p>
                                    <ul class="team_list">
                                        <li><a href="#"><i class="icon fab fa-github"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div><!-- ./item_content_text -->
                            </div><!-- ./item_content -->
                            
                        </div><!-- ./item -->
                        <div class="item">
                            <div class="item_content">
                                <img src="assets/images/about/WhatsApp Image 2022-07-13 at 5.54.14 AM.jpeg" alt="" class="item_img w-100">
                                <div class="item_content_text">
                                    <h3 class="item_title">Abdelhamed Ahmed</h3>
                                    <p class="item_job">Backend Developer</p>
                                    <ul class="team_list">
                                        <li><a href="#"><i class="icon fab fa-github"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div><!-- ./item_content_text -->
                            </div><!-- ./item_content -->
                            
                        </div><!-- ./item -->
                        <div class="item">
                            <div class="item_content">
                                <img src="assets/images/about/9.jpg" alt="" class="item_img w-100">
                                <div class="item_content_text">
                                    <h3 class="item_title">Abdallah Elrhmany</h3>
                                    <p class="item_job">Fullstack Developer</p>
                                    <ul class="team_list">
                                        <li><a href="#"><i class="icon fab fa-github"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div><!-- ./item_content_text -->
                            </div><!-- ./item_content -->
                            
                        </div><!-- ./item -->
                        <div class="item">
                            <div class="item_content">
                                <img src="assets/images/about/11.jpg" alt="" class="item_img w-100">
                                <div class="item_content_text">
                                    <h3 class="item_title">Abdallah Elrhmany</h3>
                                    <p class="item_job">Fullstack Developer</p>
                                    <ul class="team_list">
                                        <li><a href="#"><i class="icon fab fa-github"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div><!-- ./item_content_text -->
                            </div><!-- ./item_content -->   
                        </div><!-- ./item -->
                    </div><!-- ./owl-carousel -->
                </div><!-- ./team_content -->
            </div><!-- ./container -->
        </section><!-- ./team -->
    </main>



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
                        <a href="contact.html" class="contact_link">تواصل معنا الان</a>
                    </div>
                </div>
            </div><!-- ./contact_content -->
        </div><!-- ./container -->
    </section><!-- ./contact -->
    
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
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/about.js"></script>
</body>
</html>
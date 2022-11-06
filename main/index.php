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

//query that select the missing person

$select_missing = $con->prepare("SELECT * FROM missing WHERE missingType = 0 limit 10");

$select_missing->execute();

$fets_missings = $select_missing->fetchAll();


//query that select the missing person that was founded

$select_founded = $con->prepare("SELECT * FROM missing WHERE missingType = 1 limit 10");

$select_founded->execute();

$fets_founds = $select_founded->fetchAll();


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
    <link rel="stylesheet" href="assets/style/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/style/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/style/all.min.css" />
    <link rel="stylesheet" href="assets/style/main.css">
    <title>الصفحة الرئيسية</title>
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
                            <li><a href="index.php" class="nav_item active">الصفحة الرئيسية</a></li>
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
                    <li><a href="index.php" class="nav_item active">الصفحة الرئيسية</a></li>
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
        <section class="banner">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner_content">
                    <h2 class="banner_title">دار المفقودين</h2>
                    <p class="banner_desc">هدفنا الكل يشارك و نجمع<br />
                        بين كل غايب و أهله</p>
                    <a href="missing.php" class="banner_link white_hover">الأشخاص المفقودون</a>
                </div><!-- ./banner_content -->
            </div><!-- ./container -->
        </section><!-- ./banner -->

        <section class="missing padd">
            <div class="container">
                <div class="section_title">
                    <h2>آخر الأشخاص المفقودون</h2>
                </div><!-- ./section_title -->
                <div class="owl-carousel owl-theme">

                    <?php
                    foreach ($fets_missings as $fets_missing) {

                    ?>
                        <!-- query that select the missing person  -->
                        <div class="item">
                        <img src="../admin/code/add_missing/upload/missing/<?= substr($fets_missing['image'], 8, strlen($fets_missing['image'])) == '' ?  "noImage.png" :  $fets_missing['image'] ?>" alt="" class="missing_img">
                            <div class="missing_details">
                                <p class="missing_name"><span class="subtitle">اسم المفقود : </span> 
                                <?php 
                                                if (empty($fets_missing["First_Name"] && $fets_missing["Mid_Name"] && $fets_missing["Last_Name"] )) {
                                                    
                                    echo 'اسم المفقود غير ؤ';
                                                }
                                                else
                                                {
                                                    echo $fets_missing["First_Name"] .' '. $fets_missing["Mid_Name"] .' '. $fets_missing["Last_Name"];
                                                }

?>
                                </p>
                                <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span>  <?php echo $fets_missing['missing_date'] ?></p>

                                <!-- <p class="missing_desc"> <?php echo $fets_missing['notes'] ?></p> -->
                                <a href="missingdetailes.php?comment_code=<?php echo $fets_missing['id']  ?>"  class="missing_page opacity_hover">اقرأ المزيد</a>
                            </div><!-- ./missing_details -->
                        </div><!-- ./item -->
                    <?php
                    }

                    ?>




                </div><!-- ./owl-carousel -->
                <div class="allmissing_link"><a href="missing.php" class="white_hover">عرض كل المفقودون</a></div>
            </div><!-- ./container -->
        </section><!-- ./missing -->



        <section class="notmissing padd">
            <div class="container">
                <div class="section_title">
                    <h2>أشخاص تم العثور عليهم </h2>
                </div><!-- ./section_title -->
                <div class="owl-carousel owl-theme">


                    <?php
                    foreach ($fets_founds as $fets_found) {
                    ?>
                        <!-- query that select the missing person that was founded -->

                        <div class="item">
                            <div class="founded">تم العثور عليه</div>
                            <img src="../admin/code/add_missing/upload/missing/<?= substr($fets_found['image'], 8, strlen($fets_found['image'])) == '' ?  "noImage.png" :  $fets_found['image'] ?>" alt="" class="notmissing_img">
                            <!-- <img src="assets/images/home/child-2612927_640.jpg" alt="" > -->
                            <div class="notmissing_details">
                                <p class="notmissing_name"><span class="subtitle">اسم المفقود : </span>
                                <?php 
                                                if (empty($fets_found["First_Name"] && $fets_found["Mid_Name"] && $fets_found["Last_Name"] )) {
                                                    
                                    echo 'اسم المفقود غير معروف';
                                                }
                                                else
                                                {
                                                    echo $fets_found["First_Name"] .' '. $fets_found["Mid_Name"] .' '. $fets_found["Last_Name"];
                                                }

?>
                                </p>
                                <p class="notmissing_name"><span class="subtitle">تاريخ الفقد : </span> <?php echo $fets_found['missing_date'] ?></p>

                                <!-- <p class="notmissing_desc"> <?php echo $fets_found['notes'] ?></p> -->
                                <a href="missingdetailes.php?comment_code=<?php echo $fets_found['id']  ?>" class="notmissing_page opacity_hover">اقرأ المزيد</a>
                            </div><!-- ./notmissing_details -->
                        </div><!-- ./item -->



                    <?php
                    }

                    ?>





                </div><!-- ./owl-carousel -->
                <div class="allnotmissing_link"><a href="notmissing.php" class="white_hover">عرض كل الأشخاص</a></div>
            </div><!-- ./container -->
        </section><!-- ./notmissing -->

        <section class="advices padd">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="advices_content">
                            <div class="section_title">
                                <h2>نصائح لحماية طفلك من الفقد</h2>
                            </div><!-- ./section_title -->
                            <h3 class="advices_subtitle">معلومات بسيطة لازم طفلك يعرفها تحميه من خطر الفقد و تسهل رجوعه بسرعة و امان:</h3>
                            <ul class="advices_list">
                                <li>لازم يعرف اسمه الثلاثي، أسماء إخوته، أسماء أقاربه.</li>
                                <li>عنوان بيته بالتفصيل (اسم الشارع ، المنطقة، المحافظة).</li>
                                <li>يكون عارف رقم تليفون الأب او الأم.</li>
                                <li>اذا كان الطفل غير مدرك و غير قادر علي الحفظ لصغرعمره او من ذوي الاحتياجات الخاصة فيقضل وضع ملصق داخلي في ملابس الطفل يحتوي التفاصيل السابقة.</li>
                            </ul><!-- ./advices_list -->
                        </div><!-- ./advices_content -->
                    </div>
                    <div class="col-lg-6">
                        <!-- <img src="" alt="" class="advices_img"> -->
                        <div class="advices_img shadow">
                            <img src="assets/images/home/hands-1797401_640.jpg" alt="">
                            <div class="overlay"></div>
                        </div><!-- ./advices_img -->
                    </div>
                </div>
            </div><!-- ./container -->
        </section><!-- ./advices -->







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
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
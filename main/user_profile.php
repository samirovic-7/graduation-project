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
if (isset($_SESSION['status']) && $_SESSION['status'] == 0) :
    (new helper())->redirect("index");
   die;
endif;
if (isset($_GET['id'])) {

    // select citizunes data

    $citizines_data = $con->prepare('SELECT citizines.* , governorate.Governorate_name AS Gov_name , cities.citiese_name AS City_name FROM citizines
        INNER Join governorate ON citizines.governorate_code = governorate.Governorate_code
        INNER Join cities ON citizines.city_code = cities.cities_code

        WHERE citizines.ssn=:ssn
     ');

    $citizines_data->bindParam('ssn', $_GET['id']);

    $citizines_data->execute();

    $data = $citizines_data->fetch();


    ///////////// get all user missing data ////////////////


    $citizines_missings = $con->prepare('SELECT missing.* FROM missing WHERE added_by_citizines=:added_by_citizines');

    $citizines_missings->bindParam('added_by_citizines', $_GET['id']);

    $citizines_missings->execute();

    $count  = $citizines_missings->rowCount();



    $posts = $citizines_missings->fetchAll();
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
    <link rel="stylesheet" href="assets/style/user_profile.css">
    <link rel="stylesheet" href="assets/style/header.css">

    <title>الملف الشخصي</title>

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
                            <li><a href="about.php" class="nav_item ">من نحن</a></li>
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
                    <li><a href="about.php" class="nav_item ">من نحن</a></li>
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

    <section class="breadCrumb">
        <div class="container">
            <ul class="breadCrumbItems">
                <li><a href="index.html" class="text-hover-black">الصفحة الرئيسية</a></li>
                <li>الملف الشخصي</li>
            </ul><!-- ./breadCrumbItems -->
        </div><!-- ./container -->
    </section><!-- ./breadCrumb -->



    <!-- start part2-->


    <div class="profile_info">
        <div class="container">


            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="side_info">
                        <div class="card card-right radius-10">
                            <div class="card-body">
                                <h5 class="mb-3">العنوان </h5>
                                <p class="mb-12"> <i class="fas fa-compass"></i> <?php echo $data['Gov_name'] ?> - <?php echo $data['City_name'] ?> </p>
                            </div>

                        </div>

                        <div class="card card-right radius-10">
                            <div class="card-body">
                                <h5 class="mb-3">تواصل معي </h5>
                                <p class="mb-12"> <i class="fas fa-user"></i> <?php echo $data['First_name'] ?> <?php echo $data['mid_name'] ?> <?php echo $data['last_name'] ?> </p>
                                <p class="mb-12"> <i class="fas fa-envelope"></i> <?php echo $data['email'] ?> </p>
                                <p class="mb-12"> <i class="fas fa-phone"></i> <?php echo $data['first_phone'] ?></p>
                            </div>
                        </div>
                    </div><!-- ./side_info -->




                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 p-0">
                    <div class="mid_info">
                        <?php

                        if ($count == 0) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                لا يوجد بلاغات
                            </div>
                            <?php
                        } else {
                            foreach ($posts as $post) {
                            ?>

                                <div class="card card-left">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-4 img-user-profile">
                                            <div class="ml-3 img-profile">

                                                <img src="assets/images/profile/boy-60710_640.jpg" alt="avtar img holder" height="45" width="45">
                                            </div>
                                            <div class="user-page-info">
                                                <p class="mb-0"> <?php echo $data['First_name'] ?> <?php echo $data['mid_name'] ?> <?php echo $data['last_name'] ?></p>
                                                <span class="font-small-2"> <?php echo $data['created_at'] ?>  </span>
                                            </div>

                                        </div>
                                        <p class="mb-3 p-10 paragraph-content">
                                            <?php
                                            echo $post['notes'];

                                            ?>
                                        </p><a href="missingdetailes.php?comment_code=<?php echo $post['id'] ?>">اقرا المزيد</a>
                                        <div class="img-content">
                                        <img src="../admin/code/add_missing/upload/missing/<?= substr($post['image'], 8, strlen($post['image'])) == '' ?  "noImage.png" :  $post['image'] ?>" alt="" class="missing_img">
                                        </div>






                                    </div>
                                </div>

                            <?php
                            }
                            ?>

                        <?php
                        }

                        ?>







                    </div><!-- ./mid_info -->




                </div>

            </div>
        </div>

    </div>
    <!-- end part2-->














































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
                                    <li><a href="user_profile.php?id=<?php echo $_SESSION['ssn']  ?>" >عرض الملف الشخصي</a></li>
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
    <script src="assets/js/userProfile.js"></script>
</body>

</html>
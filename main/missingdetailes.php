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
if (isset($_GET['comment_code'])) {

    $reportet_type = $con->prepare('SELECT added_by_admin FROM missing  WHERE missing.id=:id');

    $reportet_type->bindparam('id', $_GET["comment_code"]);

    $reportet_type->execute();

    $reportet_type_data  = $reportet_type->fetch();

    $type = $reportet_type_data['added_by_admin'];

    $x = '';
    $y = '';

    $z = '';

    if ($type != NULL) {




        $z = 'SELECT missing.* ,admins.first_name AS first_name , admins.mid_name AS mid_name ,  admins.last_name AS last_name,  cities.citiese_name AS "city_name" , governorate.Governorate_name AS "governate_name" , diseases.disease_name AS "disease_name" ,

        nationalities.nationality_name AS "nationality_name" , departments.department_name AS "department_name",
        
        colors.color AS "hair_color_name" ,
        colors1.color AS "skin_color_name" ,
        colors2.color AS "eye_color_name"
        
        FROM missing
    
    
        INNER JOIN admins ON missing.added_by_admin  = admins.ssn
        
        INNER JOIN cities ON missing.city_code = cities.cities_code
        
        INNER JOIN governorate ON missing.governorate_code = governorate.Governorate_code
        
        INNER JOIN diseases ON missing.disease_code = diseases.diseases_code
        
        INNER JOIN nationalities ON missing.nationality_code = nationalities.nationality_code
        
        INNER JOIN departments ON missing.department_code = departments.department_code
        
        INNER JOIN colors AS colors ON missing.skin_color = colors.color_code  
        
        INNER JOIN colors AS colors1 ON missing.eye_color = colors1.color_code
        
        INNER JOIN colors AS colors2 ON missing.hair_color = colors2.color_code
        
        
        
        WHERE missing.id=:id';
    } else {



        $z = 'SELECT missing.* ,citizines.First_name AS first_name , citizines.mid_name AS mid_name ,  citizines.last_name AS last_name,   cities.citiese_name AS "city_name" , governorate.Governorate_name AS "governate_name" , diseases.disease_name AS "disease_name" ,

        nationalities.nationality_name AS "nationality_name" , departments.department_name AS "department_name",
        
        colors.color AS "hair_color_name" ,
        colors1.color AS "skin_color_name" ,
        colors2.color AS "eye_color_name"
        
        FROM missing
    
    
        INNER JOIN citizines ON missing.added_by_citizines  = citizines.ssn
        
        INNER JOIN cities ON missing.city_code = cities.cities_code
        
        INNER JOIN governorate ON missing.governorate_code = governorate.Governorate_code
        
        INNER JOIN diseases ON missing.disease_code = diseases.diseases_code
        
        INNER JOIN nationalities ON missing.nationality_code = nationalities.nationality_code
        
        INNER JOIN departments ON missing.department_code = departments.department_code
        
        INNER JOIN colors AS colors ON missing.skin_color = colors.color_code  
        
        INNER JOIN colors AS colors1 ON missing.eye_color = colors1.color_code
        
        INNER JOIN colors AS colors2 ON missing.hair_color = colors2.color_code
        
        
        
        WHERE missing.id=:id';
    }









    $selectmiss = $con->prepare($z);

    $selectmiss->bindparam('id', $_GET["comment_code"]);

    $selectmiss->execute();

    $fetmiss = $selectmiss->fetch();





    //////////////////

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
    <link href="assets/style/toastr.min.css" rel="stylesheet">

    <!-- <link rel="shortcut icon" href="assets/image/index/small_img/logoIcon.png" /> -->
    <link rel="stylesheet" href="assets/style/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/style/all.min.css" />
    <link rel="stylesheet" href="assets/style/missing_details.css">
    <link rel="stylesheet" href="assets/style/header.css">




    <title>تفاصيل عن المفقود</title>
</head>

<body>

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
                                                <form action="index.php" method="post"><a><button type="submit" class="d-block w-100 text-right" name="logout">تسجيل الخروج</button></a></form>
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
                                        <form action="index.php" method="post"><a><button type="submit" class="d-block w-100 text-right" name="logout">تسجيل الخروج</button></a></form>
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


    <main>
        <section class="breadCrumb">
            <div class="container">
                <ul class="breadCrumbItems">
                    <li><a href="index.html" class="text-hover-black">الصفحة الرئيسية</a></li>
                    <li>تفاصيل عن المفقود</li>
                </ul><!-- ./breadCrumbItems -->
            </div><!-- ./container -->
        </section><!-- ./breadCrumb -->


        <section class="missingDetails">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12">
                        <div class="missingDetails_content">
                            <div class="reporter_details">
                                <p class="info_content"><span class="subtitle">اسم المُبلغ : </span> <a class="reporter_name" href="persons_profile.php?missing_id=<?php echo  $fetmiss["id"] ?>"> <?php echo  $fetmiss["first_name"] . ' ' .  $fetmiss["mid_name"] . ' ' . $fetmiss["last_name"] ?> </a></p>
                                <p class="info_content"><span class="subtitle">تاريخ النشر : </span><?php echo $fetmiss["created_at"] ?></p>
                                <button type="button" class="share" data-toggle="modal" data-target="#shareModel">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                                <div class="modal fade" id="shareModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">مشاركة البلاغ</h5>
                                            </div>
                                            <div class="modal-body">
                                                <button type="button" id="copy_btn" class="btn btn-primary">نسخ الرابط</button>
                                                <input type="text" id="link" disabled class="form_input w-75">
                                                <div class="alert alert-success mt-2 copied" style="display:none" role="alert">

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn m-auto btn-secondary" data-dismiss="modal">إغلاق</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shareContent">
                                    <div class="overlay"></div>

                                </div>
                            </div><!-- ./reporter_details -->
                            <div class="missing_info">
                                <div class="missing_desc"><?php echo $fetmiss["notes"] ?></div>
                                <div class="text-center">
                                    <img src="../admin/code/add_missing/upload/missing/<?= substr($fetmiss['image'], 8, strlen($fetmiss['image'])) == '' ?  "noImage.png" :  $fetmiss['image'] ?>" alt="" class="shadow w-75">
                                </div>
                                <!-- <div class="missing_img"><img src="../admin/code/add_missing/upload/missing/<?php echo $fetmiss['image'] ?>"  alt=""></div> -->
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="details_group">
                                            <h3 class="group_title">البيانات الأساسية</h3>


                                            <ul>
                                                <li class="info_content"><span class="subtitle">الاسم : </span>
                                                    <?php
                                                    if (empty($fetmiss["First_Name"] && $fetmiss["Mid_Name"] && $fetmiss["Last_Name"])) {

                                                        echo 'اسم المفقود غير معروق';
                                                    } else {
                                                        echo $fetmiss["First_Name"] . ' ' . $fetmiss["Mid_Name"] . ' ' . $fetmiss["Last_Name"];
                                                    }

                                                    ?>
                                                </li>
                                                <li class="info_content"><span class="subtitle">العمر : </span> <?php
                                                                                                                if ($fetmiss["age"]  == 0) {
                                                                                                                    echo '   عمر مفقود غير معروف ';
                                                                                                                } else {

                                                                                                                    echo $fetmiss["age"];
                                                                                                                }

                                                                                                                ?> </li>
                                                <li class="info_content"><span class="subtitle">الرقم القومي : </span>
                                                    <?php
                                                    if ($fetmiss["SSN"]  == 0) {
                                                        echo 'الرقم القوم  غير معروف';
                                                    } else {

                                                        echo $fetmiss["SSN"];
                                                    }

                                                    ?>
                                                </li>
                                                <li class="info_content"><span class="subtitle">الجنسية : </span><?php echo $fetmiss["nationality_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">النوع : </span>
                                                    <?php
                                                    if ($fetmiss["gender"] == 1) {
                                                        echo 'ذكر';
                                                    } else {
                                                        echo 'انثي';
                                                    }

                                                    ?>
                                                </li>
                                            </ul>
                                        </div><!-- ./details_group -->
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="details_group">
                                            <h3 class="group_title">الصفات الشكلية</h3>
                                            <ul>
                                                <li class="info_content"><span class="subtitle">لون العين : </span><?php echo $fetmiss["eye_color_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">لون الشعر : </span><?php echo $fetmiss["hair_color_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">لون البشرة : </span><?php echo $fetmiss["skin_color_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">الطول التقريبي : </span><?php echo $fetmiss["height"] ?> سم</li>
                                                <li class="info_content"><span class="subtitle">الوزن التقريبي : </span><?php echo $fetmiss["weight"] ?> كجم</li>
                                            </ul>
                                        </div><!-- ./details_group -->
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="details_group">
                                            <h3 class="group_title">معلومات الإختفاء</h3>
                                            <ul>
                                                <li class="info_content"><span class="subtitle">محافظة الإختفاء : </span><?php echo $fetmiss["governate_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">المدينة : </span><?php echo $fetmiss["city_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">تاريخ الإختفاء : </span><?php echo $fetmiss["missing_date"] ?></li>
                                                <li> <a href="bill.php?id=<?php echo  $_GET['comment_code'] ?>"> مشاهدة البلاغ</a> </li>
                                            </ul>
                                        </div><!-- ./details_group -->
                                    </div>
                                </div><!-- ./row -->
                            </div><!-- ./missing_info -->
                        </div><!-- ./missingDetails_content -->
                    </div>
                    <div class="col-lg-4 col-12">

                        <div class="comments">
                            <h2 class="comments_title">التعليقات</h2>
                            <div class="comments_content" id="comments_content">





                            </div><!-- ./comments_content -->


                            <form id="addCommentForm" class="addCommentForm">
                                <?php if ($user->checkLogin()) : ?>
                                    <input type="hidden" name="report_code" value="<?php echo $_GET['comment_code'] ?>" class="form_input" placeholder="اكتب تعليق..." id="report_code">
                                    <input type="hidden" name="citizine_ssn" value="<?php echo  $_SESSION['ssn'] ?>" class="form_input" placeholder="اكتب تعليق..." id="citizine_ssn">
                                    <input type="text" name="comment_content" class="form_input" placeholder="اكتب تعليق...">

                                    <button id="addCommentForm" type="submit">إضافة</button>
                                <?php endif; ?>

                                <?php
                                if (!$user->checkLogin()) {
                                ?>
                                    <div class="alert alert-danger" role="alert">
                                        يرجي تسجيل الدخول لمشاهدة التعليقات
                                    </div>
                                <?php
                                }


                                ?>
                            </form><!-- ./addCommentform -->

                        </div><!-- ./comments -->
                    </div>
                </div><!-- ./row -->
            </div><!-- ./container -->
        </section><!-- ./missingDetails -->





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
    <script src="assets/js/missing-details.js"></script>
    <script src="front_code/comments_reply/comments.js"></script>
    <script src="front_code/comments_reply/reply.js"></script>


</body>

</html>
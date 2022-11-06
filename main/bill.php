<?php

include('connection.php');
include('connection.php');
require 'front_code/lib/pdodb.php';
require 'front_code/lib/helper.php';
require 'front_code/registration/user.php';
session_start();
$user = new user;
if (isset($_POST['logout'])) {
  helper::logout();
}
if (isset($_GET['id'])) {

  $reportet_type = $con->prepare('SELECT added_by_admin FROM missing  WHERE missing.id=:id');

  $reportet_type->bindparam('id', $_GET["id"]);

  $reportet_type->execute();

  $reportet_type_data  = $reportet_type->fetch();

  $type = $reportet_type_data['added_by_admin'];

  $x = '';
  $y = '';

  $z = '';

  if ($type != NULL) {



    $z = 'SELECT missing.* ,admins.first_name AS first_name , admins.mid_name AS mid_name ,  admins.last_name AS last_name ,  admins.age AS age1 ,  admins.ssn  AS ssn ,   admins.phone AS phone, cities.citiese_name AS "city_name" , governorate.Governorate_name AS "governate_name" , diseases.disease_name AS "disease_name" ,

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



    $z = 'SELECT missing.* ,citizines.First_name AS first_name , citizines.mid_name AS mid_name ,  citizines.last_name AS last_name,    citizines.age AS age1,    citizines.first_phone AS phone,   citizines.ssn AS ssn, cities.citiese_name AS "city_name" , governorate.Governorate_name AS "governate_name" , diseases.disease_name AS "disease_name" ,

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

  $selectmiss->bindparam('id', $_GET["id"]);

  $selectmiss->execute();

  $getSpecialMissingInfo = $selectmiss->fetch();




  //////////////////

}

?>
<!doctype html>
<html>

<head>
  <title>bill</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
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


  <link rel="stylesheet" href="assets/style/bill.css">
  <style>
    * {
      direction: rtl;
    }
  </style>
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



  <main class="container" style="padding-top: 60px;">
    <div class="row mb-2 top">
      <div class="col-md-7">
        <div class="row g-0  rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-3 d-flex flex-column position-static">
            <h3 class="mb-0"> بیانات المبلغ</h3><br>
            <p class="mb-0">الاسم : <a href="persons_profile.php?missing_id=<?php echo $_GET['id'] ?>"> <?php echo  $getSpecialMissingInfo['first_name'] ?> <?php echo  $getSpecialMissingInfo['mid_name'] ?> <?php echo  $getSpecialMissingInfo['last_name'] ?> </a></p>
            <p class="mb-0">العمر : <?php echo  $getSpecialMissingInfo['age1'] ?></p>
            <p class="mb-0">تاریخ البلاغ :<?php echo  $getSpecialMissingInfo['created_at'] ?> </p>
            <p class="mb-0"> الرقم القومی :<?php echo  $getSpecialMissingInfo['ssn'] ?></p>
            <p class="mb-0"> رقم الهاتف : <?php echo  $getSpecialMissingInfo['phone'] ?></p>
          </div>


          <div class="col p-3 d-flex flex-column position-static">
            <h3 class="mb-0"> بیانات البلاغ</h3><br>
            <p class="mb-0">رقم البلاغ : <?php echo $getSpecialMissingInfo['id'] ?></p>

            <p class="mb-0">تاریخ البلاغ : <?php echo $getSpecialMissingInfo['created_at'] ?> </p>
            <p class="mb-0"> جهة البلاغ : <a href="department.php?id=<?php echo  $getSpecialMissingInfo['department_code'] ?>"> <?php echo $getSpecialMissingInfo['department_name'] ?> </a></p>
            <p class="mb-0"> مكان البلاغ : <?php echo $getSpecialMissingInfo['governate_name'] ?> - <?php echo $getSpecialMissingInfo['city_name'] ?> </p>
          </div>
        </div>
      </div>



      <div class="col-md-3">
        <div class="row g-0  rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

          <div class="col-auto   ">

            <img class="bd-placeholder-img" src="../admin/code/add_missing/upload/missing/<?= substr($getSpecialMissingInfo['image'], 8, strlen($getSpecialMissingInfo['image'])) == '' ?  "noImage.png" :  $getSpecialMissingInfo['image'] ?>" alt="" style="width: 100%;height: 100%;">

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">


        <article class="blog-post">
          <h2 class="blog-post-title"> صفات المبلغ </h2>


          <div class="table-responsive" style="direction: rtl;">
            <table class="table text-center">
              <thead>
                <tr>

                  <th style="width: 18%;">الجنسية</th>
                  <th style="width: 18%;">لون الشعر</th>
                  <th style="width: 18%;">لون البشرة</th>
                  <th style="width: 18%;">لون العين</th>
                  <th style="width: 18%;">الطول</th>
                  <th style="width: 18%;">الوزن</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"> <?php echo $getSpecialMissingInfo['nationality_name'] ?> </th>
                  <td> <?php echo $getSpecialMissingInfo['hair_color_name'] ?> </td>
                  <td> <?php echo $getSpecialMissingInfo['skin_color_name'] ?> </td>
                  <td> <?php echo $getSpecialMissingInfo['eye_color_name'] ?> </td>
                  <td> <?php echo $getSpecialMissingInfo['height'] ?> سم </td>
                  <td> <?php echo $getSpecialMissingInfo['weight'] ?> كيلو </td>
                </tr>

              </tbody>

            </table>
          </div><br><br><br>

          <h3> وصف عن حالة الاختفاء</h3>
          <br>
          <p>
            <?php

            echo $getSpecialMissingInfo['notes']

            ?>
          </p>
          <br>


        </article>




        <nav class="blog-pagination" aria-label="Pagination">
          <button class="btn btn-outline-primary" onclick="window.print()">طباعه <i class="fa fa-print" aria-hidden="true"></i></button>
          <a class="btn btn-outline-secondary disabled">تدوينات أحدث</a>
        </nav>

      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">معلومات عن المفقود</h4>
            <p class="mb-0">الاسم : <?php
                                    if (empty($getSpecialMissingInfo["First_Name"] && $getSpecialMissingInfo["Mid_Name"] && $getSpecialMissingInfo["Last_Name"])) {

                                      echo 'اسم المفقود غير معروق';
                                    } else {
                                      echo $getSpecialMissingInfo["First_Name"] . ' ' . $getSpecialMissingInfo["Mid_Name"] . ' ' . $getSpecialMissingInfo["Last_Name"];
                                    }

                                    ?></p>
            <p class="mb-0">العمر : <?php
                                    if ($getSpecialMissingInfo['age'] == 0) {
                                      echo '   عمر مفقود غير معروف ';
                                    } else {
                                      echo $getSpecialMissingInfo['age'];
                                    }

                                    ?></p>
            <p class="mb-0">تاریخ الفقد : <?php echo $getSpecialMissingInfo['missing_date'] ?> </p>
            <p class="mb-0"> الجنس :
              <?php

              if ($getSpecialMissingInfo['gender'] == 1) {
                # code...
                echo "ذكر";
              } else {
                echo 'انثي';
              }

              ?>
            </p>


            <p class="mb-0"> الرقم القومي :
              <?php
              if ($getSpecialMissingInfo["SSN"]  == 0) {
                echo 'الرقم القوم  غير معروف';
              } else {

                echo $getSpecialMissingInfo["SSN"];
              }

              ?>
            </p>

          </div>




        </div>
      </div>
    </div>

  </main>


  <section class="contact padd mt-5">
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





</body>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

</html>
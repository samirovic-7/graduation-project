<?php

use function PHPSTORM_META\type;

include('connection.php');
require 'front_code/lib/pdodb.php';
require 'front_code/lib/helper.php';
require 'front_code/registration/user.php';
require 'front_code/missing/missing.php';
session_start();
$user = new user;
if(isset($_POST['logout'])){
    helper::logout();
}


$missing = new missing;
$list ;

$serchValue  = isset($_GET['searchValue']) ? $_GET['searchValue'] : '';
if(isset($_GET['searchValue'])){
    $serchValue = $_GET['searchValue'];
    if(is_numeric($_GET['searchValue'])){
        $list = $missing->missingSearchSSN(["ssn"=>$serchValue]);
    }else{
        $list = $missing->missingSearch($serchValue);
    }
   
}else if(isset($_GET['governorate']) 
|| isset($_GET['city'])
|| isset($_GET['age'])
|| isset($_GET['height'])
|| isset($_GET['weight'])
|| isset($_GET['eyeColor'])
|| isset($_GET['hairColor'])
|| isset($_GET['skinColor'])
|| isset($_GET['missingDate'])
|| isset($_GET['nationality'])
|| isset($_GET['gender'])
|| isset($_GET['diseases'])){
    $governorate= $_GET['governorate'] == 'اختر محافظة' ? 'off': $_GET['governorate'];
    $city= isset($_GET['city']) ? $_GET['city'] : 'off';
    $age= $_GET['age'];
    $height= $_GET['height'];
    $eyeColor= $_GET['eyeColor'] == 'اختر لون' ? 'off': $_GET['eyeColor'];
    $hairColor= $_GET['hairColor'] == 'اختر لون' ? 'off': $_GET['hairColor'];
    $skinColor= $_GET['skinColor'] == 'اختر لون' ? 'off': $_GET['skinColor'];
    $missingDate= $_GET['missingDate'] == '' ? 'off' : '"'.$_GET['missingDate'].'"';
    $diseases= isset($_GET['diseases']) ? $_GET['diseases'] : 'off';
    $weight= $_GET['weight'];
    $nationality= $_GET['nationality']== 'اختر جنسية' ? 'off': $_GET['nationality'];
    $gender= $_GET['gender'] == 'اختر نوع' ? 'off': $_GET['gender'];
    $list = $missing->filter(
        $governorate,
        $city,
        $age,
        $height,
        $weight,
        $eyeColor,
        $hairColor,
        $skinColor,
        $missingDate,
        $diseases,
        $nationality,
        $gender,
    );

}else{
    $list = $missing->allMissing();
}
$govsList = $missing->getGovs();
$diseaseList = $missing->getDiseases();
$nationalList = $missing->getNational();
$eyeColList = $missing->getColor(["status"=>2]);
$hairColList = $missing->getColor(["status"=>0]);
$skinColList = $missing->getColor(["status"=>1]);

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
    <link rel="stylesheet" href="assets/style/jquerySlider.css" />
    <link rel="stylesheet" href="assets/style/nice-select.css">
    <link rel="stylesheet" href="assets/style/missing.css">
    <link rel="stylesheet" href="assets/style/header.css">
    <title>الأشخاص المفقودون</title>
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
                            <li><a href="missing.php" class="nav_item active">الأشخاص المفقودون</a></li>
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
                    <li><a href="missing.php" class="nav_item active">الأشخاص المفقودون</a></li>
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


        <section class="breadCrumb">
            <div class="container">
                <ul class="breadCrumbItems">
                    <li><a href="index.php" class="text-hover-black">الصفحة الرئيسية</a></li>
                    <li>الأشخاص المفقودون</li>
                </ul><!-- ./breadCrumbItems -->    
            </div><!-- ./container -->
        </section><!-- ./breadCrumb -->

        <section class="missing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="filters">
                            <!-- <div class="filters_title"><h2>تصفية المفقودين بواسطة</h2></div> -->
                                <!-- ########### active filters design ########### -->
                                <div class="active_filters">
                                    <div class="active_item">
                                        <h3 class="active_item_title">العمر:</h3>
                                        <div class="active_item_content">
                                            <ul class="active_item_list">
                                                <li><span class="item">10 - 12 عام</span> <span class="item_del">x</span></li>
                                            </ul><!-- ./active_item_list -->
                                        </div><!-- ./active_item_content -->
                                    </div><!-- ./active_item -->
                                    <div class="active_item">
                                        <h3 class="active_item_title">المحافظة:</h3>
                                        <div class="active_item_content">
                                            <ul class="active_item_list">
                                                <li><span class="item">القاهرة</span> <span class="item_del">x</span></li>
                                            </ul><!-- ./active_item_list -->
                                        </div><!-- ./active_item_content -->
                                    </div><!-- ./active_item -->
                                    <div class="active_item">
                                        <h3 class="active_item_title">لون العين:</h3>
                                        <div class="active_item_content">
                                            <ul class="active_item_list">
                                                <li><span class="item">بني</span> <span class="item_del">x</span></li>
                                            </ul><!-- ./active_item_list -->
                                        </div><!-- ./active_item_content -->
                                    </div><!-- ./active_item -->
                                    <div class="active_item">
                                        <h3 class="active_item_title">تاريخ الاختفاء</h3>
                                        <div class="active_item_content">
                                            <ul class="active_item_list">
                                                <li><span class="item">18/4/2000</span> <span class="item_del">x</span></li>
                                            </ul><!-- ./active_item_list -->
                                        </div><!-- ./active_item_content -->
                                    </div><!-- ./active_item -->
                                    <a href="#" class="del_filters">مسح الكل</a>
                                </div><!-- ./active_filters -->
                            <!-- ########################################################### -->
                            <form class="search_form">
                                <!-- <div class="closeIcon opacity_hover"><i class="fas fa-times"></i></div> -->
                                <input type="text" name="searchValue" value="<?= $serchValue ?>" placeholder="البحث عن شخص مفقود" id="">
                                <button class="search_btn opacity_hover"><i class="fas fa-search"></i></button>
                            </form><!-- ./search_form -->
                            <form action="missing.php" method="get" id="filterForm" class="filters_form">
                                <div class="filters_form_contet">
                                    <div class="filters_item accordion-content first">
                                        <div class="accordion-content-title">
                                            <label for="governorate"><h3 class="filters_item_title">المحافظة</h3></label>
                                            <i class="fas fa-angle-down"></i>
                                        </div><!-- ./accordion-content-title -->
                                        <div class="accordion-content-desc">
                                            <div class="filters_item_content">
                                                <select id="governorate" name="governorate">
                                                    <option selected hidden  >اختر محافظة</option>
                                                    <?php foreach($govsList as $gov): ?>
                                                        <option value="<?= $gov['Governorate_code'] ?>" <?php $missing->checkSelect('governorate', $gov['Governorate_code']) ?> ><?= $gov['Governorate_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div><!-- ./filters_item_content -->
                                        </div><!-- ./accordion-content-desc -->
                                    </div><!-- ./filters_item -->
                                    <div class="filters_item multi accordion-content">
                                        <div class="accordion-content-title">
                                            <label for="city"><h3 class="filters_item_title">المدينة</h3></label>
                                            <i class="fas fa-angle-down"></i>
                                        </div><!-- ./accordion-content-title -->
                                        <div class="accordion-content-desc">
                                            <div class="filters_item_content">
                                                <fieldset class="filters_item_list " id="cities">
                                                    <?php 
                                                    if(isset($_GET['governorate'])){
                                                        $gov = ["Governorate_code"=>$_GET['governorate']];
                                                        $citiesList = $missing->getCites($gov);
                                                        if($citiesList){
                                                            foreach($citiesList as $city){
                                                                ?>
                                                                    <label class="filter_name <?php $missing->checkActiveCheckbox('city', $city['cities_code']) ?>" >
                                                                        <input type="checkbox" <?php $missing->checkCheckedCheckbox('city', $city['cities_code']) ?>  name="city[]" value="<?= $city['cities_code']  ?>"><?= $city['citiese_name'] ?></label>
                                                                <?php
                                                            }
                                                        }else{
                                                            echo "<p class='p-2'>برجاء اختيار المحافظة أولا</p>";
                                                        }
                                                    }else{
                                                        echo "<p class='p-2'>برجاء اختيار المحافظة أولا</p>";
                                                    }?>
                                                </fieldset><!-- ./filters_item_list -->
                                            </div><!-- ./filters_item_content -->
                                        </div><!-- ./accordion-content-desc -->
                                    </div><!-- ./filters_item -->
                                    <div class="filters_item range_filter accordion-content">
                                        <div class="accordion-content-title">
                                            <h3 class="filters_item_title">العمر</h3>
                                            <i class="fas fa-angle-down"></i>
                                        </div><!-- ./accordion-content-title -->
                                        <div class="accordion-content-desc">
                                            <div class="filters_item_content age">
                                                <div class="range_filter">
                                                    <div id="slider-rangeage" class="slider-rangeage"></div>
                                                    <p class="range_filter_content"><input type="text" id="amount2" value="<?= isset($_GET['age']) ? $_GET['age'][0] : 100 ?>" name="age[]" class="amount2" readonly>
                                                     عام - <input type="text" id="amount" name="age[]" class="amount" value="<?= isset($_GET['age']) ? $_GET['age'][1] : 1 ?>" readonly> عام </p>
                                                </div><!-- ./age_filter -->
                                            </div><!-- ./filters_item_content -->
                                        </div><!-- ./accordion-content-desc -->
                                    </div><!-- ./filters_item -->
                                    <div class="filters_item range_filter accordion-content">
                                        <div class="accordion-content-title">
                                            <h3 class="filters_item_title">الطول</h3>
                                            <i class="fas fa-angle-down"></i>
                                        </div><!-- ./accordion-content-title -->
                                        <div class="accordion-content-desc">
                                            <div class="filters_item_content height">
                                                <div class="range_filter">
                                                    <div id="slider-rangeheight" class="slider-rangeheight"></div>
                                                    <p class="range_filter_content"><input type="text" id="heightamount2" value="<?= isset($_GET['height']) ? $_GET['height'][0] : 220 ?>" name="height[]" class="amount2" readonly>
                                                     سم - <input type="text" id="heightamount" name="height[]" value="<?= isset($_GET['height']) ? $_GET['height'][1] : 1 ?>" class="amount" readonly> سم </p>
                                                </div><!-- ./age_filter -->
                                            </div><!-- ./filters_item_content -->
                                        </div><!-- ./accordion-content-desc -->
                                    </div><!-- ./filters_item -->
                                    <div class="filters_item range_filter accordion-content">
                                        <div class="accordion-content-title">
                                            <h3 class="filters_item_title">الوزن</h3>
                                            <i class="fas fa-angle-down"></i>
                                        </div><!-- ./accordion-content-title -->
                                        <div class="accordion-content-desc">
                                            <div class="filters_item_content weight">
                                                <div class="range_filter">
                                                    <div id="slider-rangeweight" class="slider-rangeweight"></div>
                                                    <p class="range_filter_content"><input type="text" id="weightamount2" value="<?= isset($_GET['weight']) ? $_GET['weight'][0] : 180 ?>" name="weight[]" class="amount2" readonly>
                                                     كجم - <input type="text" id="weightamount" class="amount" name="weight[]" value="<?= isset($_GET['weight']) ? $_GET['weight'][1] : 1 ?>" readonly> كجم </p>
                                                </div><!-- ./age_filter -->
                                            </div><!-- ./filters_item_content -->
                                        </div><!-- ./accordion-content-desc -->
                                    </div><!-- ./filters_item -->
                                    <div class="filters_item accordion-content">
                                        <div class="accordion-content-title">
                                            <h3 class="filters_item_title">لون العين</h3>
                                            <i class="fas fa-angle-down"></i>
                                        </div><!-- ./accordion-content-title -->
                                        <div class="accordion-content-desc">
                                            <div class="filters_item_content">
                                                <select id="" name="eyeColor">
                                                <option selected hidden  >اختر لون</option>
                                                <?php foreach($eyeColList as $col): ?>
                                                        <option value="<?= $col['color_code'] ?>"<?php $missing->checkSelect('eyeColor', $col['color_code']) ?> ><?= $col['color']  ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div><!-- ./filters_item_content -->
                                        </div><!-- ./accordion-content-desc -->
                                    </div><!-- ./filters_item -->
                                    <div class="filters_item accordion-content">
                                        <div class="accordion-content-title">
                                            <h3 class="filters_item_title">لون الشعر</h3>
                                            <i class="fas fa-angle-down"></i>
                                        </div><!-- ./accordion-content-title -->
                                        <div class="accordion-content-desc">
                                            <div class="filters_item_content">
                                                <select id="" name="hairColor">
                                                <option selected hidden  >اختر لون</option>
                                                <?php foreach($hairColList as $col): ?>
                                                    <option value="<?= $col['color_code'] ?>" <?php $missing->checkSelect('hairColor', $col['color_code']) ?>><?= $col['color'] ?></option>
                                                <?php endforeach; ?>
                                                </select>
                                            </div><!-- ./filters_item_content -->
                                        </div><!-- ./accordion-content-desc -->
                                    </div><!-- ./filters_item -->
                                    <div class="filters_item accordion-content">
                                        <div class="accordion-content-title">
                                                <h3 class="filters_item_title">تاريخ الاختفاء</h3>
                                                <i class="fas fa-angle-down"></i>
                                            </div><!-- ./accordion-content-title -->
                                            <div class="accordion-content-desc">
                                                <div class="filters_item_content">
                                                    <input type="date" name="missingDate" value="<?= isset($_GET['missingDate']) ? $_GET['missingDate'] : '' ?>" id="">
                                                </div><!-- ./filters_item_content -->
                                            </div><!-- ./accordion-content-desc -->
                                        </div><!-- ./filters_item -->
                                        <div class="filters_item accordion-content">
                                            <div class="accordion-content-title">
                                                <h3 class="filters_item_title">لون البشرة</h3>
                                                <i class="fas fa-angle-down"></i>
                                            </div><!-- ./accordion-content-title -->
                                            <div class="accordion-content-desc">
                                                <div class="filters_item_content">
                                                    <select id="skinColor" name="skinColor">
                                                    <option selected hidden  >اختر لون</option>
                                                    <?php foreach($skinColList as $col): ?>
                                                        <option value="<?= $col['color_code'] ?>"<?php $missing->checkSelect('skinColor', $col['color_code']) ?>><?= $col['color'] ?></option>
                                                    <?php endforeach; ?>
                                                    </select>
                                                </div><!-- ./filters_item_content -->
                                            </div><!-- ./accordion-content-desc -->
                                        </div><!-- ./filters_item -->
                                        <div class="filters_item  accordion-content">
                                            <div class="accordion-content-title">
                                                <h3 class="filters_item_title">نوع المفقود</h3>
                                                <i class="fas fa-angle-down"></i>
                                            </div><!-- ./accordion-content-title -->
                                            <div class="accordion-content-desc">
                                                <div class="filters_item_content">
                                                    <select id="gender" name="gender">
                                                        <option selected hidden  >اختر نوع</option>
                                                        <option value="1" <?php $missing->checkSelect('gender', 1) ?>>ذكر</option>
                                                        <option value="2" <?php $missing->checkSelect('gender', 2) ?>>انثي</option>
                                                    </select>
                                                </div><!-- ./filters_item_content -->
                                            </div><!-- ./accordion-content-desc -->
                                        </div><!-- ./filters_item -->
                                        <div class="filters_item  accordion-content">
                                            <div class="accordion-content-title">
                                                <h3 class="filters_item_title">جنسية المفقود</h3>
                                                <i class="fas fa-angle-down"></i>
                                            </div><!-- ./accordion-content-title -->
                                            <div class="accordion-content-desc">
                                                <div class="filters_item_content">
                                                    <select id="nationality" name="nationality">
                                                        <option selected hidden  >اختر جنسية</option>
                                                        <?php foreach($nationalList as $nationality): ?>
                                                            <option value="<?= $nationality['nationality_code'] ?>" <?php $missing->checkSelect('nationality', $nationality['nationality_code']) ?> ><?= $nationality['nationality_name'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div><!-- ./filters_item_content -->
                                            </div><!-- ./accordion-content-desc -->
                                        </div><!-- ./filters_item -->
                                        <div class="filters_item multi accordion-content">
                                            <div class="accordion-content-title">
                                                <h3 class="filters_item_title">أمراض يعاني منها المفقود</h3>
                                                <i class="fas fa-angle-down"></i>
                                            </div><!-- ./accordion-content-title -->
                                            <div class="accordion-content-desc">
                                                <div class="filters_item_content">
                                                <fieldset class="filters_item_list " id="">
                                                    <?php foreach($diseaseList as $disease): ?>
                                                        <label class="filter_name <?php $missing->checkActiveCheckbox('diseases', $disease['diseases_code']) ?>">
                                                            <input type="checkbox" class="diseaseCheckbox" <?php $missing->checkCheckedCheckbox('diseases', $disease['diseases_code']) ?>
                                                             name="diseases[]" value="<?= $disease['diseases_code'] ?> "><?= $disease['disease_name'] ?>
                                                        </label>
                                                    <?php endforeach; ?>
                                                    </fieldset><!-- ./filters_item_list -->
                                                </div><!-- ./filters_item_content -->
                                            </div><!-- ./accordion-content-desc -->
                                        </div><!-- ./filters_item -->
                                </div><!-- ./filters_form_contet -->
                                <div class="filter_btn">
                                    <!-- <input type="submit" class="white_hover opacity_hover rounded" value="تصفية الاشخاص"> -->
                                    <!-- <input type="reset" class="opacity_hover rounded" value="إعادة الضبط"> -->
                                    <button type="submit" class="white_hover opacity_hover rounded">تصفية الاشخاص</button>
                                    <button type="reset" class="opacity_hover rounded">إعادة الضبط</button>
                                </div>
                            </form><!-- ./filters_form -->
                        </div><!-- ./filters -->
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="posts">
                            <div class="row">
                                <?php
                                if(count($list)):
                                    foreach($list as $row): ?>
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="item">
                                        <img src="../admin/code/add_missing/upload/missing/<?= substr($row['image'], 8, strlen($row['image'])) == '' ?  "noImage.png" :  $row['image'] ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : </span><?= trim($row['name']) == '' ? "الاسم غير معروف" : $row['name'] ?></p> 
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span><?= $row['missing_date'] ?></p>
                                            <p class="missing_name"><span class="subtitle">مكان الإختفاء : </span><?= $row['governateName']. ', ' .$row['cityName'] ?></p>
                                            <!-- <p class="missing_desc"><?= $row['notes'] ?></p> -->
                                            <a href="missingdetailes.php?comment_code=<?= $row['id'] ?>" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                    </div><!-- ./item -->
                                </div>
                                <?php
                                    endforeach;    
                                else:
                                    echo "لا يوجد مفقود مطابق للبحث";
                                endif; ?>
                                <!-- <div class="col-md-4 col-sm-6 col-12">
                                    <div class="item">
                                        <img src="assets/images/home/boy-60710_640.jpg" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : </span> احمد عصام الدين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 18/4/2000</p>
                                            <div class="add_by_details">
                                                <img src="assets/images/home/userIcon.png" alt="" class="add_by_img">
                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div>
                                            <p class="missing_desc">Lorem ipsum, dolor sit amet  elit. Accusamus nemo tempore voluptates in minus dignissimos repudiandae officiis molestias, iusto dicta commodi neque.</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div><!-- ./row -->
                        </div><!-- ./posts -->
                    </div>
                </div><!-- ./row -->
            </div><!-- ./container -->
        </section><!-- ./missing -->
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
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/missing.js"></script>
    <script src="assets/js/accordion.js"></script>
    <script src="front_code/missing/filters.js"></script>
</body>
</html>
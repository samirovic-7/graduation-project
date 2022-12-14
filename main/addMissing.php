<?php
require_once("connection.php");
include('connection.php');
require 'front_code/lib/pdodb.php';
require 'front_code/lib/helper.php';
require 'front_code/registration/user.php';
session_start();
$user = new user;
if (isset($_POST['logout'])) {
    helper::logout();
}
if((isset($_SESSION['status']) && $_SESSION['status'] == 0) || !isset($_SESSION['email'])) :
     (new helper())->redirect("index");
    die;
endif;



/**** get all color ***/

$hairColor = $con->prepare("SELECT * FROM colors WHERE status=0");

$hairColor->execute();

$fetHairColors = $hairColor->fetchAll();



$skinColor = $con->prepare("SELECT * FROM colors WHERE status=1");

$skinColor->execute();

$fetSkinColors = $skinColor->fetchAll();



$eyeColor = $con->prepare("SELECT * FROM colors WHERE status=2");

$eyeColor->execute();

$fetEyeColors = $eyeColor->fetchAll();

///////// get all nationality //////////

$nationalities = $con->prepare("SELECT * FROM nationalities ");

$nationalities->execute();

$fetnationalities = $nationalities->fetchAll();


///////// get all nationality //////////

$cities = $con->prepare("SELECT * FROM cities ");

$cities->execute();

$fetcities = $cities->fetchAll();

///////// get all nationality //////////

$departments = $con->prepare("SELECT * FROM departments ");

$departments->execute();

$fetdepartments = $departments->fetchAll();
//////// get all diseases ////

$diseases = $con->prepare("SELECT * FROM diseases ");

$diseases->execute();

$fetdiseases = $diseases->fetchAll();

/*** get all governorate **/

$governorates = $con->prepare("SELECT * FROM governorate");

$governorates->execute();

$fets = $governorates->fetchAll();

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
    <link rel="stylesheet" href="assets/style/toastr.min.css" />
    <link rel="stylesheet" href="assets/style/addMissing.css">
    <link rel="stylesheet" href="assets/style/header.css">
    <title>?????????? ??????????</title>
</head>

<body>
    <header>
        <div class="lg_header">
            <?php if (isset($_SESSION['status']) && $_SESSION['status'] == 0) : ?>
                <div class="completeInfo">
                    <div class="container">
                        <p>?????????? ?????????????? ???????????????? ?? ?????????? ???????????? ???????????? ???? ?????????? <a href="userdate.php" class="opacity_hover">?????????????? ????????????????</a></p>
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
                            <li><a href="index.php" class="nav_item ">???????????? ????????????????</a></li>
                            <li><a href="missing.php" class="nav_item">?????????????? ??????????????????</a></li>
                            <li><a href="notmissing.php" class="nav_item">?????????? ???? ???????????? ??????????</a></li>
                            <li><a href="addMissing.php" class="nav_item active">?????????? ??????????</a></li>
                            <li><a href="about.php" class="nav_item">???? ??????</a></li>
                            <li><a href="contact.php" class="nav_item">?????????????? ????????</a></li>
                            <?php if (!$user->checkLogin()) : ?>
                                <li class="user_log">
                                    <a href="register.php" class="nav_item">??????????????</a>
                                    <a href="login.php" class="nav_item">?????????? ????????</a>
                                </li><!-- ./user_log -->
                            <?php endif; ?>
                            <?php if ($user->checkLogin()) : ?>
                                <li class="user_options">
                                    <a class="nav_item username"><?= $_SESSION['name'] ?></a>
                                    <div class="menu shadow">
                                        <ul>
                                        <li><a href="userdate.php">?????????? ????????????????</a></li>
                                    <?php if(isset($_SESSION['status']) && $_SESSION['status'] != 0): ?>
                                        <li><a href="user_profile.php?id=<?php echo $_SESSION['ssn']  ?>">?????? ?????????? ????????????</a></li>
                                    <?php endif; ?>
                                    <li><form action="index.php" method="post"><a><button type="submit" class="d-block w-100 text-right" name="logout">?????????? ????????????</button></a></form></li>
                                        </ul>
                                    </div><!-- ./menu -->
                                </li><!-- ./user_options -->
                            <?php endif; ?>

                        </ul>
                        <div class="search_content" title="???????? ???????????????? ?????????? ???? ?????????? ????????????">
                            <button class="search_icon"><i class="fas fa-search"></i></button>
                            <form class="search_form shadow" action="missing.php" method="get">
                                <input type="text" name="searchValue" placeholder="?????????? ???? ?????? ??????????" id="">
                                <button class="search_btn opacity_hover">????????</button>
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
                            <input type="text" name="searchValue" placeholder="?????????? ???? ?????? ??????????" id="">
                            <button class="search_btn opacity_hover">????????</button>
                        </form>
                    </div><!-- ./search_content -->
                    <li><a href="index.php" class="nav_item ">???????????? ????????????????</a></li>
                    <li><a href="missing.php" class="nav_item">?????????????? ??????????????????</a></li>
                    <li><a href="notmissing.php" class="nav_item">?????????? ???? ???????????? ??????????</a></li>
                    <li><a href="addMissing.php" class="nav_item active">?????????? ??????????</a></li>
                    <li><a href="about.php" class="nav_item">???? ??????</a></li>
                    <li><a href="contact.php" class="nav_item">?????????????? ????????</a></li>
                    <?php if (!$user->checkLogin()) : ?>
                        <li class="user_log">
                            <a href="register.php" class="nav_item">??????????????</a>
                            <a href="login.php" class="nav_item">?????????? ????????</a>
                        </li><!-- ./user_log -->
                    <?php endif; ?>
                    <?php if ($user->checkLogin()) : ?>
                        <li class="user_options">
                            <a class="nav_item username"><?= $_SESSION['name'] ?></a>
                            <div class="menu shadow">
                                <ul>
                                <li><a href="userdate.php">?????????? ????????????????</a></li>
                                    <?php if(isset($_SESSION['status']) && $_SESSION['status'] != 0): ?>
                                        <li><a href="user_profile.php?id=<?php echo $_SESSION['ssn']  ?>">?????? ?????????? ????????????</a></li>
                                    <?php endif; ?>
                                    <li><form action="index.php" method="post"><a><button type="submit" class="d-block w-100 text-right" name="logout">?????????? ????????????</button></a></form></li>
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
                    <li><a href="index.php" class="text-hover-black">???????????? ????????????????</a></li>
                    <li>?????????? ??????????</li>
                </ul><!-- ./breadCrumbItems -->
            </div><!-- ./container -->
        </section><!-- ./breadCrumb -->

        <section class="addMissing">
            <div class="container">
                <div class="section_title">
                    <h2>?????????? ??????????</h2>
                </div><!-- ./section_title -->

                <ul class="tabs_titles">
                    <li class="tab-button active">???????????????? ????????????????</li>
                    <li class="tab-button">???????????? ??????????????</li>
                    <li class="tab-button">???????????? ????????????????</li>
                    <!-- <li class="tab-button">?????????????? ????????????</li> -->
                </ul><!-- ./product-information -->

                <form class="addMissing_form tabs-content" id="add_missing" enctype="multipart/form-data">
                    <div class=" tab-content">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="SSN">?????????? ???????????? </label>
                                    <input class="form_input" type="text" id="SSN" name="ssn">
                                </div><!-- ./form_group -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="age"> ?????????? </label>
                                    <input class="form_input" type="text" id="age" name="age">
                                </div><!-- ./form_group -->
                            </div>


                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="phone"> ?????? ???????????? </label>
                                    <input class="form_input" type="text" id="phone" name="phone">
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->






                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="Fname"> ?????????? ?????????? </label>
                                    <input class="form_input" type="text" id="Fname" name="Fname">
                                </div><!-- ./form_group -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="Fname"> ?????????? ????????????</label>
                                    <input class="form_input" type="text" id="Mname" name="Mname">
                                </div><!-- ./form_group -->
                            </div>


                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="Lname"> ?????? ?????????????? </label>
                                    <input class="form_input" type="text" id="Lname" name="Lname">
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->







                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_type"> ?????????? ???????????? ???? ?????????? ?????????????? </label>
                                    <select class="form_input" id="relation" name="relation_with_missing" required>

                                        <option value="1">?????????? ???????? ???????? </option>
                                        <option value="2">?????????? ???????? ?????????? </option>
                                        <option value="3">?????? ?????? </option>
                                    </select>
                                </div><!-- ./form_group -->
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_type">?????????? </label>
                                    <select class="form_input" id="gender" name="gender" required> 
                                        <option hidden> ???????? ?????????? </option>
                                        <option value="1">??????</option>
                                        <option value="2">????????</option>
                                    </select>
                                </div><!-- ./form_group -->
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_type"> ??????????????</label>
                                    <select class="form_input" id="nationality" name="nationality" required>
                                        <option value=""> ???????? ?????????????? </option>
                                        <?php
                                        foreach ($fetnationalities as $fetnationality) {
                                            $nation_id = $fetnationality['nationality_code'];
                                            $nation = $fetnationality['nationality_name'];
                                            echo "<option value='$nation_id' >   $nation </option> ";
                                        }
                                        ?>
                                    </select>
                                </div><!-- ./form_group -->
                            </div>

                        </div><!-- ./row -->
                    </div><!-- ./tabs-content -->
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_eye">?????? ?????????? </label>
                                    <select class="form_input" id="hair_color" name="hair_color" required>
                                        <option value="" hidden> ?????? ?????????? </option>
                                        <?php
                                        foreach ($fetHairColors as $fetHairColor) {
                                            $hair_color = $fetHairColor['color_code'];
                                            $hair = $fetHairColor['color'];
                                            echo "<option value='$hair_color' >   $hair </option> ";
                                        }

                                        ?>
                                    </select>
                                </div><!-- ./form_group -->
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="skin_color">?????? ???????????? </label>
                                    <select class="form_input" id="skin_color" name="skin_color" required>
                                        <option value="" hidden> ?????? ???????????? </option>
                                        <?php
                                        foreach ($fetSkinColors as $fetSkinColor) {

                                            $skin_color = $fetSkinColor['color_code'];
                                            $skin = $fetSkinColor['color'];
                                            echo "<option value='$skin_color' >   $skin </option> ";
                                        }
                                        ?>


                                    </select>
                                </div><!-- ./form_group -->
                            </div>


                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="eye_color">?????? ?????????? </label>
                                    <select class="form_input" id="eye_color" name="eye_color" required>
                                        <option value="" hidden> ?????? ?????????? </option>
                                        <?php
                                        foreach ($fetEyeColors as $fetEyeColor) {

                                            $eye_color = $fetEyeColor['color_code'];
                                            $eye = $fetEyeColor['color'];
                                            echo "<option value='$eye_color' >   $eye </option> ";
                                        }

                                        ?>

                                    </select>
                                </div><!-- ./form_group -->
                            </div>


                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_height">?????? ?????????????? ????????????</label>
                                    <input class="form_input" type="number" name="height" id="birth" required>
                                </div><!-- ./form_group -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_weight">?????????? ???????????????? ??????????????</label>
                                    <input class="form_input" type="number" name="weight" id="miss_weight" required>
                                </div><!-- ./form_group -->
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_diseases">?????????? ?????????? ???????? ??????????????</label>
                                    <select class="form_input" id="miss_diseases" name="disease_code" required>
                                        <option hidden>???????? ??????</option>
                                        <?php
                                        foreach ($fetdiseases as $fetdisease) {

                                            $disease_code = $fetdisease['diseases_code'];
                                            $disease_name = $fetdisease['disease_name'];
                                            echo "<option value='$disease_code' >   $disease_name </option> ";
                                        }
                                        ?>
                                    </select>
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->

                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_img">???????? ??????????????</label>
                                    <input class="form_input" type="file" name="missingPhoto" id="miss_img" required>
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="form_group">
                                    <label for="miss_desc">?????????? ??????????</label>
                                    <textarea class="form_input" name="note" id="miss_desc" cols="30" rows="10" placeholder="?????? ?????????? ???? ?????? ?????? ???? ???????? ???????????? ???????????????? ????????.. ?????? ???? ???????? ???????? ???????????? ???? ?????? ?????????????? ???????? ???????? ???????????? ?????? ?????????? ???????????? ???????????? ???????????? ???? ?????? ?????? " required></textarea>
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->



                    </div><!-- ./tabs-content -->
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form_group">
                                    <label for="miss_date">?????????? ????????????????</label>
                                    <input class="form_input" type="date" name="lastSeen" id="miss_date" required>
                                </div><!-- ./form_group -->
                            </div>

                        </div><!-- ./row -->
                        <div class="row">





                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="select_governorate">???????????? ????????????????</label>
                                    <select class="form_input" id="select_governorate" name="select_governorate" required>
                                        <option hidden>???????? ????????????</option>
                                        <?php
                                        foreach ($fets as $fet) {
                                            $governate_id = $fet['Governorate_code'];
                                            $governate = $fet['Governorate_name'];
                                            echo "<option value='$governate_id' >   $governate </option> ";
                                        }
                                        ?>
                                    </select>
                                </div><!-- ./form_group -->
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_city"> ?????? ???????????? </label>
                                    <select class="form_input specific_city_governorate" id="specific_city_governorate" name="specific_city_governorate" required>

                                        <option value="" hidden> ???????? ?????????? </option>



                                    </select>
                                    </select>
                                </div><!-- ./form_group -->


                            </div>



                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <label for="nationality" class="form-label"> ???????? ???????????? </label>

                                <select class="form-control" id="department" name="department_code" required>
                                    <option value="" hidden> ???????? ?????????? </option>



                                </select>

                            </div>


                        </div><!-- ./row -->

                            <div class="form_btn text-center mt-5">
                                <button type="submit" class="white_hover" name="submit">?????????? ????????????</button>
                            </div>
                        </div><!-- ./row -->


                    </div><!-- ./tabs-content -->
                    <div class="tab-content">
                        

                    </div>

                </form><!-- ./tabs-content -->
            </div><!-- ./container -->
        </section><!-- ./addMissing -->

























        <section class="contact padd">
            <div class="overlay"></div>
            <div class="container">
                <div class="contact_content">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 right">
                            <h2 class="contact_title">???????? ???? ???????? ???? ??????????</h2>
                            <p class="contact_desc">?????????? ???????? ?? ???????????? ???? ?????????? ??????????????</p>
                        </div>
                        <div class="col-sm-6 col-12 left">
                            <a href="contact.php" class="contact_link">?????????? ???????? ????????</a>
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
                        <!-- <h3 class="footer_title">?????????? ????????????</h3> -->
                        <div class="footer_item">
                            <ul class="footer_list">
                                <li><a href="index.php">???????????? ????????????????</a></li>
                                <li><a href="missing.php">?????????????? ??????????????????</a></li>
                            </ul><!-- ./footer_list -->
                            <ul class="footer_list">
                                <li><a href="notmissing.php">?????????? ???? ???????????? ??????????</a></li>
                                <li><a href="about.php">???? ??????</a></li>
                            </ul><!-- ./footer_list -->
                            <ul class="footer_list">
                                <li><a href="contact.php">?????????????? ????????</a></li>
                                <li><a href="donation.php">???????? ???????? ?????? ??????????????</a></li>
                            </ul><!-- ./footer_list -->
                            <?php if (!$user->checkLogin()) : ?>
                                <ul class="footer_list">
                                    <li><a href="login.php">?????????? ????????</a></li>
                                    <li>
                                        <a href="register.php">??????????????</a>
                                    </li>
                                </ul><!-- ./footer_list -->
                            <?php endif; ?>
                            <?php if ($user->checkLogin()) : ?>
                                <ul class="footer_list">
                                    <li><a href="user_profile.php?id=<?php echo $_SESSION['ssn']  ?>">?????? ?????????? ????????????</a></li>
                                    <li>
                                        <form action="index.php" method="post"><a><button type="submit" class="d-block w-100 text-right" name="logout">?????????? ????????????</button></a></form>
                                    </li>
                                </ul><!-- ./footer_list -->
                            <?php endif; ?>


                        </div><!-- ./footer_item -->
                    </div>
                </div><!-- ./row -->
            </div><!-- ./container -->
        </div><!-- ./footer_content -->
        <div class="copy">???????? ???????????? ???????????? ?? 2022 ?????? ??????????????????</div><!-- ./copy -->
    </footer>


















    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dynamicTabs.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="assets/js/addMissing.js"></script>
    <script src="front_code/add_missing/add_missing.js"></script>
</body>

</html>
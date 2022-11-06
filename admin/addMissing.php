<?php
require_once("./connection.php");

session_start();
include('auth.php');

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
    <link rel="stylesheet" href="assets/css/bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/addMissing.css">
    <title>إضافة مفقود</title>
</head>

<body>

    <main>




        <section class="addMissing" style="padding-top: 40px;">
            <div class="container">
                <div class="section_title">
                    <h2>إضافة مفقود</h2>
                </div><!-- ./section_title -->

                <ul class="tabs_titles">
                    <li class="tab-button active"> البيانات الأساسية للمفقود</li>
                    <li class="tab-button">الصفات الجثمانية للمفقود</li>
                    <li class="tab-button"> جهة البلاغ / تفاصيل الإختفاء</li>
                </ul><!-- ./product-information -->

                <form class="addMissing_form tabs-content" id="add_missing" enctype="multipart/form-data">
                    <div class=" tab-content">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="SSN">الرقم القومي </label>
                                    <input class="form_input" type="number" id="SSN" name="ssn">
                                </div><!-- ./form_group -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="age"> العمر </label>
                                    <input class="form_input" type="number" id="age" name="age">
                                </div><!-- ./form_group -->
                            </div>


                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="phone"> رقم الهاتف </label>
                                    <input class="form_input" type="number" id="phone" name="phone">
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->






                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="Fname"> الاسم الأول </label>
                                    <input class="form_input" type="text" id="Fname" name="Fname">
                                </div><!-- ./form_group -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="Fname"> الاسم الاوسط</label>
                                    <input class="form_input" type="text" id="Mname" name="Mname">
                                </div><!-- ./form_group -->
                            </div>


                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="Lname"> لقب العائلة </label>
                                    <input class="form_input" type="text" id="Lname" name="Lname">
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->







                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_type"> علاقة المبلغ مع الشخص المفقود </label>
                                    <select class="form_input" id="relation" name="relation_with_missing" required>

                                        <option value="1">قرابة درجة اولي </option>
                                        <option value="2">قرابة درجة ثانية </option>
                                        <option value="3">غير ذلك </option>
                                    </select>
                                </div><!-- ./form_group -->
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_type">النوع </label>
                                    <select class="form_input" id="gender" name="gender"required>
                                        <option hidden> اختر النوع </option>
                                        <option value="1">ذكر</option>
                                        <option value="2">انثي</option>
                                    </select>
                                </div><!-- ./form_group -->
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_type"> الجنسية</label>
                                    <select class="form_input" id="nationality" name="nationality"required>
                                        <option value=""> اختر الجنسية </option>
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
                                    <label for="miss_eye">لون الشعر </label>
                                    <select class="form_input" id="hair_color" name="hair_color"required>
                                        <option value="" hidden> لون الشعر </option>
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
                                    <label for="skin_color">لون البشرة </label>
                                    <select class="form_input" id="skin_color" name="skin_color"required>
                                        <option value="" hidden> لون البشرة </option>
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
                                    <label for="eye_color">لون العين </label>
                                    <select class="form_input" id="eye_color" name="eye_color"required>
                                        <option value="" hidden> لون العين </option>
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
                                    <label for="miss_height">طول المفقود تقريبا</label>
                                    <input class="form_input" type="number" name="height" id="birth"required>
                                </div><!-- ./form_group -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_weight">الوزن التقريبي للمفقود</label>
                                    <input class="form_input" type="number" name="weight" id="miss_weight"required>
                                </div><!-- ./form_group -->
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_diseases">أمراض يعاني منها المفقود</label>
                                    <select class="form_input" id="miss_diseases" name="disease_code"required>
                                        <option hidden>اختر مرض</option>
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
                                    <label for="miss_img">صورة المفقود</label>
                                    <input class="form_input" type="file" name="missingPhoto" id="miss_img">
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="form_group">
                                    <label for="miss_desc">علامة مميزة</label>
                                    <textarea class="form_input" name="note" id="miss_desc" cols="30" rows="10" placeholder="شرح مختصر عن اخر مرة تم فيها مشاهدة المفقود، مثلا.. خرج من مكان عمله الكائن في مول البحتري وكان ينوي الذهاب الى البيت بواسطة سيارته الخاصة من نوع كيا "required></textarea>
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->



                    </div><!-- ./tabs-content -->
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form_group">
                                    <label for="miss_date">تاريخ الإختفاء</label>
                                    <input class="form_input" type="date" name="lastSeen" id="miss_date"required>
                                </div><!-- ./form_group -->
                            </div>

                        </div><!-- ./row -->
                        <div class="row">





                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="select_governorate">محافظة الإختفاء</label>
                                    <select class="form_input" id="select_governorate" name="select_governorate"required>
                                        <option hidden>اختر محافظة</option>
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
                                    <label for="miss_city"> بلد البلاغ </label>
                                    <select class="form_input specific_city_governorate" id="specific_city_governorate" name="specific_city_governorate"required>

                                        <option value="" hidden> اختر البلد </option>



                                    </select>
                                    </select>
                                </div><!-- ./form_group -->


                            </div>

                            <div class="col-lg-4">
                                <label for="nationality" class="form-label"> مكان البلاغ </label>

                                <select class="form-control" id="department" name="department_code"required>
                                    <option value="" hidden> اختر القسم </option>



                                </select>

                            </div>
                            
                            
                            
                        </div><!-- ./row -->
                        <div class="form_btn text-center mt-5">
                            <button type="submit" class="white_hover" name="submit">تقديم البلاغ</button>
                        </div>


                    </div><!-- ./tabs-content -->
                    <div class="tab-content">
                        <div class="row">

        

                        </div><!-- ./row -->



                </form><!-- ./tabs-content -->
            </div><!-- ./container -->
        </section><!-- ./addMissing -->































    </main>
















    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.min.js"></script>
    <script src="assets/js/dynamicTabs.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="assets/js/addMissing.js"></script>
    <script src="code/add_missing/add_missing.js"></script>

</body>

</html>
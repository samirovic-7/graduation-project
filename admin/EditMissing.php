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






if (isset($_GET["id"])) {

    $getMissing = $con->prepare('SELECT missing.* , cities.citiese_name AS "city_name" , governorate.Governorate_name AS "governate_name" , diseases.disease_name AS "disease_name" ,

    nationalities.nationality_name AS "nationality_name" , departments.department_name AS "department_name",
    
    colors.color AS "hair_color_name" ,
    colors1.color AS "skin_color_name" ,
    colors2.color AS "eye_color_name"
    
    FROM missing
    
    INNER JOIN cities ON missing.city_code = cities.cities_code
    
    INNER JOIN governorate ON missing.governorate_code = governorate.Governorate_code
    
    INNER JOIN diseases ON missing.disease_code = diseases.diseases_code
    
    INNER JOIN nationalities ON missing.nationality_code = nationalities.nationality_code
    
    INNER JOIN departments ON missing.department_code = departments.department_code
    
    INNER JOIN colors AS colors ON missing.skin_color = colors.color_code  
    
    INNER JOIN colors AS colors1 ON missing.eye_color = colors1.color_code
    
    INNER JOIN colors AS colors2 ON missing.hair_color = colors2.color_code
    
    
    
    WHERE missing.id=:id');
    $getMissing->bindparam('id', $_GET["id"]);

    $getMissing->execute();

    $getMissingInfo = $getMissing->fetch();

    print_r($getMissingInfo);
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
    <link rel="stylesheet" href="assets/css/bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/addMissing.css">
    <title>?????????? ??????????</title>
</head>

<body>

    <main>




        <section class="addMissing" style="padding-top: 40px;">
            <div class="container">
                <div class="section_title">
                    <h2>?????????? ??????????</h2>
                </div><!-- ./section_title -->

                <ul class="tabs_titles">
                    <li class="tab-button active"> ???????????????? ???????????????? ??????????????</li>
                    <li class="tab-button">???????????? ?????????????????? ??????????????</li>
                    <li class="tab-button"> ?????? ???????????? / ???????????? ????????????????</li>
                    <li class="tab-button"> ?????????? ???????????? </li>
                </ul><!-- ./product-information -->

                <form class="addMissing_form tabs-content" id="edit_missing" enctype="multipart/form-data">
                    <div class=" tab-content">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="SSN">?????????? ???????????? </label>
                                    <input class="form_input" type="text" id="SSN" name="ssn" value="<?php echo $getMissingInfo['SSN'] ?>">
                                </div><!-- ./form_group -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="age"> ?????????? </label>
                                    <input class="form_input" type="text" id="age" name="age" value="<?php echo $getMissingInfo['age'] ?>">
                                </div><!-- ./form_group -->
                            </div>


                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="phone"> ?????? ???????????? </label>
                                    <input class="form_input" type="text" id="phone" name="phone" value="<?php echo $getMissingInfo['phone'] ?>">
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->






                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="Fname"> ?????????? ?????????? </label>
                                    <input class="form_input" type="text" id="Fname" name="Fname" value="<?php echo $getMissingInfo['First_Name'] ?>">
                                </div><!-- ./form_group -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="Fname"> ?????????? ????????????</label>
                                    <input class="form_input" type="text" id="Mname" name="Mname" value="<?php echo $getMissingInfo['Mid_Name'] ?>">
                                </div><!-- ./form_group -->
                            </div>


                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="Lname"> ?????? ?????????????? </label>
                                    <input class="form_input" type="text" id="Lname" name="Lname" value="<?php echo $getMissingInfo['Last_Name'] ?>">
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->







                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_type"> ?????????? ???????????? ???? ?????????? ?????????????? </label>
                                    <select class="form_input" id="relation" name="relation_with_missing">

                                        <option hidden value="<?php echo $getMissingInfo['relationWithMisssing'] ?>">

                                            <?php

                                            if ($getMissingInfo['relationWithMisssing'] == 1) {
                                            ?>
                                                ?????????? ???????? ????????
                                            <?php
                                            } elseif ($getMissingInfo['relationWithMisssing'] == 2) {
                                            ?>
                                                ?????????? ???????? ??????????

                                                <?php
                                            } else {
                                                ?>?????? ??????


                                            <?php

                                            }

                                            ?>

                                        </option>

                                        <option value="1">?????????? ???????? ???????? </option>
                                        <option value="2">?????????? ???????? ?????????? </option>
                                        <option value="3">?????? ?????? </option>
                                    </select>
                                </div><!-- ./form_group -->
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_type">?????????? </label>
                                    <select class="form_input" id="gender" name="gender">
                                        <option hidden value="<?php echo $getMissingInfo['gender'] ?>">

                                            <?php

                                            if ($getMissingInfo['gender'] == 1) {
                                            ?>
                                                ??????
                                            <?php

                                            } else {
                                            ?>
                                                ????????
                                            <?php

                                            }

                                            ?>

                                        </option>
                                        <option value="1">??????</option>
                                        <option value="2">????????</option>
                                    </select>
                                </div><!-- ./form_group -->
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_type"> ??????????????</label>
                                    <select class="form_input" id="nationality" name="nationality">
                                        <option value="<?php echo $getMissingInfo['nationality_code'] ?>" hidden>  <?php  echo $getMissingInfo['nationality_name'] ?> </option>
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
                                    <select class="form_input" id="hair_color" name="hair_color">
                                        <option selected value="<?php echo $getMissingInfo['hair_color'] ?>" hidden>  <?php echo $getMissingInfo['hair_color_name'] ?> </option>
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
                                    <select class="form_input" id="skin_color" name="skin_color">
                                        <option selected value="<?php echo $getMissingInfo['skin_color'] ?>" hidden> <?php echo $getMissingInfo['skin_color_name'] ?>  </option>
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
                                    <select class="form_input" id="eye_color" name="eye_color">
                                    <option selected value="<?php echo $getMissingInfo['eye_color'] ?>" hidden> <?php echo $getMissingInfo['eye_color_name'] ?>  </option>
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
                                    <input class="form_input" type="number" name="height" id="birth" value="<?php echo $getMissingInfo['height'] ?>">
                                </div><!-- ./form_group -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_weight">?????????? ???????????????? ??????????????</label>
                                    <input class="form_input" type="number" name="weight" id="miss_weight" value="<?php echo $getMissingInfo['weight'] ?>">
                                </div><!-- ./form_group -->
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="miss_diseases">?????????? ?????????? ???????? ??????????????</label>
                                    <select class="form_input" id="miss_diseases" name="disease_code">
                                        <option selected value="<?php echo $getMissingInfo['disease_code'] ?>" hidden>  <?php echo $getMissingInfo['disease_name'] ?> </option>
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
                                    <input class="form_input" type="file" name="missingPhoto" id="miss_img">
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="form_group">
                                    <label for="miss_desc">?????????? ??????????</label>
                                    <textarea class="form_input" name="note" value="<?php  echo $getMissingInfo['notes'] ?>" id="miss_desc" cols="30" rows="10" placeholder="<?php echo $getMissingInfo['notes'] ?>"></textarea>
                                </div><!-- ./form_group -->
                            </div>
                        </div><!-- ./row -->



                    </div><!-- ./tabs-content -->
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form_group">
                                    <label for="miss_date">?????????? ????????????????</label>
                                    <input class="form_input" type="date" name="lastSeen" id="miss_date" value="<?php echo $getMissingInfo['missing_date'] ?>">
                                </div><!-- ./form_group -->
                            </div>

                        </div><!-- ./row -->
                        <div class="row">





                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form_group">
                                    <label for="select_governorate">???????????? ????????????????</label>
                                    <select class="form_input" id="select_governorate" name="select_governorate">
                                        <option selected value="<?php echo $getMissingInfo['governorate_code'] ?>" hidden>  <?php echo $getMissingInfo['governate_name'] ?>  </option>
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
                                    <select class="form_input specific_city_governorate" id="specific_city_governorate" name="specific_city_governorate">

                                        <option selected  value="<?php echo $getMissingInfo['city_code'] ?>" hidden> <?php echo $getMissingInfo['city_name'] ?>  </option>



                                    </select>
                                    </select>
                                </div><!-- ./form_group -->


                            </div>



                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group" id="radioSelect">
                                    <label for="wrfref"> ?????? ???????????? </label>
                                    <div class="input-group mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                            <label class="form-check-label" for="inlineRadio1"> ???????????? </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                            <label class="form-check-label" for="inlineRadio2">????????</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                                            <label class="form-check-label" for="inlineRadio3">?????????? ????????</label>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div><!-- ./row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <label for="nationality" class="form-label"> ???????? ???????????? </label>

                                <select class="form-control" id="department" name="department_code">
                                <option selected  value="<?php echo $getMissingInfo['department_code'] ?>" hidden> <?php echo $getMissingInfo['department_name'] ?>  </option>



                                </select>

                            </div>
                        </div>

                    </div><!-- ./tabs-content -->
                    <div class="tab-content">
                        <div class="row">

                            <label for="nationality" class="form-label"> ?????????? ???????? ?????????????? </label>

                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form_group">

                                    <select class="form_input" id="relation" name="missing_status">

                                        <option hidden value="<?php echo $getMissingInfo['missingType'] ?>">

                                            <?php

                                            if ($getMissingInfo['missingType']  == 0) {
                                            ?>
                                                ??????????
                                            <?php

                                            } else {
                                            ?>
                                                ???? ???????????? ????????

                                            <?php
                                            }

                                            ?>

                                        </option>

                                        <option value="0"> ?????????? </option>

                                        <option value="1"> ???? ???????????? ???????? </option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                        <div class="row">

                            <div class="form_btn text-center">
                                <button type="submit" class="white_hover col-lg-12" name="submit">?????????? ????????????</button>
                            </div>

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
    <script src="code/manage_missing/edit_missing/editMissing.js"></script>

</body>

</html>
<?php

session_start();
include('connection.php');
include('auth.php');
if (isset($_GET['missing_id'])) {

    $reportet_type = $con->prepare('SELECT added_by_admin , added_by_citizines FROM missing  WHERE missing.id=:id');

    $reportet_type->bindparam('id', $_GET["missing_id"]);

    $reportet_type->execute();

    $reportet_type_data  = $reportet_type->fetch();

    $admin_ssn = $reportet_type_data['added_by_admin'];

    $citizine_ssn = $reportet_type_data['added_by_citizines'];





    if ($admin_ssn != NULL) {


        $citizine = false;

        $sel = $con->prepare('SELECT * FROM missing WHERE added_by_admin=:added_by_admin1');

        $sel->bindparam('added_by_admin1', $admin_ssn);

        $sel->execute();

        $count = $sel->rowCount();


        $keys = $sel->fetchAll();




        $admin = $con->prepare('SELECT admins.* , governorate.Governorate_name AS  Governorate_name , cities.citiese_name AS citiese_name FROM admins
         INNER JOIN governorate ON admins.governorate_code = governorate.Governorate_code
         INNER JOIN cities ON admins.cites_code = cities.cities_code
          WHERE admins.ssn=:admin_ssn');

        $admin->bindparam("admin_ssn", $admin_ssn);

        $admin->execute();




        $admin_data = $admin->fetch();
    } else {


        $citizine = true;

        $sel = $con->prepare('SELECT * FROM missing WHERE added_by_citizines=:added_by_citizines1');

        $sel->bindparam('added_by_citizines1', $citizine_ssn);

        $sel->execute();

        $count = $sel->rowCount();

        $keys = $sel->fetchAll();




        $citizine = $con->prepare("SELECT * FROM citizines WHERE citizines.ssn=:citizines_ssn");

        $citizine->bindparam("citizines_ssn", $citizine_ssn);

        $citizine->execute();




        $citizine_data = $citizine->fetch();
    }
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />

    <link rel="stylesheet" href="assets/css/user_profile.css">


    <title>تواصل معانا</title>

</head>

<body>


    <section class="breadCrumb" style="margin-top: 0px;">
        <div class="container">
            <ul class="breadCrumbItems">
                <li><a href="index.html" class="text-hover-black">الصفحة الرئيسية</a></li>
                <li>تفاصيل عن المفقود</li>
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
                                <p class="mb-12"> <i class="fas fa-compass"></i>
                                    <?php
                                    if ($citizine == true) {
                                        echo  $citizine_data["First_name"] ?> <?php echo  $citizine_data["mid_name"] ?> <?php echo  $citizine_data["last_name"];
                                                                                                                                    } else {
                                                                                                                                        echo  $admin_data["Governorate_name"] ?> - <?php echo $admin_data['citiese_name'];
                                                                                                                                    }
                                                                                                    ?>
                                </p>
                            </div>
                        </div>

                        <div class="card card-right radius-10">
                            <div class="card-body">
                                <h5 class="mb-3">تواصل معي </h5>
                                <p class="mb-12"> <i class="fas fa-user"></i>
                                    <?php
                                    if ($citizine == true) {
                                        echo  $citizine_data["First_name"] ?> <?php echo  $citizine_data["mid_name"] ?> <?php echo  $citizine_data["last_name"];
                                                                                                                                    } else {
                                                                                                                                        echo  $admin_data["first_name"] ?> <?php echo  $admin_data["mid_name"] ?> <?php echo  $admin_data["last_name"];
                                                                                                                                    }

                                                                                                                                    ?>

                                </p>
                                <p class="mb-12"> <i class="fas fa-envelope"></i>

                                    <?php
                                    if ($citizine == true) {
                                        echo  $citizine_data["email"];
                                    } else {
                                        echo  $admin_data["email"];
                                    }
                                    ?>

                                </p>
                                <p class="mb-12"> <i class="fas fa-phone"></i>

                                    <?php
                                    if ($citizine == true) {
                                        echo  $citizine_data["first_phone"];
                                    } else {
                                        echo  $admin_data["phone"];
                                    }
                                    ?>


                                </p>
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

                            foreach ($keys as $key) {
                            ?>
                                <div class="card card-left">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-4 img-user-profile">
                                            <div class="ml-3 img-profile">
                                                المبلغ
                                            </div>
                                            <div class="user-page-info">
                                                <p class="mb-0">
                                                    <?php
                                                    if ($citizine == true) {
                                                        echo  $citizine_data["First_name"] ?> <?php echo  $citizine_data["mid_name"] ?> <?php echo  $citizine_data["last_name"];
                                                                                                                                    } else {
                                                                                                                                        echo  $admin_data["first_name"] ?> <?php echo  $admin_data["mid_name"] ?> <?php echo  $admin_data["last_name"];
                                                                                                                                    }

                                                                                                                                    ?>
                                                </p>
                                                <span class="font-small-2"><?php echo $key['created_at'] ?> </span>
                                            </div>

                                        </div>
                                        <p class="mb-3 p-10 paragraph-content"><?php echo $key['notes'] ?></p> <a href="missingdetailes.php?comment_code=<?php echo $key['id'] ?>">اقرا المزيد</a>
                                        <div class="img-content">
                                            <img src="../admin/code/add_missing/upload/missing/<?php echo  $key['image'] ?>" alt="avtar img holder">
                                        </div>



                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>










                    </div><!-- ./mid_info -->




                </div>

            </div>
        </div>

    </div>
    <!-- end part2-->







    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/userProfile.js"></script>
    <script src="code/comments_reply/comments.js"></script>
</body>

</html>
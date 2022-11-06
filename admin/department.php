<?php
session_start();
include('connection.php');
include('auth.php');
if (isset($_GET['id'])) {
    
    $sel = $con->prepare('SELECT departments.* , governorate.Governorate_name AS gov_name , cities.citiese_name AS city_name
    FROM departments
    INNER JOIN governorate ON departments.governorate_code=governorate.Governorate_code
    INNER JOIN cities ON departments.cites_code = cities.cities_code
    
     WHERE departments.department_code=:department_code');

    $sel->bindparam('department_code',$_GET['id']);

    $sel->execute();

    $fets = $sel->fetch();
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


    <!-- end part1-->


    <section class="breadCrumb" style="margin-top: 0px;">
        <div class="container">
            <ul class="breadCrumbItems">
                <li><a href="index.html" class="text-hover-black">الصفحة الرئيسية</a></li>
                <li> بيانات الجهة</li>
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
                                <p class="mb-12"> <i class="fas fa-compass"></i><?php echo $fets['gov_name'] ?> - <?php echo $fets['city_name'] ?>  </p>
                            </div>
                        </div>

                        <div class="card card-right radius-10">
                            <div class="card-body">
                                <h5 class="mb-3"> للتواصل </h5>
                                <p class="mb-12"> <i class="fas fa-user"></i> <?php echo $fets['department_name'] ?> </p>
                                <p class="mb-12"> <i class="fas fa-phone"></i> <?php echo $fets['department_phone'] ?></p>
                            </div>
                        </div>
                    </div><!-- ./side_info -->




                </div>
                <?php

                ?>
                <div class="col-lg-8 col-md-8 col-sm-12 p-0">
                    <div class="mid_info">
  
     

                                <div class="card card-left">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-4 img-user-profile">
                  


                                        </div>

                                        <div class="img-content" style="overflow: hidden;">
                                            <?php
                                                    echo $fets['location'];

                                            ?>
                                        </div>

                                    </div>
                                </div>






        

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
</body>

</html>
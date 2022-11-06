<?php
session_start();
include('connection.php');
include('auth.php');
if(isset($_GET['id']))
{
    $adminData = $con->prepare('SELECT admins.* , governorate.Governorate_name AS governorateName , cities.citiese_name AS cityName , departments.department_name AS departmentName
    FROM admins
    INNER JOIN governorate ON admins.governorate_code  = governorate.Governorate_code
    
    INNER JOIN cities ON admins.cites_code  = cities.cities_code
    
    INNER JOIN departments ON admins.department_code  = departments.department_code
    
    
    
     WHERE admins.ssn=:ssn');

    $adminData->bindParam('ssn',$_GET['id']);

    $adminData->execute();

    $adminFetch = $adminData->fetch();

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/template.css">

    <link rel="stylesheet" href="assets/css/admin_card.css">


</head>

<body>

    <div class="view">
        <div class="row">
            <div class="col-lg-2">
                <?php

                include('template/side_bar.php')
                ?>
            </div>
            <div class="col-lg-10">
                <div class="side-right">
                    <div class="content-template">
                        <div class="upper-template">
                            <div class="template-title">
                                <h2 class="h1"> هوية الادمن </h2>
                            </div>


                            <div class="template-search">

                            </div>

                            <div class="add">
                                <button type="button" class="btn btn-primary" onclick="window.print()"><i class="fas fa-print"></i> طباعة </button>

                            </div>





                        </div>

                        <div class="alerts" id="alerts">

                        </div>

                        <div class="missing">

                            <div class="row" id="">


                                <div class="card">

                                    <div class="upper">
                                        <p class="text-center"> البيانات الشخصية  للأدمن </p>

                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col-lg-6">

                                                <ul class="list-unstyled">
                                                    <li>الأسم : <span>  <?php echo $adminFetch['first_name'] ?> <?php echo$adminFetch['mid_name'] ?> <?php echo$adminFetch['last_name'] ?> </span></li>

                                                    <li>الرقم القومي : <span>   <?php echo $adminFetch['ssn'] ?></span>
                                                    </li>

                                                    <li>
                                                        رقم الهاتف : <span>     <?php echo $adminFetch['phone'] ?></span>
                                                    </li>

                                                    <li>
                                                        البريد الالكتروني : <span>   <?php echo $adminFetch['email'] ?></span>
                                                    </li>
                                                </ul>



                                            </div>
                                            <div class="col-lg-6">


                                            <ul class="list-unstyled">
                                                    <li>مكان العمل : <span>  <?php echo $adminFetch['governorateName'] ?> - <?php echo $adminFetch['cityName'] ?> </span></li>

                                                    <li> جهة العمل : <span>   <?php echo $adminFetch['departmentName'] ?>   </span>
                                                    </li>

                                                    <li>
                                                         تاريخ الانضمام : <span>  <?php echo $adminFetch['created_at'] ?>  </span>
                                                    </li>

                                                </ul>

                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>







                            </div>

                        </div>

                    </div>
                </div>

            </div>


            <!-- Button trigger modal -->



        </div>




    </div>






    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dashboard2.js"></script>


</body>

</html>
<?php 
session_start();
include('auth.php');




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">

    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/template.css">

    <link rel="stylesheet" href="assets/css/table.css">
</head>

<body>








<div class="view">
        <div class="row">
            <div class="col-lg-2">
                <?php
                if ($_SESSION['admin_dapartment_status'] == 1) {
                    include('template/side_bar_police.php');
                } elseif ($_SESSION['admin_dapartment_status'] == 2) {
                    include('template/side_bar_hospital.php');
                } else {
                    include('template/side_bar_shelter.php');
                }

                ?>
            </div>
            <div class="col-lg-10">
                <?php include('template/body_shelter.php') ?>

            </div>
        </div>
    </div>















 

        <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/dashboard2.js"></script>

    <script src="assets/js/toastr.min.js"></script>


</body>

</html>







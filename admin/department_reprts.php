<?php
include('connection.php');
?>
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/template.css">

    <link rel="stylesheet" href="assets/css/missing.css">
    <link rel="stylesheet" href="assets/css/table.css">
</head>

<body>

    <div class="view">
        <div class="row">
            <div class="col-lg-2">
            <?php
                if ($_SESSION['admin_dapartment_status']==1) {
                    include('template/side_bar_police.php');
                }
                elseif($_SESSION['admin_dapartment_status']==2)
                {
                    include('template/side_bar_hospital.php');
                }
                else{
                    include('template/side_bar_shelter.php');
                }

                            ?>
            </div>
            <div class="col-lg-10">
                <div class="side-right">
                    <?php
                    if (isset($_GET["id"])) {
                        $missing_departmnt_id =  $_GET['id'];

                        $sel = $con->prepare("SELECT missing_location.* , missing.First_Name AS 'FIRST_NAME' , missing.Mid_Name AS 'Mid_Name',missing.Last_Name AS 'Last_Name',missing.SSN AS 'SSN',missing.phone  AS 'phone' FROM missing_location 
                        INNER JOIN missing ON missing_location.missing_code = missing.id WHERE to_department=:department_code ");
                        $sel->bindparam('department_code', $missing_departmnt_id);
                        $sel->execute();

                        $count = $sel->rowcount();




                        $fets = $sel->fetchAll();
                    }
                    ?>
                    <div class="content-template">
                        <div class="upper-template">
                            <div class="template-title">
                                <h2 class="h1">يسيسهق </h2>
                            </div>


                            <div class="template-search">

                            </div>







                        </div>


                        <br>
                        <div class="alerts" id="alerts">
                            <?php

                            if ($count == 0) {
                            ?>

                                <div class="alert alert-danger" role="alert">
                                    هذا القسم لا يحتوي علي اية بلاغات
                                </div>
                            <?php
                            }

                            ?>

                        </div>

                        <div class="table-template">

                            <table>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>



                                        <th scope="col"> اسم المفقود </th>


                                        <th scope="col">الرقم القومي</th>

                                        <th scope="col">رقم الهاتف</th>





                                        <th scope="col"> حذف</th>

                                        <th scope="col">تعديل</th>


                                        <th scope="col">اقرا المزيد</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $i = 0;
                                    foreach ($fets as $fet) {
                                        $i++;
                                    ?>

                                        <tr>
                                            <th scope="row"> <?php echo $i ?> </th>
                                            <th> <?php echo $fet["FIRST_NAME"] ?> <?php echo $fet["Mid_Name"] ?> <?php echo $fet["Last_Name"] ?> </th>

                                            <td> <?php echo $fet["SSN"] ?> </td>
                                            <td> <?php echo $fet["phone"] ?> </td>



                                            <td>
                                                <p class="status status-unpaid">
                                                    <i class="fas fa-trash" onclick="delete_missing(<?php echo $fet['id'] ?>)"></i>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="status status-pending">
                                                    <a href="EditMissing.php?id=<?php echo $fet['id'] ?>"> <i class="fas fa-pen"></i> </a>
                                                </p>
                                            </td>

                                            <td>
                                                <p>



                                                    <a href="missingdetailes.php?comment_code=<?php echo $fet['id'] ?>"> <i class="fas fa-eye blue"></i> </a>
                                                </p>
                                            </td>
                                        </tr>


                                    <?php
                                    }

                                    ?>


                                </tbody>
                            </table>




                        </div>
                    </div>
                </div>

            </div>



        </div>






        <script src="assets/js/jquery-1.12.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/dashboard2.js"></script>




</body>

</html>
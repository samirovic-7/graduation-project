<?php
session_start();
include('connection.php');

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
<?php 


?>
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
                        $governorate_code_id =  $_GET['id'];

                        $sel = $con->prepare("SELECT * FROM missing WHERE governorate_code=:governorate_code");
                        $sel->bindparam('governorate_code', $governorate_code_id);
                        $sel->execute();

                        $count = $sel->rowcount();


                        echo $count;

                        $fets = $sel->fetchAll();
                    }
                    ?>
                    <div class="content-template">
                        <div class="upper-template">
                            <div class="template-title">
                                <h2 class="h1"> الاطفال المفقودة داخل محافظات </h2>
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

                                        <th scope="col">حذف</th>


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
                                            <th>                                              <?php 
                                                if (empty($fet["First_Name"] && $fet["Mid_Name"] && $fet["Last_Name"] )) {
                                                    
                                    echo 'اسم المفقود غير معروق';
                                                }
                                                else
                                                {
                                                    echo $fet["First_Name"] .' '. $fet["Mid_Name"] .' '. $fet["Last_Name"];
                                                }

?> </th>

                                            <td> <?php                                                if ($fet["SSN"]  == 0) {
                                                    echo 'الرقم القوم  غير معروف';
                                                }
                                                else
                                                {

                                                    echo $fet["SSN"] ;
                                                }
                                                
                                                ?>  </td>
                                            <td> <?php if ($fet["phone"] == 0) {
                                               echo 'هاتف مفقود غير معروف';
                                            }
                                            else
                                            {
                                                echo $fet["phone"]; 
                                            } ?> </td>



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

        <script src="assets/js/leftSide.js"></script>



</body>

</html>
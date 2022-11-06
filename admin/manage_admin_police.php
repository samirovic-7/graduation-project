<?php 
session_start();
include('auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
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
                    <div class="content-template">
                        <div class="upper-template">
                            <div class="template-title">
                                <h2 class="h1"> إدارة ادمن اقسام الشرطة </h2>

                            </div>


                            <div class="template-search">

                                <div class="pos">

                            </div>

                            </div>



                        </div>
                        <div class="alerts" id="alerts">

                        </div>

                        <br>
                        <div class="table-template">
                            <table >
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>



                                        <th scope="col"> الاسم </th>


                                        <th scope="col">الرقم القومي</th>

                                        <th scope="col">الاميل</th>



                                        <th scope="col">حذف</th>

                                        <th scope="col">تعديل</th>

                                        <th scope="col">اقرا المزيد</th>

                                    </tr>
                                </thead>
                                <tbody id="admins_content">







                                </tbody>
                            </table>
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
    <script src="code/admins/manage_admin_police/admin_police.js"></script>

</body>

</html>
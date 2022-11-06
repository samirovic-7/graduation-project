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
                <div class="side-right">
                    <div class="upper-template">
                        <div class="template-title">
                            <div class="banner">
                                <ul class="list-unstyled">
                                    <li class="list1"> الرئيسية </li> <span class="one"> / </span>
                                    <li class="list2"> <span class="two"> لوحة تحكم الادمن </span> </li>
                                </ul>
                            </div>
                        </div>


                        <div class="content-template">

                            <div class="conteiner">
                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="box-content" style="background-color: #f44a2c;">
                                            <div class="box-content-parag">
                                                <span> 12 </span>
                                                <p> عدد البلاغات </p>

                                            </div>
                                            <div class="box-content-icon">
                                                <i class="fas fa-chart-area"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="box-content" style="background-color: #840284;">
                                            <div class="box-content-parag">
                                                <span> 12 </span>
                                                <p> عدد الاقسام </p>

                                            </div>
                                            <div class="box-content-icon">
                                            <i class="fas fa-building"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="box-content" style="background-color: #4b4bab;">
                                            <div class="box-content-parag">
                                                <span> 12 </span>
                                                <p> عدد الرسايل </p>

                                            </div>
                                            <div class="box-content-icon">
                                                <i class="fas fa-comment-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>



                        <br>
                        <div class="table-template">
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم</th>
                                        <th>التاریخ</th>
                                        <th>الحاله</th>
                                        <th>الصور</th>
                                        <th>حذف</th>
                                        <th>تعدیل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">1</a></td>
                                        <td>Paragon</td>
                                        <td>1/5/2021</td>
                                        <td>
                                            <p class="status status-paid">مفقود</p>
                                        </td>

                                        <td class="amount">
                                            <a class="venobox" href="assets/images/boy-60710_640.jpg">
                                                <img src="assets/images/boy-60710_640.jpg" alt="">
                                            </a>

                                        </td>
                                        <td>
                                            <p class="status status-unpaid"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                        </td>
                                        <td>
                                            <p class="status status-pending"><i class="fas fa-pen"></i></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">2</a></td>
                                        <td>Sonic</td>
                                        <td>1/4/2021</td>
                                        <td>
                                            <p class="status status-paid">مفقود</p>
                                        </td>
                                        <td class="amount">
                                            <a class="venobox" href="assets/images/boy-60710_640.jpg">
                                                <img src="assets/images/boy-60710_640.jpg" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <p class="status status-unpaid"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                        </td>
                                        <td>
                                            <p class="status status-pending"><i class="fas fa-pen"></i></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">3</a></td>
                                        <td>Innercircle</td>
                                        <td>1/2/2021</td>
                                        <td>
                                            <p class="status status-paid">مفقود</p>
                                        </td>
                                        <td class="amount">24</td>
                                        <td>
                                            <p class="status status-unpaid"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                        </td>
                                        <td>
                                            <p class="status status-pending"><i class="fas fa-pen"></i></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">4</a></td>
                                        <td>Varsity Plus</td>
                                        <td>12/30/2020</td>
                                        <td>
                                            <p class="status status-paid">مفقود</p>
                                        </td>
                                        <td class="amount">12</td>
                                        <td>
                                            <p class="status status-unpaid"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                        </td>
                                        <td>
                                            <p class="status status-pending"><i class="fas fa-pen"></i></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">5</a></td>
                                        <td>Highlander</td>
                                        <td>12/18/2020</td>
                                        <td>
                                            <p class="status status-paid">تم العثور علیه</p>
                                        </td>
                                        <td class="amount">31</td>
                                        <td>
                                            <p class="status status-unpaid"><i class="fa fa-trash" aria-hidden="true"></i></p>
                                        </td>
                                        <td>
                                            <p class="status status-pending"><i class="fas fa-pen"></i></p>
                                        </td>
                                    </tr>
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

    <script src="assets/js/toastr.min.js"></script>



</body>

</html>
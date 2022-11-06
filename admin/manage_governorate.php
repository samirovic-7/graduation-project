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

    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">

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
                                <h2 class="h1"> إدارة المحافظات </h2>
                            </div>


                            <div class="template-search">

                                <div class="pos">
                                    <input type="text" class="form-control" placeholder=" إدخال إسم المحافظة " id="search_governorate" required>

                                    <div class="icon">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="add">
                                <button type="button" style="background-color: #0162e8;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2"> إضافة محافظة </button>

                            </div>





                        </div>
                        <div class="alerts" id="alerts">

                        </div>

                        <br>
                        <div class="table-template">
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>


                                        <th>  اسم المحافظات </th>


                                        <th>  حذف  </th>
                                        <th>  تعديل  </th>
                                    </tr>
                                </thead>
                                <tbody id="governorate_content">







                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> تعديل المحافظات </h5>

                        </div>
                        <div class="modal-body">
                            <div class="form">

                                <form id="edit_form">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">إدخال اسم المحافظة</label>
                                        <div class="pos">
                                            <input type="text" class="form-control" id="Governorate_value" aria-describedby="emailHelp" placeholder="إسم المحافظة" >


                                        </div>

                                    </div>

                                    <input type="hidden" id="gov_id">



                                    <button type="button" class="btn btn-primary" id="edit_governorate"> تعديل المحافظة </button>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> إغلاق </button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>







        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            إضافة محافظة
                        </h5>

                    </div>
                    <div class="modal-body">
                        <div class="form">

                            <form id="submite_add_governorate">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">ادخال اسم المحافظة</label>
                                    <div class="pos">
                                        <input type="text" class="form-control" id="governorate_name" aria-describedby="emailHelp" placeholder="إسم المحافظة">


                                    </div>

                                </div>




                                <button type="button" class="btn btn-primary" id="add_Governorate"> إدخال المحافظة </button>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>






    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/dashboard2.js"></script>

    <script src="assets/js/toastr.min.js"></script>

    
    <script src="code/governorate/manage_governorate.js"></script>

</body>

</html>
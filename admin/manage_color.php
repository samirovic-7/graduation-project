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
                                <h2 class="h1"> إدارة الصفات </h2>

                            </div>


                            <div class="template-search">

                                <div class="pos">
                                    <input type="text" class="form-control" placeholder="بحث عن لون" id="search_colors">

                                    <div class="icon">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="add">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2"> إضافة لون </button>

                            </div>





                        </div>
                        <div class="alerts" id="alerts">

                        </div>

                        <br>
                        <div class="table-template">
                            <table>
                                <thead>
                                    <tr >
                                        <th scope="col">#</th>


                                        <th scope="col"> إسم اللون </th>

                                        <th scope="col">  حالة اللون </th>


                                        <th scope="col">حذف</th>
                                        <th scope="col">تعديل</th>
                                    </tr>
                                </thead>
                                <tbody id="colors_content">







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
                            <h5 class="modal-title" id="exampleModalLabel">تعديل اللون</h5>
      
                        </div>
                        <div class="modal-body">
                            <div class="form">

                                <form id="edit_color_form">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">إدخال اللون</label>
                                        <div class="pos">
                                            <input type="text" class="form-control" id="value" aria-describedby="emailHelp" placeholder="إسم اللون">

      
                                        </div>

                                    </div>

                                    <input type="hidden" id="col_id">



                                    <button type="button" class="btn btn-primary" id="Edit"> تعديل اللون </button>

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







        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">إضافة لون</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form">

                            <form id="add_color">


                                <div class="input-group mb-3">
                    
                                    <select class="form-select" id="inputGroupSelect01" name="colors_type" id="colors_type">
                                        <option selected> اختار حالة اللون </option>
                                        <option value="0"> لون الشعر </option>
                                        <option value="1"> لون البشرة </option>
                                        <option value="2"> لون العينين </option>
                                    </select>
                                </div>







                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">ادخال اللون</label>
                                    <div class="pos">
                                        <input type="text" class="form-control" name="colors_name" id="colors_name" aria-describedby="emailHelp" placeholder="إدخال اللون">

       
                                    </div>

                                </div>




                                <button type="submite" class="btn btn-primary"> إضافة اللون</button>

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

    <script src="code/color/Color.js"></script>

</body>

</html>
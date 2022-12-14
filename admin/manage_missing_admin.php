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

    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="assets/css/venobox.min.css">

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
                    <div class="content-template">
                        <div class="upper-template">
                            <div class="template-title">
                                <h2 class="h1"> Customer Details </h2>
                            </div>


                            <div class="template-search">

                                <div class="pos">
                                    <input type="text" class="form-control" placeholder="search">

                                    <div class="icon">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>







                        </div>

                        <br>
                        <div class="alerts" id="alerts">

                        </div>

                        <div class="table-template">
                            <table>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>



                                        <th scope="col">     ?????? ??????????????  </th>


                                        <th scope="col">?????????? ????????????</th>

                                        <th scope="col">?????? ????????????</th>
                                        <th scope="col"> ????????????</th>

                                        <th scope="col"> ????????????</th>


                                    
                                        <th scope="col"> ??????</th>

                                        <th scope="col">??????</th>


                                        <th scope="col">???????? ????????????</th>

                                    </tr>
                                </thead>
                                <tbody id="missing_content">






                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>


            <!-- Button trigger modal -->


            <!-- Modal -->

        </div>


    </div>




    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/dashboard2.js"></script>
    <script src="code/manage_missing/manage_missing_admin.js"></script>


    <script src="assets/js/venobox.min.js"></script>




</body>

</html>
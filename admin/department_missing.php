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
            <div class="col-lg-8">
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

                        <div class="missing">

                            <div class="row" id="missing_content">

                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item">
                                        <img src="code/add_missing/upload/missing/2944052_boy-60710_1920.jpg ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : احمد عصام الين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 15\5\2000</p>
                                            <div class="add_by_details">

                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div><!-- ./add_by_details -->
                                            <p class="missing_desc"></span> rgfuhfehuwefwgefgwegfew8wt6wetw6t6wtw6w</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                        <button type="button" class="btn btn-danger"> <i class="fas fa-trash-alt red"></i> </button>



                                    </div><!-- ./item -->

                                </div>

                                
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item">
                                        <img src="code/add_missing/upload/missing/2944052_boy-60710_1920.jpg ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : احمد عصام الين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 15\5\2000</p>
                                            <div class="add_by_details">

                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div><!-- ./add_by_details -->
                                            <p class="missing_desc"></span> rgfuhfehuwefwgefgwegfew8wt6wetw6t6wtw6w</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                        <button type="button" class="btn btn-danger"> <i class="fas fa-trash-alt red"></i> </button>



                                    </div><!-- ./item -->

                                </div>


                                
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item">
                                        <img src="code/add_missing/upload/missing/2944052_boy-60710_1920.jpg ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : احمد عصام الين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 15\5\2000</p>
                                            <div class="add_by_details">

                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div><!-- ./add_by_details -->
                                            <p class="missing_desc"></span> rgfuhfehuwefwgefgwegfew8wt6wetw6t6wtw6w</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                        <button type="button" class="btn btn-danger"> <i class="fas fa-trash-alt red"></i> </button>



                                    </div><!-- ./item -->

                                </div>


                                
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item">
                                        <img src="code/add_missing/upload/missing/2944052_boy-60710_1920.jpg ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : احمد عصام الين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 15\5\2000</p>
                                            <div class="add_by_details">

                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div><!-- ./add_by_details -->
                                            <p class="missing_desc"></span> rgfuhfehuwefwgefgwegfew8wt6wetw6t6wtw6w</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                        <button type="button" class="btn btn-danger"> <i class="fas fa-trash-alt red"></i> </button>



                                    </div><!-- ./item -->

                                </div>


                                
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item">
                                        <img src="code/add_missing/upload/missing/2944052_boy-60710_1920.jpg ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : احمد عصام الين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 15\5\2000</p>
                                            <div class="add_by_details">

                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div><!-- ./add_by_details -->
                                            <p class="missing_desc"></span> rgfuhfehuwefwgefgwegfew8wt6wetw6t6wtw6w</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                        <button type="button" class="btn btn-danger"> <i class="fas fa-trash-alt red"></i> </button>



                                    </div><!-- ./item -->

                                </div>


                                
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item">
                                        <img src="code/add_missing/upload/missing/2944052_boy-60710_1920.jpg ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : احمد عصام الين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 15\5\2000</p>
                                            <div class="add_by_details">

                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div><!-- ./add_by_details -->
                                            <p class="missing_desc"></span> rgfuhfehuwefwgefgwegfew8wt6wetw6t6wtw6w</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                        <button type="button" class="btn btn-danger"> <i class="fas fa-trash-alt red"></i> </button>



                                    </div><!-- ./item -->

                                </div>



                                
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item">
                                        <img src="code/add_missing/upload/missing/2944052_boy-60710_1920.jpg ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : احمد عصام الين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 15\5\2000</p>
                                            <div class="add_by_details">

                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div><!-- ./add_by_details -->
                                            <p class="missing_desc"></span> rgfuhfehuwefwgefgwegfew8wt6wetw6t6wtw6w</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                        <button type="button" class="btn btn-danger"> <i class="fas fa-trash-alt red"></i> </button>



                                    </div><!-- ./item -->

                                </div>

                                
                                
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item">
                                        <img src="code/add_missing/upload/missing/2944052_boy-60710_1920.jpg ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : احمد عصام الين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 15\5\2000</p>
                                            <div class="add_by_details">

                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div><!-- ./add_by_details -->
                                            <p class="missing_desc"></span> rgfuhfehuwefwgefgwegfew8wt6wetw6t6wtw6w</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                        <button type="button" class="btn btn-danger"> <i class="fas fa-trash-alt red"></i> </button>



                                    </div><!-- ./item -->

                                </div>


                                
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item">
                                        <img src="code/add_missing/upload/missing/2944052_boy-60710_1920.jpg ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : احمد عصام الين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 15\5\2000</p>
                                            <div class="add_by_details">

                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div><!-- ./add_by_details -->
                                            <p class="missing_desc"></span> rgfuhfehuwefwgefgwegfew8wt6wetw6t6wtw6w</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                        <button type="button" class="btn btn-danger"> <i class="fas fa-trash-alt red"></i> </button>



                                    </div><!-- ./item -->

                                </div>


                                
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item">
                                        <img src="code/add_missing/upload/missing/2944052_boy-60710_1920.jpg ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : احمد عصام الين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 15\5\2000</p>
                                            <div class="add_by_details">

                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div><!-- ./add_by_details -->
                                            <p class="missing_desc"></span> rgfuhfehuwefwgefgwegfew8wt6wetw6t6wtw6w</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                        <button type="button" class="btn btn-danger"> <i class="fas fa-trash-alt red"></i> </button>



                                    </div><!-- ./item -->

                                </div>


                                
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item">
                                        <img src="code/add_missing/upload/missing/2944052_boy-60710_1920.jpg ?>" alt="" class="missing_img">
                                        <div class="missing_details">
                                            <p class="missing_name"><span class="subtitle">اسم المفقود : احمد عصام الين فتحي</p>
                                            <p class="missing_name"><span class="subtitle">تاريخ الفقد : </span> 15\5\2000</p>
                                            <div class="add_by_details">

                                                <a href="#" class="add_by_name">عبدالله الرحماني</a>
                                                <p class="add_by_date">18 يونيو 2022</p>
                                            </div><!-- ./add_by_details -->
                                            <p class="missing_desc"></span> rgfuhfehuwefwgefgwegfew8wt6wetw6t6wtw6w</p>
                                            <a href="#" class="missing_page opacity_hover">اقرأ المزيد</a>
                                        </div><!-- ./missing_details -->
                                        <button type="button" class="btn btn-danger"> <i class="fas fa-trash-alt red"></i> </button>



                                    </div><!-- ./item -->

                                </div>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-2">

            <div class="side-left">
                <div class="side-left-content">
                    <div class="item">
                    <a href="#" class="slide-down">  المحافظات <i class="fas fa-plus plus-icon"></i></a> 
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


</body>

</html>

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
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/main.css">


    </head>
<body>

    <div class="content">
        <div class="container-fluid">
            <div class="smaill-content">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 img1">
                        <div class="img">
                            <img src="assets/images/login-img.jpg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-lg-6 form1">

                        <div class="form">
                            <div id="alert">

                            </div>

                            <div class="title">
                                <h5> تسجيل الدخول </h5>

                            </div>
                            <form id="login">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">الرقم القومي</label>
                                    <div class="pos">
                                        <input type="text" class="form-control" name="ssn" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الرقم القومي"  required>
                   
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">ادخال كلمة المرور</label>
                                    <div class="pos">
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="ادخال كلمة المرور" required>
             
                                    </div>
                                    </div>                                   
         
           
                                <div class="link">
                          
                                </div>
                                <button type="submite" class="btn btn-primary">تسجيل الدخول</button>
                                <p> اذا كنت لا تمتلك حساب? <a href="register.php"> تسجيل بيانات </a> </p>
                            </form>

                        </div>
                    </div>
                </div>    
            </div>
        </div>

    </div>





    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/toastr.min.js"></script>

    <script src="code/login/login.js"></script>
</body>
</html>


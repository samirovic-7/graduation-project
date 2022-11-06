<?php
session_start();
include('connection.php');
include('auth.php');
if(isset($_GET['id']))
{
    $ssn = $_GET['id'];

    $sel = $con->prepare("SELECT citizines.*, governorate.Governorate_name AS governorate_name, cities.citiese_name AS citi_name , departments.department_name AS departments_name
    FROM ((citizines
    INNER JOIN governorate ON citizines.governorate_code = governorate.Governorate_code)
    INNER JOIN cities ON citizines.city_code = cities.cities_code
     INNER JOIN departments ON citizines.department_code = departments.department_code) WHERE ssn=:ssn ");

    $sel->bindparam('ssn',$ssn);

    $sel->execute();

    $data = $sel->fetch();



}


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

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/template.css">

    <link rel="stylesheet" href="assets/css/add_template.css">
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
                                <h2 class="h1"> Edit Citizines </h2>
                            </div>

                            <div class="alerts" id="alerts">
          
          </div>



                        </div>

                        <br>
                        <form class="row g-3" id="edit_citizine">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> الرقم القومي </label>
                                <input type="number" class="form-control" name="national_number" id="inputEmail4" value="<?php echo $data['ssn'] ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"> العمر </label>
                                <input type="number" class="form-control" name="age" id="inputEmail4" value="<?php echo $data['age'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label"> البريد الالكتروني </label>
                                <input type="email" class="form-control" name="email" id="inputPassword4" value="<?php echo $data['email'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label"> كلمة المرور </label>
                                <input type="password" class="form-control" name="password" id="inputPassword4"  value="<?php echo $data['age'] ?>" readonly>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label"> الاسم الاول </label>
                                <input type="text" class="form-control" name="first_name" id="inputAddress" placeholder="Enter The First Name" value="<?php echo $data['First_name'] ?>">
                            </div>
                            <div class="col-4">
                                <label for="inputAddress2" class="form-label"> الاسم الثاني </label>
                                <input type="text" class="form-control" name="secondt_name"  id="inputAddress2" placeholder="Enter The Mid Name"  value="<?php echo $data['mid_name'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="inputCity" class="form-label"> اللقب </label>
                                <input type="text" class="form-control" name="title"  id="inputCity" value="<?php echo $data['last_name'] ?>">
                            </div>

                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">  رقم الهاتف الاول </label>
                                <input type="text" class="form-control" name="phoneone" id="inputAddress2" placeholder="First Phone" value="<?php echo $data['first_phone'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label"> رقم الهاتف الثاني </label>
                                <input type="text" class="form-control" name="phonetwo" id="inputCity" value="<?php echo $data['second_phone'] ?>">
                            </div>
                            

                            <div class="col-md-4">
                                <label for="inputState" class="form-label"> المحافظة </label>
                                <select id="inputState" class="form-select" name="governnorate">
                                    <option value="<?php echo $data['governorate_code']  ?>" selected> <?php echo $data['governorate_name'] ?> </option>
                                    <option value="59">...</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="inputState" class="form-label"> المدينة </label>
                                <select id="inputState" class="form-select" name="city">
                                    <option value="<?php echo $data['city_code']  ?>"  selected> <?php echo $data['citi_name'] ?>...</option>
                                    <option value="3">...</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="inputState" class="form-label"> القسم التابع له </label>
                                <select id="inputState" class="form-select" name="police">
                                    <option value="<?php echo $data['department_code'] ?>" selected> <?php echo $data['departments_name'] ?> </option>
                                    <option value="8">...</option>
                                </select>
                            </div>


                            <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" name="citizies">
                        </div>
                        


      
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary"> اضافة مواطن </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Template</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form">

                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Governorate Name</label>
                                        <div class="pos">
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Governorate Name">

                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>

                                    </div>




                                    <button type="button" class="btn btn-primary"> Edit Governorate </button>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

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
                        <h5 class="modal-title" id="exampleModalLabel">Create Template</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form">

                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Governorate Name</label>
                                    <div class="pos">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Governorate Name">

                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                    </div>

                                </div>




                                <button type="button" class="btn btn-primary"> Create Governorate </button>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>









    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dashboard2.js"></script>
    <script src="code/citizine/citizines.js"></script>

</body>

</html>
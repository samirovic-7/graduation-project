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
                            <h2 class="h1"> admins Management </h2>

                        </div>


                        <div class="template-search">
  
                        <div class="pos">
     <input type="text" class="form-control"   placeholder="search" id="search_admins">
   
             <div class="icon">
             <i class="fas fa-search"></i>
         </div> 
 </div>
</div>

                        <div class="add">
                       <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal2"> Add admins </button>

                    </div>



  

                    </div>
                    <div class="alerts" id="alerts">
          
                    </div>

                    <br>
                    <div class="table-template">
                        <table class="table ">
                            <thead class="table-secondary" >
                                <tr>
                                    <th scope="col">#</th>
        


                                    <th scope="col"> Name </th>


                                        <th scope="col">age</th>
                                    
                                    <th scope="col">email</th>
                                    
                                    <th scope="col">phone</th>
                                    
                                    
                                    <th scope="col">status</th>
            
                                    <th scope="col">Remove</th>

                                    <th scope="col">Update</th>
            
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
                                            <label for="exampleInputEmail1" class="form-label">admins Name</label>
                                            <div class="pos">
                                                <input type="text" class="form-control" id="F_name" aria-describedby="emailHelp" placeholder="first_name">
                                                <br>
                                                <input type="text" class="form-control" id="M_name" aria-describedby="emailHelp" placeholder="mid_name">
                                                <br>
                                                <input type="text" class="form-control" id="L_name" aria-describedby="emailHelp" placeholder="last_name">
                                                <br>
                                                <input type="number" class="form-control" id="Age" aria-describedby="emailHelp" placeholder="age">
                                                <br>
                                                <input type="email" class="form-control" id="EmailE" aria-describedby="emailHelp" placeholder="email">
                                                <br>
                                                <input type="text" class="form-control" id="StatusE" aria-describedby="emailHelp" placeholder="status">
                                                <br>
                                                <input type="text" class="form-control" id="PhoneE" aria-describedby="emailHelp" placeholder="phone">
                                                <br>
                                               
                                                <div class="icon">
                                                    <i class="fas fa-envelope"></i>
                                                </div> 
                                                                                            </div>

                                        </div>
                                        
                                        <input type="hidden" id="admins_id">
                
                

                                        <button type="button" class="btn btn-primary" id="Edit">  Edit admins </button>

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

                                    <form method="POST">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">admins Data</label>
                                            <div class="pos">
                                                <input type="number" name="ssn" class="form-control" id="ssn" aria-describedby="emailHelp" placeholder="ssn">
                                                <br>
                                                <input type="text" name="first_name" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="first_name">
                                                <br>
                                                <input type="text" name="mid_name" class="form-control" id="mid_name" aria-describedby="emailHelp" placeholder="mid_name">
                                                <br>
                                                <input type="text" name="last_name" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="last_name">
                                                <br>
                                                <input type="number" name="age" class="form-control" id="age" aria-describedby="emailHelp" placeholder="age">
                                                <br>
                                                <input type="number" name="status" class="form-control" id="status" aria-describedby="emailHelp" placeholder="status">
                                                <br>
                                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
                                                <br>
                                                <input type="number" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="phone">
                                                <br>
                                                <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="password">
                                                <br>
                                                <div class="icon">
                                                    <i class="fas fa-envelope"></i>
                                                </div> 
                                            </div>

                                        </div>
                                        
                
                

                                        <!-- <button type="button" class="btn btn-primary" id="add_admins">  Create admins </button> -->

                                        <button type="button" id="add" class="btn btn-primary">  Create admins </button>

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
    <script src="code/admins/admin.js"></script>

</body>
</html>

<?php
session_start();
include('connection.php');
include('auth.php');
if(isset($_GET['id']))
{
    $adminData = $con->prepare('SELECT admins.* , governorate.Governorate_name AS governorateName , cities.citiese_name AS cityName , departments.department_name AS departmentName
    FROM admins
    INNER JOIN governorate ON admins.governorate_code  = governorate.Governorate_code
    
    INNER JOIN cities ON admins.cites_code  = cities.cities_code
    
    INNER JOIN departments ON admins.department_code  = departments.department_code
    
    
    
     WHERE admins.ssn=:ssn');

    $adminData->bindParam('ssn',$_GET['id']);

    $adminData->execute();

    $adminFetch = $adminData->fetch();

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/card.css">
</head>
<body>

 

	<div class="container_card">


		<div class="card">
			<div class="left-column background1-left-column">
				<h6>معلومات الشخصية</h6>
				<h2> الادمن</h2>
				<i class="fa fa-user" aria-hidden="true"></i>
			</div>

			<div class="right-column">
				<div>
					<h4>الأسم : <span>  <?php echo $adminFetch['first_name'] ?> <?php echo$adminFetch['mid_name'] ?> <?php echo$adminFetch['last_name'] ?> </span> </h4>
          <br><br>
		  
					<h4>رقم الهاتف :   <?php echo $adminFetch['phone'] ?></span> </h4>
          <br>
					<h4>مقر العمل  :  <span>  <?php echo $adminFetch['governorateName'] ?> - <?php echo $adminFetch['cityName'] ?> </span>  <span>   <?php echo $adminFetch['departmentName'] ?>   </span> </h4>
          <br><br>
		  <h4>البريد الالكتروني : <span>   <?php echo $adminFetch['email'] ?></span></h4><br>

				</div>
				<button class="button background1-left-column" id="print"  onclick="window.print()">طباعة</button>
			</div>

		</div>

 
	</div>
</body>
</html>
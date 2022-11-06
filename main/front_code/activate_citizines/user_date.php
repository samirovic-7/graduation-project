<?php

include('../../connection.php');

$First_name = $_POST['First_name'];

$mid_name = $_POST['Last_name'];


$last_name = $_POST['title'];


$ssn = $_POST['ssn'];


$email = $_POST['email'];


$age = $_POST['age'];


$first_phone = $_POST['first_phone'];

$second_phone = $_POST['second_phone'];


$select_governorate = $_POST['select_governorate'];


$city = $_POST['city'];


$department_code = $_POST['department_code'];


$citizineName = $_FILES['photo']['name'];
$citizineType = $_FILES['photo']['type'];
$citizineTmpName = $_FILES['photo']['tmp_name'];
$citizinesize = $_FILES['photo']['size'];

$citizines1 = rand(0,10000000).'_' .$citizineName;

move_uploaded_file($citizineTmpName,"..\..\..\admin\code\citizine\addcitizines\upload\citizines\\".$citizines1);


$update = $con->prepare('UPDATE citizines SET First_name=:First_name , mid_name=:mid_name , last_name=:last_name , `image`=:image1 , age=:age , first_phone=:first_phone , second_phone=:second_phone,   email=:email ,governorate_code=:governorate_code , city_code=:city_code , department_code=:department_code   WHERE ssn=:ssn');

$update->bindParam("First_name",$First_name);
    
$update->bindParam("mid_name",$mid_name);

$update->bindParam("last_name",$last_name);

$update->bindParam("age",$age);


$update->bindParam("first_phone",$first_phone);
    
$update->bindParam("second_phone",$second_phone);

$update->bindParam("email",$email);


$update->bindParam("image1",$citizines1);

    
$update->bindParam("city_code",$city);
$update->bindParam("governorate_code",$select_governorate);
$update->bindParam("department_code",$department_code);

$update->bindParam("ssn",$ssn);

if ($update->execute()) {
    echo 'تم تفعيل البيانات بنجاح';
}



?>
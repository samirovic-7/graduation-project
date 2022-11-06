<?php

include("../../connection.php");


$admin_dapartment_status =  $_POST["inlineRadioOptions"];






$national_number=$_POST["national_number"];

$age = $_POST["age"];

$password = sha1($_POST["password"]);


$first_name=$_POST["first_name"];

    
$second_name=$_POST["second_name"];

    
$title=$_POST["title"];


$email =$_POST["email"];


$phoneone=$_POST["phoneone"];


$date = date("Y-m-d");


$status=0;  // admins


$governorate_code = $_POST["select_governorate"];


$cites_code = $_POST["city"];

$department_code = $_POST["department"];


    
$select = $con->prepare("SELECT * FROM admins WHERE ssn=:national_number");


$select->bindParam("national_number",$ssn);




$select->execute();

$count = $select->rowcount();

if($count == 1)
{
    echo '<div class="alert alert-warning" role="alert">  The colors ' .$_POST["first_name"]. ' Is Exist </div>';
}

else
{


    if($admin_dapartment_status == 1)
    {
        $status=1;  // super admins
    }

   $insert = $con->prepare(
    "INSERT INTO admins(`ssn`,`first_name`,`mid_name`,`last_name`,`admin_dapartment_status`,`age`,`status`,`email`,`phone`,`password`,`created_at`,`governorate_code`,`cites_code`,`department_code`) 
    VALUES(:ssn ,:first_name,:mid_name,:last_name,:admin_dapartment_status,:age,:status,:email,:phone,:password,:date,:governorate_code,:cites_code,:department_code)");

    $insert->bindparam("ssn",$national_number);
    $insert->bindparam("first_name",$first_name);
    $insert->bindparam("mid_name",$second_name);
    $insert->bindparam("last_name",$title);
    $insert->bindparam("admin_dapartment_status",$admin_dapartment_status);
    $insert->bindparam("age",$age);
    $insert->bindparam("status",$status);
    $insert->bindparam("email",$email);
    $insert->bindparam("phone",$phoneone);
    $insert->bindparam("password",$password);
    $insert->bindparam("date",$date);
    $insert->bindparam("governorate_code",$governorate_code);
    $insert->bindparam("cites_code",$cites_code);
    $insert->bindparam("department_code",$department_code);


    if($insert->execute())
    {
        echo 'تم انشاء الحساب بنجاح';
    }

}


?>

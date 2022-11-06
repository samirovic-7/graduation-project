<?php
include("../../../connection.php");

$admin_dapartment_status =  $_POST["inlineRadioOptions"];
$ssn=$_POST["ssn"];
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
$department_code = $_POST["department_code"]; 

$select = $con->prepare("SELECT * FROM admins WHERE ssn=:ssn OR email=:email"); 
$select->bindParam("ssn",$ssn);
$select->bindParam("email",$email);
$select->execute();
$count = $select->rowCount();




if($count === 1)
{
    echo 'هذا الادمن موجود مسبقا ';
}
else
{

    $insert = $con->prepare(
    "INSERT INTO admins(`ssn`,`first_name`,`mid_name`,`last_name`,`age`,`status`,`email`,`phone`,`admin_dapartment_status`,`password`,`created_at`,`governorate_code`
    ,`cites_code`,`department_code`) 
    VALUES(:ssn ,:first_name,:mid_name,:last_name,:age,:status,:email,:phone,:admin_dapartment_status,:password,:date,:governorate_code,:cites_code,:department_code)");
    $insert->bindparam("ssn",$_POST["ssn"]);
    $insert->bindparam("first_name",$first_name);
    $insert->bindparam("mid_name",$second_name);
    $insert->bindparam("last_name",$title);
    $insert->bindparam("age",$age);
    $insert->bindparam("status",$status);
    $insert->bindparam("email",$email);
    $insert->bindparam("admin_dapartment_status",$admin_dapartment_status);
    $insert->bindparam("phone",$phoneone);
    $insert->bindparam("password",$password);
    $insert->bindparam("date",$date);
    $insert->bindparam("governorate_code",$governorate_code);
    $insert->bindparam("cites_code",$cites_code);
    $insert->bindparam("department_code",$department_code);
    if($insert->execute())
    {
        echo 'تمت إضافة الادمن بنجاح';
    }
}










?>








<?php

// include("../connection.php");


// $select = $con->prepare("SELECT * FROM admins WHERE first_name=:first_name");


// $select->bindParam("first_name",$_POST["first_name"]);

    

// $select->bindparam("age",$_POST["age"]);

// $select->bindparam("status",$_POST["status"]);

// $select->bindparam("email",$_POST["email"]);

// $select->bindparam("phone",$_POST["phone"]);



// $select->execute();

// $count = $select->rowcount();

// if($count == 1)
// {
//     echo '<div class="alert alert-warning" role="alert">  The admins ' .$_POST["first_name"]. ' Is Exist </div>';
// }

// else
// {
//     $insert = $con->prepare("INSERT INTO `admins` (`ssn`,`first_name`,`mid_name`,`last_name`,`age`,`status`,`email`,`phone`,`password`)
//                                             VALUE(:ssn ,:first_name,:mid_name,:last_name,:age,:status,:email,:phone,:password)");

//     $insert->bindparam("ssn",$_POST["ssn"]);
    
//     $insert->bindparam("first_name",$_POST["first_name"]);

//     $insert->bindparam("mid_name",$_POST["mid_name"]);
    
//     $insert->bindparam("last_name",$_POST["last_name"]);
    
//     $insert->bindparam("age",$_POST["age"]);
    
//     $insert->bindparam("status",$_POST["status"]);

//     $insert->bindparam("email",$_POST["email"]);
    
//     $insert->bindparam("phone",$_POST["phone"]);
    
//     $insert->bindparam("password",$_POST["password"]);


//     if($insert->execute())
//     {
//         echo '<div class="alert alert-success" role="alert">  The admins ' .$_POST["first_name"]. ' Is Created successfully  </div>';
//     }
// }

?>
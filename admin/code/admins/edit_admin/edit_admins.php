<?php

include("../../../connection.php");


$national_number =  $_POST["national_number"]; //9




$age =  $_POST["age"];//3

$email =  $_POST["email"];//4

$password =  $_POST["password"];

$first_name =  $_POST["first_name"]; //1

$second_name =  $_POST["second_name"]; //2

$last_name =  $_POST["last_name"];

$phone =  $_POST["phoneone"]; //5

$governorate_code = $_POST["select_governorate"]; //6

$cites_code = $_POST["city"]; //7

$department_code = $_POST["department"]; //8

//          , `cites_code `=:cites_code   , `department_code `=:department_code    

    $update = $con->prepare("UPDATE `admins` SET `first_name` =:first_name ,`mid_name` =:mid_name , `last_name`=:last_name, `password`=:password , `age` =:age  , `email` =:email , `phone` =:phone , `governorate_code`=:governorate_code , `cites_code`=:cites_code , `department_code`=:department_code  WHERE `ssn` =:ssn ");

    $update->bindParam("ssn",$national_number);
    
    $update->bindParam("first_name",$first_name);

    $update->bindParam("mid_name",$second_name);

    $update->bindParam("last_name",$last_name);

    $update->bindParam("password",$password);

    $update->bindParam("age",$age);

    $update->bindParam("email",$email);

    $update->bindParam("phone",$phone);
    
    $update->bindParam("governorate_code",$governorate_code);

     $update->bindParam("cites_code",$cites_code);

     $update->bindParam("department_code",$department_code);




    if($update->execute())
    {
        echo 'updated succesfully';
    }

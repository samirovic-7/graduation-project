<?php
include("../../connection.php");
$nationality_code =  $_POST["nationality_code"];

$nationality_name =  $_POST["nationality_name"];




/*
$select_unique_governorate = $con->prepare("SELECT * FROM governorate ");

$select_unique_governorate->bindParam("Governorate_name",$Governorate_name);

$select_unique_governorate->bindParam("governorate_code",$governorate_code);

$select_unique_governorate->execute();

$count = $select_unique_governorate->rowcount();
*/


    $update_nationality = $con->prepare("UPDATE `nationalities` SET `nationality_name` =:nationality_name  WHERE `nationalities`.`nationality_code` =:nationality_code ");

    $update_nationality->bindParam("nationality_name",$nationality_name);

    $update_nationality->bindParam("nationality_code",$nationality_code);



    if($update_nationality->execute())
    {
        echo 'تم تعديل الجنسية بنحجاح';
    }




?>
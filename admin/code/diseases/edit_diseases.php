<?php
include("../../connection.php");
$diseases_code =  $_POST["diseases_code"];

$disease_name =  $_POST["disease_name"];




/*
$select_unique_governorate = $con->prepare("SELECT * FROM governorate ");

$select_unique_governorate->bindParam("Governorate_name",$Governorate_name);

$select_unique_governorate->bindParam("governorate_code",$governorate_code);

$select_unique_governorate->execute();

$count = $select_unique_governorate->rowcount();
*/


    $update_governorate = $con->prepare("UPDATE `diseases` SET `disease_name` =:disease_name WHERE `diseases`.`diseases_code` =:diseases_code ");

    $update_governorate->bindParam("disease_name",$disease_name);

    $update_governorate->bindParam("diseases_code",$diseases_code);



    if($update_governorate->execute())
    {
        echo 'تم تعديل المرض بنجاح';
    }




?>
<?php
include("../../connection.php");
$Governorate_code =  $_POST["Governorate_code"];

$Governorate_name =  $_POST["Governorate_name"];




/*
$select_unique_governorate = $con->prepare("SELECT * FROM governorate ");

$select_unique_governorate->bindParam("Governorate_name",$Governorate_name);

$select_unique_governorate->bindParam("governorate_code",$governorate_code);

$select_unique_governorate->execute();

$count = $select_unique_governorate->rowcount();
*/


    $update_governorate = $con->prepare("UPDATE `governorate` SET `Governorate_name` =:Governorate_name WHERE `governorate`.`Governorate_code` =:Governorate_code");

    $update_governorate->bindParam("Governorate_name",$Governorate_name);

    $update_governorate->bindParam("Governorate_code",$Governorate_code);



    if($update_governorate->execute())
    {
        echo "تم تعديل المحافظة بنجاح";
    }




?>
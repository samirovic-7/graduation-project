<?php

include("../../connection.php");

$city_name_edit =  $_POST["city_name_edit"];

$select_governorate =  $_POST["select_governorate"];

$city_id = $_POST["city_id"];






/*
$select_unique_governorate = $con->prepare("SELECT * FROM governorate ");

$select_unique_governorate->bindParam("Governorate_name",$Governorate_name);

$select_unique_governorate->bindParam("governorate_code",$governorate_code);

$select_unique_governorate->execute();

$count = $select_unique_governorate->rowcount();
*/


    $update_city = $con->prepare("UPDATE `cities` SET `citiese_name` =:citiese_name , `Governorate_code`=:Governorate_code   WHERE `cities`.`cities_code` =:cities_code");

    $update_city->bindParam("citiese_name",$city_name_edit);

    $update_city->bindParam("Governorate_code",$select_governorate);
    
    $update_city->bindParam("cities_code",$city_id);



    if($update_city->execute())
    {
        echo "تم تعديل المدينة بنجاح";
    }




?>
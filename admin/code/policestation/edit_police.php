<?php 

include("../../connection.php");


$policestationname = $_POST["policestationnameedit"];

$policestationphone = $_POST["policestationphoneedit"];

$select_governorate = $_POST["select_governorate_edit"];

$specific_city_governorate = $_POST["specific_city_governorate_edit"];

$Location = $_POST["Locationedit"];


$department_code = $_POST["departmentCode"];


$update_police_station = $con->prepare("UPDATE `departments` SET `department_name` =:department_name , `location`=:location , `department_phone`=:department_phone , `governorate_code`=:governorate_code , `cites_code`=:cites_code   WHERE `departments`.`department_code` =:department_code ");

$update_police_station->bindParam("department_name",$policestationname);

$update_police_station->bindParam("location",$Location);

$update_police_station->bindParam("department_phone",$policestationphone);

$update_police_station->bindParam("governorate_code",$select_governorate);

$update_police_station->bindParam("cites_code",$specific_city_governorate);

$update_police_station->bindParam("department_code",$department_code);



if($update_police_station->execute())
{
    echo 'تم تعديل القسم بنجاح';
}






?>
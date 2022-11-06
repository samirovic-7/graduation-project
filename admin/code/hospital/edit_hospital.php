<?php 

include("../../connection.php");


$edithospitalname = $_POST["edithospitalname"];

$hospitalphoneedit = $_POST["hospitalphoneedit"];

$select_governorateedit = $_POST["select_governorate_edit"];

$specific_city_governorate_edit = $_POST["specific_city_governorate_edit"];

$Locationedit = $_POST["Locationedit"];


$department_code = $_POST["hospitalcode"];


$update_hospital_station = $con->prepare("UPDATE `departments` SET `department_name` =:department_name , `location`=:location , `department_phone`=:department_phone , `governorate_code`=:governorate_code , `cites_code`=:cites_code   WHERE `departments`.`department_code` =:department_code ");

$update_hospital_station->bindParam("department_name",$edithospitalname);

$update_hospital_station->bindParam("location",$Locationedit);

$update_hospital_station->bindParam("department_phone",$hospitalphoneedit);

$update_hospital_station->bindParam("governorate_code",$select_governorateedit);

$update_hospital_station->bindParam("cites_code",$specific_city_governorate_edit);

$update_hospital_station->bindParam("department_code",$department_code);



if($update_hospital_station->execute())
{
    echo 'تم تعديل القسم بنجاح';
}






?>
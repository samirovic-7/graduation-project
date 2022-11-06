<?php 

include("../../connection.php");

$department_status = $_POST['department_status'];



$departmentname = $_POST["departmentname"];


$departmentphone = $_POST["departmentphone"];


$department_status = $_POST['department_status'];

$Location = $_POST["Location"];


$select_governorate = $_POST["select_governorate"];

$specific_city_governorate = $_POST["city"];



$department_code = $_POST["department_id"];




$update_police_station = $con->prepare("UPDATE `departments` SET `department_name` =:department_name , `location`=:location , `department_phone`=:department_phone , `governorate_code`=:governorate_code , `cites_code`=:cites_code   WHERE `departments`.`department_code` =:department_code ");

$update_police_station->bindParam("department_name",$departmentname);

$update_police_station->bindParam("location",$Location);

$update_police_station->bindParam("department_phone",$departmentphone);

$update_police_station->bindParam("governorate_code",$select_governorate);

$update_police_station->bindParam("cites_code",$specific_city_governorate);

$update_police_station->bindParam("department_code",$department_code);



if($update_police_station->execute())
{
    echo 'تم تعديل القسم بنجاح';
}






?>
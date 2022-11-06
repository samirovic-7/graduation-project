<?php 

include("../../connection.php");


$editsheltername = $_POST["editsheltername"];

$shelterphoneedit = $_POST["shelterphoneedit"];

$select_governorate_edit = $_POST["select_governorate_edit"];

$specific_city_governorate_edit = $_POST["specific_city_governorate_edit"];

$Locationedit = $_POST["Locationedit"];


$department_code = $_POST["sheltercode"];


$update_shelter = $con->prepare("UPDATE `departments` SET `department_name` =:department_name , `location`=:location , `department_phone`=:department_phone , `governorate_code`=:governorate_code , `cites_code`=:cites_code   WHERE `departments`.`department_code` =:department_code ");

$update_shelter->bindParam("department_name",$editsheltername);

$update_shelter->bindParam("location",$Locationedit);

$update_shelter->bindParam("department_phone",$shelterphoneedit);

$update_shelter->bindParam("governorate_code",$select_governorate_edit);

$update_shelter->bindParam("cites_code",$specific_city_governorate_edit);

$update_shelter->bindParam("department_code",$department_code);



if($update_shelter->execute())
{
    echo 'تم تعديل القسم بنجاح';
}






?>
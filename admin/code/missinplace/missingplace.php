<?php
include("../../connection.php");

$governorateid = $_POST["oldgovernorateid"];
$oldcityid = $_POST["oldcityid"];
$olddepartmentid = $_POST["olddepartmentid"];
$city = $_POST["city"];
$department_code = $_POST["department_code"];
$missing_id = $_POST["missing_id"];


$select = $con->prepare('SELECT * FROM missing_location WHERE missing_code=:missing_code OR to_department=:to_department');

$select->bindParam('missing_code',$missing_id);

$select->bindParam('to_department',$department_code);

$select->execute();
if ($select->rowCount() == 1) {
  # code...

  echo 'تم نقل المفقود بالفعل';
}
else
{
  $insert = $con->prepare("INSERT INTO
  missing_location( `from_governorate`,`from_city`,`from_department`,`missing_code`,`to_governorate`,`to_city`,`to_department`)  
  VALUES
   (:from_governorate,:from_city,:from_department,:missing_code,:to_governorate,:to_city,:to_department) ");
 
 $insert->bindParam('from_governorate', $governorateid);
 $insert->bindParam('from_city', $oldcityid);
 $insert->bindParam('from_department', $olddepartmentid);
 $insert->bindParam('missing_code', $missing_id);
 $insert->bindParam('to_governorate', $governorateid);
 $insert->bindParam('to_city', $city);
 $insert->bindParam('to_department', $department_code);
 
 if ($insert->execute()) {
     echo "تم نقل المفقود بنجاح";
 } 
}

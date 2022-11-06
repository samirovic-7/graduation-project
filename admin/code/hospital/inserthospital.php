<?php 

include("../../connection.php");

$HospitalName = $_POST["HospitalName"];


$hospitalstationphone = $_POST["hospitalstationphone"];


$select_governorate = $_POST["select_governorate"];


$specific_city_governorate = $_POST["specific_city_governorate"];

$Location = $_POST["Location"];



$select_police_department =    $con->prepare("SELECT * FROM departments WHERE department_name=:department_name");

$select_police_department->bindParam('department_name',$HospitalName);

$select_police_department->execute();

$count = $select_police_department->rowcount();

if($count == 1)
{
    echo 'هذا القسم موجود مسبقا';
}
else
{
    $status = 2;
    $create_department = $con->prepare("INSERT INTO departments(`status`,`department_name`,`location`,`department_phone`,`governorate_code`,`cites_code`) VALUES(:status,:HospitalName,:location,:hospitalstationphone,:select_governorate,:specific_city_governorate) ");


    $create_department->bindParam('HospitalName',$HospitalName);
    $create_department->bindParam('hospitalstationphone',$hospitalstationphone);
    $create_department->bindParam('location',$Location);
    $create_department->bindParam('select_governorate',$select_governorate);
    $create_department->bindParam('specific_city_governorate',$specific_city_governorate);
    $create_department->bindParam('status',$status);

    if($create_department->execute())
    {
        echo 'تمت الاضافة بنجاح';
    }
}


?>
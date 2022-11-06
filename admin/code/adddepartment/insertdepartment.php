<?php 

include("../../connection.php");

$department_status = $_POST['department_status'];

$departmentname = $_POST["departmentname"];


$departmentphone = $_POST["departmentnamephone"];


$select_governorate = $_POST["select_governorate"];


$city = $_POST["city"];

$Location = $_POST["Location"];




$select_police_department =    $con->prepare("SELECT * FROM departments WHERE department_name=:department_name");

$select_police_department->bindParam('department_name',$departmentname);

$select_police_department->execute();

$count = $select_police_department->rowcount();

if($count == 1)
{
    echo 'هذا القسم موجود مسبقا';
}
else
{

    $create_department = $con->prepare("INSERT INTO departments(`status`,`department_name`,`location`,`department_phone`,`governorate_code`,`cites_code`) VALUES(:department_status,:departmentname,:location,:departmentphone,:select_governorate,:specific_city_governorate) ");


    $create_department->bindParam('departmentname',$departmentname);
    $create_department->bindParam('departmentphone',$departmentphone);
    $create_department->bindParam('location',$Location);
    $create_department->bindParam('select_governorate',$select_governorate);
    $create_department->bindParam('specific_city_governorate',$city);
    $create_department->bindParam('department_status',$department_status);

    if($create_department->execute())
    {
        echo 'تمت اضافة القسم بنجاح';
    }
}


?>
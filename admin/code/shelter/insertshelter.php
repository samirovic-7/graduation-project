<?php 

include("../../connection.php");

$ShelterName = $_POST["ShelterName"];


$Shelterphone = $_POST["Shelterphone"];


$select_governorate = $_POST["select_governorate"];


$specific_city_governorate = $_POST["specific_city_governorate"];

$Location = $_POST["Location"];



$select_Shelter_department =    $con->prepare("SELECT * FROM departments WHERE department_name=:department_name");

$select_Shelter_department->bindParam('department_name',$ShelterName);

$select_Shelter_department->execute();

$count = $select_Shelter_department->rowcount();

if($count == 1)
{
    echo 'هذا القسم موجود مسبقا';
}
else
{
    $status = 3;
    $create_department = $con->prepare("INSERT INTO departments(`status`,`department_name`,`location`,`department_phone`,`governorate_code`,`cites_code`) VALUES(:status,:ShelterName,:location,:Shelterphone,:select_governorate,:specific_city_governorate) ");


    $create_department->bindParam('ShelterName',$ShelterName);
    $create_department->bindParam('Shelterphone',$Shelterphone);
    $create_department->bindParam('location',$Location);
    $create_department->bindParam('select_governorate',$select_governorate);
    $create_department->bindParam('specific_city_governorate',$specific_city_governorate);
    $create_department->bindParam('status',$status);

    if($create_department->execute())
    {
        echo 'تمت اضافة القسم بنجاح';
    }
}


?>
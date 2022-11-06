<?php
include("../../connection.php");


$city_name =  $_POST["city_name"];
$select_governorate =  $_POST["select_governorate"];
$select_unique_city = $con->prepare("SELECT * FROM cities WHERE citiese_name=:citiese_name");
$select_unique_city->bindParam("citiese_name",$city_name);
$select_unique_city->execute();
$count = $select_unique_city->rowcount();
if($count == 1)
{
    echo "هذه المدينة موجودة مسبقا";
}
else
{
    $create_city = $con->prepare("INSERT INTO `cities` (`citiese_name`,`Governorate_code`) VALUES(:citiese_name,:Governorate_code)");
    $create_city->bindparam("citiese_name",$city_name);
    $create_city->bindparam("Governorate_code",$select_governorate);
    if($create_city->execute())
    {
        echo "تمت إضافة المدينة بنجاح";
    }
}

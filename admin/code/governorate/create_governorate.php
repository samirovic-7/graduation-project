<?php

include("../../connection.php");

$Governorate_name = $_POST["Governorate_name"];
$select_unique_governorate = $con->prepare("SELECT * FROM governorate WHERE Governorate_name=:Governorate_name");
$select_unique_governorate->bindParam("Governorate_name",$Governorate_name);
$select_unique_governorate->execute();
$count = $select_unique_governorate->rowcount();
if($count == 1)
{
    echo "هذه المحافظة موجودة مسبقا";
}
else
{
    $create_governorate = $con->prepare("INSERT INTO `governorate` (`Governorate_name`) VALUEs(:Governorate_name)");
    $create_governorate->bindparam("Governorate_name",$_POST["Governorate_name"]);
    if($create_governorate->execute())
    {
            echo "تمت إضافة المحافظة بنجاح";
    }
}

?>
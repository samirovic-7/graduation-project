<?php

include("../../connection.php");

$disease_name = $_POST["disease_name"];

$select_unique_governorate = $con->prepare("SELECT * FROM diseases WHERE disease_name=:disease_name");

$select_unique_governorate->bindParam("disease_name",$disease_name);

$select_unique_governorate->execute();

$count = $select_unique_governorate->rowcount();

if($count == 1)
{
    echo '   هذا المرض موجود مسبقا';
}

else
{
    $create_governorate = $con->prepare("INSERT INTO `diseases` (`disease_name`) VALUEs(:diseases)");

    $create_governorate->bindparam("diseases",$disease_name);

    if($create_governorate->execute())
    {
        echo 'تمت اضافة المرض بنجاح';
    }
}

?>
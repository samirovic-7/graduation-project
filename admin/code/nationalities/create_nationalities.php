<?php

include("../../connection.php");

$nationality_name = $_POST["nationality_name"];
$select_unique_natonality = $con->prepare("SELECT * FROM nationalities WHERE nationality_name=:nationality_name");
$select_unique_natonality->bindParam("nationality_name",$nationality_name);
$select_unique_natonality->execute();
$count = $select_unique_natonality->rowcount();
if($count == 1)
{
    echo 'هذه الجنسية موجودة مسبقاا';
}
else
{
    $create_nationalities = $con->prepare("INSERT INTO `nationalities` (`nationality_name`) VALUEs(:nationality_name)");
    $create_nationalities->bindparam("nationality_name",$nationality_name);
    if($create_nationalities->execute())
    {
        echo 'تمت اضافة الجنسية بنجاح';
    }
}

?>
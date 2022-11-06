<?php

include("../../connection.php");

$name = $_POST["colors_name"];
$type = $_POST["colors_type"];

$select = $con->prepare("SELECT * FROM colors WHERE color=:colors_name AND status=:color_type ");
$select->bindParam("colors_name",$name);
$select->bindParam("color_type",$type);
$select->execute();
$count = $select->rowcount();
if($count == 1)
{
    echo 'هذا اللون موجود مسبقاا';
}

else
{
    $insert = $con->prepare("INSERT INTO `colors` (`color`,`status`) VALUES(:colors_name,:status)");

    $insert->bindparam("colors_name",$_POST["colors_name"]);

    $insert->bindparam("status",$type);

    if($insert->execute())
    {
        echo 'تمت اضافة اللون بنجاح';
    }
}

?>
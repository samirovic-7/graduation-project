<?php

include("../../connection.php");

$colors_code =  $_POST["colors_code"];

$colors_name =  $_POST["colors_name"];


    $update = $con->prepare("UPDATE `colors` SET `color` =:colors_name WHERE `colors`.`color_code` =:color_code");

    $update->bindParam("colors_name",$colors_name);

    $update->bindParam("color_code",$colors_code);



    if($update->execute())
    {
        echo 'تم تعديل االلون بنجاح';
    }




?>
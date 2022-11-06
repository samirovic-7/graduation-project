<?php
include("../../connection.php");

    $Governorate_code =$_POST["Governorate_code"];



    $del = $con->prepare("DELETE FROM `governorate` WHERE Governorate_code =:Governorate_code ");

    $del->bindParam("Governorate_code",$Governorate_code );

    if($del->execute())
    {
         echo "تم حذف المحافظة بنجاح";
    }
?>
<?php
    include("../../connection.php");

    $City_code =$_POST["City_code"];



    $del = $con->prepare("DELETE FROM `cities` WHERE cities_code=:City_code ");

    $del->bindParam("City_code",$City_code );

    if($del->execute())
    {
         echo "تم حذف المدينة بنجاح";
    }
?>
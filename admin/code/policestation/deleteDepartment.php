<?php
include("../../connection.php");

    $policeStationId =$_POST["policeStationId"];



    $del = $con->prepare("DELETE FROM `departments` WHERE department_code =:policeStationId ");

    $del->bindParam("policeStationId",$policeStationId );

    if($del->execute())
    {
         echo 'تم حذف القسم بنجاح';
    }
?>
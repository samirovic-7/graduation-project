<?php
include("../../connection.php");

    $hospitalId =$_POST["hospitalId"];



    $del = $con->prepare("DELETE FROM `departments` WHERE department_code =:hospitalId ");

    $del->bindParam("hospitalId",$hospitalId );

    if($del->execute())
    {
         echo 'تم حذف القسم بنجاح';
    }
?>
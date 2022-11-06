<?php
include("../../connection.php");

    $shelterId =$_POST["shelterId"];



    $del = $con->prepare("DELETE FROM `departments` WHERE department_code =:shelterId ");

    $del->bindParam("shelterId",$shelterId );

    if($del->execute())
    {
        echo 'تم حذف القسم بنجاح';
    }
?>
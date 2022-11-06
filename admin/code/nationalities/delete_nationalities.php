<?php
include("../../connection.php");

    $delete_nationalities =$_POST["delete_nationalities"];

    $del = $con->prepare("DELETE FROM `nationalities` WHERE nationality_code =:delete_nationalities ");

    $del->bindParam("delete_nationalities",$delete_nationalities );

    if($del->execute())
    {
         echo 'تم حذف الجنسية بنجاح';
    }
    
?>
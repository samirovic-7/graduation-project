<?php
include("../../connection.php");

    $delete_diseases =$_POST["delete_diseases"];



    $del = $con->prepare("DELETE FROM `diseases` WHERE diseases_code =:delete_diseases ");

    $del->bindParam("delete_diseases",$delete_diseases );

    if($del->execute())
    {
         echo 'تم حذف المرض بنجاح';
    }
?>
<?php
    include("../../connection.php");

    $colors_id =$_POST["colors_code"];



    $remove = $con->prepare("DELETE FROM `colors` WHERE color_code =:colors_code ");

    $remove->bindParam("colors_code",$colors_id );

    if($remove->execute())
    {
         echo 'تم حذف اللون بنجاح';
    }
    
?>
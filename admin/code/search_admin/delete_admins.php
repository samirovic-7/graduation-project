<?php
    include("../../connection.php");

    $admins_id =$_POST["ssn"];



    $remove = $con->prepare("DELETE FROM `admins` WHERE ssn =:ssn ");

    $remove->bindParam("ssn",$admins_id );

    if($remove->execute())
    {
         echo '<div class="alert alert-danger" role="alert">  The admins Is Deleted </div>';
    }
    
?>
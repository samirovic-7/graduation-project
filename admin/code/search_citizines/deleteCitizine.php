<?php
include("../../connection.php");

    $delete_citizine =$_POST["delete_citizine"];



    $del = $con->prepare("DELETE FROM `citizines` WHERE ssn =:ssn ");

    $del->bindParam("ssn",$delete_citizine );

    if($del->execute())
    {
         echo '<div class="alert alert-danger" role="alert">  The Citizines Is Deleted </div>';
    }
?>
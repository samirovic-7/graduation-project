<?php

    include('../../connection.php');

    $delete_missing =$_POST["delete_missing"];



    $remove = $con->prepare("DELETE FROM `missing` WHERE id =:id ");

    $remove->bindParam("id",$delete_missing );

    if($remove->execute())
    {
         echo '<div class="alert alert-danger" role="alert">  The colors Is Deleted </div>';
    }
    

?>
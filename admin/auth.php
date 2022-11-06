<?php


include('connection.php');

if(!isset($_SESSION["admin_ssn"]))
{
    header("Location:login.php");
}


?>
<?php

include("../../../connection.php");

$citizine_ssn = $_POST["citizine_ssn"];

$update_citizines = $con->prepare("UPDATE `citizines` SET `status` = '0' WHERE `citizines`.`ssn` =$citizine_ssn");

if($update_citizines->execute())
{
    echo "تم إلغاء التفعيل بنجاح";
}

?>
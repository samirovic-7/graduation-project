<?php

include('../../connection.php');

$firts_name = $_POST['first_name'];
$title = $_POST['title'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$ins = $con->prepare('INSERT INTO contact(`first_name`,`title`,`phone`,`email`,`message`) VALUES(:first_name,:title,:phone,:email,:message) ');

$ins->bindparam('first_name',$firts_name);
$ins->bindparam('title',$title);
$ins->bindparam('phone',$phone);
$ins->bindparam('email',$email);
$ins->bindparam('message',$message);

if($ins->execute())
{
    echo 'تم ارسال رسالتك بنجاح';
}
?>

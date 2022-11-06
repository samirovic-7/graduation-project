<?php

include("../../../connection.php");

$citizine_ssn = $_POST["citizine_ssn"];
$sel = $con->prepare("SELECT email FROM `citizines` WHERE ssn=:ssn");
$sel->bindParam("ssn", $citizine_ssn);
$sel->execute();
$email= $sel->fetch();
require_once '../../../vendor/autoload.php';
require_once 'mail.php';
$mail->setFrom("missing123456787@gmail.com", "دار المفقوديين");
$mail->addAddress("".$email['email']."");
$mail->Subject= "تفعيل حساب دار المفقودين";
$mail->Body = '<h3>تم تفعيل حسابك بنجاح</h3>
برجاء اعادة تسجيل الدخول بالموقع ';

$update_citizines = $con->prepare("UPDATE `citizines` SET `status` = '1' WHERE `citizines`.`ssn` =$citizine_ssn");
if($mail->send()){
    if($update_citizines->execute())
{
    echo "تم  التفعيل بنجاح";
}               
}




// if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && $_POST['email'] != null){
//     if($res){
//         require_once '../vendor/autoload.php';
//         require_once 'mail.php';
//         $mail->setFrom("missng593@gmail.com", "دار المفقوديين");
//         $mail->addAddress("".$email['email']."");
//         $mail->Subject= "تفعيل حساب دار المفقودين";
//         $mail->Body = '<h3>تم تفعيل حسابك بنجاح</h3>
//         برجاء اعادة تسجيل الدخول بالموقع ';
//         if($res == 1){
//             if($mail->send()){
//                 echo 'sent';                
//             }else{
//                 echo 'problem';                
//             }
//         }else{
//             echo 'problem';
//         }

//     }else{
//         echo 'not exist';
//     }
// }









?>



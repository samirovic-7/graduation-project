<?php


require '../lib/pdodb.php';
require 'user.php';


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && $_POST['email'] != null){
    $email = $_POST['email'];
    $data = "ssn, email";
    $user = new user;
    $res =$user->selectUserReset($data, ["ssn"=>$email, "email"=>$email]);
    if($res){
        require_once '../vendor/autoload.php';
        require_once 'mail.php';
        $mail->setFrom("missing123456787@gmail.com", "دار المفقوديين");
        $mail->addAddress("".$res['email']."");
        $mail->Subject= "اعادة تعيين كلمة المرور";
        $mail->Body = '
        <a href="http://localhost/graduation_project/main/reset.php?op=827ccb0eea8a706c4c34a16891f84e7b&e='.rand(100000000, 999999999).$res['ssn'] .rand(100000000, 999999999).'">اضغط هنا لتجديث كلمة المرور...</a>
        ';
        $pass = password_hash("0", PASSWORD_DEFAULT);
        $res = $user->updateUser(["password"=> $pass], ["password"=> $pass, "ssn"=>$res['ssn']]);
        if($res == 1){
            if($mail->send()){
                echo 'sent';                
            }else{
                echo 'problem';                
            }
        }else{
            echo 'problem';
        }

    }else{
        echo 'not exist';
    }
}


if(isset($_GET['op']) && $_GET['op'] =="827ccb0eea8a706c4c34a16891f84e7b"){
    $ssn = $_GET['e'];
    $ssn = substr($ssn, 9, strlen($ssn)-18);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user = new user;
    $res = $user->updateUser(["password"=> $password], ["password"=> $password, "ssn"=>$ssn]);
    if($res == 1){
        echo 'updated';
    }else{
        echo 'problem';
    }
}
<?php



require '../lib/pdodb.php';
require '../lib/validation.php';
require 'user.php';
session_start();




if(isset($_POST['email'])){
    $validation = new validation;
    $validation->input('email')->required()->email();
    $err = $validation->showErorr();
    if(in_array("email", $err)){
        echo 'email error';
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userData = [
            "email"=> $email,
        ];
        $user = new user;
        $data = "First_name, last_name, email, password, status,ssn";
        $res =$user->selectUser($data, ["email"=>$email]);
        // var_dump($res);
        if($res){
            if(password_verify($password, $res['password'])){
                echo 'exists';
                $_SESSION['email']=$res['email'];
                $_SESSION['name']=$res['First_name']." ".$res['last_name'];
                $_SESSION['status']=$res['status'];
                $_SESSION['ssn']=$res['ssn'];
            }else{
                echo 'invalid';
            }

        }else{
            echo 'not exist';
        }
    }
}
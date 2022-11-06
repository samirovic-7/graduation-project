<?php




require '../lib/pdodb.php';
require '../lib/validation.php';
require 'user.php';



if(isset($_POST['lname'])){
    $validation = new validation;
    $validation->input('email')->required()->email();
    $validation->input('ssn')->required()->inteager()->len(9);
    $err = $validation->showErorr();
    if(in_array("len", $err)){
        echo 'len error';
    }else if(in_array("int", $err)){
        echo 'int error';
    }else if(in_array("email", $err)){
        echo 'email error';
    }else{
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $ssn = $_POST['ssn'];
        $userData = [
            "email"=> $email,
            "First_name"=> $fname,
            "last_name"=> $lname,
            "password"=> $password,
            "ssn"=> $ssn,
        ];
        $user = new user;
        // var_dump($userData);
        $res =$user->checkUser("ssn", ["ssn"=>$ssn, "email"=>$email]);
        if($res > 0){
            echo 'exists';
        }else{
            $res =$user->addNewUser($userData);
            if($res == 1){
                echo 'added';
            }else{
                echo 'problem';
            }
        }
    }
}
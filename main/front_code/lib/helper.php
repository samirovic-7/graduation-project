<?php

class helper
{



    public static function logout()
    {
        session_start();

        session_destroy();

        header("Refresh:0");
    }
    public static function checkLogin() : bool 
    {
        if(empty($_SESSION['email']) || empty($_SESSION['name'])){
            return 0;
        }else{
            return 1;
        }
    }
    public function __call($name, $arguments)
    {
        if($name == "redirect"){
            if(count($arguments) >1){
                header("Refresh: $arguments[1]; url={$arguments[0]}.php");
            }else{
                header("Location: {$arguments[0]}.php");
            }
        }
    }
}
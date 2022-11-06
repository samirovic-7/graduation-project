<?php

// require '../lib/pdodb.php';

class user extends pdodb{
    function addNewUser($data){
        return $this->insert("citizines", $data)->setData($data)->executeQuery();
         
    }
    function checkUser($data, $ssn){
        // var_dump("rrrrrrrrrrrrrrr", $ssn);
        return $this->select("citizines", $data)->where("ssn", "=", $ssn)->orWhere("email", "=", $ssn)->getRowCount();
    }
    function selectUser($data, $email){
        return $this->select("citizines", $data)->where("email", "=", $email)->getRow();
    }
    function selectUserReset($data, $ssn){
        return $this->select("citizines", $data)->where("ssn", "=", $ssn)->orWhere("email", "=", $ssn)->getRow();
    }
    public function checkLogin() : bool 
    {
        if(empty($_SESSION['email']) || empty($_SESSION['name'])){
            return 0;
        }else{
            return 1;
        }
    }
    function listCate(){

        return $this->select("citizines", "*")->getAll();
    }

    function deletecitizines($id){
        return $this->delete("citizines")->where("id", "=", $id)->executeQuery();
    }
    function updateUser($colsData, $ssn){
        return $this->update("citizines", $colsData)->setData($colsData)->where("ssn", "=", $ssn)->executeQuery();
    }
}
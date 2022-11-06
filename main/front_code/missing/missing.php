<?php

class missing extends pdodb{

    public function missingSearchSSN($ssn){
        $data =  "id, name, image, missing_date, governateName, cityName, notes";
        return $this->select("missing_info",$data)
        ->Where("ssn", "=", $ssn)
        ->orderBy('missing_date', "DESC")->getAllWe();
    }
    public function missingSearch($key){
        $data =  "id, name, image, missing_date, governateName, cityName, notes";
        return $this->select("missing_info",$data)
        ->whereLike("name", $key)
        ->orderBy('missing_date', "DESC")->getAll();
    }
    public function allMissing(){
        $data =  "id, name, image, missing_date, governateName, cityName, notes";
        return $this->select("missing_info",$data)->orderBy('missing_date', "DESC")->getAll();

    }
    public function getGovs()
    {
        return $this->select("governorate","*")->getAll();
        # code...
    }
    public function getDiseases()
    {
        return $this->select("diseases","*")->getAll();
        # code...
    }
    public function getNational()
    {
        return $this->select("nationalities","*")->getAll();
        # code...
    }
    public function getColor($type)
    {
        return $this->select("colors","*")->where("status", "=", $type)->getAllWe();
        # code...
    }
    public function getCites($gov)
    {
        return $this->select("cities","*")->where("Governorate_code", "=", $gov)->getAllWe();
        # code...
    }
    public function filter($gov, $city, $age, $height, $weight, $eye, $hair, $skin, $mdate, $diseases, $nationality, $gender){
        $data =  "id, name, image, missing_date, governateName, cityName, notes";
        return $this->select("missing_info",$data)
        ->whereFilter('governorate_code', "=", $gov)
        ->In("city_code", $city)
        ->between("age", $age)
        ->between("height", $height)
        ->between("weight", $weight)
        ->andWhereFilter("eye_color", "=", $eye)
        ->andWhereFilter("hair_color", "=", $hair)
        ->andWhereFilter("skin_color", "=", $skin)
        ->andWhereFilter("missing_date", "=",$mdate)
        ->andWhereFilter("nationality_code", "=",$nationality)
        ->In("disease_code", $diseases)
        ->andWhereFilter("gender", "=",$gender)
        ->orderBy('missing_date', "DESC")->getAll();
    }
    public function checkSelect($key, $val){
        if(isset($_GET[$key]) && $_GET[$key] == $val)
        echo "selected" ;
        
    }
    public function checkActiveCheckbox($key, $val){
        if(isset($_GET[$key]) && in_array($val, $_GET[$key]))
        echo "active" ;
    }
    public function checkCheckedCheckbox($key, $val){
        if(isset($_GET[$key]) && in_array($val, $_GET[$key]))
        echo "checked" ;
    }

}



?>
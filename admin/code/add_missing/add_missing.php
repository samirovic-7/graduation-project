<?php

session_start();
include('../../connection.php');

$national_number=$_POST["ssn"];

$age = $_POST["age"];

$phone = $_POST["phone"];


$first_name=$_POST["Fname"];

    
$second_name=$_POST["Mname"];

$last_name=$_POST["Lname"]; 





    
$relation=$_POST["relation_with_missing"];

$gender = $_POST["gender"];


$nation_code = $_POST["nationality"];

$hair_color = $_POST["hair_color"];

$skin_color = $_POST["skin_color"];

$eye_color = $_POST["eye_color"];
    
    
$Lshow=$_POST["lastSeen"];
        


$height =$_POST["height"];



$weight=$_POST["weight"];

$disease_code = $_POST["disease_code"];


$desc=$_POST["note"];


$added_by = $_SESSION['admin_ssn'];


$missingName = $_FILES['missingPhoto']['name'];
$missingType = $_FILES['missingPhoto']['type'];
$missingTmpName = $_FILES['missingPhoto']['tmp_name'];
$missingsize = $_FILES['missingPhoto']['size'];

$missing1 = rand(0,10000000).'_' .$missingName;

move_uploaded_file($missingTmpName,"upload\missing\\".$missing1);

$governorate_code = $_POST["select_governorate"];

$specific_city_governorate = $_POST["specific_city_governorate"];



$department_code = $_POST["department_code"];



 
 $insertw = $con->prepare("INSERT INTO missing(SSN,age,phone,First_Name,Mid_Name,Last_Name,relationWithMisssing,missing_date,height,weight,
 hair_color,skin_color,eye_color,governorate_code,city_code,nationality_code,department_code,disease_code,notes,image,added_by_admin,gender) 
     VALUES(:ssn ,:age,:phone,:first_name,:mid_name,:last_name,:relation,:lshow,:height,:weight,
     :hair_color,:skin_color,:eye_color,:governate,:city,:nation,:department,:disease,:desc,:img,:added_by,:gender)");
 
     $insertw->bindparam("ssn",$national_number);
     $insertw->bindparam("age",$age);
     $insertw->bindparam("phone",$phone);
     $insertw->bindparam("first_name",$first_name);
     $insertw->bindparam("mid_name",$second_name);
     $insertw->bindparam("last_name",$last_name);
     $insertw->bindparam("relation",$relation);
     $insertw->bindparam("lshow",$Lshow);
     $insertw->bindparam("height",$height);
     $insertw->bindparam("weight",$weight);
     $insertw->bindparam("hair_color",$hair_color);
     $insertw->bindparam("skin_color",$skin_color);
     $insertw->bindparam("eye_color",$eye_color);
     $insertw->bindparam("gender",$gender);
     $insertw->bindparam("governate",$governorate_code);
     $insertw->bindparam("city",$specific_city_governorate);
     $insertw->bindparam("nation",$nation_code);
     $insertw->bindparam("department",$department_code);
     $insertw->bindparam("disease",$disease_code);
     $insertw->bindparam("desc",$desc);
     $insertw->bindparam("img",$missing1);
     $insertw->bindparam("added_by",$added_by);
 
 
     if($insertw->execute())
     {
         echo `missing added succesfully`;
     }




?>
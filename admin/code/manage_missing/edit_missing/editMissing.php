<?php   

include('../../../connection.php');

$id = $_POST['id'];

echo $id;

echo "<br>";



$ssn= $_POST["ssn"];

echo $ssn;

echo "<br>";

$age= $_POST["age"];

echo $age;

echo "<br>";

$phone= $_POST["phone"];

echo $phone;

echo "<br>";

$Fname= $_POST["Fname"];

echo $Fname;

echo "<br>";

$Mname= $_POST["Mname"];

echo $Mname;

echo "<br>";

$Lname= $_POST["Lname"];

echo $Lname;

echo "<br>";

$relation_with_missing= $_POST["relation_with_missing"];

echo $relation_with_missing;

echo "<br>";

$gender= $_POST["gender"];

echo $gender;

echo "<br>";

$nationality= $_POST["nationality"];

echo $nationality;

echo "<br>";

$hair_color= $_POST["hair_color"];

echo $hair_color;

echo "<br>";

$skin_color= $_POST["skin_color"];

echo $skin_color;

echo "<br>";

$eye_color= $_POST["eye_color"];

echo $eye_color;

echo "<br>";

$height= $_POST["height"];

echo $height;

echo "<br>";

$weight= $_POST["weight"];

echo $weight;

echo "<br>";

$disease_code= $_POST["disease_code"];

echo $disease_code;

echo "<br>";

$note= $_POST["note"];

echo $note;

echo "<br>";

$lastSeen= $_POST["lastSeen"];

echo $lastSeen;

echo "<br>";

$select_governorate= $_POST["select_governorate"];

echo $select_governorate;

echo "<br>";

$specific_city_governorate= $_POST["specific_city_governorate"];

echo $specific_city_governorate;

echo "<br>";

$department_code= $_POST["department_code"];

echo $department_code;

echo "<br>";

$missing_status= $_POST["missing_status"];

echo $missing_status;

echo "<br>";

$update_missing  = $con->prepare('UPDATE missing `SSN`=:SSN , `age`=:age , `phone`=:phone , `First_Name`=:First_Name , `Mid_Name`=:Mid_Name , `Last_Name`=:Last_Name , `relationWithMisssing`=:relationWithMisssing , `gender`=:gender , `nationality_code`=:nationality_code  ,  `hair_color`=:hair_color  , `skin_color`=:skin_color , `eye_color`=:eye_color , `height`=:height , `weight`=:`weight` , `disease_code`=:disease_code , `notes`=:notes , `missingType`=:missingType , `missing_date`=:missing_date , `governorate_code`=:governorate_code , `city_code`=:city_code , `department_code`=:department_code WHERE id=:id ');

$update_missing->bindParam('id',$id);
$update_missing->bindParam('SSN',$ssn);
$update_missing->bindParam('age',$age);
$update_missing->bindParam('phone',$phone);
$update_missing->bindParam('First_Name',$Fname);
$update_missing->bindParam('Mid_Name',$Mname);
$update_missing->bindParam('Last_Name',$Lname);
$update_missing->bindParam('relationWithMisssing',$relation_with_missing);
$update_missing->bindParam('gender',$gender);
$update_missing->bindParam('nationality_code',$nationality);
$update_missing->bindParam('hair_color',$hair_color);
$update_missing->bindParam('skin_color',$skin_color);
$update_missing->bindParam('eye_color',$eye_color);
$update_missing->bindParam('height',$height);
$update_missing->bindParam('weight',$weight);
$update_missing->bindParam('disease_code',$disease_code);
$update_missing->bindParam('notes',$note);
$update_missing->bindParam('missingType',$missing_status);
$update_missing->bindParam('missing_date',$lastSeen);
$update_missing->bindParam('governorate_code',$select_governorate);
$update_missing->bindParam('city_code',$specific_city_governorate);
$update_missing->bindParam('department_code',$department_code);

if($update_missing->execute())
{
    echo "تم تعديل بيانات الطفل بنجاح";
}
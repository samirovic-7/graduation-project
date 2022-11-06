<?php 
include("../../../connection.php");



$national_number = $_POST["national_number"];
$age = $_POST["age"];
$First_name = $_POST["first_name"];
$second_name = $_POST["secondt_name"];
$title = $_POST["title"];
$phoneone = $_POST["phoneone"];
$phonetwo = $_POST["phonetwo"];
$password = md5($_POST["password"]);
$email = $_POST["email"];
$governnorate = $_POST["select_governorate"];
$city = $_POST["city"];
$police = $_POST["department_code"];  

$citiziesName = $_FILES['citizies']['name'];
$citiziesType = $_FILES['citizies']['type'];
$citiziesTmpName = $_FILES['citizies']['tmp_name'];
$citiziessize = $_FILES['citizies']['size'];

$citizies1 = rand(0,10000000).'_' .$citiziesName;
move_uploaded_file($citiziesTmpName,"upload\citizines\\".$citizies1);

$select_unique_citizines=  $con->prepare("SELECT * FROM citizines WHERE ssn=:ssn AND email=:email");
$select_unique_citizines->bindParam('ssn',$national_number);
$select_unique_citizines->bindParam('email',$email);
$select_unique_citizines->execute();
$count = $select_unique_citizines->rowcount();
if($count == 1)
{
    echo '<div class="alert alert-warning" role="alert">  The Citizines Is Exist </div>';
}
else
{
    $date = date("Y-m-d");

    $status = 0;

    $insert_citizine = $con->prepare("INSERT INTO citizines(`ssn`,`First_name`,`mid_name`,`last_name`,`age`,
    `image`,`first_phone`,`second_phone`,`status`,`email`,`password`,`created_at`,`governorate_code`,`city_code`,`department_code`) 
    VALUES(:ssn,:First_name,:mid_name,:last_name,:age,:image,:first_phone,:second_phone,:status,:email,:password,:date,:governorate_code,:city_code,:department_code) ");

    $insert_citizine->bindParam('ssn',$national_number);
    $insert_citizine->bindParam('First_name',$First_name);
    $insert_citizine->bindParam('mid_name',$second_name);
    $insert_citizine->bindParam('last_name',$title);
    $insert_citizine->bindParam('age',$age);
    $insert_citizine->bindParam('image',$citizies1);
    $insert_citizine->bindParam('first_phone',$phoneone);
    $insert_citizine->bindParam('second_phone',$phonetwo);
    $insert_citizine->bindParam('email',$email);
    $insert_citizine->bindParam('status',$status);
    $insert_citizine->bindParam('password',$password);
    $insert_citizine->bindParam('date',$date);
    $insert_citizine->bindParam('governorate_code',$governnorate);
    $insert_citizine->bindParam('city_code',$city);
    $insert_citizine->bindParam('department_code',$police);

    if($insert_citizine->execute())
    {
        echo 'تم إضافة المواطن بنجاح';
    }
}



?>
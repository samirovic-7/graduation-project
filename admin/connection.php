<?php



$dsn = 'mysql:host=localhost;dbname=the_missings';
$username="root";
$pass="";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try
{
    $con = new PDO($dsn ,$username,$pass,$options);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}
catch(PDOException $e)
{
    echo"there is an error".$e->getMessage();
}



?>


<?php 

include('../../connection.php');

$governorate_code = $_POST["governorate_code"];


$slect_city_governorates = $con->prepare("SELECT * FROM cities WHERE Governorate_code=:Governorate_code");

$slect_city_governorates->bindParam('Governorate_code',$governorate_code);

$slect_city_governorates->execute();


$fetCities = $slect_city_governorates->fetchAll();


foreach($fetCities as $fetCitie)
{
    ?>


        <option value="<?php echo $fetCitie["cities_code"] ?>" selected> <?php echo $fetCitie["citiese_name"] ?> </option>  

    <?php
}


?>
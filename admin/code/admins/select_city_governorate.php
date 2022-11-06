<?php

include("../connection.php");



    $select_governorates = $con->prepare("SELECT * FROM governorate");



    $select_governorates->execute();


    $governorates_fets = $select_governorates->fetchAll();



    foreach($governorates_fets as $governorates_fet)
    {
  
        ?>  

            <option value="<?php echo $governorates_fet["Governorate_code"] ?>"> <?php echo $governorates_fet["Governorate_code"] ?> </option>        


        <?php
    }
?>
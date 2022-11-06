<?php

include("../../connection.php");

$selectShelters = $con->prepare("SELECT departments.*, governorate.Governorate_name AS governorate_name, cities.citiese_name AS city_name FROM ((departments INNER JOIN governorate ON departments.governorate_code = governorate.Governorate_code) INNER JOIN cities ON departments.cites_code = cities.cities_code)  WHERE `status`=3 ");


$selectShelters->execute();

$gethelters = $selectShelters->fetchAll();

$i = 0;
foreach ($gethelters as $gethelter) {
    $i++;
?>

    <tr>
        <th scope="row"> <?php echo $i ?> </th>
        <th class="link"> <?php echo $gethelter["department_name"] ?> </th>


              
        <td> <?php  if ($gethelter["department_phone"] == 0) {
                        echo 'الهاتف غير معروف';
                    }
                    else
                    {
                        echo $gethelter["department_phone"];
                    } ?> </td>
        <td> <?php echo $gethelter["governorate_name"] ?> </td>
            <td> <?php echo $gethelter["city_name"] ?> </td>
            <td>
                <p class="status status-unpaid">
                    <i class="fas fa-trash" onclick="deleteshelter(<?php echo $gethelter['department_code'] ?>)"></i>
                </p>
            </td>
            <td>

                <p class="status status-pending">
                <a href="edit_department.php?id=<?php  echo $gethelter["department_code"] ?>"> <i class="fas fa-pen"></i></a> 
                </p>


            </td>
            <td>

                <p class="status status-pending">
                <a href="department.php?id=<?php  echo $gethelter["department_code"] ?>"> <i class="fas fa-map-marker-alt"></i> </a> 
                </p>


            </td>
    </tr>





<?php
}

?>
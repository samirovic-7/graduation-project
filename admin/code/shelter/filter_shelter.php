<?php

include("../../connection.php");

$department_name = $_POST["department_name"];

$selectShelters = $con->prepare("SELECT departments.*, governorate.Governorate_name AS governorate_name, cities.citiese_name AS city_name FROM ((departments INNER JOIN governorate ON departments.governorate_code = governorate.Governorate_code) INNER JOIN cities ON departments.cites_code = cities.cities_code)  WHERE `status`=3 AND  department_name LIKE '%$department_name%' ");


$selectShelters->execute();

$getShelters = $selectShelters->fetchAll();

$i = 0;
foreach ($getShelters as $getShelters) {
    $i++;
?>

    <tr>
        <th scope="row"> <?php echo $i ?> </th>
        <th class="link"> <?php echo $getShelters["department_name"] ?> </th>

        <td> <?php  if ($getShelters["department_phone"] == 0) {
                        echo 'الهاتف غير معروف';
                    }
                    else
                    {
                        echo $getShelters["department_phone"];
                    } ?> </td>
        <td> <?php echo $getShelters["governorate_name"] ?> </td>
        <td> <?php echo $getShelters["city_name"] ?> </td>
        <td>
            <p class="status status-unpaid">
                <i class="fas fa-trash" onclick="deleteshelter(<?php echo $getShelters['department_code'] ?>)"></i>
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
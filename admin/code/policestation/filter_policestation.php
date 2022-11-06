<?php 

include("../../connection.php");

$department_name = $_POST["department_name"];

$selectPoliceStations = $con->prepare("SELECT departments.*, governorate.Governorate_name AS governorate_name, cities.citiese_name AS city_name FROM ((departments INNER JOIN governorate ON departments.governorate_code = governorate.Governorate_code) INNER JOIN cities ON departments.cites_code = cities.cities_code)  WHERE `status`=1 AND  department_name LIKE '%$department_name%' ");


$selectPoliceStations->execute();

$getPolices = $selectPoliceStations->fetchAll();

$i = 0;
foreach($getPolices as $getPolice)
{
    $i++;
    ?>
    <tr>
        <th scope="row" > <?php echo $i ?> </th>
        <th> <a href="department_reprts.php?id=<?php echo $getPolice["department_code"] ?>"> <?php echo $getPolice["department_name"] ?> </a></th>

        <td> <?php  if ($getPolice["department_phone"] == 0) {
                        echo 'الهاتف غير معروف';
                    }
                    else
                    {
                        echo $getPolice["department_phone"];
                    } ?> </td>
        <td> <?php echo $getPolice["governorate_name"] ?> </td>
        <td> <?php echo $getPolice["city_name"] ?> </td>
        <td>
            <p class="status status-unpaid">
                <i class="fas fa-trash" onclick="deletePoliceStation(<?php echo $getPolice['department_code'] ?>)"></i>
            </p>
        </td>
        <td>
            <p class="status status-pending">
               <a href="edit_department.php?id=<?php  echo $getPolice["department_code"] ?>"> <i class="fas fa-pen"></i></a> 
            </p>
        </td>
<td>
<p class="status status-pending">
<a href="department.php?id=<?php  echo $getPolice["department_code"] ?>"> <i class="fas fa-map-marker-alt"></i> </a> 
</p>


</td>
    </tr>
                                


<?php
}

?>
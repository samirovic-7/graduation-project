<?php 

include("../../connection.php");

$selectHospitals = $con->prepare("SELECT departments.*, governorate.Governorate_name AS governorate_name, cities.citiese_name AS city_name FROM ((departments INNER JOIN governorate ON departments.governorate_code = governorate.Governorate_code) INNER JOIN cities ON departments.cites_code = cities.cities_code)  WHERE `status`=2 ");


$selectHospitals->execute();

$getHospitals = $selectHospitals->fetchAll();

$i = 0;
foreach($getHospitals as $getHospital)
{
    $i++;
    ?>

                <tr>
                    <th scope="row"> <?php echo $i ?> </th>
                    <th > <a class="link" href="department_reprts.php?id=<?php echo $getHospital["department_code"]   ?>"> <?php echo $getHospital["department_name"] ?> </a>  </th>

              
                    <td> <?php  if ($getHospital["department_phone"] == 0) {
                        echo 'الهاتف غير معروف';
                    }
                    else
                    {
                        echo $getHospital["department_phone"];
                    } ?> </td>
                    <td>  <?php echo $getHospital["governorate_name"] ?> </td>
                    <td>  <?php echo $getHospital["city_name"] ?> </td>

                    <td>
                        <p class="status status-unpaid"> <i class="fas fa-trash" onclick="deleteHospital(<?php echo $getHospital['department_code'] ?>)"></i>  </p>
                    </td>
                    <td>
                    <a href="edit_department.php?id=<?php  echo $getHospital["department_code"] ?>"> <i class="fas fa-pen"></i></a>   </p>
                    </td>
                    <td>
                    <a href="department.php?id=<?php  echo $getHospital["department_code"] ?>"> <i class="fas fa-map-marker-alt"></i> </a>   </p>
                    </td>
                </tr>


                                


<?php
}

?>
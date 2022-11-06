<?php

include('../../connection.php');

$citizines = $con->prepare("SELECT citizines.* , governorate.Governorate_name AS 'governorate_name', cities.citiese_name AS 'city_name' , departments.department_name  AS 'department_name'
FROM citizines 
INNER JOIN governorate ON citizines.governorate_code = governorate.Governorate_code
INNER JOIN cities ON citizines.city_code= cities.cities_code
INNER JOIN departments ON citizines.department_code = departments.department_code 
");

$citizines->execute();


$citizine_fets = $citizines->fetchAll();

$i = 0;

foreach ($citizine_fets as $citizine) {
    $i++;
?>


    <tr>
        <th><?php echo $i; ?></th>

        <td> <?php echo $citizine["First_name"] ?> <?php echo $citizine["mid_name"] ?> <?php echo $citizine["last_name"] ?></td>
        <td> <?php echo $citizine["ssn"] ?></td>
        <td> <?php echo $citizine["first_phone"] ?></td>
        <td>
            <?php
            if ($citizine['status'] == 0) {
            ?>
                <a class="controll not-active" onclick="not_activate(<?php echo $citizine['ssn'] ?>)"> غير نشط </a>
            <?php
            } else {
            ?>
                <a class="controll active" onclick="Activate(<?php echo $citizine['ssn'] ?>)"> نشط </a>
            <?php
            }


            ?>

        </td>
        <td>
            <?php echo $citizine['created_at']  ?>
        </td>


        <td>
            <p class="status status-unpaid"> <i class="fas fa-trash" onclick="delete_admins(<?php echo $citizine['ssn']  ?>)"></i> </p>
        </td>

        <td>
            <p> <a href=''> <i class="fas fa-eye blue"></i> </a> </p>
        </td>

    </tr>



<?php
}



?>



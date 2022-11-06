<?php

include('../../connection.php');

$ssn = trim($_POST['ssn']);



$citizines = $con->prepare("SELECT citizines.* , governorate.Governorate_name AS 'governorate_name', cities.citiese_name AS 'city_name' , departments.department_name 
 AS 'department_name'
FROM citizines 
INNER JOIN governorate ON citizines.governorate_code = governorate.Governorate_code
INNER JOIN cities ON citizines.city_code= cities.cities_code
INNER JOIN departments ON citizines.department_code = departments.department_code 

WHERE citizines.ssn = $ssn 
");
$citizines->execute();
$c = $citizines->rowCount();
$citizine_fets = $citizines->fetch();

if($c == 0)
{
    echo 'no data founded';
}
else
{

    ?>


    <tr>
        <th><?php echo 1 ?></th>

        <td> <?php echo $citizine_fets["First_name"] ?> <?php echo $citizine_fets["mid_name"] ?> <?php echo $citizine_fets["last_name"] ?></td>
        <td> <?php echo $citizine_fets["ssn"] ?></td>
        <td> <?php echo $citizine_fets["first_phone"] ?></td>
        <td>
            <?php
            if ($citizine_fets['status'] == 0) {
            ?>
                <a class="controll not-active" onclick="not_activate(<?php echo $citizine_fets['ssn'] ?>)"> غير نشط </a>
            <?php
            } else {
            ?>
                <a class="controll active" onclick="Activate(<?php echo $citizine_fets['ssn'] ?>)"> نشط </a>
            <?php
            }


            ?>

        </td>
        <td>
            <?php echo $citizine_fets['created_at']  ?>
        </td>


        <td>
            <p class="status status-unpaid"> <i class="fas fa-trash" onclick="delete_citizine(<?php echo $citizine_fets['ssn']  ?>)"></i> </p>
        </td>

        <td>
            <p> <a href=''> <i class="fas fa-eye blue"></i> </a> </p>
        </td>

    </tr>



<?php

}






?>



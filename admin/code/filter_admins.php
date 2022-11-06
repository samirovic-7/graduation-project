<?php

include("../connection.php");

$admins_name = $_POST["first_name"];

$filter = $con->prepare("SELECT * FROM admins WHERE first_name LIKE '%$admins_name%' ");


$filter->execute();


$i = 1;
foreach($filter as $filters)
{
    $i++;
    ?>  

    


        <tr>
             <th scope="row"><?php  echo $i; ?></th>

                <td>  <?php  echo $filters["first_name"] ?></td>
                <td>  <?php  echo $filters["age"] ?></td>
                <td>  <?php  echo $filters["email"] ?></td>
                <td>  <?php  echo $filters["phone"] ?></td>
                <td>  <?php  echo $filters["status"] ?></td>
                <td>  <?php  echo $filters["password"] ?></td>
                <td> <i class="fas fa-trash-alt red"  onclick="delete_admins(<?php echo $filters['ssn']?>)"></i>
                <i class="fas fa-pen yellow"  data-bs-toggle="modal" data-bs-target="#exampleModal"></i></td>
        </tr>
    <?php
}
?>
<?php

include("../../connection.php");
$governorate_name = $_POST["Governorate_name"];

$filter_governorate = $con->prepare("SELECT * FROM governorate WHERE Governorate_name LIKE '%$governorate_name%' ");


$filter_governorate->execute();

$fetchs_governorates = $filter_governorate->fetchAll();

$i = 1;
foreach ($fetchs_governorates as $fetch_governorates) {
    $i++;
?>




    <tr>
        <th scope="row"><?php echo $i; ?></th>

        <td> <a class="link" href="governorate_missing.php?id=<?php echo $fetch_governorates['Governorate_code'] ?>"> <?php echo $fetch_governorates["Governorate_name"] ?> </a> </td>

        <td>
            <p class="status status-unpaid">
                <i class="fas fa-trash" onclick="delete_governorate(<?php echo $fetch_governorates['Governorate_code']  ?>)"></i>
            </p>
        </td>
        <td>
            <p class="status status-pending">
                <i class="fas fa-pen" onclick="edit_governorate(<?php echo $fetch_governorates['Governorate_code']  ?> ,`<?php echo $fetch_governorates['Governorate_name']  ?>`)" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
            </p>
        </td>
    </tr>



<?php
}


?>
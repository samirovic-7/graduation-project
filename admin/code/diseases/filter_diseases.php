<?php

include("../../connection.php");
$diseasese_filter = $_POST["diseasese_filter"];

$filter_diseases = $con->prepare("SELECT * FROM diseases WHERE disease_name LIKE '%$diseasese_filter%' ");


$filter_diseases->execute();

$fetchs_diseases = $filter_diseases->fetchAll();

$i = 1;
foreach ($fetchs_diseases as $fetchs_disease) {
    $i++;
?>



    <tr>
        <th scope="row"><?php echo $i; ?></th>

        <td> <?php echo $fetchs_disease["disease_name"] ?></td>
        <td>
            <p class="status status-unpaid">
                <i class="fas fa-trash" onclick="delete_diseases(<?php echo $fetchs_disease['diseases_code']  ?>)"></i>
            </p>
        </td>
        <td>
            <p class="status status-pending">
                <i class="fas fa-pen" onclick="edit_diseases(<?php echo $fetchs_disease['diseases_code']  ?> ,`<?php echo $fetchs_disease['disease_name']  ?>`)" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
            </p>



        </td>
    </tr>

<?php
}


?>
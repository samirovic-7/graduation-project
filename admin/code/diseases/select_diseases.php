<?php

include("../../connection.php");



$select_diseases = $con->prepare("SELECT * FROM diseases");
$select_diseases->execute();
$diseases_fets = $select_diseases->fetchAll();
$i = 0;

foreach ($diseases_fets as $diseases_fet) {
    $i++;
?>



    <tr>
        <th scope="row"><?php echo $i; ?></th>

        <td> <?php echo $diseases_fet["disease_name"] ?></td>
        <td>
            <p class="status status-unpaid">
                <i class="fas fa-trash" onclick="delete_diseases(<?php echo $diseases_fet['diseases_code']  ?>)"></i>
            </p>
        </td>
        <td>
            <p class="status status-pending">
                <i class="fas fa-pen" onclick="edit_diseases(<?php echo $diseases_fet['diseases_code']  ?> ,`<?php echo $diseases_fet['disease_name']  ?>`)" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
            </p>



        </td>
    </tr>


<?php
}
?>
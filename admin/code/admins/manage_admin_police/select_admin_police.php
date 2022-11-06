<?php

include("../../../connection.php");



$select = $con->prepare("SELECT * FROM admins WHERE `admin_dapartment_status`=1");



$select->execute();



$i = 0;

foreach ($select as $Key) {

    $i++;
?>



    <tr>
        <th><?php echo $i; ?></th>

        <td> <?php echo $Key["first_name"] ?> <?php echo $Key["mid_name"] ?> <?php echo $Key["last_name"] ?></td>
        <td> <?php echo $Key["ssn"] ?></td>
        <td> <?php echo $Key["email"] ?></td>
  

        <td>
            <p class="status status-unpaid"> <i class="fas fa-trash" onclick="delete_admins(<?php echo $Key['ssn']  ?>)"></i> </p>
        </td>
        <td>
            <p class="status status-pending"> <a href="edit_admin.php?id=<?php echo $Key['ssn'] ?>"> <i class="fas fa-pen yellow"></i> </a> </p>

        <td>
            <a href="card.php?id=<?php echo $Key['ssn'] ?>"> <i class="fas fa-eye blue"></i> </a> 
        </td>

    </tr>


<?php
}
?>
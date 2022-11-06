<?php

include("../../connection.php");



$select = $con->prepare("SELECT * FROM colors ORDER BY `colors`.`status` ASC");
$select->execute();



$i = 0;

foreach ($select as $Key) {

    $i++;
?>



    <tr>
        <th><?php echo $i; ?></th>

        <td > <?php echo $Key["color"] ?></td>

        <td >
            <?php
            if ($Key["status"] == 0) {
                echo "لون الشعر";
            } elseif ($Key["status"] == 1) {
                echo "لون البشرة";
            } else {
                echo "لون العين";
            }
            ?>

        </td>
        <td>
            <p   class="status status-unpaid"> <i class="fas fa-trash" onclick="delete_colors(<?php echo $Key['color_code']  ?>)"></i> </p>

        </td>
        <td>
            <p  class="status status-pending"> <i class="fas fa-pen" onclick="edit_colors(<?php echo $Key['color_code']  ?> ,`<?php echo $Key['color']  ?>`)" data-bs-toggle="modal" data-bs-target="#exampleModal"></i> </p>
        </td>
    </tr>


<?php
}
?>
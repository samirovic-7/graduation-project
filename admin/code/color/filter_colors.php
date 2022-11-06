<?php

include("../../connection.php");

$colors_name = $_POST["colors_name"];

$filter = $con->prepare("SELECT * FROM colors WHERE color LIKE '%$colors_name%' ");


$filter->execute();


$i = 1;
foreach ($filter as $filters) {
    $i++;
?>




<tr>
        <th><?php echo $i; ?></th>

        <td > <?php echo $filters["color"] ?></td>

        <td >
            <?php
            if ($filters["status"] == 0) {
                echo "لون الشعر";
            } elseif ($filters["status"] == 1) {
                echo "لون البشرة";
            } else {
                echo "لون العين";
            }
            ?>

        </td>
        <td>
            <p   class="status status-unpaid"> <i class="fas fa-trash" onclick="delete_colors(<?php echo $filters['color_code']  ?>)"></i> </p>

        </td>
        <td>
            <p  class="status status-pending"> <i class="fas fa-pen" onclick="edit_colors(<?php echo $filters['color_code']  ?> ,`<?php echo $filters['color']  ?>`)" data-bs-toggle="modal" data-bs-target="#exampleModal"></i> </p>
        </td>
    </tr>

<?php
}
?>
<?php

include("../../connection.php");



$select = $con->prepare("SELECT * FROM missing WHERE missingType = 0 AND  added_by_admin IS NOT NULL");



$select->execute();

$fets = $select->fetchAll();





$i = 0;

foreach ($fets as $Key) {
    $i++;

?>

    <tr>
        <th scope="row"> <?php echo $i ?> </th>
        <th> <?php echo $Key["First_Name"] ?> <?php echo $Key["Mid_Name"] ?> <?php echo $Key["Last_Name"] ?> </th>

        <td> <?php echo $Key["SSN"] ?> </td>
        <td> <?php echo $Key["phone"] ?> </td>
        <td>
            <?php

            if ($Key["missingType"] == 0) {
                echo "مفقود";
            } else {
                echo "تم العثور عليه";
            }

            ?>
        </td>
        <td>
            <a class="venobox" href="code/add_missing/upload/missing/<?php echo $Key['image'] ?>">
                <img src="code/add_missing/upload/missing/<?php echo $Key['image'] ?>" alt="">
            </a>

        </td>

        <td>
            <p class="status status-unpaid">
                <i class="fas fa-trash" onclick="delete_missing(<?php echo $Key['id'] ?>)"></i>
            </p>
        </td>
        <td>
            <p class="status status-pending">
                <a href="EditMissing.php?id=<?php echo $Key['id'] ?>"> <i class="fas fa-pen"></i> </a>
            </p>
        </td>

        <td>
            <p>
                <a href="missingplace.php?id=<?php echo $Key['id'] ?>"> <i class="fas fa-eye blue"></i> </a>

                <a href="bill.php?id=<?php echo $Key['id'] ?>"> <i class="fas fa-eye blue"></i> </a>
                <a href="missingdetailes.php?comment_code=<?php echo $Key['id'] ?>"> <i class="fas fa-eye blue"></i> </a>
            </p>
        </td>
    </tr>



<?php
}
?>
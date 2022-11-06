<?php

include("../../../connection.php");



$select = $con->prepare("SELECT * FROM missing WHERE missingType = 1");



$select->execute();



$i=0;

foreach ($select as $Key) {
$i++;

?>

<tr>
        <th scope="row" > <?php echo $i ?> </th>
        <th> <?php echo $Key["First_Name"] ?> <?php echo $Key["Mid_Name"] ?> <?php echo $Key["Last_Name"] ?> </th>

        <td> <?php echo $Key["SSN"] ?> </td>
        <td> <?php echo $Key["phone"] ?> </td>


        <td>
            <p class="status status-unpaid">
                <i class="fas fa-trash" onclick="delete_missing(<?php echo $Key['id'] ?>)"></i>
            </p>
        </td>
        <td>
            <p class="status status-pending">
            <a href="EditMissing.php?id=<?php echo $Key['id'] ?>">  <i class="fas fa-pen"></i> </a> 
            </p>
        </td>

        <td>
            <p>
               <a href="missingplace.php?id=<?php echo $Key['id'] ?>">  <i class="fas fa-eye blue"></i>  </a> 
            </p>
        </td>
    </tr>



<?php
}
?>
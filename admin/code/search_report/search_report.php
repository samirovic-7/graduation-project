<?php

include("../../connection.php");

$missing_numer = $_POST["report_number"];

$search = $con->prepare("SELECT * FROM missing WHERE id=:missing_numer");

$search->bindParam("missing_numer", $missing_numer);

$search->execute();

$Key = $search->fetch();

$c =  $search->rowCount();

if ($c == 0) {
    echo 'no data founded';
} else {





?>
    <tr>
        <th scope="row"> <?php echo 1?> </th>
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
                <a href="EditMissing.php?id=<?php echo $Key['id'] ?>"> <i class="fas fa-pen"></i> </a>
            </p>
        </td>

        <td>
            <p>



                <a href="missingdetailes.php?comment_code=<?php echo $Key['id'] ?>"> <i class="fas fa-eye blue"></i> </a>
            </p>
        </td>
    </tr>





<?php
    
}






?>
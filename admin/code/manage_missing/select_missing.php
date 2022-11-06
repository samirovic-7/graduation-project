<?php

include("../../connection.php");

//AND  added_by_citizines IS NOT NULL

$select = $con->prepare("SELECT * FROM missing WHERE missingType = 0 ");



$select->execute();

$fets = $select->fetchAll();





$i = 0;

foreach ($fets as $Key) {
    $i++;

?>

    <tr>
        <th scope="row"> <?php echo $i ?> </th>
        <th> <?php   if (empty($Key["First_Name"] && $Key["Mid_Name"] && $Key["Last_Name"])) {

echo 'اسم المفقود غير معروف';
} else {
echo $Key["First_Name"] . ' ' . $Key["Mid_Name"] . ' ' . $Key["Last_Name"];
}
?> </th>

        <td> <?php               if ($Key["SSN"]  == 0) {
                echo 'الرقم القوم  غير معروف';
              } else {

                echo $Key["SSN"];
              } ?> </td>
        <td> <?php 
            if ($Key["phone"] == 0) {
               echo 'رقم هاتف غير معروف';
            }
            else
            {
                echo $Key["phone"] ;
            }
        ?> </td>



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
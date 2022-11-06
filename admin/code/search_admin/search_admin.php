<?php

include("../../connection.php");

$admin_ssn = $_POST["ssn"];





$search = $con->prepare("SELECT * FROM admins  WHERE ssn=:ssn");
$search->bindParam("ssn", $admin_ssn);
$search->execute();
$Key = $search->fetch();
$c =  $search->rowCount();
if ($c == 0) {
    echo 'no data founded';
} else {





?>




    <tr>
        <th><?php echo $Key["ssn"] ?></th>

        <td> <?php echo $Key["first_name"] ?> <?php echo $Key["mid_name"] ?> <?php echo $Key["last_name"] ?></td>
        <td> <?php echo $Key["ssn"] ?></td>
        <td> <?php echo $Key["email"] ?></td>


        <td>
            <p class="status status-unpaid"> <i class="fas fa-trash" onclick="delete_admins(<?php echo $Key['ssn']  ?>)"></i> </p>
        </td>
        <td>
            <p class="status status-pending"> <a href="edit_admin.php?id=<?php echo $Key['ssn'] ?>"> <i class="fas fa-pen yellow"></i> </a> </p>
        </td>
        <td>
            <p> <a href="card.php?id=<?php echo $Key['ssn'] ?>"> <i class="fas fa-eye blue"></i> </a> </p>
        </td>

    </tr>



<?php

}






?>
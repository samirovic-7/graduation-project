<?php

include("../../connection.php");



    $select_governorates = $con->prepare("SELECT * FROM governorate");
    $select_governorates->execute();
    $governorates_fets = $select_governorates->fetchAll();

    $i = 0;

    foreach($governorates_fets as $governorates_fet)
    {
        $i++;
        ?>  

        

            <tr>
                 <th scope="row"><?php  echo $i; ?></th>

                    <td> <a class="link" href="governorate_missing.php?id=<?php echo $governorates_fet['Governorate_code'] ?>">  <?php  echo $governorates_fet["Governorate_name"] ?> </a>  </td>

                    <td>
                        <p  class="status status-unpaid">
                        <i class="fas fa-trash"  onclick="delete_governorate(<?php echo $governorates_fet['Governorate_code']  ?>)"></i> 
                        </p>
                    </td>
                    <td>
                        <p class="status status-pending">
                        <i class="fas fa-pen"   onclick="edit_governorate(<?php echo $governorates_fet['Governorate_code']  ?> ,`<?php echo $governorates_fet['Governorate_name']  ?>`)"  data-bs-toggle="modal" data-bs-target="#exampleModal"></i>   
                        </p>
                    </td>
            </tr>


        <?php
    }
?>
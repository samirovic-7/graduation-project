<?php

include("../../connection.php");



    $select_nationalities = $con->prepare("SELECT * FROM nationalities");
    $select_nationalities->execute();
    $nationalities_fets = $select_nationalities->fetchAll();

    $i = 0;

    foreach($nationalities_fets as $nationalities_fet)
    {
        $i++;
        ?>  

        

            <tr>
                 <th scope="row"  ><?php  echo $i; ?></th>

                    <td >  <?php  echo $nationalities_fet["nationality_name"] ?></td>
                    <td> <p  class="status status-unpaid"> <i class="fas fa-trash"  onclick="delete_nationalities(<?php echo $nationalities_fet['nationality_code']  ?>)"></i>  </p>  </td>

                    <td>
                        <p  class="status status-pending"> <i class="fas fa-pen"   onclick="edit_nationalities(<?php echo $nationalities_fet['nationality_code']  ?> ,`<?php echo $nationalities_fet['nationality_name']  ?>`)"  data-bs-toggle="modal" data-bs-target="#exampleModal"></i>   </p>  
                    </td>
            </tr>


        <?php
    }
?>
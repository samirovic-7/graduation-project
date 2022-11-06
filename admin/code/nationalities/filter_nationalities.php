<?php

include("../../connection.php");
$nationality_filter = $_POST["nationality_filter"];

$filter_nationalities = $con->prepare("SELECT * FROM nationalities WHERE nationality_name LIKE '%$nationality_filter%' ");


$filter_nationalities->execute();

$filter_nationalities = $filter_nationalities->fetchAll();

$i = 1;
foreach($filter_nationalities as $filter_nationalities)
{
    $i++;
    ?>  

    

        

<tr>
                 <th scope="row"  ><?php  echo $i; ?></th>

                    <td >  <?php  echo $filter_nationalities["nationality_name"] ?></td>
                    <td> <p  class="status status-unpaid"> <i class="fas fa-trash"  onclick="delete_nationalities(<?php echo $filter_nationalities['nationality_code']  ?>)"></i>  </p>  </td>

                    <td>
                        <p  class="status status-pending"> <i class="fas fa-pen"   onclick="edit_nationalities(<?php echo $filter_nationalities['nationality_code']  ?> ,`<?php echo $filter_nationalities['nationality_name']  ?>`)"  data-bs-toggle="modal" data-bs-target="#exampleModal"></i>   </p>  
                    </td>
            </tr>


    <?php
}


?>


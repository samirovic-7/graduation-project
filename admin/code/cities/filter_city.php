<?php

include("../../connection.php");

$City_name = filter_var($_POST["City_name"], FILTER_SANITIZE_STRING);



$filter_city = $con->prepare("SELECT cities.* ,governorate.Governorate_name AS name FROM cities INNER JOIN governorate on governorate.Governorate_code = cities.Governorate_code WHERE citiese_name LIKE '%$City_name%' ");


$filter_city->execute();

$fetchs_cities = $filter_city->fetchAll();

$i = 0;

foreach ($fetchs_cities as $cities_fet) {
    $i++;
?>



<tr>
        <th scope="row"><?php echo $i; ?></th>

        <td> <a class="link" href="city_missing.php?id=<?php  echo $cities_fet['cities_code'] ?>">  <?php  echo $cities_fet["citiese_name"] ?> </a>  </td>
        <td>  <?php echo $cities_fet["name"] ?> </td>
        <td>
            <p  class="status status-unpaid"> <i class="fas fa-trash" onclick="delete_cities(<?php echo $cities_fet['cities_code']  ?>)"></i> </p>
        </td>
        <td>

            <p class="status status-pending">
                <i class="fas fa-pen" onclick="edit_city(<?php echo $cities_fet['cities_code']  ?> ,`<?php echo $cities_fet['citiese_name']  ?>`)" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
            </p>
        </td>
    </tr>

<?php
}


?>
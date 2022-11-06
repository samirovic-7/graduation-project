<?php 

include('../../connection.php');

    $cites_code =  $_POST['city_code'];

 
    $department_status =  $_POST['department_code'];

    $fetDepartments = $con->prepare("SELECT * FROM departments WHERE `status`=:status AND cites_code=:cites_code");

    $fetDepartments->bindParam('status',$department_status);
    
    $fetDepartments->bindParam('cites_code',$cites_code);

    $fetDepartments->execute();

    $departments_data = $fetDepartments->fetchAll();

    foreach($departments_data as $department_data)
    {
        ?>
             <option value="<?php echo $department_data["department_code"] ?>" selected> <?php echo $department_data["department_name"] ?> </option>  

        <?php
    }
?>
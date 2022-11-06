<?php


include('connection.php');

$select = $con->prepare(" SELECT missing_location.* , missing.First_Name AS 'First_Name' , missing.Mid_Name AS 'Mid_Name' , missing.Last_Name AS 'Last_Name' , missing.SSN AS 'SSN',
missing.age AS 'age' , missing.id AS 'id'

FROM missing_location 

INNER JOIN missing ON missing.id = missing_location.missing_code  WHERE to_department=:to_department");

$select->bindParam('to_department', $_SESSION['department_code']);



$select->execute();

$countShelterMissing = $select->rowcount();








// number of hospital

$sel = $con->prepare('SELECT * FROM departments WHERE `status` =3');

$sel->execute();

$countShelter = $sel->rowcount();






?>



<div class="side-right">
    <div class="upper-template">
        <div class="template-title">
            <div class="banner">
                <ul class="list-unstyled">
                    <li class="list1"> الرئيسية </li> <span class="one"> / </span>
                    <li class="list2"> <span class="two"> لوحة تحكم الملاجئ </span> </li>
                </ul>
            </div>
        </div>


        <div class="content-template">

            <div class="conteiner">
                <div class="row" style="justify-content: space-around">

                    <div class="col-lg-5">
                        <div class="box-content" style="background-color: #f44a2c;">
                            <div class="box-content-parag">
                                <span> <?php echo $countShelterMissing; ?> </span>
                                <p> عدد البلاغات </p>

                            </div>
                            <div class="box-content-icon">
                                <i class="fas fa-chart-area"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <a href="manage_shelter.php">
                            <div class="box-content" style="background-color: #840284;">
                                <div class="box-content-parag">
                                    <span> <?php echo $countShelter; ?> </span>
                                    <p> عدد الملاجئ </p>

                                </div>
                                <div class="box-content-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
            </div>





        </div>



        <br>
        <div class="table-template">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>الرقم القومي</th>
                        <th>العمر</th>
                        <th>اقراء المزيد</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    $fets = $select->fetchAll();

                    $i = 0;


                    foreach ($fets as $fet) {
                        $i++;
                    ?>


                        <tr>
                            <th scope="row"> <?php echo $i ?> </th>
                            <th> <?php

                                    if (empty($fet["First_Name"] && $fet["Mid_Name"] && $fet["Last_Name"])) {

                                        echo 'اسم المفقود غير معروق';
                                    } else {
                                        echo $fet["First_Name"] . ' ' . $fet["Mid_Name"] . ' ' . $fet["Last_Name"];
                                    }


                                    ?> </th>

                            <td> <?php
                                    if ($fet["SSN"]  == 0) {
                                        echo 'الرقم القوم  غير معروف';
                                    } else {

                                        echo $fet["SSN"];
                                    }

                                    ?> </td>
                            <td> <?php
                                    if ($fet['age'] == 0) {
                                        echo '   عمر مفقود غير معروف ';
                                    } else {
                                        echo $fet['age'];
                                    }

                                    ?> </td>

                            <td>
                                <p>
                                    <a href="missingdetailes.php?comment_code=<?php echo $fet['id'] ?>"> <i class="fas fa-eye blue"></i> </a>
                                </p>
                            </td>
                        </tr>



                    <?php

                    }

                    ?>


                </tbody>
            </table>

        </div>
    </div>
</div>
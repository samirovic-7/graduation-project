<?php


$governorates = $con->prepare("SELECT * FROM governorate ORDER BY `governorate`.`Governorate_name` ASC");

$governorates->execute();

$fetsGovernorates = $governorates->fetchAll();


/*****************************************/




?>

<div class="side-left">
    <div class="side-left-content">
        <?php


        foreach($fetsGovernorates as $fetsGovernorate)
        {
            ?>
                    <div class="item">
            <a href="#" class="slide-down1"> <?php  echo $fetsGovernorate['Governorate_name'] ?> <i class="fas fa-plus plus-icon"></i></a>
            <div class="parent">
                <div class="sub-item">
                    <i class="fas fa-angle-left left"></i><a href="#" class="slide-down1"> المدن </a>
                    <div class="sub-item-city">
                        <a href="#" class="sub-item-cities"> كفر الشيخ </a>
                        <a href="#" class="sub-item-cities"> كفر الجزار </a>
                    </div>
                </div>

                <div class="sub-item">
                    <i class="fas fa-angle-left left"></i> <a href="#" class="slide-down1"> اقسام الشرطة </a>

                    <div class="sub-item-city">
                        <a href="#" class="sub-item-cities"> قسم كفر الشيخ </a>
                        <a href="#" class="sub-item-cities"> قسم كفر الجزار </a>
                    </div>
                </div>

                <div class="sub-item">
                    <i class="fas fa-angle-left left"></i> <a href="#" class="slide-down1"> الملاجئ </a>
                    <div class="sub-item-city">
                        <a href="#" class="sub-item-cities"> ملجئ كفر الشيخ </a>
                        <a href="#" class="sub-item-cities"> ملجئ كفر الجزار </a>
                    </div>
                </div>

                <div class="sub-item">
                    <i class="fas fa-angle-left left"></i> <a href="#" class="slide-down1"> المستشفيات </a>
                    <div class="sub-item-city">
                        <a href="#" class="sub-item-cities"> مستشفي كفر الشيخ </a>
                        <a href="#" class="sub-item-cities"> مستشفي كفر الجزار </a>
                    </div>
                </div>


            </div>

        </div>

            <?php

        }


        ?>


    </div>
</div>
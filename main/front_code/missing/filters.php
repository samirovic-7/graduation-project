<?php 

require '../lib/pdodb.php';
require 'missing.php';



if(isset($_POST['gov'])){
    $gov = ["Governorate_code"=>$_POST['gov']];
    // print_r($gov);
    $missing = new missing;
    $citiesList = $missing->getCites($gov);
    // var_dump($citiesList);
    if($citiesList){
        foreach($citiesList as $city){
            if(isset($_GET['city']) && in_array($city['cities_code'], $_GET['city'])){
                echo "active" ;

            }
            ?>
                <label class="filter_name" 
                <?php if(isset($_GET['city']) && in_array($city['cities_code'], $_GET['city']))
                    echo "active" ; ?>>
                    <input type="checkbox" onclick="$(this).parent().toggleClass('active')" name="city[]" value="<?= $city['cities_code']  ?>"><?= $city['citiese_name'] ?></label>
            <?php
        }
    }else{
        echo 'no city';
    }
}

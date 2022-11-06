<?php
session_start();
include('connection.php');
include('auth.php');
if (isset($_GET['id'])) {

    $reportet_type = $con->prepare('SELECT added_by_admin FROM missing  WHERE missing.id=:id');

    $reportet_type->bindparam('id', $_GET["id"]);

    $reportet_type->execute();

    $reportet_type_data  = $reportet_type->fetch();

    $type = $reportet_type_data['added_by_admin']; 

    $x = '';
    $y = '';

    $z='';

    if ($type != NULL) {

     

        $z = 'SELECT missing.* ,admins.first_name AS first_name , admins.mid_name AS mid_name ,  admins.last_name AS last_name ,  admins.age AS age ,  admins.ssn  AS ssn ,   admins.phone AS phone, cities.citiese_name AS "city_name" , governorate.Governorate_name AS "governate_name" , diseases.disease_name AS "disease_name" ,

        nationalities.nationality_name AS "nationality_name" , departments.department_name AS "department_name",
        
        colors.color AS "hair_color_name" ,
        colors1.color AS "skin_color_name" ,
        colors2.color AS "eye_color_name"
        
        FROM missing
    
    
        INNER JOIN admins ON missing.added_by_admin  = admins.ssn
        
        INNER JOIN cities ON missing.city_code = cities.cities_code
        
        INNER JOIN governorate ON missing.governorate_code = governorate.Governorate_code
        
        INNER JOIN diseases ON missing.disease_code = diseases.diseases_code
        
        INNER JOIN nationalities ON missing.nationality_code = nationalities.nationality_code
        
        INNER JOIN departments ON missing.department_code = departments.department_code
        
        INNER JOIN colors AS colors ON missing.skin_color = colors.color_code  
        
        INNER JOIN colors AS colors1 ON missing.eye_color = colors1.color_code
        
        INNER JOIN colors AS colors2 ON missing.hair_color = colors2.color_code
        
        
        
        WHERE missing.id=:id';


    }
    else
    {



        $z = 'SELECT missing.* ,citizines.First_name AS first_name , citizines.mid_name AS mid_name ,  citizines.last_name AS last_name,    citizines.age AS age,    citizines.first_phone AS phone,   citizines.ssn AS ssn, cities.citiese_name AS "city_name" , governorate.Governorate_name AS "governate_name" , diseases.disease_name AS "disease_name" ,

        nationalities.nationality_name AS "nationality_name" , departments.department_name AS "department_name",
        
        colors.color AS "hair_color_name" ,
        colors1.color AS "skin_color_name" ,
        colors2.color AS "eye_color_name"
        
        FROM missing
    
    
        INNER JOIN citizines ON missing.added_by_citizines  = citizines.ssn
        
        INNER JOIN cities ON missing.city_code = cities.cities_code
        
        INNER JOIN governorate ON missing.governorate_code = governorate.Governorate_code
        
        INNER JOIN diseases ON missing.disease_code = diseases.diseases_code
        
        INNER JOIN nationalities ON missing.nationality_code = nationalities.nationality_code
        
        INNER JOIN departments ON missing.department_code = departments.department_code
        
        INNER JOIN colors AS colors ON missing.skin_color = colors.color_code  
        
        INNER JOIN colors AS colors1 ON missing.eye_color = colors1.color_code
        
        INNER JOIN colors AS colors2 ON missing.hair_color = colors2.color_code
        
        
        
        WHERE missing.id=:id';


    }







    

    $selectmiss = $con->prepare($z);

    $selectmiss->bindparam('id', $_GET["id"]);

    $selectmiss->execute();

    $getSpecialMissingInfo = $selectmiss->fetch();




    //////////////////

}

?>
  <!doctype html>
  <html>

  <head>
    <title>bill</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/bill.css">
    <style>
      * {
        direction: rtl;
      }
    </style>
  </head>

  <body>



    <main class="container">
      <div class="row mb-2 top">
        <div class="col-md-7">
          <div class="row g-0  rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-3 d-flex flex-column position-static">
              <h3 class="mb-0"> بیانات المبلغ</h3><br>
              <p class="mb-0">الاسم : <?php
                                    if (empty($getSpecialMissingInfo["First_Name"] && $getSpecialMissingInfo["Mid_Name"] && $getSpecialMissingInfo["Last_Name"])) {

                                      echo 'اسم المفقود غير معروق';
                                    } else {
                                      echo $getSpecialMissingInfo["First_Name"] . ' ' . $getSpecialMissingInfo["Mid_Name"] . ' ' . $getSpecialMissingInfo["Last_Name"];
                                    }

                                    ?></p>
              <p class="mb-0">العمر : <?php
                                    if ($getSpecialMissingInfo['age'] == 0) {
                                      echo '   عمر مفقود غير معروف ';
                                    } else {
                                      echo $getSpecialMissingInfo['age'];
                                    }

                                    ?></p>
              <p class="mb-0">تاریخ البلاغ :<?php echo  $getSpecialMissingInfo['created_at'] ?> </p>
              <p class="mb-0"> الجنس :
              <?php

              if ($getSpecialMissingInfo['gender'] == 1) {
                # code...
                echo "ذكر";
              } else {
                echo 'انثي';
              }

              ?>
            </p>


            <p class="mb-0"> الرقم القومي :
              <?php
              if ($getSpecialMissingInfo["SSN"]  == 0) {
                echo 'الرقم القوم  غير معروف';
              } else {

                echo $getSpecialMissingInfo["SSN"];
              }

              ?>
            </p>
            </div>

            <div class="col p-3 d-flex flex-column position-static">
              <h3 class="mb-0"> بیانات البلاغ</h3><br>
              <p class="mb-0">رقم البلاغ :    <?php echo $getSpecialMissingInfo['id'] ?></p>
  
              <p class="mb-0">تاریخ البلاغ : <?php echo $getSpecialMissingInfo['created_at'] ?> </p>
              <p class="mb-0"> جهة البلاغ  : <?php echo $getSpecialMissingInfo['department_name'] ?></p>
              <p class="mb-0">  مكان البلاغ : <?php echo $getSpecialMissingInfo['governate_name'] ?> - <?php echo $getSpecialMissingInfo['city_name'] ?> </p>
            </div>
          </div>
        </div>



        <div class="col-md-3">
          <div class="row g-0  rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

            <div class="col-auto   ">
              <img class="bd-placeholder-img" src="code/add_missing/upload/missing/<?php echo $getSpecialMissingInfo['image'] ?>" style="width: 100%;height: 100%;">

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">


          <article class="blog-post">
            <h2 class="blog-post-title"> صفات المبلغ </h2>


            <div class="table-responsive" style="direction: rtl;">
              <table class="table text-center">
                <thead>
                  <tr>

                    <th style="width: 18%;">الجنسية</th>
                    <th style="width: 18%;">لون الشعر</th>
                    <th style="width: 18%;">لون البشرة</th>
                    <th style="width: 18%;">لون العين</th>
                    <th style="width: 18%;">الطول</th>
                    <th style="width: 18%;">الوزن</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"> <?php echo $getSpecialMissingInfo['nationality_name'] ?> </th>
                    <td> <?php echo $getSpecialMissingInfo['hair_color_name'] ?>  </td>
                    <td> <?php echo $getSpecialMissingInfo['skin_color_name'] ?> </td>
                    <td> <?php echo $getSpecialMissingInfo['eye_color_name'] ?> </td>
                    <td> <?php echo $getSpecialMissingInfo['height'] ?> سم  </td>
                    <td> <?php echo $getSpecialMissingInfo['weight'] ?> كيلو </td>
                  </tr>

                </tbody>

              </table>
            </div><br><br><br>

            <h3> ای کلام</h3>

            <p>
              <?php

                echo $getSpecialMissingInfo['notes']

              ?>
            </p>


          </article>




          <nav class="blog-pagination" aria-label="Pagination">
            <button class="btn btn-outline-primary"  onclick="window.print()">طباعه <i class="fa fa-print" aria-hidden="true"></i></button>
            <a class="btn btn-outline-secondary disabled">تدوينات أحدث</a>
          </nav>

        </div>

        <div class="col-md-4">
          <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="fst-italic">معلومات عن المفقود</h4>
              <p class="mb-0">الاسم :   <?php echo $getSpecialMissingInfo['First_Name'] ?> <?php echo $getSpecialMissingInfo['Mid_Name'] ?>  <?php echo $getSpecialMissingInfo['Last_Name'] ?> </p>
              <p class="mb-0">العمر : <?php echo $getSpecialMissingInfo['age']  ?></p>
              <p class="mb-0">تاریخ الفقد : <?php echo $getSpecialMissingInfo['missing_date'] ?> </p>
              <p class="mb-0"> الجنس : 
                <?php

                  if ($getSpecialMissingInfo['gender'] == 1) {
                    # code...
                    echo "ذكر";
                  }
                  else
                  {
                    echo 'انثي';
                    
                  }

                ?>
              </p>
              <p class="mb-0">مکان تواجد الطفل : امام المسجد</p>
            </div>

            <div class="p-4">

            </div>

            <div class="p-4">

            </div>
          </div>
        </div>
      </div>

    </main>

    <br><br>




  </body>

  <script src="assets/js/bootstrap.min.js"></script>

  </html>
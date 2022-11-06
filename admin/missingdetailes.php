<?php
session_start();
include('connection.php');
include('auth.php');
if (isset($_GET['comment_code'])) {

    $reportet_type = $con->prepare('SELECT added_by_admin FROM missing  WHERE missing.id=:id');

    $reportet_type->bindparam('id', $_GET["comment_code"]);

    $reportet_type->execute();

    $reportet_type_data  = $reportet_type->fetch();

    $type = $reportet_type_data['added_by_admin']; 

    $x = '';
    $y = '';

    $z='';

    if ($type != NULL) {

     

        $z = 'SELECT missing.* ,admins.first_name AS first_name , admins.mid_name AS mid_name ,  admins.last_name AS last_name, cities.citiese_name AS "city_name" , governorate.Governorate_name AS "governate_name" , diseases.disease_name AS "disease_name" ,

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



        $z = 'SELECT missing.* ,citizines.First_name AS first_name , citizines.mid_name AS mid_name ,  citizines.last_name AS last_name, cities.citiese_name AS "city_name" , governorate.Governorate_name AS "governate_name" , diseases.disease_name AS "disease_name" ,

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

    $selectmiss->bindparam('id', $_GET["comment_code"]);

    $selectmiss->execute();

    $fetmiss = $selectmiss->fetch();




    //////////////////

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- <link rel="shortcut icon" href="assets/image/index/small_img/logoIcon.png" /> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/missing_details.css">

    


  <title>تفاصيل عن المفقود</title>
</head>
<body>
    



    <main>
        <section class="breadCrumb" style="margin-top: 0px;">
            <div class="container">
                <ul class="breadCrumbItems">
                    <li><a href="index.html" class="text-hover-black">الصفحة الرئيسية</a></li>
                    <li>تفاصيل عن المفقود</li>
                </ul><!-- ./breadCrumbItems -->    
            </div><!-- ./container -->
        </section><!-- ./breadCrumb -->
        

        <section class="missingDetails">
            <div class="container">
                <div class="row">


                <div class="col-lg-8 col-12">
                        <div class="missingDetails_content">
                            <div class="reporter_details">
                                <p class="info_content"><span class="subtitle">اسم المُبلغ : </span> <a href="persons.php?missing_id=<?php echo $_GET['comment_code'] ?>"> <?php echo  $fetmiss["first_name"] . ' ' .  $fetmiss["mid_name"] . ' ' . $fetmiss["last_name"] ?> </a> </p>
                                <p class="info_content"><span class="subtitle">تاريخ النشر : </span><?php echo $fetmiss["created_at"] ?></p>
                            </div><!-- ./reporter_details -->
                            <div class="missing_info">
                                <div class="missing_desc"><?php echo $fetmiss["notes"] ?> .</div>
                                <div class="missing_img"><img src="code/add_missing/upload/missing/<?php echo $fetmiss['image'] ?>" class="shadow" alt=""></div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="details_group">
                                            <h3 class="group_title">البيانات الأساسية</h3>


                                            <ul>
                                                <li class="info_content"><span class="subtitle">الاسم : </span>
                                                    <?php
                                                    if (empty($fetmiss["First_Name"] && $fetmiss["Mid_Name"] && $fetmiss["Last_Name"])) {

                                                        echo 'اسم المفقود غير معروق';
                                                    } else {
                                                        echo $fetmiss["First_Name"] . ' ' . $fetmiss["Mid_Name"] . ' ' . $fetmiss["Last_Name"];
                                                    }

                                                    ?>
                                                </li>
                                                <li class="info_content"><span class="subtitle">العمر : </span> <?php
                                                                                                                if ($fetmiss["age"]  == 0) {
                                                                                                                    echo '   عمر مفقود غير معروف ';
                                                                                                                } else {

                                                                                                                    echo $fetmiss["age"];
                                                                                                                }

                                                                                                                ?> </li>
                                                <li class="info_content"><span class="subtitle">الرقم القومي : </span>
                                                    <?php
                                                    if ($fetmiss["SSN"]  == 0) {
                                                        echo 'الرقم القوم  غير معروف';
                                                    } else {

                                                        echo $fetmiss["SSN"];
                                                    }

                                                    ?>
                                                </li>
                                                <li class="info_content"><span class="subtitle">الجنسية : </span><?php echo $fetmiss["nationality_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">النوع : </span>
                                                    <?php
                                                    if ($fetmiss["gender"] == 1) {
                                                        echo 'ذكر';
                                                    } else {
                                                        echo 'انثي';
                                                    }

                                                    ?>
                                                </li>
                                            </ul>
                                        </div><!-- ./details_group -->
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="details_group">
                                            <h3 class="group_title">الصفات الشكلية</h3>
                                            <ul>
                                                <li class="info_content"><span class="subtitle">لون العين : </span><?php echo $fetmiss["eye_color_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">لون الشعر : </span><?php echo $fetmiss["hair_color_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">لون البشرة : </span><?php echo $fetmiss["skin_color_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">الطول التقريبي : </span><?php echo $fetmiss["height"] ?> سم</li>
                                                <li class="info_content"><span class="subtitle">الوزن التقريبي : </span><?php echo $fetmiss["weight"] ?> كجم</li>
                                                <li>
                                                    <a href="missingplace.php?id=<?php echo $fetmiss['id'] ?>"> نقل المفقود </a>
                                                </li>
                                            </ul>
                                        </div><!-- ./details_group -->
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="details_group">
                                            <h3 class="group_title">معلومات الإختفاء</h3>
                                            <ul>
                                                <li class="info_content"><span class="subtitle">محافظة الإختفاء : </span><?php echo $fetmiss["governate_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">المدينة : </span><?php echo $fetmiss["city_name"] ?></li>
                                                <li class="info_content"><span class="subtitle">تاريخ الإختفاء : </span><?php echo $fetmiss["missing_date"] ?></li>
                                                <li>  <a href="bill.php?id=<?php echo  $_GET['comment_code']?>">  مشاهدة البلاغ</a> </li>

                                            </ul>
                                        </div><!-- ./details_group -->
                                    </div>
                                </div><!-- ./row -->
                            </div><!-- ./missing_info -->
                        </div><!-- ./missingDetails_content -->
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="comments">
                            <h2 class="comments_title">التعليقات</h2>
                            <div class="comments_content" id="comments_content">
           
                                <div class="comment_item">
                                    <div class="reporter_details">
                                        <a href="user_profile.html" class="info_content">اية ابراهيم عبدالرحمن</a>
                                        <div class="comment_content">انا حزين جدا ان شاء الله ترجع ليكو بالسلامة</div>
                                    </div><!-- ./reporter_details -->
                                    <div class="comment_info">
                                        <p class="comment_date">منذ 5 أيام</p>
                                        <p class="addReplyBtn"><i class="fas fa-reply"></i> الردود</p>
                                    </div><!-- ./comment_info -->
                                    <div class="comment_replys">
                                        <div class="replys_content">
                                            <div class="reply_item">
                                                <div class="reporter_details">
                                                    <a href="user_profile.html" class="info_content">اية ابراهيم عبدالرحمن</a>
                                                    <div class="comment_content">انا حزين جدا ان شاء الله ترجع ليكو بالسلامة</div>
                                                </div><!-- ./reporter_details -->
                                                <div class="comment_info">
                                                    <p class="comment_date">منذ 5 أيام</p>
                                                </div><!-- ./comment_info -->
                                            </div><!-- ./reply_item -->
                                        </div><!-- ./replys_content -->
                                        <form class="addRplyForm">
                                            <input type="text" name="reply" class="form_input" placeholder="اكتب رد..." id="">
                                            <button type="submit">إضافة</button>
                                        </form><!-- ./addRplyform -->
                                    </div><!-- ./comment_replys -->
                                </div><!-- ./comment_item -->
                            </div><!-- ./comments_content -->
                            <form id="addCommentForm" class="addCommentForm">

                                <input type="hidden" name="report_code" value="<?php echo $_GET['comment_code'] ?>" class="form_input" placeholder="اكتب تعليق..." id="report_code">
                      
                            </form><!-- ./addCommentform -->
                        </div><!-- ./comments -->
                    </div>
                </div><!-- ./row -->
            </div><!-- ./container -->
        </section><!-- ./missingDetails -->
<!--         
        <div class="missingdetailes">
  <div class="container">
      <div class="row">
          
          <div class="col-lg-7 col-md-7 col-sm-12 p-0">
            <div class="card mb-3">
                <div class="card-body">
                    
                  <h5 class="reporter-name"><span>اسم المبلغ:</span>
                    اية ابراهيم عبدالرحمن</h5>
                    <h6 class="date">٢٢-٤-٢٠٢٢</h6>
                    <p class="card-text">السلام عليكم ورحمة الله وبركاته.
                        لو سمحتم بعد ازن الجميع بنتى متغيبة عن المنزل من ٤ ايام من يجدها يرجي الاتصال على الرقم
                    01273162900
                    وله الاجرر والثواب عند الله.</p>
                    
                </div>
                <img src="assets/images/about/2.jpg" class="card-img-top" alt="...">
                <hr>
                
                <div class="row rr">
                    
                    <div class="col-lg-7 col-md-8">
                        <div class="main-info">
                            <h4>البيانات الاساسية </h4>
                            
                            <p><span>الاسم :</span>
                                اسراء ايمن محمد </p>
                                <p><span>تاريخ الميلاد:</span>
                                    ٢٧-٣-٢٠١٣</p>
                                    <p><span>الرقم القومى :</span>
                                        ١٢٣٤٥٦٧٨٩١٠</p>
                            <p><span> الجنسية :</span>
                                مصرى</p>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8">
                            <div class="disappearance">
                            <h4> تفاصيل الاختفاء </h4>
                            
                            <p><span>تاريخ الاختفاء:</span>
                                ٢١-٤-٢٠٢٢</p>
                                <p><span> محافظة الاختفاء :</span>
                                    القليوبية</p>
                                    <p> <span>مدينة الاختفاء :</span>
                                        شبرا الخيمة </p>
        
                        </div>
                    </div>
                    </div>
                    

                    

                </div>
            </div>
            
            
        <div class="col-lg-5 col-md-4 col-sm-12">
            
            <div class="card card-right radius-10">
                    <div class="card-body">
                        
                        <div class="user-page-info">
                            <h6 class="mb-0"> محمد سمير فرج 
                            </h6>
                            <p class="font-small-2">
                                انا حزين جدا ان شاء الله ترجع ليكو بالسلامة 
                            </p>
                            
                        </div>
                        <p class="dt-rp">
                            <span class="datee">٥د</span> 
                            <span class="replyy"> رد</span>
                            <i class="fas fa-reply"></i>
                            <div class="hide">
                                <div class="replying">
                                    <h5 class="mb-0"> عبدالله مصطفي 
                                    </h5>
                                        <p class="font-small-2">
                                            ان شاء الله  
                                        </p>
                                    </div>
                                    <br>
                                    
                                </div>

                                    <fieldset class="form-label-group mb-50">
                                        <textarea class="form-control mb-2" id="label-textarea" rows="1" placeholder="اكتب رداً "></textarea>
                            
                                    </fieldset>
                                    
                            </p>
                            
                            
                            
                            <fieldset class="form-label-group mb-50">
                                <textarea class="form-control mb-4" id="label-textarea" rows="2" placeholder="اكتب تعليقا عاما "></textarea>
                                
                            </fieldset>
                            <button type="button" class="btn btn-sm btn-primary waves-effect waves-light">نشر التعليق</button>
                    </div>
                </div>

</div>
 </div>
</div> -->

<!-- end missing detalies-->

   
    
    
</main>
    
    
    
    



   
  <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="assets/js/missing-details.js"></script>
    <script src="code/comments_reply/comments.js"></script>
    
</body>
</html>
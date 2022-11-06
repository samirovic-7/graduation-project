<?php
session_start();
include("../../connection.php");
$national_number  = $_POST["ssn"];
$password = sha1($_POST["password"]); 
$select = $con->prepare("SELECT * FROM admins WHERE ssn=:national_number AND password=:password");
$select->bindParam('national_number',$national_number);
$select->bindParam('password',$password);
$select->execute();
$admin_data = $select->fetch();
$count = $select->rowcount();
if($count == 1)
{
    $_SESSION["admin_ssn"]= $admin_data["ssn"];
    $_SESSION['admin_dapartment_status'] = $admin_data['admin_dapartment_status'];

    $_SESSION['department_code'] = $admin_data['department_code'];

    if ( $_SESSION['admin_dapartment_status'] == 1) {
  
        echo '<div class="alert alert-success" role="alert" id="alert"> اضغط هنا للتوجيه الي الصفحة الرئيسية  <a href="policeDashboard.php"> لوحة تحكم اقسام الشرطة  </a>   </div>' ;
    }
    elseif($_SESSION['admin_dapartment_status'] == 2)
    {
        echo '<div class="alert alert-success" role="alert" id="alert">  اضغط هنا للتوجيه الي الصفحة الرئيسية  <a href="hospitalDashboard.php"> لوحة تحكم  مستشفيات  </a> </div>' ;
    }
    else
    {
        echo '<div class="alert alert-success" role="alert" id="alert">  اضغط هنا للتوجيه الي الصفحة الرئيسية  <a href="shelterDashboard.php"> لوحة تحكم ملاجئ  </a>    </div>' ;
    }
}
else
{
   echo '<div class="alert alert-success" role="alert" id="alert">      هذا الحساب غير موجود يرجي تسجيل الدخول      </div>' ;
}

?>
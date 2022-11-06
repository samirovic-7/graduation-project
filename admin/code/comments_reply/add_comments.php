<?php

include('../../connection.php');

$report_code = $_POST['report_code'];

$comment_content = $_POST['comment_content'];

$date = date('dd-mm-yy');

$citizine_id = 1;

$add_comments = $con->prepare('INSERT INTO comments(`report_code`,`content`,`citizine_id`,`created_at`) VALUES(:report_code,:content,:citizine_id,:date1)');

$add_comments->bindparam('report_code',$report_code );
$add_comments->bindparam('content',$comment_content);
$add_comments->bindparam('citizine_id',$citizine_id);
$add_comments->bindparam('date1',$date);

if ($add_comments->execute()) {
    echo 'تمت إضافة التعليق بنجاح';
}


?>
<?php

include('../../connection.php');

$reply_content = $_POST['reply_content'];

echo $reply_content ;


/*
$add_comments = $con->prepare('INSERT INTO reply(`report_code`,`content`,`comment_code`,`user_code`,`created_at`) VALUES(:report_code,:content,:citizine_id,:date1)');

$add_comments->bindparam('report_code',$report_code );
$add_comments->bindparam('content',$comment_content);
$add_comments->bindparam('citizine_id',$citizine_id);
$add_comments->bindparam('date1',$date);

$add_comments->execute();
*/
?>
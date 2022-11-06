<?php
include('../../connection.php');
session_start();

$select_comments = $con->prepare('SELECT   comments.*   , citizines.First_name AS `First_name` ,  citizines.mid_name AS `mid_name` ,  citizines.last_name AS `last_name` 
FROM comments 
INNER JOIN citizines ON comments.citizine_id = citizines.ssn

WHERE report_code=:report_code');

$select_comments->bindparam('report_code',$_POST['report_code']);

$select_comments->execute();

$fet_comments = $select_comments->fetchAll();


/////////////////////////////// select reply ////////////////////////////////////////




foreach ($fet_comments as $fet_comment) {
?>

    <div class="comment_item">
        <div class="reporter_details">
            <a href="user_profile.php?id=<?php echo $fet_comment['citizine_id'] ?>" class="info_content">  <?php echo $fet_comment['First_name'] ?> <?php echo $fet_comment['mid_name'] ?> <?php  echo $fet_comment['last_name']?> </a>
            <div class="comment_content"> <?php echo  $fet_comment['content'] ?> </div>
        </div><!-- ./reporter_details -->
        <div class="comment_info">
            <p class="comment_date"> <?php echo $fet_comment['created_at'] ?> </p>
            <p class="addReplyBtn" onclick=" $(this).parent().next().slideToggle();"><i class="fas fa-reply"></i> الردود</p>
        </div><!-- ./comment_info -->
        <div class="comment_replys">
            <div class="replys_content">
                <?php

                $replys = $con->prepare('SELECT reply.*   , citizines.First_name AS `First_nameR` ,  citizines.mid_name AS `mid_nameR` , 
                citizines.last_name AS `last_nameR`  FROM reply
                INNER JOIN citizines ON reply.user_code = citizines.ssn
                WHERE comment_code=:comment_code');

                $replys->bindparam('comment_code',$fet_comment['comment_code']);

                $replys->execute();

                $reply_datas = $replys->fetchAll();
                                    
                    foreach($reply_datas as $reply_data)
                    {
                        ?>
                        <div class="reply_item">
                                <div class="reporter_details">
                                <a href="user_profile.php?id=<?php echo $reply_data['user_code'] ?>" class="info_content">  <?php echo $reply_data['First_nameR'] ?> <?php echo $reply_data['mid_nameR'] ?> <?php  echo $reply_data['last_nameR']?> </a>
                                    <div class="comment_content" name='reply_content'> <?php echo $reply_data['content'] ?> </div>
                                </div><!-- ./reporter_details -->
                                <div class="comment_info">
                                    <p class="comment_date"> <?php echo $reply_data['created_at']  ?> </p>
                                </div><!-- ./comment_info -->
                            </div><!-- ./reply_item -->



                        <?php
                    }

                ?>
                                        </div><!-- ./replys_content -->
            <form   id="addReplyForm" class="addRplyForm" onsubmit="addRep(event, <?= $_SESSION['ssn'] ?>, <?= $fet_comment['comment_code'] ?>)">
                <input type="text" name="reply" class="form_input" placeholder="اكتب رد..." id="reply_content">
                <button type="submit" id="addReplyForm"  >إضافة</button>
            </form><!-- ./addRplyform -->
        </div><!-- ./comment_replys -->

    </div><!-- ./comment_item -->


<?php
}



?>



<?php

include('../../connection.php');

$select_comments = $con->prepare('SELECT * FROM comments WHERE report_code=:report_code');

$select_comments->bindparam('report_code',$_POST['report_code']);

$select_comments->execute();

$fet_comments = $select_comments->fetchAll();


foreach ($fet_comments as $fet_comment) {
?>

    <div class="comment_item">
        <div class="reporter_details">
            <a href="user_profile.html" class="info_content">اية ابراهيم عبدالرحمن</a>
            <div class="comment_content"> <?php echo  $fet_comment['content'] ?> </div>
        </div><!-- ./reporter_details -->
        <div class="comment_info">
            <p class="comment_date">منذ 5 أيام</p>
            <p class="addReplyBtn" onclick=" $(this).parent().next().slideToggle();"><i class="fas fa-reply"></i> الردود</p>
        </div><!-- ./comment_info -->
        <div class="comment_replys">
            <div class="replys_content">
                <div class="reply_item">
                    <div class="reporter_details">
                        <a href="user_profile.html" class="info_content">اية ابراهيم عبدالرحمن</a>
                        <div class="comment_content" name='reply_content'>انا حزين جدا ان شاء الله ترجع ليكو بالسلامة</div>
                    </div><!-- ./reporter_details -->
                    <div class="comment_info">
                        <p class="comment_date">منذ 5 أيام</p>
                    </div><!-- ./comment_info -->
                </div><!-- ./reply_item -->
            </div><!-- ./replys_content -->
            <form   id="addReplyForm" class="addRplyForm" >
                <input type="text" name="reply" class="form_input" placeholder="اكتب رد..." id="reply_content">
                <button type="submit" id="addReplyForm" onclick="addReplyForm1(`<?php echo $fet_comment['comment_code'] ?>`,`<?php echo $fet_comment['citizine_id'] ?>`)" >إضافة</button>
            </form><!-- ./addRplyform -->
        </div><!-- ./comment_replys -->
    </div><!-- ./comment_item -->


<?php
}





?>
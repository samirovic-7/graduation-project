<?php

include('../../connection.php');
if(isset($_POST['content'])){
    $userId = $_POST['citizenId'];
    $commentId = $_POST['commentId'];
    $content = $_POST['content'];
    $add = $con->prepare('INSERT INTO reply(`content`,`comment_code`,`user_code`) VALUES(:content, :commentId, :userId)');
    $add->bindparam('content',$content);
    $add->bindparam('userId',$userId);
    $add->bindparam('commentId',$commentId);
    $add->execute();
}
if(isset($_POST['commentId'])){
    $commentId = $_POST['commentId'];
    $sel = $con->prepare('SELECT reply.*   , citizines.First_name AS `First_nameR` ,  citizines.mid_name AS `mid_nameR` , 
        citizines.last_name AS `last_nameR`  FROM reply
        INNER JOIN citizines ON reply.user_code = citizines.ssn
        WHERE comment_code=:commentId');
    $sel->bindparam('commentId',$commentId);
    $sel->execute();
    $replys = $sel->fetchAll();
                                    
    foreach($replys as $reply)
    {
        ?>
        <div class="reply_item">
            <div class="reporter_details">
            <a href="user_profile.php?id=<?php echo $reply['user_code'] ?>" class="info_content">  <?php echo $reply['First_nameR'] ?> <?php echo $reply['mid_nameR'] ?> <?php  echo $reply['last_nameR']?> </a>
                <div class="comment_content" name='reply_content'> <?php echo $reply['content'] ?> </div>
            </div><!-- ./reporter_details -->
            <div class="comment_info">
                <p class="comment_date"> <?php echo $reply['created_at']  ?> </p>
            </div><!-- ./comment_info -->
        </div><!-- ./reply_item -->



        <?php
    }

?>
<?php
}

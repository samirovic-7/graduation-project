

function addRep(e, citizenId, commentId){
    e.preventDefault();
    e.target.previousElementSibling
    content = e.target.reply_content.value;
    $.ajax({
        type: "POST",
        url: "front_code/comments_reply/add_reply.php",
        data: {citizenId:citizenId, commentId:commentId, content:content},

        success: function (response) {
            //   console.log(response);
            e.target.reply_content.value ='';
            $.ajax({
                type: "POST",
                url: "front_code/comments_reply/add_reply.php",
                data: {commentId:commentId},
                
                success: function (response) {
                    e.target.previousElementSibling.innerHTML =response;
                },
            });
            },
    });
}

    
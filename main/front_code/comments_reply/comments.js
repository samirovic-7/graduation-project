
let comments_content = document.getElementById("comments_content");

let report_code = document.getElementById("report_code");

function getAllComments() {
  let xml = new XMLHttpRequest();
  xml.open("post", "front_code/comments_reply/select_comments.php", true);

  xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xml.send("report_code=" + report_code.value);

  xml.onreadystatechange = function () {
    if (this.status === 200) {
      comments_content.innerHTML = this.responseText;
    }
  };
}
getAllComments();

$("#addCommentForm").on("submit", function (e) {
  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "front_code/comments_reply/add_comments.php",
    data: new FormData(this),
    contentType: false,
    processData: false,
    success: function (response) {
      getAllComments();
      $("#addCommentForm")[0].reset();

      
    },
  });
});


$('#login').submit(function(e){
    e.preventDefault();
    $.ajax({
        type: "post",
        url: "front_code/registration/login.php",
        data: $(this).serialize(),
        success: function (response) {
            console.log(response);
            if (response == 'invalid') {
                $('.error .alert').text('خطأ في الايميل او كلمة المرور');
                $('.error').fadeIn();
                setTimeout(() => {
                    $('.error').fadeOut();
                }, 5000);
            }else if(response == 'exists'){
                location.assign("index.php");
            }else if(response == 'not exist'){
                $('.error .alert').text('لا وجود للمستخدم يمكنك التسجيل أو اعادة تعيين كلمة المرور');
                $('.error').fadeIn();
                setTimeout(() => {
                    $('.error').fadeOut();
                }, 5000);
            }else{
                $('.error .alert').text('برجاء التحقق من البيانات');
                $('.error').fadeIn();
                setTimeout(() => {
                    $('.error').fadeOut();
                }, 5000);
            }
        }
    });
});
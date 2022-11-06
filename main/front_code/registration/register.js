$('#register').submit(function(e){
    e.preventDefault();
    let password = $('#password').val();
    let repass = $('#repass').val();
    if(password != repass){
        $('.error .alert').text('كلمة المرور غير متطابقة');
        $('.error').fadeIn();
        setTimeout(() => {
            $('.error').fadeOut();
        }, 3000);
        return;
    }
    $.ajax({
        type: "post",
        url: "front_code/registration/addUser.php",
        // data: {lname:lname, email:email, fname:fname, password:password},
        data: $(this).serialize(),
        success: function (response) {
            console.log(response);
            if (response == 'added') {
                $('.success .alert').text('تم التسجيل بنجاح يمكنك تسجيل الدخول الان');
                $('.success').fadeIn();
                document.querySelector('#register').reset();
                setTimeout(() => {
                    $('.success').fadeOut();
                }, 5000);
            }else if(response == 'exists'){
                $('.error .alert').text('المستخدم موجود بالفعل برجاء التحقق من الرقم القومي و الايميل');
                $('.error').fadeIn();
                setTimeout(() => {
                    $('.error').fadeOut();
                }, 5000);
            }else if(response == 'email error'){
                $('.error .alert').text('برجاء التحقق ادخال ايميل صالح');
                $('.error').fadeIn();
                setTimeout(() => {
                    $('.error').fadeOut();
                }, 5000);
            }else if(response == 'len error' || response == 'int error'){
                $('.error .alert').text('برجاء ادخال رقم قومي صالح مكون من 14 رقم');
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
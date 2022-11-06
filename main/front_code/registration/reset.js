$('#resetForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        type: "post",
        url: "front_code/registration/reset.php",
        data: $(this).serialize(),
        beforeSend: function(){
            $('.loading-overlay').fadeIn();
        },
        success: function (response) {
            // console.log(response);
            $('.loading-overlay').fadeOut();
            if (response == 'sent') {
                $('.success .alert').text('تم ارسال رسالة الي بريدك الالكتروني برجاء التحقق من البريد');
                $('.success').fadeIn();
                document.querySelector('#resetForm').reset();
                setTimeout(() => {
                    $('.success').fadeOut();
                }, 5000);
            }else if (response == 'not exist') {
                $('.error .alert').text('لا يوجد مستخدم بهذه البيانات');
                $('.error').fadeIn();
                setTimeout(() => {
                    $('.error').fadeOut();
                }, 5000);
            }
        }
    });
});


$('#newPassForm').submit(function(e){
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
    let url = new URL(location.href);
    let user= url.searchParams.get('e');
    let op= url.searchParams.get('op');

    let email = $('#email').val();
    $.ajax({
        type: "post",
        url: `front_code/registration/reset.php?e=${user}&op=${op}`,
        data: $(this).serialize(),
        success: function (response) {
            console.log(response);
            $('.loading-overlay').fadeOut();
            if (response == 'updated') {
                $('.success .alert').text('تم تغيير كلمة السر بنجاح يمكنك الان تسجيل الدخول لحسابك');
                $('.success').fadeIn();
                document.querySelector('#newPassForm').reset();
                setTimeout(() => {
                    $('.success').fadeOut();
                    location.assign("login.php")
                }, 4000);
            }else if (response == 'not exist') {
                $('.error .alert').text('لا يوجد مستخدم بهذه البيانات');
                $('.error').fadeIn();
                setTimeout(() => {
                    $('.error').fadeOut();
                }, 5000);
            }
        }
    });
});
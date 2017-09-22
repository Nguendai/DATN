function add(a,b,value){
    $(a).addClass('has-error');
    $(a).addClass('has-feedback');
    $(a).removeClass('has-success');
    $('.glyphicon-ok').remove();
    $(b).html(value);
    $(b).css('color', 'red');
    $(b).show();


}
function sub(b,a){
    $(b).addClass('has-success');
    $(b).addClass('has-feedback');
    $(b).append('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
    $(b).removeClass('has-error');
    $(a).hide();
}

 $(document).ready(function () {
        $('#check_ten').hide();
        $('#check_pass').hide();
        $('#check_pass2').hide();
        $('#check_sdt').hide();
        $('#check_email').hide();
        var erro_ten = true;

        var erro_pass = true;
        var erro_pass2 = true;
        var erro_sdt = true;
        var erro_email = true;
        $('#username_dk').focusout(function () {
            var username_dk = $("#username_dk").val().length;
            if (username_dk < 5 || username_dk > 20 || username_dk == 0) {
              add($('#us1').get(),$('#check_ten').get(),'Name must be 5 -20 characters!');
                erro_ten = true;
            } else {
                erro_ten = false;
                
                sub($('#us1').get(),$('#check_ten').get());

            }
        });
        $('#password_dk').focusout(function () {
            var password_dk = $("#password_dk").val().length;
            if (password_dk < 5 || password_dk > 20) {
                add($('#us2').get(),$('#check_pass').get(),'Pass must be 5 -20 characters!')
                erro_pass = true;
            } else {
                erro_pass = false;
                sub($('#us2').get(),$('#check_pass').get());
            }
        });
        $('#re_pass').focusout(function () {
            var password_dk = $("#password_dk").val();
            var re_pass = $("#re_pass").val();
            if (re_pass == password_dk) {
                erro_pass2 = false;
                sub($('#us3').get(),$('#check_pass2').get());
            } else {
               add($('#us3').get(),$('#check_pass2').get(),'Invalid password')
                erro_pass2 = true;
            }
        });
        $('#phone').focusout(function () {
            var phone = $("#phone").val().length;
            if (phone < 10 || phone > 20) {
                add($('#us4').get(),$('#check_sdt').get(),'Phone must be 10 -20 characters!');
                erro_sdt = true;
            } else {
                erro_sdt = false;
                 sub($('#us4').get(),$('#check_sdt').get());
            }
        });

        $('#email').focusout(function () {
            var email = $('#email').val();
            if (validateEmail(email)) {
                var data = {
                    email1: email,
                }
                $.ajax({
                    url: "login/check_email.php",
                    data: data,
                    dataType: 'text',
                    type: 'POST',
                    success: function (response) {
                        if (response == "ok") {
                            sub($('#us5').get(),$('#check_email').get());
                            erro_email = false;
                        } else {
                            add($('#us5').get(),$('#check_email').get(),'Email already exists!');
                            erro_email = true;
                        }
                    }
                });
            } else {
               add($('#us5').get(),$('#check_email').get(),'Email @....');
                erro_email = true;
            }
        });
        function validateEmail(email) {
            var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return re.test(email);
        }

        $('#submit1').click(function () {
            if (erro_ten == true) {
            add($('#us1').get(),$('#check_ten').get());
            }
            if (erro_pass == true) {
                 add($('#us2').get(),$('#check_pass').get())
                add($('#us3').get(),$('#check_pass2').get())
            }
            if (erro_sdt == true) {
                add($('#us4').get(),$('#check_sdt').get());
            }
            if (erro_email == true) {
                 add($('#us5').get(),$('#check_email').get());
            }
            if (erro_sdt == false && erro_email == false && erro_pass2 == false && erro_ten == false) {
                 $('#submit1').attr("data-dismiss","modal");
                var name_dk = $('#username_dk').val();
                var pass_dk = $("#re_pass").val();
                var phone = $("#phone").val();
                var email = $("#email").val();

                var data2 = {
                    name_dk: name_dk,
                    pass_dk: pass_dk,
                    phone: phone,
                    email: email,
                };
                $.ajax({
                    url: "chucnang/rice.php",
                    data: data2,
                    dataType: 'text',
                    type: 'POST',
                    success: function (response) {
                        if (response == "ok") {
                            console.log(response);
                            $('#username_dk').val('');
                            $('#password_dk').val('');
                            $('#re_pass').val('');
                            $('#phone').val('');
                            $('#email').val('');
                            
                            alert('Register success');

                        } else {
                            alert('Register erro!');
                        }
                    }
                })
            }
        });
    });
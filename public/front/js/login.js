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
    $(a).addClass('hide');
}


    $(document).ready(function () {
        $('#check_e').hide();
        $('#check_e1').hide();
        $('.check1').hide();
        var erro_pass = true;
        var erro_user = true;
        $('#password').focusout(function () {
            var pass_length = $("#password").val().length;
            if (pass_length < 5 || pass_length > 20) {
               add($('#lg2').get(),$('#check_e').get(),'Password must be 5 -20 characters!')
                erro_pass = true;
            } else {
                erro_pass = false;
                sub($('#lg2').get(),$('#check_e').get());
            }
        });
        $('#username').focusout(function () {
            var username1 = $('#username').val();
            if (validateEmail(username1)) {
                sub($('#lg1').get(),$('#check_e1').get());
                erro_user = false;
            } else {
                add($('#lg1').get(),$('#check_e1').get(),'Username already exists!!')
                erro_user = true;

            }
        });
        function validateEmail(email) {
            var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return re.test(email);
        }

        $('#submit').click(function () {
            if(erro_user==true){
              add($('#lg1').get(),$('#check_e1').get(),'Please,Enter Username');  
            }
            if(erro_pass==true){
              add($('#lg2').get(),$('#check_e').get(),'Please,Enter Password');  

            }
            if (erro_pass == false && erro_user == false) {
                var username = $('#username').val();
                var pass = $("#password").val();
                var data = {
                    USERNAME: username,
                    PASSWORD: pass,
                };
                $.ajax({
                    url: "login/login_result.php",
                    data: data,
                    dataType: 'text',
                    type: 'POST',
                    success: function (response) {
                        if (response == "ok") {
                            $('.check1').html('thanhcong');
                            console.log(response);
                            setTimeout(' window.location.href = "index.php"; ', 500);
                        } else {
                            console.log(response);
                            $('.check1').html('<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.');
                            $('.check1').show();
                        }
                    }
                })
            }
        });
    });
$(document).ready(function () {
    var prod_id = $('#prod_id').val();
    $('#add_cart').click(function () {
        var prod_id = $('#prod_id').val();
        // alert(construct(prod_id));
        var data = {
            prod_id: prod_id,
        };
        $.ajax({
            url: "chucnang/request_cart.php",
            data: data,
            dataType: 'text',
            type: 'POST',
            success: function (response) {
                // console.log(response);
                if(response =='chua_dang_nhap'){
                    console.log(response);
                // $('#add_cart').addClass('myModal');
                // $('#add_cart').attr("data-target","#myModalDN");
                }
                else if (response == 'ok') {
                    alert("Sản Phẩm hết hàng rùi");
                } else {
                    var data = JSON.parse(response);
                    // console.log(response);
                    $('#cart-total').html(data.item);
                    $('#result').html(data.data);
                    $('#result1').html(data.pus);
                    $('#result').removeClass('hide');
                    // $('#add_cart').removeClass('myModal');
                    // $('#add_cart').removeAttr("data-target","#myModalDN");
                    // $('#add_cart').attr("data-target",".bs-example-modal-sm");
                    // console.log("data-target#myModalDN");



                    // alert('Bạn đã add thành công');
                }
            }
        });
    });

    $('#deleCart').click(function () {
        console.log('abc');


    })


});
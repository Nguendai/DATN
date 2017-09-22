$(document).ready(function () {
    $('#update').click(function () {
        var quantity = $('#quantity').val();
        var prod_id = $('#prod_id').val();
        var data = {
            quantity: quantity,
            prod_id: prod_id,
        };
        $.ajax({
            url: "chucnang/update_cart.php",
            data: data,
            dataType: 'text',
            type: 'POST',
            success: function (response) {
                console.log(response);
                setTimeout(' window.location.href = "index.php?page=cart"; ', 500);
            }

        });
    });


});
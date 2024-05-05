$(document).ready(function () {
    $("#num_order").change(function() {
        var num_order = $("#num_order").val();
        var price = $("#price").text();
        var data = {num_order: num_order, price: price};

        $.ajax({
            url: 'process.php', //trang xử lý, mặc định trang hiện tại
            method: 'POST', // Post hoặc Get mặc định là get
            data: data, // Dữ liệu truyền lên server
            dataType: 'text', // html, text, script hoặc json
            success: function (data) {
                // $("#total").text(data);
                $("#total").html("<strong>"+data+"</strong>");
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });

    });
});
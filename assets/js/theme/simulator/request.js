// var $j = jQuery.noConflict();

$(document).ready(function () {
    const path = $(location).attr("href").split("simulador/", 1).reverse().join('');
    // const path = $(location).attr("href");
    const file = 'wp-content/themes/goognet/template-parts/simulator/simulator-result.php';

    $('#simulator').submit(function () {
        $.ajax({
            url: path.concat(file),
            // url: path,
            type: 'POST',
            data: $('#simulator').serialize(),
            success: function(data) {
                $('.result').html(data);
            },
            error: function (){
                $('.result').html('Erro');
            }
        });
        return false;
    });
});

$(function () {
    $("#button-simulator").click(function () {
        $(".data__status").removeClass("d-none");
    });
});
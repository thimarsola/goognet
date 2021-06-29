// var $j = jQuery.noConflict();

$(document).ready(function () {
    const path = $(location).attr("href");
    const file = 'wp-content/themes/tropicalpet/source/Support/Sender.php';

    $('#form').submit(function () {
        $.ajax({
            url: path.concat(file),
            type: 'POST',
            data: $('#form').serialize(),
            success: function (data) {
                $('.contact__form__row__form__status').html(data);
            }
        });
        return false;
    });
});

$(function () {
    $("#button").click(function () {
        $(".contact__form__row__form__status--loading").removeClass("d-none");
    });
});
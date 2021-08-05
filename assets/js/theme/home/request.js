// var $j = jQuery.noConflict();

$(document).ready(function () {
    const path = $(location).attr("href");
    const file = 'wp-content/themes/goognet/source/Support/Sender.php';

    $('#form').submit(function () {
        $(".contact__row__content__form__status--loading").removeClass("d-none");
        $.ajax({
            url: path.concat(file),
            type: 'POST',
            data: $('#form').serialize(),
            success: function (data) {
                $('.contact__row__content__form__status').append(data);

                $('#button-contact').on('click', function(){
                    setTimeout(function (){
                        $(".contact__row__content__form__status--loading").addClass("d-none");
                        $(".result").removeClass("d-none");
                    }, 3000);
                });
            },
            error: function(){
                $('.contact__row__content__form__status').append('Erro');
            }
        });
        return false;
    });
});
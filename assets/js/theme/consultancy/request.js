// var $j = jQuery.noConflict();

$(document).ready(function () {
    const pathSender = $(location).attr("href").split("consultoria/", 1).reverse().join('');
    const fileSender = 'wp-content/themes/goognet/source/Support/Sender-Consultoria.php';

    $('#form').submit(function () {
        $(".hero__row__form__container__content__group__status").removeClass("d-none");

        $.ajax({
            url: pathSender.concat(fileSender),
            type: 'POST',
            cache: false,
            data: $('#form').serialize(),
            success: function(data) {
                $('.hero__row__form__container__content__group__status').append(data);

                setTimeout(function (){
                    $(".hero__row__form__container__content__group__status").addClass("d-none");
                    $('#button-sender').attr('disabled', false);
                }, 3000);
            },
            error: function (){
                $('.hero__row__form__container__content__group__status').append('Erro');
            }
        });
        return false;
    });
});
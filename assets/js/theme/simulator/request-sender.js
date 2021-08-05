// var $j = jQuery.noConflict();

$(document).ready(function () {
    const pathSender = $(location).attr("href").split("simulador/", 1).reverse().join('');
    const fileSender = 'wp-content/themes/goognet/source/Support/Sender-Simulator.php';

    $('.close').on('click', function(){
        $('.modal').addClass('d-none');
        $('body').css('overflow', 'auto');
    });

    $('#form-simulator').submit(function () {
        $('.modal').removeClass('d-none');
        $(".modal__content__group__status").removeClass("d-none");

        $.ajax({
            url: pathSender.concat(fileSender),
            type: 'POST',
            cache: false,
            data: $('#form-simulator').serialize(),
            success: function(data) {
                $('.modal').append(data);

                setTimeout(function (){
                    $(".modal__content__group__status").addClass("d-none");
                    $('#button-simulator').attr('disabled', false);
                    $('.modal').addClass('d-none');
                    $('body').css('overflow', 'auto');
                }, 3000);
            },
            error: function (){
                $('.modal').append('Erro');
            }
        });
        return false;
    });
});
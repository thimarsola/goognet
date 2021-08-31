// var $j = jQuery.noConflict();

$(document).ready(function () {
    const path = $(location).attr("href").split("simulador-google/", 1).reverse().join('');
    // const path = $(location).attr("href");
    const file = 'wp-content/themes/goognet/template-parts/simulator-google/simulator-result.php';

    $('#simulator').submit(function () {
        $(".data__status").removeClass("d-none");
        $(".result").addClass("d-none");
        $('#button-simulator').attr('disabled', true);

        $.ajax({
            url: path.concat(file),
            type: 'POST',
            cache: false,
            data: $('#simulator').serialize(),
            success: function(data) {
                $('.result__container').html(data);

                setTimeout(function (){
                    $(".data__status").addClass("d-none");
                    $(".result").removeClass("d-none");
                    $('#button-simulator').attr('disabled', false);
                    $('html,body').animate({
                        scrollTop: $('.result').offset().top - $('.header').innerHeight()
                    }, 500);
                }, 3000);

                if($('.form').hasClass('d-none')){
                    $('.result__content__row').css('filter', 'none');
                }
            },
            error: function (){
                $('.result').html('Erro');
            }
        });
        return false;
    });
});
// var $j = jQuery.noConflict();

$(document).ready(function () {
    const path = $(location).attr("href").split("simulador/", 1).reverse().join('');
    // const path = $(location).attr("href");
    const file = 'wp-content/themes/goognet/template-parts/simulator/simulator-result.php';

    $('#simulator').submit(function () {
        $(".data__status").removeClass("d-none");
        $(".result").addClass("d-none");
        $('.modal').addClass('d-none');
        $('#button-simulator').attr('disabled', true);
        $.ajax({
            url: path.concat(file),
            type: 'POST',
            cache: false,
            data: $('#simulator').serialize(),
            success: function(data) {
                $('.result').html(data);

                setTimeout(function (){
                    $(".data__status").addClass("d-none");
                    $(".result").removeClass("d-none");
                    $('#button-simulator').attr('disabled', false);
                    $('html,body').animate({
                        scrollTop: $('.result').offset().top
                    }, 500);
                }, 3000);

                $('#modal').on('click', function(){
                    const segment = $('.segment').html();
                    const credit = $('.credit').html();
                    const sales = $('.sales').html();
                    const ticket = $('.ticket').html();
                    const clicks = $('.result__content__row__information__clicks p').html();
                    const budget = $('.result__content__row__information__budget p').html();
                    const totalSales = $('.result__content__row__information__sales p').html();
                    const roi = $('.result__content__row__roi__container p').html();

                    $('.modal').removeClass('d-none');
                    $('body').css('overflow', 'hidden');
                    $('#contact-segment').val(segment);
                    $('#contact-credit').val(credit);
                    $('#contact-sales').val(sales);
                    $('#contact-ticket').val(ticket);
                    $('#contact-clicks').val(clicks);
                    $('#contact-budget').val(budget);
                    $('#contact-total-sales').val(totalSales);
                    $('#contact-roi').val(roi);
                });
            },
            error: function (){
                $('.result').html('Erro');
            }
        });
        return false;
    });
});
$(document).ready(function () {
    const pathSender = $(location).attr("href").split("simulador-google/", 1).reverse().join('');
    const fileSender = 'wp-content/themes/goognet/source/Support/Sender-SimulatorGoogle.php';
    // const image = 'wp-content/themes/goognet/assets/images/spinner.svg';

    // $('.form__content__group__status--loading img').attr('src', pathSender.concat(image));

    $('#form-simulator').submit(function(){
        $('.form__content__group__status').removeClass('d-none');

        $.ajax({
           url: pathSender.concat(fileSender),
           type: 'POST',
           cache: false,
           data: $('#form-simulator').serialize(),
            success: function(data){
               $('.form').html(data);

               setTimeout(function(){
                   $('.form__content__group__status').addClass('d-none');
                   $('.form').addClass('d-none');
                   $('.result__content__row').css('filter', 'none');
               }, 3000);
            },
            error: function (){
               $('.form').html('Erro ao enviar')
            }
        });
        return false;
    });
});
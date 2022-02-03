$(function(){
    const sliderCredit = $('#credit');
    const outputCredit = $('#credit-value');
    const sliderSales = $('#sales');
    const outputSales = $('#sales-value');
    const data = $('.data-description');

    outputCredit.html(sliderCredit.val());
    sliderCredit.on('input', function(){
       outputCredit.html($(this).val());
    });


    outputSales.html(sliderSales.val());
    sliderSales.on('input', function(){
       outputSales.html($(this).val());
    });

    sliderSales.on('input', function(){
       if($(this).val() > 1){
           data.html('vendas');
       }else{
           data.html('venda');
       }
    });
});
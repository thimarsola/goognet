$(function(){
    $(window).on("scroll", function(){
       if($(window).scrollTop()){
           $('.header').addClass('header__pages--sticky');
       }
       else{
           $('.header').removeClass('header__pages--sticky');
       }
    });
});
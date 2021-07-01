const screenPosition = window.innerHeight / 2;

//about
function animationAbout(){
    const about = document.querySelector('.about__content');
    const aboutPosition = about.getBoundingClientRect().top;

    if(aboutPosition < screenPosition){
        about.classList.add('about__content--animation');
    }
}
window.addEventListener('scroll', animationAbout);

//simulator
function animationSimulador(){
    const simulador = document.querySelector('.simulator__row__content__body');
    const simuladorPosition = simulador.getBoundingClientRect().top;

    if(simuladorPosition < screenPosition){
       simulador.classList.add('simulator__row__content__body--animation');
    }
}
window.addEventListener('scroll', animationSimulador);
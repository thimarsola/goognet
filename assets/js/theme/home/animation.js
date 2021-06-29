let hero = gsap.timeline({
    scrollTrigger:{
        trigger: '.hero'
    }
});

let about = gsap.timeline({
    scrollTrigger:{
        trigger: '.about',
        start: 'left bottom'
    }
});

let products = gsap.timeline({
    scrollTrigger:{
        trigger: '.products',
        start: 'left center'
    }
});

let pillar = gsap.timeline({
    scrollTrigger:{
        trigger: '.pillar',
        start: 'left center'
    }
});

let clinic = gsap.timeline({
    scrollTrigger:{
        trigger: '.clinic',
        start: 'left bottom'
    }
});

let gallery = gsap.timeline({
    scrollTrigger:{
        trigger: '.gallery',
        start: 'left bottom'
    }
});

let testimonial = gsap.timeline({
    scrollTrigger:{
        trigger: '.testimonial',
        start: 'left bottom'
    }
});

let faq = gsap.timeline({
    scrollTrigger:{
        trigger: '.faq',
        start: 'left bottom'
    }
});

let contact = gsap.timeline({
    scrollTrigger:{
        trigger: '.contact',
        start: 'left bottom'
    }
});

hero.from('.hero__content__header',{
    opacity: 0,
    duration: 1,
    x: 150,
    ease: 'Back.easeInOut'
})
    .from('.hero__content__container',{
        opacity: 0,
        duration: 1,
        x: 150,
        ease: 'Power4.easeInOut'
    });

about.from('.about__row__container',{
    opacity: 0,
    duration: 1,
    y: 150,
    ease: 'Back.easeInOut'
})
    .from('.about__row__image',{
        opacity: 0,
        duration: 1,
        x: -150,
        ease: 'Power4.easeInOut'
    });

products.from('.products',{
    opacity: 0,
    duration: 1,
    y: 150,
    ease: 'Expo.easeInOut'
});

pillar.from('.pillar__container__header',{
    opacity: 0,
    duration: 1,
    x: 150,
    ease: 'Expo.easeInOut'
})
    .from('.pillar__container__content',{
        opacity: 0,
        duration: 1.5,
        x: 150,
        ease: 'Expo.easeInOut'
    });

clinic.from('.clinic__row__container',{
    opacity: 0,
    duration: 1,
    y: 150,
    ease: 'Back.easeInOut'
})
    .from('.clinic__row__image',{
        opacity: 0,
        duration: 1,
        x: -150,
        ease: 'Power4.easeInOut'
    });

gallery.from('.gallery',{
    opacity: 0,
    duration: 1.5,
    y: 150,
    ease: 'Back.easeInOut'
});

testimonial.from('.testimonial',{
    opacity: 0,
    duration: 1,
    ease: 'Bounce.easeInOut'
});

faq.from('.faq__row__container',{
    opacity: 0,
    duration: 2,
    x: -150,
    ease: 'Bounce.easeInOut'
});

contact.from('.contact',{
    opacity: 0,
    duration: 1.5,
    y: 50,
    ease: 'Bounce.easeInOut'
});
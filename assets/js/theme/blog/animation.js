const screenPosition = window.innerHeight / 1.25;

//blog
function animationBlog(){
    const blog = document.querySelector('.hero__content__container__body');
    const blogPosition = blog.getBoundingClientRect().top;

    if(blogPosition < screenPosition){
        blog.classList.add('hero__content__container__body--animation');
    }
}
window.addEventListener('scroll', animationBlog);
const showBtn = document.querySelector('.navBtn');
const topNav = document.querySelector('.top-nav');
const topNav2 = document.querySelector('.top-nav2');

showBtn.addEventListener('click', function(){
    if(topNav.classList.contains('showNav')){
        topNav.classList.remove('showNav');
        showBtn.innerHTML = '<i class = "fas fa-bars"></i>';
    } else {
        topNav.classList.add('showNav');
        showBtn.innerHTML = '<i class = "fas fa-times"></i>';
    }
});

/***top nav2 */
showBtn.addEventListener('click', function(){
    if(topNav2.classList.contains('showNav')){
        topNav2.classList.remove('showNav');
        showBtn.innerHTML = '<i class = "fas fa-bars"></i>';
    } else {
        topNav2.classList.add('showNav');
        showBtn.innerHTML = '<i class = "fas fa-times"></i>';
    }
});

/* Lightbox */
var lightbox = new SimpleLightbox('.gallery a', { /* options */ });



function logorefresh(){
    location.reload();
}




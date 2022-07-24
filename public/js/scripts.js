const Masonry = require("masonry-layout");

//animação header contract
const headerLogo = document.querySelector(".header__nav__container-logo");
let lastScroll = 0 ;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset

    if (currentScroll > 100) {
        headerLogo.classList.add("--contract")
    }

    else{
        headerLogo.classList.remove("--contract")
    }

    lastScroll = currentScroll;
})



//ação modal perfil header
const headerModal = document.querySelector(".header__modal-header");
const triggerModal = document.querySelector("#btn-trigger-modal-header1");
const triggerModal2 = document.querySelector("#btn-trigger-modal-header2")
const exitModal = document.querySelector("#btn-exit-modal-header");


triggerModal.onclick = function () {
    headerModal.classList.toggle("--opacity1");
}

triggerModal2.onclick = function () {
    headerModal.classList.toggle("--opacity1");
}

exitModal.onclick = function () {
    headerModal.classList.remove("--opacity1");
}



//programação galeria
//programação carousel.owl
const nextSlide = '<ion-icon name="chevron-forward-outline" size="large"></ion-icon>';
const prevSlide = '<ion-icon name="chevron-back-outline" size="large"></ion-icon>';
$('.galeria__slider').owlCarousel({
  center:true,
  items:3,
  loop:true,
  margin:70,
  dots: false,
  nav: true,
  navText: [
    prevSlide,
    nextSlide
  ],
  responsive:{
    0:{ 
        items:1,
    },

    1000:{
        items:3,
    }

  }
});

//parallax on scroll carousel tabs

var rellax1 = new Rellax('.galeria__nav1-item');


//mousemove parallax effect carousel

document.addEventListener("mousemove", parallax);
function parallax(e){
    document.querySelectorAll(".galeria__slider-item").forEach(function(move){
        var moving_value = move.getAttribute("data-value");
        var x = (e.clientX * moving_value) / 250;
        var y = (e.clientY * moving_value) / 250;
        
        move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
    });
}
      
$('.galeria').parallaxBackground({
    event: 'mouse_move',
    animation_type: 'shift',
    animate_duration: 2
});


//masonry galeria

window.onload = () => {
    const galeriaAgentes = document.querySelector('.galeria-agentes');

    const masonry = new Masonry(galeriaAgentes, {
        itemSelector: '.galeria-agentes__item',
    });
}
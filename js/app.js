let ubicacionMenu = window.pageYOffset;
let menu = document.querySelector('.site-header');

let alturaMenu = menu.offsetHeight;

window.addEventListener('DOMContentLoaded', window.onscroll);


window.onscroll = function () {
    let ubicacionActual = window.pageYOffset;
    if ( ubicacionActual < alturaMenu) {

        menu.classList.remove('menu-fixed')
        menu.classList.add('menu');
        
    }else {
        
        menu.classList.remove('menu');
        menu.classList.add('menu-fixed');
    }
     
}



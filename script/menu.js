let btnMenu = document.getElementById('btn-menu')
let menu = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')

btnMenu.addEventListener('click', ()=> {
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=> {
    menu.classList.remove('abrir-menu')
})

overlay.addEventListener('click', ()=> {
    menu.classList.remove('abrir-menu')
})

// Get all anchor links that start with '#'
const anchorLinks = document.querySelectorAll('a[href^="#"]');

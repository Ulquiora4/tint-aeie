burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')

burger.addEventListener('click', ()=>{
    navbar.classList.toggle('menu')
    console.log("working")
})
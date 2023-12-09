window.addEventListener('scroll', function(){
    const navbar = document.getElementById('navbar')

    if(window.scrollY > this.window.innerHeight){
        navbar.classList.add('scrolled')
        console.log('test')
    }
    else{
        navbar.classList.remove('scrolled')
    }
})
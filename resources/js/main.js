let bubble = document.querySelector('#bubble');
let navbar = document.querySelector('.navbar');
let navLink = document.querySelectorAll('.nav-link');
let buttonUpScroll = document.querySelector('#buttonUpScroll');
let noShows = document.querySelectorAll('#noShow');

window.addEventListener('scroll' , ()=>{
    let scrolled = window.scrollY;
    if(scrolled > 0){
/*         bubble.classList.add('bubbles');*/        
        navbar.classList.remove('bg-transparent');
        navbar.classList.add('bg-nav');
        buttonUpScroll.classList.remove(`d-none`);
        //links.forEach((link)=>{
            //link.classList.add('d-none');
        //});
        
    }else{
/*         bubble.classList.remove('bubbles');*/        
        navbar.classList.remove('bg-nav');
        navbar.classList.add('bg-transparent');
        buttonUpScroll.classList.add(`d-none`);
        //links.forEach((link)=>{
            //link.classList.remove('d-none')
        //})
        
}})

let search = document.querySelector('.search');
let close = document.querySelector('.close');
let searchBox = document.querySelector('.searchBox');
search.onclick = function(){
    searchBox.classList.add('active');
}
close.onclick = function(){
    searchBox.classList.remove('active');
}
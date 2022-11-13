let bubble = document.querySelector('#bubble');
let navbar = document.querySelector('.navbar');
let navLink = document.querySelectorAll('.nav-link');
let buttonUpScroll = document.querySelector('#buttonUpScroll');
let noShows = document.querySelectorAll('#noShow');

window.addEventListener('scroll' , ()=>{
    let scrolled = window.scrollY;
    if(scrolled > 0){
        bubble.classList.add('bubbles');
        //links.forEach((link)=>{
            //link.classList.add('d-none');
        //});
        
    }else{
        bubble.classList.remove('bubbles');
        //links.forEach((link)=>{
            //link.classList.remove('d-none')
        //})
        
}})
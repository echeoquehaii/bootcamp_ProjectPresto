let bubble = document.querySelector('#bubble');

window.addEventListener('scroll' , ()=>{
    let scrolled = window.scrollY;
    if(scrolled > 0){
        bubble.classList.add('bubbles');
    }else{
        bubble.classList.remove('bubbles');
}})
let bubble = document.querySelector('#bubble');

window.addEventListener('scroll' , ()=>{
    let scrolled = window.scrollY;
    if(scrolled > 0){
        bubble.classList.add('bubbles');
    }else{
        bubble.classList.remove('bubbles');
}})

function counter(){
    var count = setInterval(function(){
        var c = parseInt($('.counter').text());
        $('.counter').text((++c).toString());
        if (c == 20){
            clearInterval(count);
            $('.counter').addClass('hide')
            $('.preloader').addClass('hide')
        }
    },60)
}
counter()
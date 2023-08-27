
let header = document.querySelector('#header')

window.addEventListener('scroll',(e)=>{

    if( window.scrollY > 63 ){
        header.classList.add("sticky")
    }
    // alert("message")

})
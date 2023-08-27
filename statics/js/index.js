/*
    index.php - Scripts
*/
let Slider = document.querySelector('.Container-Slider')
let header = document.querySelector('#header')

window.addEventListener( 'scroll',( e ) => {

    try {
        Slider.classList.remove("scrolled-offset")
    } catch (error) {
        console.dir(error)
    }
    

    if ( window.scrollY >= 42 ) {

        try {
            Slider.classList.add("scrollTop70")
        } catch (error) {
            console.dir(error)
        }
        
        header.classList.add("scroll70")
    }
    else{
        try {
            Slider.classList.remove("scrollTop70")
        } catch (error) {
            console.log(error)    
        }

    }

    if(window.scrollY >= 739){
        header.classList.remove("scroll70")
    }
    if(window.scrollY < 42){
        header.classList.remove("scroll70")
    }
    
})

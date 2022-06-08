let slides = document.getElementById('slider');
let count = 0;

document.getElementById('btnNext').onclick = function() {
    count-=190
    slides.style.left = count + 'px';
    
    if (slides.style.left >= '-670px' ) {
        count = 0;
        slides.style.left = '0';
    }
    if(window.matchMedia('(max-width: 750px)').matches){
        count-=250
         slides.style.left = count2 + 'px';
         if(slides.style.left <= -2500 + 'px') {
             slides.style.left = '0' 
            console.log('hello')
         } 
}
   
}
if (slides.style.left >= '-670px' ) {
    count = 0;
    slides.style.left = '0';
}



document.getElementById('btnPrev').onclick = function() {
    count+=190
    slides.style.left = count + 'px';
    
    if (slides.style.left >= '140px') {
        count = -580;
        slides.style.left = '-580px';
    }
}

// //////////////



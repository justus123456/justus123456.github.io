const drop = document.querySelector('#glow');
const pop = document.querySelector('#jopp');
const sup = document.querySelector('.fa-times');
const fun = document.querySelector('.fun');
const nac = document.querySelector('.two');




drop.addEventListener('click',()=>{
    fun.style.left = "0";
    fun.style.transition = "2s";
    fun.style.position = "fixed";
    

});
pop.addEventListener('click',()=>{
    fun.style.left = "0";
    fun.style.transition = "2s";
    fun.style.position = "fixed";
    

});
sup.addEventListener('click',()=>{
    fun.style.left = "-350px";
    
});



window.addEventListener('scroll',(e)=>{
    if (window.pageYOffset > 100) {
        nac.classList.add('fixed-top')
    }else{
        nac.classList.remove('fixed-top')
    }


     
});



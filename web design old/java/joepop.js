const cooks = document.querySelector('.cook');
const bot = document.querySelector('.bts');
const out = document.querySelector('.ot');
const bd = document.querySelector('body')

let min, sec, timew;


console.log(bot.style);
    min = 1;
    sec = 2;
timew = setInterval(()=>{
    
    sec--;

    if(sec < 0) {
        sec = 2;
        min --;
    }else if(min == 0 && sec == 0){
        clearInterval(timew)
        cooks.style.display = 'block';
        bd.style.overflow = 'hidden';
        bot.addEventListener("click",()=>{
            cooks.style.overFlow = "hidden"
            bd.style.overflow = 'visible';
            cooks.style.display = 'none';
        
        
        })
    }
    out.innerHTML =`
        <span>${min}</span>
        <span>:</span>
        <span>${sec}</spa

    `

    
},1000)
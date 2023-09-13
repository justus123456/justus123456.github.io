const display = document.querySelector('.screen');
const clearAll = document.querySelector("#clear");
const whiteBtns =  document.querySelectorAll('.btn-outline-secondary');
const back = document.querySelector('#delete');
const ans = document.querySelector('#answer')
whiteBtns.forEach((btn)=>{
    btn.addEventListener('click',()=>{
        if (btn.innerText == '.') {
            display.innerText += btn.innerText
        }
        else if (display.innerText == '0') {
            display.innerText = btn.innerText;
        }
        else if(display.innerText.length > 11){
            display.innerText = display.innerText;
        }
        else{
            display.innerText += btn.innerText
        }
    })
});

clearAll.addEventListener('click',()=>{
    display.innerText = '0';
});

back.addEventListener('click',()=>{
    if (display.innerText.length <= 1) {
        display.innerText = '0';
    }
    else{
        display.innerText = display.innerText.slice(0,-1);
    }
});

ans.addEventListener('click',()=>{
    try {
        display.innerText = eval(display.innerText);
    } catch {
        display.innerText = 'Syntax Error';
    }
})

const sqr = document.querySelector('#sqr');

sqr.addEventListener('click',()=>{
    let answer = Math.sqrt(Number(display.innerText))
    if (answer) {
        display.innerText = answer.toFixed(4)
    }else{
        display = 'Syntax error'
    }
});

const pi = document.querySelector('#pi')

pi.addEventListener('click',()=>{
    let answer = Math.PI*(Number(display.innerText),2)
    if (answer) {
        display.innerText = answer
    }else{
        display = 'Syntax error'
    }
});
    console.log(Math);
const root = document.querySelector('#root');

root.addEventListener('click',()=>{
    let answer = Math.pow(Number(display.innerText),2)
    if (answer) {
        display.innerText = answer
    }else{
        display = 'Syntax error'
    }
});

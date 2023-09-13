const fos = document.querySelector('.form');
const bot = document.querySelector('.btn');
const gl = document.querySelector('.glow')
const join = document.querySelector('.fors')
const id = document.querySelector('.io')

bot.addEventListener('click',(e)=>{
     e.preventDefault();
    fos.style.display = 'none'
    let user = {
        first: join.firstname.value,
        surname: join.surname.value,
        position: join.position.value
    };
    gl.style.display = 'block'
    gl.innerHTML=`
        <span class="on">${user.first}</span>
        <span class="one">${user.surname}</span>
        <span class="ones">${user.position}</span>
    `
    bot.style.display = "none";
    id.style.display = "block"
    
    
})
const run = document.querySelector('#run');
const fun = document.querySelector('#fun');
const sun = document.querySelector('#sun');
const gun = document.querySelector('#gun');
const start = document.querySelector('.hop');
const yo = document.querySelector('.start');
const next = document.querySelector('#hos');
const text = document.querySelector('.bro');
const kop = document.querySelector('.doo');
const from = document.querySelector('.from');
const tom = document.querySelector('.tom');
const tru = document.querySelector('.tru');
const bad = document.querySelector('#bad');
const fad = document.querySelector('#fad');
const iad = document.querySelector('#iad');
const nad = document.querySelector('#nad');
const yum = document.querySelector('.yum');


start.addEventListener('click', () => {

    yo.style.display = 'block';

    run.addEventListener('click', () => {
        run.style.backgroundColor = 'green';
    });
    fun.addEventListener('click', () => {
        fun.style.backgroundColor = 'red';
    });
    sun.addEventListener('click', () => {
        sun.style.backgroundColor = 'red';
    });
    gun.addEventListener('click', () => {
        gun.style.backgroundColor = 'red';
    });
});

const gog = [
    {
        question: "who owns tesla",
        answer: "mike oya",
        first: "elon musk",
        second: "john ada",
        third: "sarah oga",
        last: "question 2 of 2"
    }

];

let num = -1;
next.addEventListener('click', () => {

    num++;

    

    if (num == 2) {
        num = 1;
    }else{

        text.innerHTML = `
        <h1>awesome quiz</h1>
        <p>${gog[num].question}?</p>
        `;

        kop.innerHTML = `
        <h5>${gog[num].answer}</h5>
        <button class="bts" id="bad">select answer</button>
        `;
        from.innerHTML = `
        <h5>${gog[num].first}</h5>
        <button class="bts" id="fad">select answer</button>
        `;
        tom.innerHTML = `
        <h5>${gog[num].second}</h5>
        <button class="bts" id="iad">select answer</button>
        `;
        tru.innerHTML = `
        <h5>${gog[num].third}</h5>
        <button class="bts" id="nad">select answer</button>
        `;
        yum.innerHTML = `
        <p>${gog[num].last}</</p>
        `;
        bad.addEventListener('click',()=>{
            bad.style.backgroundColor = "red";
        });
        
        
    };
   
    


});
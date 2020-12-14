const form = document.getElementById("form");
console.log(form);

form.addEventListener('focusin', (e) =>{
    e.target.style.backgroud = '#1a0b02;';
});

form.addEventListener('focusout', (e)=> {
    e.target.style.background = '';
}); 
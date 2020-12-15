let input = document.querySelectorAll('input');
let label = document.querySelectorAll('label');

let togleLabel = function togleLabel(e) {
    label.forEach(e => {
        e.classList.remove('label');
        e.innerHTML = "";
    })


}


input.forEach(e => {
    console.log(e);
    e.addEventListener('focusin', togleLabel)
});
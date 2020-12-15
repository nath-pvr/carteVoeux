let form = document.getElementById('form');

form.addEventListener('submit', e=>{
    e.preventDefault();
    const formData = new FormData(form);
    fetch('traitement.php', {
        method: 'POST',
        body: formData
    }).then(response => form.reset())
    .catch(error => {
        console.error(error);
    } )
})
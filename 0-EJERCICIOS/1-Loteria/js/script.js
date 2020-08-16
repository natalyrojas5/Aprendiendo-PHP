// FORMULARIO SORTEO

formSorteo = document.querySelector('#formSorteo');

formSorteo.addEventListener('submit', (e)=>{
    // e.preventDefault();
    let spinner = document.querySelector('#spinner');
    let resultado = document.querySelector('#resultado');

    spinner.classList.remove('hidden');
    resultado.classList.add('hidden');
    setTimeout(() => {
        spinner.classList.add('hidden');
        resultado.classList.remove('hidden');


    }, 3000);

})
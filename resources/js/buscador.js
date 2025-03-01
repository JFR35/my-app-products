


document.addEventListener('DOMContentLoaded', function() {
    const formBuscar = document.getElementById('form-buscar');
    if (formBuscar) { 
        formBuscar.addEventListener('submit', function(event) {
            let buscador = document.querySelector('input[name="search"]').value;
            if (buscador.trim() === "") {
                alert("Debe ingresar un producto a buscar");
                event.preventDefault(); 
            }
        });
    }
});
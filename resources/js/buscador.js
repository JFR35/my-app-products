

// Validar que el campo de búsqueda no esté vacío
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

document.addEventListener('DOMContentLoaded', function() {
    const limpiarBoton = document.querySelector('#form-buscar .btn-secondary');
    if (limpiarBoton) {
        limpiarBoton.addEventListener('click', function() {
            document.querySelector('input[name="search"]').value = '';
        });
    }
});
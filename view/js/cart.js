// Agregar producto al carrito
function agregarAlCarrito(id, nombre, precio, cantidad) {
    console.log(id, nombre, precio, cantidad);
    const datos = new URLSearchParams();
    datos.append('accion', 'agregar');
    datos.append('id', id);
    datos.append('nombre', nombre);
    datos.append('cantidad', cantidad);
    datos.append('precio', precio);

    fetch('cart.php', {
        method: 'POST',
        body: datos,
    })
    .then(response => response.text())
    .then(() => listarCarrito());
}

// Listar productos del carrito
function listarCarrito() {
    const datos = new URLSearchParams();
    datos.append('accion', 'listar');

    fetch('cart.php', {
        method: 'POST',
        body: datos,
    })
    .then(response => response.json())
    .then(data => {
        const carritoDiv = document.getElementById('carrito_productos');
        carritoDiv.innerHTML = '';

        if (data.length > 0) {
            data.forEach(item => {
                const div = document.createElement('div');
                div.textContent = ` ${item.nombre}----------$${item.precio}----------${item.cantidad}----------$${item.subtotal}`;
                carritoDiv.appendChild(div);
            });
        } else {
            carritoDiv.textContent = 'El carrito está vacío.';
        }
    });

    actualizarTotal();
}
// buscar input por name 
const btn_add = document.querySelectorAll('.btn_carrito');

function actualizarTotal( ){
    const datos = new URLSearchParams();
    datos.append('accion', 'listar');

    fetch('cart.php', {
        method: 'POST',
        body: datos,
    })
    .then(response => response.json())
    .then(data => {
        
        if (data.length > 0) {
            let subtotal = 0;
            data.forEach(item => {
                subtotal += item.subtotal;
            });

            const subtotal_acumulado = document.getElementById('subtotal_acumulado');
            const iva = document.getElementById('iva');
            const total_acumulado = document.getElementById('total_acumulado');
            
            subtotal_acumulado.appendChild(document.createTextNode(`$${subtotal}`));
            iva.appendChild(document.createTextNode(`$${subtotal*0.16}`));
            total_acumulado.appendChild(document.createTextNode(`$${ Math.round(subtotal*1.16,2) } `));
        }

    });
}

btn_add.forEach(btn => {
    btn.addEventListener('click', () => {
        const id = btn.getAttribute('data-id');
        const formulario = document.getElementById(id);
        const elementos = formulario.querySelectorAll('[name]');
        const cantidad = formulario.querySelector('#counter');
        const nombres = Array.from(elementos).map(elemento => elemento.value);
        const [ precio, nombre ] = nombres;
        agregarAlCarrito('id-'+id, nombre, precio, Number( cantidad.textContent ) );
    });
});

// Cargar el carrito al inicio
document.addEventListener('DOMContentLoaded', listarCarrito);

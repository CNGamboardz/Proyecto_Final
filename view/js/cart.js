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
        carritoDiv.innerHTML = ''; // Limpiar el carrito antes de mostrar los nuevos datos.

        if (data.length > 0) {
            data.forEach(item => {
                const div = document.createElement('div');
                div.classList.add('producto'); // Clase para cada producto.

                // Crear contenido HTML con estilo en línea
                div.innerHTML = `
                    <div class="producto-nombre" style="font-size: 18px; font-weight: bold; color: #333; padding: 5px;">${item.nombre}</div>
                    <div class="producto-precio" style="font-size: 16px; color: #4caf50; text-align: justify; padding: 5px;">$${item.precio.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</div>
                    
                    <div class="producto-cantidad" style="font-size: 16px; color: #2196f3; text-align: center; padding: 5px;">
                        <button class="restar-btn" style="padding: 5px; background-color: #f44336; color: white; border: none; border-radius: 4px;">-</button>
                        <span id="cantidad-${item.id}" style="margin: 0 10px;">${item.cantidad}</span>
                        <button class="sumar-btn" style="padding: 5px; background-color: #4caf50; color: white; border: none; border-radius: 4px;">+</button>
                    </div>

                    <div class="producto-subtotal" style="font-size: 16px; color: #ff5722; text-align: justify; padding: 5px;">$${item.subtotal.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</div>
                `;

                // Agregar eventos a los botones
                const restarBtn = div.querySelector('.restar-btn');
                const sumarBtn = div.querySelector('.sumar-btn');
                const cantidadElement = div.querySelector(`#cantidad-${item.id}`);

                // Evento para restar cantidad
                restarBtn.addEventListener('click', () => {
                    if (item.cantidad > 1) {
                        item.cantidad--; // Decrementar la cantidad
                        cantidadElement.textContent = item.cantidad;
                        actualizarSubtotal(item);
                    }
                });

                // Evento para sumar cantidad
                sumarBtn.addEventListener('click', () => {
                    item.cantidad++; // Incrementar la cantidad
                    cantidadElement.textContent = item.cantidad;
                    actualizarSubtotal(item);
                });

                // Aplicar un estilo dinámico
                div.style.display = 'grid';
                div.style.gridTemplateColumns = '5fr 1.5fr 1fr 3fr';
                div.style.gap = '80px';
                div.style.padding = '15px';
                div.style.backgroundColor = '#ffffff';
                div.style.borderRadius = '8px';
                div.style.marginBottom = '15px';
                div.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)';

                // Efecto hover para los productos
                div.addEventListener('mouseover', () => {
                    div.style.backgroundColor = '#f1f1f1';
                });

                div.addEventListener('mouseout', () => {
                    div.style.backgroundColor = '#ffffff';
                });

                carritoDiv.appendChild(div);
            });
        } else {
            carritoDiv.textContent = 'El carrito está vacío.';
        }
    });

    actualizarTotal();
}

// Función para actualizar el subtotal después de modificar la cantidad
function actualizarSubtotal(item) {
    item.subtotal = item.precio * item.cantidad;
    const subtotalElement = document.querySelector(`#subtotal-${item.id}`);
    if (subtotalElement) {
        subtotalElement.textContent = `$${item.subtotal.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
    }
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

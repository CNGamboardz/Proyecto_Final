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

                    // Crear contenido HTML dinámico
                    div.innerHTML = `
                    <div class="producto-nombre" style="font-size: 18px; font-weight: bold; color: #333; padding: 5px;">${item.nombre}</div>
                    <div class="producto-precio" style="font-size: 16px; color: #4caf50; text-align: justify; padding: 5px;">$${item.precio.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</div>
                        <div class="producto-cantidad">
                            <button class="restar-btn">-</button>
                            <span class="cantidad">${item.cantidad}</span>
                            <button class="sumar-btn">+</button>
                        </div>
                         <div id="subtotal-${item.id}" class="producto-subtotal" style="font-size: 16px; color: #ff5722; text-align: justify; padding: 5px;">$${item.subtotal.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</div>
                        <button class="eliminar-btn">Eliminar</button>
                    `;

                    // Agregar estilos dinámicos
                    div.style.display = 'grid';
                    div.style.gridTemplateColumns = '3fr 1fr 2fr 1fr 1fr';
                    div.style.gap = '10px';
                    div.style.alignItems = 'center';
                    div.style.padding = '10px';
                    div.style.backgroundColor = '#ffffff';
                    div.style.borderRadius = '8px';
                    div.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)';
                    div.style.transition = 'background-color 0.3s ease';

                    // Efectos hover
                    div.addEventListener('mouseover', () => {
                        div.style.backgroundColor = '#f1f1f1';
                    });
    
                    div.addEventListener('mouseout', () => {
                        div.style.backgroundColor = '#ffffff';
                    });

                    // Agregar eventos a los botones
                    const restarBtn = div.querySelector('.restar-btn');
                    const sumarBtn = div.querySelector('.sumar-btn');
                    const eliminarBtn = div.querySelector('.eliminar-btn');
                    const cantidadElement = div.querySelector('.cantidad');
                    const subtotalElement = div.querySelector('.producto-subtotal');

                    // Restar cantidad
                    restarBtn.addEventListener('click', () => {
                        if (item.cantidad > 2) {
                            item.cantidad--;
                            cantidadElement.textContent = item.cantidad;
                            item.subtotal = item.cantidad * item.precio;
                            subtotalElement.textContent = `$${item.subtotal.toFixed(2)}`;
                            actualizarTotal(data);
                        }
                    });

                    // Sumar cantidad
                    sumarBtn.addEventListener('click', () => {
                        item.cantidad++;
                        cantidadElement.textContent = item.cantidad;
                        item.subtotal = item.cantidad * item.precio;
                        subtotalElement.textContent = `$${item.subtotal.toFixed(2)}`;
                        actualizarTotal(data);
                    });

                    // Eliminar producto
                    eliminarBtn.addEventListener('click', () => {
                    const eliminarDatos = new URLSearchParams();
                    eliminarDatos.append('accion', 'eliminar');
                    eliminarDatos.append('id', item.id); // Asegúrate de que item.id sea correcto.
                    eliminarDatos.append('nombre', item.nombre);
                    eliminarDatos.append('cantidad', item.cantidad);
                    eliminarDatos.append('precio', item.precio);

                    fetch('cart.php', {
                        method: 'POST',
                        body: eliminarDatos,
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Error al eliminar el producto del carrito');
                        }
                        return response.text();
                    })
                    .then(() => listarCarrito())
                    .catch(error => {
                        console.error('Error al eliminar el producto:', error);
                        alert('Hubo un problema al eliminar el producto. Inténtalo de nuevo.');
                    });
                });


                    carritoDiv.appendChild(div);
                });
            } else {
                carritoDiv.textContent = 'El carrito está vacío.';
            }

            actualizarTotal(data); // Actualizar totales
        });
}

// buscar input por name 
const btn_add = document.querySelectorAll('.btn_carrito');

function actualizarTotal(data) {
    let total = 0;

    data.forEach(item => {
        // Calcular el subtotal
        const subtotal = item.precio * item.cantidad;
        total += subtotal;

        // Actualizar el subtotal en el HTML
        const subtotalElement = document.querySelector(`#subtotal-${item.id}`);
        if (subtotalElement) {
            subtotalElement.textContent = `$${subtotal.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
        }
    });

    // Calcular IVA y total
    const iva = total * 0.16;
    const totalConIva = total + iva;

    // Actualizar los valores en la sección "total de carrito"
    const subtotal_acumulado = document.getElementById('subtotal_acumulado');
    const ivaElement = document.getElementById('iva');
    const total_acumulado = document.getElementById('total_acumulado');

    if (subtotal_acumulado) {
        subtotal_acumulado.innerHTML = `<strong>Subtotal:</strong> $${total.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
    }
    if (ivaElement) {
        ivaElement.innerHTML = `<strong>IVA (16%):</strong> $${iva.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
    }
    if (total_acumulado) {
        total_acumulado.innerHTML = `<strong>Total:</strong> $${totalConIva.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
    }
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

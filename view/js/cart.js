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
                    
                    <div class="producto-cantidad" style="font-size: 16px; color: #2196f3; text-align: center; padding: 5px; display: flex; align-items: center; justify-content: center;">
                        <button class="restar-btn" style="padding: 5px 10px; background-color: #f44336; color: white; border: none; border-radius: 4px; margin-right: 10px;">-</button>
                        <span id="cantidad-${item.id}" style="margin: 0 10px; font-size: 18px; font-weight: bold;">${item.cantidad}</span>
                        <button class="sumar-btn" style="padding: 5px 10px; background-color: #4caf50; color: white; border: none; border-radius: 4px; margin-left: 10px;">+</button>
                    </div>

                    <div id="subtotal-${item.id}" class="producto-subtotal" style="font-size: 16px; color: #ff5722; text-align: justify; padding: 5px;">$${item.subtotal.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</div>
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
                        actualizarTotal(data); // Actualizar subtotales y total
                    }
                });

                // Evento para sumar cantidad
                sumarBtn.addEventListener('click', () => {
                    item.cantidad++; // Incrementar la cantidad
                    cantidadElement.textContent = item.cantidad;
                    actualizarTotal(data); // Actualizar subtotales y total
                });

                // Aplicar un estilo dinámico
                div.style.display = 'grid';
                div.style.gridTemplateColumns = '7fr 0fr 2fr 3.5fr';
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

            actualizarTotal(data); // Actualizar totales al cargar el carrito
        } else {
            carritoDiv.textContent = 'El carrito está vacío.';
        }
    });
}

// Función para actualizar el subtotal y el total
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

// Cargar el carrito al inicio
document.addEventListener('DOMContentLoaded', listarCarrito);

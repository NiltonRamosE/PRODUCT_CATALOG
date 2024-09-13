document.addEventListener('DOMContentLoaded', function() {
    const whatsappButton = document.getElementById('whatsapp-link');

    if (whatsappButton) {
        whatsappButton.addEventListener('click', function(event) {
            event.preventDefault();

            let productosEnCarrito = localStorage.getItem("productos-en-carrito");
            productosEnCarrito = JSON.parse(productosEnCarrito);

            if (productosEnCarrito && productosEnCarrito.length > 0) {
                let mensaje = `Hola, Geanela's Shop. Quiero ordenar los siguientes productos:\n`;

                productosEnCarrito.forEach(producto => {
                    const cantidad = producto.cantidad;
                    const precioTotal = (producto.price * cantidad).toFixed(2);

                    mensaje += `\nProducto: *${producto.name}*.\nPrecio Unitario: _S/ ${producto.price}_.\nCantidad: ${cantidad}.\nSubtotal: _S/ ${precioTotal}_.\n`;
                });

                const totalCalculado = productosEnCarrito.reduce((acc, producto) => acc + (producto.price * producto.cantidad), 0).toFixed(2);
                mensaje += `\nTotal de la compra: _S/ ${totalCalculado}_.`;

                const whatsappUrl = `https://wa.me/951011604?text=${encodeURIComponent(mensaje)}`;
                
                whatsappButton.href = whatsappUrl;
                window.open(whatsappUrl, '_blank');
            } else {
                alert("Tu carrito está vacío.");
            }
            productosEnCarrito.length = 0;
            localStorage.setItem("productos-en-carrito", JSON.stringify(productosEnCarrito));
            
            contenedorCarritoVacio.classList.add("disabled");
            contenedorCarritoProductos.classList.add("disabled");
            contenedorCarritoAcciones.classList.add("disabled");
            contenedorCarritoComprado.classList.remove("disabled");
        });
        
    }
});

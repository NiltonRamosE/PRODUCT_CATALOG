document.addEventListener('DOMContentLoaded', function() {
    const whatsappButton = document.getElementById('whatsapp-link');
    const productDetails = document.querySelector('.product-details');
    
    const productId = productDetails.getAttribute('data-product-id');
    const productName = productDetails.getAttribute('data-product-name');
    const productPrice = parseFloat(productDetails.getAttribute('data-product-price'));
    
    const cantidadInput = document.getElementById('cantidad-' + productId);
    
    if (whatsappButton) {
        whatsappButton.addEventListener('click', function(event) {
            event.preventDefault();
            
            const cantidad = cantidadInput ? parseInt(cantidadInput.value) : 1;
            
            let mensaje = `Hola, KLimaCity.\nQuiero ordenar este producto.\nProducto: *${productName}*.\nPrecio Unitario: _S/ ${productPrice}_.\nCantidad: ${cantidad}.`;

            if (cantidad > 1) {
                const precioTotal = (productPrice * cantidad).toFixed(2);
                mensaje += `\nPrecio Total: _S/ ${precioTotal}_.`;
            }

            const whatsappUrl = `https://wa.me/951011604?text=${encodeURIComponent(mensaje)}`;
            
            whatsappButton.href = whatsappUrl;
            
            window.open(whatsappUrl, '_blank');
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const whatsappButton = document.getElementById('whatsapp-link');
    const productDetails = document.querySelector('.product-details');
    
    const productName = productDetails.getAttribute('data-product-name');
    const productPrice = parseFloat(productDetails.getAttribute('data-product-price'));
    
    
    if (whatsappButton) {
        whatsappButton.addEventListener('click', function(event) {
            event.preventDefault();
                        
            let mensaje = `Hola, KLimaCity.\nQuiero ordenar este producto.\nProducto: *${productName}*.\nPrecio Unitario: _S/ ${productPrice}_.`;

            const whatsappUrl = `https://wa.me/951011604?text=${encodeURIComponent(mensaje)}`;
            
            whatsappButton.href = whatsappUrl;
            
            window.open(whatsappUrl, '_blank');
        });
    }
});

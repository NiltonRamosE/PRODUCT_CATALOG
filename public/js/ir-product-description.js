//Clase que ya no me sirve

const buttonShopDescriptionProduct = document.querySelectorAll(".button-product-description");

function updateButtonShopDescriptionProduct() {
    const buttonShopDescriptionProduct = document.querySelectorAll(".button-product-description");

    buttonShopDescriptionProduct.forEach(boton => boton.addEventListener("click", (e) => {
        
        const product_id = e.currentTarget.closest(".producto").querySelector(".producto-agregar").id;
        if (product_id) {
            console.log(product_id);
        }
    }));
}
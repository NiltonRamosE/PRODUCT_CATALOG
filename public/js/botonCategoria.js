const botonesCategorias = document.querySelectorAll(".boton-categoria");
const containCategoryCards = document.querySelector("#contain-category-cards");
const contenedorProductos = document.querySelector("#contenedor-productos");
let botonesAgregar = document.querySelectorAll(".producto-agregar");
const numerito = document.querySelector("#numerito");

const baseUrl = 'https://klimacity.com';

fetch(`${baseUrl}/allproducts`)
    .then(response => response.json())
    .then(data => {
        productos = data;
        cargarProductos(productos);
    });

botonesCategorias.forEach(boton => boton.addEventListener("click", () => {
    aside.classList.remove("aside-visible");
}));

function cargarProductos(productosElegidos) {
    contenedorProductos.innerHTML = "";

    productosElegidos.forEach(producto => {
        const div = document.createElement("div");
        div.classList.add("producto");
        div.innerHTML = `
            <a class="button-product-description" href="${baseUrl}/specificproductdescription/${producto.id}">
                <img class="producto-imagen" src="${producto.image}" alt="${producto.name}">
            </a>
            <div class="producto-detalles">
                <h3 class="producto-titulo">${producto.name}</h3>
                <p class="producto-precio">S/. ${producto.price}</p>
                <button class="producto-agregar" id="${producto.id}">Agregar</button>
            </div>
        `;
        contenedorProductos.append(div);
    });

    actualizarBotonesAgregar();
}

botonesCategorias.forEach(boton => boton.addEventListener("click", (e) => {
    botonesCategorias.forEach(boton => boton.classList.remove("active"));
    e.currentTarget.classList.add("active");

    const id = e.currentTarget.id;

    if (id !== "todos") {
        fetch(`${baseUrl}/subcategories/${id}`)
            .then(response => response.json())
            .then(subcategories => {
                containCategoryCards.innerHTML = '';

                subcategories.forEach(subcategory => {
                    const card = document.createElement('div');
                    card.classList.add('card');

                    const subCardCategory = document.createElement('div');
                    subCardCategory.classList.add('sub-card', 'category');
                    subCardCategory.innerHTML = `
                        <span class="text_span">${subcategory.name}</span>
                    `;

                    const cardContainer = document.createElement('div');
                    cardContainer.classList.add('card_container');
                    cardContainer.innerHTML = `
                        <svg class="image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"
                        ></path>
                        </svg>
                    `;

                    card.appendChild(subCardCategory);
                    card.appendChild(cardContainer);

                    containCategoryCards.appendChild(card);
                });
            })
            .catch(error => console.error('Error fetching subcategories:', error));

        fetch(`${baseUrl}/subcategoriesproducts/${id}`)
            .then(response => response.json())
            .then(productspecific => {
                cargarProductos(productspecific);
            });
    } else {
        containCategoryCards.innerHTML = '';
        cargarProductos(productos);
    }
}));

function actualizarBotonesAgregar() {
    botonesAgregar = document.querySelectorAll(".producto-agregar");
    botonesAgregar.forEach(boton => {
        boton.addEventListener("click", agregarAlCarrito);
    });
}

let productosEnCarrito;

let productosEnCarritoLS = localStorage.getItem("productos-en-carrito");

if (productosEnCarritoLS) {
    productosEnCarrito = JSON.parse(productosEnCarritoLS);
    actualizarNumerito();
} else {
    productosEnCarrito = [];
}

function agregarAlCarrito(e) {

    const idBoton = e.currentTarget.id;

    Toastify({
        text: "Producto agregado",
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
        style: {
          background: "linear-gradient(to right, #4b33a8, #785ce9)",
          borderRadius: "2rem",
          textTransform: "uppercase",
          fontSize: ".75rem"
        },
        offset: {
            x: '1.5rem',
            y: '1.5rem'
          },
        onClick: function(){}
    }).showToast();

    const productoAgregado = productos.find(producto => producto.id == idBoton);

    if(productosEnCarrito.some(producto => producto.id == idBoton)) {
        const index = productosEnCarrito.findIndex(producto => producto.id == idBoton);
        productosEnCarrito[index].cantidad++;
    } else {
        productoAgregado.cantidad = 1;
        productosEnCarrito.push(productoAgregado);
    }

    actualizarNumerito();

    localStorage.setItem("productos-en-carrito", JSON.stringify(productosEnCarrito));
}

function actualizarNumerito() {
    let nuevoNumerito = productosEnCarrito.reduce((acc, producto) => acc + producto.cantidad, 0);
    numerito.innerText = nuevoNumerito;
}

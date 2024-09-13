const botonesCategorias = document.querySelectorAll(".boton-categoria");
const containCategoryCards = document.querySelector("#contain-category-cards");
const contenedorProductos = document.querySelector("#contenedor-productos");

fetch(`${baseUrl}/allproducts`)
    .then(response => response.json())
    .then(data => {
        productos = data;
        if(contenedorProductos){
            cargarProductos(productos);
        }
    });

if(botonesCategorias){
    botonesCategorias.forEach(boton => boton.addEventListener("click", () => {
        aside.classList.remove("aside-visible");
    }));
}


function cargarProductos(productosElegidos) {
    contenedorProductos.innerHTML = "";

    productosElegidos.forEach(producto => {
        const div = document.createElement("div");
        div.classList.add("producto");
        div.innerHTML = `
            <a class="button-product-description" href="${baseUrl}/product-description/${producto.id}">
                <img class="producto-imagen" src="${producto.image}" alt="${producto.name}">
            </a>
            <div class="producto-detalles">
                <h3 class="producto-titulo">${producto.name}</h3>
                <p class="producto-precio">S/. ${producto.price}</p>
            </div>
        `;
        contenedorProductos.append(div);
    });
}

if(botonesCategorias){
    botonesCategorias.forEach(boton => boton.addEventListener("click", (e) => {
        botonesCategorias.forEach(boton => boton.classList.remove("active"));
        e.currentTarget.classList.add("active");
    
        const id = e.currentTarget.id;
    
        if (id !== "todos") {
            fetch(`${baseUrl}/card-sub-categories/${id}`)
                .then(response => response.json())
                .then(subcategories => {
                    containCategoryCards.innerHTML = '';
                    
                    subcategories.forEach(subcategory => {
                        const subCategoryButton = document.createElement('button');
                        subCategoryButton.classList.add('button-container');
                        subCategoryButton.id=subcategory.id;
                        subCategoryButton.innerHTML = `${subcategory.name}`;
                        
                        subCategoryButton.addEventListener('click', filterSubCategory);

                        containCategoryCards.appendChild(subCategoryButton);
                    });
                })
                .catch(error => console.error('Error fetching subcategories:', error));
    
            fetch(`${baseUrl}/products-filter-category/${id}`)
                .then(response => response.json())
                .then(productspecific => {
                    if (productspecific.length > 0 && productspecific[0].c_name) {
                        actualizarBreadcrumb(productspecific[0].c_name);
                    }
                    cargarProductos(productspecific);
                });
        } else {
            const containBreadcrumb = document.querySelector(".breadcrumb");
            containBreadcrumb.innerHTML = "";
            containBreadcrumb.innerHTML = `<a href="${baseUrl}">Inicio</a>`;
            containCategoryCards.innerHTML = '';
            cargarProductos(productos);
        }
    }));
}

function filterSubCategory(e){
    const id = e.target.id;
    fetch(`${baseUrl}/products-filter-sub-category/${id}`)
        .then(response => response.json())
        .then(productsSubCategory => {
            if (productsSubCategory.length > 0 && productsSubCategory[0].sc_name) {
                actualizarBreadcrumb(productsSubCategory[0].c_name, productsSubCategory[0].sc_name);
            }
    
            cargarProductos(productsSubCategory);
        })
        .catch(error => console.error('Error fetching products:', error));
}

function actualizarBreadcrumb(categoryName, subCategoryName = '') {
    const containBreadcrumb = document.querySelector(".breadcrumb");
    containBreadcrumb.innerHTML = "";
    containBreadcrumb.innerHTML = `<a href="${baseUrl}">Inicio</a>`;
    
    const categoryLink = document.createElement("a");
    categoryLink.href = `#`;
    categoryLink.textContent = categoryName;
    containBreadcrumb.appendChild(categoryLink);

    if (subCategoryName) {
        const subCategoryLink = document.createElement("a");
        subCategoryLink.href = `#`;
        subCategoryLink.textContent = subCategoryName;
        containBreadcrumb.appendChild(subCategoryLink);
    }
}
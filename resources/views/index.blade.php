<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geanela's Shop</title>
    <link rel="icon" href="{{asset('img/test_icon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- Top Banner -->
    <div class="top-banner text-center py-2">
        <span>¡Consigue -5% EXTRA por apuntarte ahora! | FRESHLY DAYS, CRAZY SALES! | <a href="#" class="me-apunto">ME APUNTO</a></span>
    </div>

    <!-- Main Header -->
    <header class="main-header py-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Language Selector -->
                <div class="col-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Peru.svg/1200px-Flag_of_Peru.svg.png" alt="Peru Flag" class="language-flag">
                </div>
                
                <div class="col text-center">
                    <h6>ENVÍOS GRATIS SIEMPRE | ENTREGA 24 Hrs</h6>
                </div>

                <div class="col-auto">
                    <a href="#" class="icon-link"><i class="fas fa-user"></i></a>
                    <a href="#" class="icon-link"><i class="fas fa-heart"></i></a>
                    <a href="#" class="icon-link"><i class="fas fa-shopping-cart"></i><span class="cart-count">0</span></a>
                </div>
            </div>
        </div>
    </header>

    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/test_logo_1.svg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Geanela's Shop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
                <form class="form relative">
                    <div class="absolute left-2 top-1/2 transform -translate-y-1/2 flex items-center">
                        <button class="p-1">
                            <svg
                            width="17"
                            height="16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            role="img"
                            aria-labelledby="search"
                            class="w-5 h-5 text-gray-700"
                            >
                            <path
                                d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                                stroke="currentColor"
                                stroke-width="1.333"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                            </svg>
                        </button>
                    </div>
                    <input
                        class="input w-96 rounded-full px-8 py-3 border-2 border-transparent focus:outline-none focus:border-blue-500 placeholder-gray-400 transition-all duration-300 shadow-md"
                        placeholder="Search..."
                        required=""
                        type="text"
                    />
                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2 flex items-center">
                        <button type="reset" class="p-1">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-gray-700"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                            ></path>
                            </svg>
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </nav>

    <div class="separator"></div>

    <!-- Carousel -->
    <div class="container-fluid" >
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="border-radius: 100px;">
                <div class="carousel-item active">
                    
                    <img src="{{asset('img/carousel_img_1.png')}}" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/carousel_img_2.webp')}}" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/carousel_img_3.png')}}" alt="Imagen 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    

    <!-- Categories Section -->
    <div class="container">
        <h2 class="section-title">Categorías</h2>
        <div class="row">
            <div class="col-md-3 category-item">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Category 1">
                    <div class="card-body">
                        <h5 class="card-title">Electrónica</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 category-item">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Category 2">
                    <div class="card-body">
                        <h5 class="card-title">Moda</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 category-item">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Category 3">
                    <div class="card-body">
                        <h5 class="card-title">Hogar</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 category-item">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Category 4">
                    <div class="card-body">
                        <h5 class="card-title">Deportes</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products Section -->
    <div class="container">
        <h2 class="section-title">Productos en Oferta</h2>
        <div class="row">
            <div class="col-md-3 product-item">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Producto 1</h5>
                        <p class="card-text">$19.99</p>
                        <a href="https://wa.me/1234567890" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-item">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Producto 2</h5>
                        <p class="card-text">$29.99</p>
                        <a href="https://wa.me/1234567890" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-item">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Producto 3</h5>
                        <p class="card-text">$39.99</p>
                        <a href="https://wa.me/1234567890" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-item">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Producto 4</h5>
                        <p class="card-text">$49.99</p>
                        <a href="https://wa.me/1234567890" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/951011604" class="btn-whatsapp" title="Contacta por WhatsApp" target="_blank" rel="noopener noreferrer" style="text-decoration: none">
        <i class="fab fa-whatsapp"></i>
    </a>

    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center">
                <!-- Logo y Descripción -->
                <div class="mb-8 lg:mb-0">
                    <h2 class="text-2xl font-bold">Geanela's Shop</h2>
                    <p class="text-gray-400 mt-2 max-w-xs">
                        Proveemos los mejores productos y servicios para nuestros clientes, priorizando la calidad y la satisfacción.
                    </p>
                </div>
                <!-- Redes Sociales -->
                <div class="flex flex-col lg:flex-row lg:items-center">
                    <div class="flex mb-8 lg:mb-0 lg:mr-10">
                        <a href="https://facebook.com" target="_blank" class="text-gray-400 hover:text-white mx-3" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" fill= "white"/></svg>                        </a>
                        <a href="https://twitter.com" target="_blank" class="text-gray-400 hover:text-white mx-3" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" fill="white"/></svg>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="text-gray-400 hover:text-white mx-3" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" fill="white"/></svg>
                        </a>
                        <a href="https://wa.me/951011604" target="_blank" class="text-gray-400 hover:text-white mx-3" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" fill="white"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Información de contacto -->
            <div class="text-center text-gray-400 mt-8">
                <p>&copy; 2024 Geanela's Shop. Todos los derechos reservados.</p>
                <p>
                    <a href="mailto:contacto@miempresa.com" class="text-gray-400 hover:text-white">contacto@miempresa.com</a>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
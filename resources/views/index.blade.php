<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geanela's Store</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi Tienda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <form class="form-inline ml-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1200x400" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Oferta Especial</h5>
                    <p>Descuentos en productos seleccionados.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nuevo Lanzamiento</h5>
                    <p>Descubre nuestros nuevos productos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ofertas de Temporada</h5>
                    <p>Aprovecha las ofertas de esta temporada.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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

    <!-- WhatsApp Button -->
    <a href="https://wa.me/1234567890" class="btn-whatsapp" title="Contacta por WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!--

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geanela's Shop</title>
    <link rel="icon" href="{{asset('img/test_icon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/description_product.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('shop.index') }}">
                <img src="{{asset('img/test_logo_1.svg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Geanela's Shop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shop.index') }}">Productos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" >Contacto</a>
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

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="{{route('shop.index')}}">Inicio</a>
        <a href="#">Categoria</a>
        <a href="#">Subcategoria</a>
        <span>{{$product->name}}</span>
    </div>

    <!-- Product Section -->
    <div class="product-container">

        <div class="product-images">
            <div class="main-image">
                <img id="main-img" src="{{ $product->image->isNotEmpty() ? $product->image[0] : 'https://via.placeholder.com/500' }}" alt="{{ $product->name }}_1" data-index="0">
            </div>
            
            <div class="thumbnail-images">
                @foreach($product->image as $index => $image)
                    <img class="thumb-img" src="{{ $image }}" alt="{{ $product->name }}_{{ $index + 1 }}" data-index="{{ $index }}" onclick="changeImage(this)">
                @endforeach
            </div>
        </div>
              
        <div class="product-details" data-product-id="{{ $product->id }}" data-product-name="{{ $product->name }}" data-product-price="{{ $product->price }}">
            <h1>{{$product->name}}</h1>
            <p class="price">S/. {{$product->price}} soles</p>
            <p class="description">
                {{$product->description}}
            </p>
            <p class="description">
                @if($product->active)
                    <span>Disponible en Tienda</span>
                    <i class="fas fa-check-circle" style="color: green;"></i>
                @else
                    <span>No Disponible</span>
                    <i class="fas fa-times-circle" style="color: red;"></i>
                @endif
            </p>
            <p class="description">Cantidad: {{$product->stock}}</p>

            @if($product->stock > 0)
                <div class="cantidad-container">
                    <label for="cantidad-{{ $product->id }}" class="cantidad-label">Cantidad:</label>
                    <input type="number" id="cantidad-{{ $product->id }}" name="cantidad" min="1" max="{{ $product->stock }}" value="1" class="cantidad-input">
                </div>
            @else
                <p class="agotado">Producto agotado</p>
            @endif
            
            <!--
            <label for="color">Selecciona el color:</label>
            <select id="color" class="feature-product">
                <option value="black">Negro</option>
                <option value="blue">Azul</option>
            </select>
            <label for="size">Selecciona la talla:</label>
            <select id="size" class="feature-product">
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
                <option value="xxl">XXL</option>
            </select>
            -->
            <div class="row">
                <button id="add-to-cart" class="button-add-car" {{ !$product->active ? 'disabled' : '' }}>Añadir al carrito</button>
            </div>
            <div class="row">
                <a id="whatsapp-link" href="#" target="_blank" class="whatsapp-button {{ !$product->active ? 'disabled-link' : '' }}">
                    <i class="fab fa-whatsapp"></i> Ordena vía WhatsApp
                </a>
            </div>
            
        </div>
    </div>
    <script src="{{asset('js/description_product.js')}}"></script>
    <script src="{{asset('js/order-whatsapp.js')}}"></script>
</body>
</html>
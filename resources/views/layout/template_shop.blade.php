<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geanela's Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="icon" href="{{asset('img/test_icon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/shop.css')}}">
</head>
<body>

    <div class="wrapper">
        <header class="header-mobile">
            {{--
                En caso de cambiar a la vista index 
                <a href="{{ route('index') }}"></a>
            --}}
            <h1 class="logo">Geanela's Shop</h1>
            <button class="open-menu" id="open-menu">
                <i class="bi bi-list"></i>
            </button>
        </header>
        <aside>
            <button class="close-menu" id="close-menu">
                <i class="bi bi-x"></i>
            </button>
            <header>
                <h1 class="logo">Geanela's Shop</h1>
            </header>
            <nav>
                @yield('content-nav-shop')
            </nav>
            
            <footer>
                <p class="texto-footer">© 2024 Geanela's Shop</p>
            </footer>
        </aside>
        <main>
            @yield('content-main-shop')
        </main>
    </div>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    @yield('content-script-shop')
</body>
</html>
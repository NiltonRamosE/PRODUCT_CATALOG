@extends('layout.template_shop')
@section('content-nav-shop')
    <ul class="menu">
        <li>
            <button id="todos" class="boton-menu boton-categoria active"><i class="bi bi-hand-index-thumb-fill"></i> Todos los productos</button>
        </li>
        
        <li>
            <button id="abrigos" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i> Abrigos</button>
        </li>
        <li>
            <button id="camisetas" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i> Camisetas</button>
        </li>
        <li>
            <button id="pantalones" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i> Pantalones</button>
        </li>
        <li>
            <a class="boton-menu boton-carrito" href="{{ route('shop.shopcar') }}">
                <i class="bi bi-cart-fill"></i> Carrito <span id="numerito" class="numerito">0</span>
            </a>
        </li>
    </ul>
@endsection

@section('content-main-shop')
    <h2 class="titulo-principal" id="titulo-principal">Todos los productos</h2>
    <div id="contenedor-productos" class="contenedor-productos">
        <!-- Esto se va a rellenar con JS -->
    </div>
@endsection

@section('content-script-shop')
    <script src="{{asset('js/main.js')}}"></script>
@endsection
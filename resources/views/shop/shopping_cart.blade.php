@extends('layouts.template_shop')
@section('content-nav-shop')
    <ul>
        <li>
            <a class="boton-menu boton-volver" href="{{ route('shop.index') }}">
                <i class="bi bi-arrow-return-left"></i> Seguir comprando
            </a>
        </li>
        <li>
            <a class="boton-menu boton-carrito active" href="{{ route('shop.shoppingcart') }}">
                <i class="bi bi-cart-fill"></i> Carrito
            </a>
        </li>
    </ul>
@endsection

@section('content-main-shop')
    <h2 class="titulo-principal">Carrito</h2>
    <div class="contenedor-carrito">
        <p id="carrito-vacio" class="carrito-vacio">Tu carrito está vacío. <i class="bi bi-emoji-frown"></i></p>

        <div id="carrito-productos" class="carrito-productos disabled">
            <!-- Esto se va a completar con el JS -->
        </div>

        <div id="carrito-acciones" class="carrito-acciones disabled">
            <div class="carrito-acciones-izquierda">
                <button id="carrito-acciones-vaciar" class="carrito-acciones-vaciar">Vaciar carrito</button>
            </div>
            <div class="carrito-acciones-derecha">
                <div class="carrito-acciones-total">
                    <p>Total:</p>
                    <p id="total">$3000</p>
                </div>
                <button id="carrito-acciones-comprar" class="carrito-acciones-comprar" style="pointer-events: none">Comprar ahora</button>
            </div>
            <div class="row">
                <a id="whatsapp-link" href="#" target="_blank" class="whatsapp-button">
                    <i class="fab fa-whatsapp"></i> Ordena vía WhatsApp
                </a>
            </div>
        </div>

        <p id="carrito-comprado" class="carrito-comprado disabled">Muchas gracias por tu compra. <i class="bi bi-emoji-laughing"></i></p>

    </div>
@endsection

@section('content-script-shop')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ secure_asset('js/shoppingCart.js') }}"></script>
    <script src="{{ secure_asset('js/order-whatsapp-cart.js') }}"></script>
@endsection
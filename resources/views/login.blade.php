<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="{{ asset('img/M9.png') }}">
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
    <title>Login</title>
</head>
<body>
    
    <div class="container-form register">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Accede al formulario de Inicio de Sesión ingresando tus credenciales</p>
                <input type="button" value="Iniciar Sesión" id="sign-in">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Login de Administradores</h2>
                <div class="icons">
                    <i class='bx bxl-facebook'></i>
                    <i class='bx bxl-instagram'></i>
                    <i class='bx bxl-tiktok' ></i>
                </div>
                <p>Formulario no disponible para usuarios</p>
                <p>Le recomendamos ver nuestros productos en: <a href="{{ route('shop.index') }}" style="text-decoration: none;"><b>KLimaCity</b></a></p>
                @if(session('error'))
                    <div class="error">
                        <div class="error__icon">
                            <svg
                            fill="none"
                            height="24"
                            viewBox="0 0 24 24"
                            width="24"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                d="m13 13h-2v-6h2zm0 4h-2v-2h2zm-1-15c-1.3132 0-2.61358.25866-3.82683.7612-1.21326.50255-2.31565 1.23915-3.24424 2.16773-1.87536 1.87537-2.92893 4.41891-2.92893 7.07107 0 2.6522 1.05357 5.1957 2.92893 7.0711.92859.9286 2.03098 1.6651 3.24424 2.1677 1.21325.5025 2.51363.7612 3.82683.7612 2.6522 0 5.1957-1.0536 7.0711-2.9289 1.8753-1.8754 2.9289-4.4189 2.9289-7.0711 0-1.3132-.2587-2.61358-.7612-3.82683-.5026-1.21326-1.2391-2.31565-2.1677-3.24424-.9286-.92858-2.031-1.66518-3.2443-2.16773-1.2132-.50254-2.5136-.7612-3.8268-.7612z"
                                fill="#393a37"
                            ></path>
                            </svg>
                        </div>
                        <div class="error__title">{{ session('error') }}</div>
                        <div class="error__close" onclick="this.parentElement.style.display='none'">
                            <svg
                            height="20"
                            viewBox="0 0 20 20"
                            width="20"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path
                                d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z"
                                fill="#393a37"
                            ></path>
                            </svg>
                        </div>
                    </div>
                @endif
                
            </div>
        </div>
    </div>


    <div class="container-form login hide">
        <div class="information">
            <div class="info-childs">
                <h2>¡¡Bienvenido nuevamente!!</h2>
                <p>Para unirte por favor Inicia Sesión con tus datos</p>
                <input type="button" value="Volver" id="sign-up">
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <p>o Iniciar Sesión con una cuenta</p>
                <form class="form form-login" method="POST" action="{{ route('login.init') }}">
                    @csrf
                    <div>
                        <label >
                            <i class='bx bx-envelope' ></i>
                            <input type="email" placeholder="Correo Electronico" name="userEmail">
                        </label>
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-lock-alt' ></i>
                            <input type="password" placeholder="Contraseña" name="userPassword">
                        </label>
                    </div>
                    <input type="submit" value="Iniciar Sesión">
                </form>
                
            </div>
        </div>
    </div>
    <script src="{{ asset('js/login-hide.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Laravel - ProyectoBD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <style type="text/css">
          /* Importar la fuente Raleway */
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
          /* Estilos para el cuerpo de la página */
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
          /* Estilos para el cuerpo de la página */
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        /* Estilos para la marca de la barra de navegación, los enlaces de navegación, el formulario de registro y el formulario de inicio de sesión */
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        /* Estilos para el formulario de registro */
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        /* Estilos para las filas del formulario de registro */
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        /* Estilos para el formulario de inicio de sesión */
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        /* Estilos para las filas del formulario de inicio de sesión */
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="http://127.0.0.1:8000/">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Desconectarse</a>
                    </li>
                @endguest
            </ul>
  
        </div>
    </div>
</nav>
  
@yield('content')
     
</body>
</html>
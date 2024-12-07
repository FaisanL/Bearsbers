<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <!-- Asegúrate de que este archivo está apuntando al correcto -->
    @vite('resources/js/app.js')
    <!-- Si estás usando JS, asegúrate de que también está incluido -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: "Domine", serif;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <nav class="flex items-center justify-between cont-nav">
        <div>
            <img src="{{ asset('home/Bearsber.png') }}" alt="logo" class="img" />
        </div>
        <ul class="flex justify-center items-center space-x-4 pr-4 m-0">
            <li class="p-2 font-bold">
                <a class="link" href="/">Home</a>
            </li>
            <li class="p-2 font-bold">
                <a class="link" href="/citas">Citas</a>
            </li>
            <li class="p-2 font-bold">
                <a class="link" href="/contacto">Contacto</a>
            </li>
            <li class="p-2 font-bold">
                <a class="link" href="/nosotros">Nosotros</a>
            </li>
        </ul>
    </nav>

    <!-- Contenido dinámico -->
    @yield('content')

    <footer class="cont-footer flex justify-center">
        <p class="text-center text-gray-400">
            Todos los derechos reservados &copy;
        </p>
    </footer>
</body>

</html>

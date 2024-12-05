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
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
    </head>

    <body>
        <nav class="flex items-center justify-between cont-nav">
            <div>
                <img
                    src="{{ asset('img/Bearsber.png') }}"
                    alt="logo"
                    class="img"
                />
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
        <div class="container mt-4">@yield('content')</div>
    </body>
</html>

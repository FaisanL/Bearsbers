@extends('layout') @section('title', 'Inicio') @section('content')
<head>
    @vite('resources/css/home.css')
</head>
<div class="container cont-somos my-4 py-4 w-3/4 lg:w-1/2">
    <h1 class="text-center uppercase">¿Quienes somos?</h1>
    <p class="text-center text-wrap">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente quos
        optio, voluptatibus vero aperiam officiis recusandae doloremque saepe
        cumque libero incidunt delectus expedita blanditiis ipsa natus soluta
        ducimus rerum cupiditate?
    </p>
</div>
<div>
    <h2 class="text-center uppercase">Un poco de nuestro trabajo</h2>

    <!-- Un Carousel aqui -->
</div>
<div class="img-layout">
    <div class="cont-layout">
        <div class="cont-title">
            <button class="text-center">Agenda tu Cita!</button>
        </div>
    </div>
</div>

@endsection

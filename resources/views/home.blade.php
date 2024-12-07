@extends('layout') @section('title', 'Inicio') @section('content')
<head>
    @vite('resources/css/home.css') @vite('resources/js/app.js')
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
</head>
<div class="container cont-somos my-8 py-4 w-3/4 lg:w-1/2">
    <h1 class="text-center uppercase">¿Quienes somos?</h1>
    <p class="text-center text-wrap">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente quos
        optio, voluptatibus vero aperiam officiis recusandae doloremque saepe
        cumque libero incidunt delectus expedita blanditiis ipsa natus soluta
        ducimus rerum cupiditate?
    </p>
</div>

<div class="my-16">
    <h2 class="text-center uppercase">Un poco de nuestro trabajo</h2>

    <div id="carouselExample" class="carousel slide mx-auto w-3/4 lg:w-1/2">
        <div class="carousel-inner">
            <div class="carousel-item active cont-carousel">
                <img
                    src="{{ asset('home/ejemplo.png') }}"
                    class="d-block w-100"
                    alt="..."
                />
            </div>
            <div class="carousel-item cont-carousel">
                <img
                    src="{{ asset('home/ejemplo.png') }}"
                    class="d-block w-100"
                    alt="..."
                />
            </div>
            <div class="carousel-item cont-carousel">
                <img
                    src="{{ asset('home/ejemplo.png') }}"
                    class="d-block w-100"
                    alt="..."
                />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="img-layout flex justify-center items-center">
    <div class="cont-title">
        <button class="text-center w-52 h-14">Agenda tu Cita!</button>
    </div>
</div>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
></script>
@endsection

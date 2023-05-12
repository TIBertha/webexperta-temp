<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bertha.pe</title>
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
</head>
<body>
<section class="flex-center position-ref full-height">
    <div class="container content">
        <div class="title bt-purple font-weight-bold">
            Hola, soy Bertha
        </div>
        <div class="cont my-3 bt-purple">
            Soy tu agencia de empleos online. Nos estamos renovando, ahora ingresa a nuestra web haciendo clic aquí:
        </div>
        <div class="">
            <a class="btn btn-lg btn-pink-bertha" href="https://holabertha.com{{$_SERVER['REQUEST_URI']}}">
                Ir a nueva web
            </a>
        </div>
    </div>
</section>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
</body>
</html>

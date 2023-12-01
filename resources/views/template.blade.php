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
<section class="flex-center position-ref">
    <div class="bg-gray">
        <div class="container py-5">
            <div class="row my-2 justify-content-center select-country-style">

            <div class="col-12 col-md-7 py-1  text-center">
                <img src="{{ asset('img/logo.png') }}" class="w-50"/>
            </div>

            <div class="col-12 py-1">
                <div class="t1">¡Hola! <br/> Selecciona un país</div>
            </div>

            <div class="col-12 pt-5 pb-2">
                <div class="row mx-0 justify-content-around">
                    <div class="col-5 text-center">
                        <a class="country-link" href="https://holabertha.com/es-pe{{$_SERVER['REQUEST_URI']}}">
                            <img class="w-50  border-flag" src="{{ asset('img/peru-flag.jpg') }}"/>
                            <p class=“text-center”>Perú</p>
                        </a>
                    </div>

                    <div class="col-5 text-center">
                        <a class="country-link" href="https://holabertha.com/es-cl{{$_SERVER['REQUEST_URI']}}">
                            <img class="w-50  border-flag" src="{{ asset('img/chile-flag.jpg') }}"/>
                            <p class="text-center">Chile</p>
                        </a>
                    </div>
                </div>
            </div>

                <div class="col-12 py-2">
                    <hr/>
                </div>

                <div class="col-12 py-2">
                    <div class="t2">
                        ¿Buscas a una trabajadora para tu hogar?
                    </div>
                </div>

                <div class="col-12 py-2">
                    <div class="t3">
                        Te conectamos con trabajadoras con experiencia y sin antecedentes.
                    </div>
                </div>

            </div>

        </div>

        <div class="row mx-0 text-center">
            <div class="col-12 px-3 px-lg-0 padding-girls">
                <img src="{{ asset('img/chicas-barra-2.svg') }}" class="img-chicas-pedido-tc" />
            </div>
        </div>

    </div>
</section>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
</body>
</html>

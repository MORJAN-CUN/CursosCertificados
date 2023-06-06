<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado de: {{ Str::title($product_name) }}</title>
    <link href="{{ env('APP_URL') }}css/certificados.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header class="text-center">
        <div class="green-right">
            <h1>.</h1>
        </div>
        <div class="yellow-right">
            <h1>.</h1>
        </div>
        <div class="div-img">
          <img src="{{ env('APP_URL') }}images/certificados/fondo-certificado.jpg" alt="jardin-logo" width="100">
        </div>
        {{-- <div class="div-img">
          <img src="{{ env('APP_URL') }}/images/fondo-welcome.png" alt="jardin-logo" width="100">
        </div> --}}
    </header>

    <main>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 mt-2 t1">
                    <h4>La Corporación Unificada Nacional de Educación Superior – CUN</h4>
                </div>
                <div class="col-md-12 mt-4 t2">
                    Reconoce a:
                </div>
                <div class="col-md-12 mt-2">
                    <h1>{{ $name }}</h1>
                </div>
                <div class="col-md-12 mt-4 t2">
                    Identificado(a) con {{ $document_type . '. ' . $document }}
                </div>
                <div class="col-md-12 mt-2 t2">
                    Por su participación en el <b>“{{ $product_name }}”</b>, con una<br>
                    intensidad de {{ $duration }} horas; realizada el {{ $day_r }} de {{ $month_r }} del
                    {{ $year_r }}, por modalidad {{ $modality }}.
                </div>

                <div class="col-md-12 mt-2 t3">
                    Expedido en la ciudad de {{ $city_expedition }}, a los {{ $day }} días del mes de
                    {{ $month }}
                    del año {{ $year }}.
                </div>
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ $url_validate }}" target="_blank"><img src="data:image/svg+xml;base64, {!! base64_encode($qr) !!}" /></a>
                        </div>
                        <div class="card-footer">
                            <h5>{{ $watermark }}</h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-8">
                  <div class="firma-left mt-2" ></div>Firma
                  <div class="firma-right mt-2"></div>Firma
                </div> --}}
            </div>
        </div>
    </main>

    <footer>
      <div class="d-inline-flex p-3">
        <h2>{{ $consecutive }}</h2>
      </div>
    </footer>
</body>

</html>

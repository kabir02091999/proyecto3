<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cambio.css') }}" />
    <title>Document</title>
</head>
<body>
    
    <nav>

        {{--  <img src="{{ asset('imagen/logo.png') }}" alt="">  --}}

        <a href="{{ route('principal') }}"><button class="inicio">inicio</button></a>
        <a href="{{ route('cable') }}"><button class="inicio">telecable</button></a>
        <a href="{{ route('internet') }}"><button class="inicio">internet</button></a>
        <a href="{{ route('llamada') }}"><button class="inicio">telefonia</button></a>
        <a href="{{ route('paquetes') }}"><button class="inicio">paquetes</button></a>

    </nav>

    <div>

        @yield('cambio')

    </div>

</body>
</html>
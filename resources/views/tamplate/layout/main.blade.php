<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/orbita-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/orbita-icon.png') }}">
    <title>
        @yield('titulo')
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/argon-dashboard.css') }}">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/argon-dashboard.css') }}" rel="stylesheet" />
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
</head>

<body class="@yield('classBody')">
    @stack('sidbar')
    <main class="@yield('classMain') ">
        @stack('navbar')
        @yield('conteudo')
    </main>
    @include('tamplate.plugins.javascript')
    @include('tamplate.componentes.msg')
    @stack('js-stack')
</body>

</html>

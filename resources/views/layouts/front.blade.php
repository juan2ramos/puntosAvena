<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Avena Cubana') </title>
    <meta name="description"
          content="@yield('description', 'Ártico Agencia digital en Bogotá, especializada en web, apps móviles, e-learning, diseño 3D. Posicionamos su marca con campañas en redes sociales, SEO y SEM.')"/>
    <meta name="copyright" content="Ártico Digital S.A.S">
    <meta name="author" content="Ártico Digital"/>
    <meta name="application-name" content="@yield('title', 'Agencia de Marketing Digital Bogotá') | Ártico Digital">
    <link rel="canonical" href="{{ URL::current() }}">
    <!--GEO Tags-->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,600i,700,700i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.1/sweetalert2.min.css">
    @yield('styles')
</head>
<body id="#body" class="@yield('classBody')">

<div class="LoginForm-logo">
    <a href="/">
        <img src="{{url('img/logo_avena_cubana.png')}}" alt="">
    </a>
</div>
@yield('content')
<footer class="Footer scrollTarget" id="#redes-sociales">
</footer>
<script defer src="https://cdn.jsdelivr.net/sweetalert2/6.6.1/sweetalert2.min.js"></script>
@yield('scripts')
</body>
</html>

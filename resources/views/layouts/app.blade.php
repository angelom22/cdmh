<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>Club Deportivo Municipal De El Hatillo</title>
    <meta name="keywords" content="Hatillo Club Minicipio Deporte hatillano futbol hatillo  municipio" />
    <meta name="description" content="Pagina Web del Club Deportivo Municipal Del Hatillo">
    <meta name="author" content="Ing Angelo Meneses">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index, follow">
    <meta name="google" content="nositelinkssearchbox">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('/images/lynaje.png') }}" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Theme CSS -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="screen" type="text/css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <!-- <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png"> -->
    <link rel="apple-touch-icon" sizes="72x72" href="img/icons/android-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-icon-114x114.png">

    <link rel="stylesheet" type="text/css" href="{{asset('plugins/chosen/chosen.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('plugins/aloha/build/css/aloha.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('plugins/froala/css/froala_editor.css')}}">

    <link rel="stylesheet" href="{{asset('/plugins/trumbowyg/dist/ui/trumbowyg.min.css')}}">
    <!-- Contenido Styles Personales -->


    @yield('css')
</head>

<body>

    <!-- layout-->
    <div id="layout">

        <!-- menu movil -->
        @include('layouts.menuMovil')
        <!-- menu movil -->

        <!-- page content -->
        <main>


            @yield('content')
        </main>
        <!-- page content -->

        <!-- footer content -->
        @include('layouts.footer')
        <!-- /footer content -->

    </div>


    <!-- ======================= JQuery libs =========================== -->
    <!-- jQuery local-->
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

    <!-- popper.js-->
    <!-- <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script> -->
    <!-- bootstrap.min.js-->
    <!-- <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script> -->
    <!-- required-scripts.js-->

    <script type="text/javascript" src="{{asset('js/theme-scripts.js')}}"></script>
    <!-- theme-main.js-->
    <script type="text/javascript" src="{{asset('js/theme-main.js')}}"></script>
    <!-- ======================= End JQuery libs =========================== -->
    <script type="text/javascript" src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>

    <script type="text/javascript" src="{{asset('plugins/aloha/src/lib/aloha.js')}}"></script>

    <script type="text/javascript" src="{{asset('plugins/froala/js/froala_editor.min.js')}}"></script>

    <script src="{{asset('plugins/trumbowyg/dist/trumbowyg.min.js')}}"></script>


    <!-- Contenido JS Personales -->
    @yield('js')

</body>

</html>

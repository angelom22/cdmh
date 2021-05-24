<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Hatillo Club Minicipio Deporte hatillano futbol hatillo  municipio" />
    <meta name="description" content="Pagina Web del Club Deportivo Municipal Del Hatillo">
    <meta name="author" content="Ing Angelo Meneses">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="index, follow">
    <meta name="google" content="nositelinkssearchbox">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'cdmh') }}</title>

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

    <link rel="stylesheet" href="{{asset('/plugins/trumbowyg/dist/ui/trumbowyg.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('plugins/markitup/skins/markitup/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/markitup/sets/markdown/style.css')}}" />


    <!-- Contenido Styles Personales -->

    @yield('css')

</head>

<body>

    <div id="layout">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'CDMH') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">

                    </ul>


                    <ul class="navbar-nav ml-auto">

                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                                          document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->

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
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- popper.js-->
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap.min.js-->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- required-scripts.js-->
    <script type="text/javascript" src="{{asset('js/theme-scripts.js')}}"></script>
    <!-- theme-main.js-->
    <script type="text/javascript" src="{{asset('js/theme-main.js')}}"></script>
    <!-- ======================= End JQuery libs =========================== -->

    <script type="text/javascript" src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>

    <script src="{{asset('plugins/trumbowyg/dist/trumbowyg.min.js')}}"></script>

    <!-- jconfirm -->
    <script src="{{asset('/js/jconfirm/JConfirm.min.js')}}"></script>

    <script>
        $(document).ready(function() {
        $.jConfirm.defaults.question = '{{ __("¿Estás seguro?") }}';
        $.jConfirm.defaults.confirm_text = '{{ __("Sí") }}';
        $.jConfirm.defaults.deny_text = '{{ __("No") }}';
        $.jConfirm.defaults.position = 'top';
        $.jConfirm.defaults.theme = 'black';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    </script>

    <!-- Contenido JS Personales -->
    @yield('js')

</body>

</html>

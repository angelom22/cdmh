<footer id="footer">
    <!-- Footer Top-->
    <div class="top-footer">

        <!-- Logo Footer-->
        <div class="col-lg-12">
            <div class="logo-footer">
                <h2>Redes Sociales</h2>
            </div>
        </div>
        <!-- End Logo Footer-->

        <!-- Social Icons-->
        <ul class="social">
            <li>
                <div>
                    <a href="https://www.facebook.com/cdmhfvf/" class="facebook" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="https://twitter.com/cdmhfvf" class="twitter-icon" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </div>
            </li>
            <!-- <li>
                <div>
                    <a href="#" class="vimeo">
                        <i class="fa fa-vimeo-square"></i>
                    </a>
                </div>
            </li> -->
            <li>
                <div>
                    <a href="#" class="google-plus" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="https://www.youtube.com/channel/UC9uUsKzOYlTdi1b_Qkbiqcw/featured" class="youtube" target="_blank">
                        <i class="fa fa-youtube"></i>
                    </a>
                </div>
            </li>
        </ul>
        <!-- End Social Icons-->
    </div>
    <!-- End Footer Top-->

    <!-- footer Down-->
    <div class="footer-down">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2020 Club Deportivo Municipal del Hatillo | All Rights Reserved</p>
                    @guest
                    <a href="{{ route('login') }}"><span class="fa fa-user"></span> {{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <!-- <a class="nav-link" href="{{ route('usuarios.create') }}">{{ __('Register') }}</a> -->
                    @endif
                    @else
                    <div class="row justify-content-center align-items-center">
                        <div class="col col-xl-4">
                            <nav class="mainmenu">
                                <div class="container">
                                    <ul class="navbar-nav mr-auto">
                                        <li>
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

                                        <li>
                                            <a class="nav-link" href="{{route('articulos.index')}}">Articulos</a>
                                        </li>
                                        @if(Auth::user()->Admin() == 'admin')
                                        <li>
                                            <a class="nav-link" href="{{route('categorias.index')}}">Categorias</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('etiquetas.index')}}">Etiquetas</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="jugador/create">Jugadores</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('usuarios.index')}}">Usuarios</a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('usuarios.create') }}">{{ __('Register') }}</a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                        </div>

                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <!-- footer Down-->

</footer>

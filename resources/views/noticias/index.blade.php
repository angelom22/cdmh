@extends('layouts.app')

@section('content')

<!-- menu content -->
@include('layouts.menu-2')
<!-- menu content -->

<!-- Section Title -->
<div class="section-title" style="background: url( {{asset('img/parallax.jpg')}} );">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Noticias</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{url('/')}}">Inicio</a></li>
                        <li>Noticias Recientes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Title -->


<!-- Section Area - Content Central -->
<section class="content-info">
    <div class="container paddings">
        <div class="row">

            <!-- Sidebars -->
            <aside class="col-lg-3">

                <div>
                    <h4>Buscar noticia</h4>
                    <!-- Buscador de articulos -->
                    <form method="GET" class="search" action="{{route('articulos.index')}}">
                        <div class="input-group">
                            <input name="titulo" type="text" class="form-control" placeholder="Buscador..." aria-describedby="search">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit" name="subscribe">@</button>
                            </span>
                        </div>
                    </form>
                    <!-- fin Buscador -->
                </div>

                <!-- Widget Categories-->
                <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>Categorias</h4>
                    </div>
                    <div class="info-panel">
                        <ul class="list">
                            @foreach($categorias as $categoria)
                            <li>
                                <i class="fa fa-check"></i><a href="{{route('home.filtrar.categoria', $categoria->name)}}">{{$categoria->name}}</a>
                                <span class="badge badge-pill badge-dark">{{$categoria->articulos->count()}}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- End Widget Categories-->

                <!-- Widget img-->
                <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>Widget</h4>
                    </div>
                    <img src="{{asset('img/hero.jpg')}}" alt="widget del club del hatillo">
                    <div class="row">
                    </div>
                </div>
                <!-- End Widget img-->

                <!-- Widget Text-->
                <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>Etiquetas</h4>
                    </div>
                    <div class="info-panel">
                        @foreach($etiquetas as $etiqueta)
                        <a href="{{route('home.filtrar.etiqueta', $etiqueta->name)}}" class="badge badge-dark">{{$etiqueta->name}}</a>
                        @endforeach
                    </div>
                </div>
                <!-- End Widget Text-->

            </aside>
            <!-- End Sidebars -->

            <div class="col-lg-9">
                <!-- Content Text-->
                <div class="panel-box">
                    <div class="titles">
                        <h4>Noticias recientes</h4>
                    </div>

                    @if(Auth::check())
                    <div class="panel-box">
                        <a href="{{route('ArticuloCreate')}}" class="btn btn-info">Nuevo</a>
                    </div>
                    @endif

                    @include('flash::message')
                    <!-- Post Item -->
                    @foreach($articulos as $articulo)
                    <div class="post-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="img-hover">
                                    <img src="{{asset('img/articulos/'.$articulo->imagen->name)}}" alt="titulo de la noticia" class="img-responsive">
                                    <div class="overlay"><a href="{{route('articulos.show',$articulo->slug )}}">+</a></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5><a href="{{route('articulos.show',$articulo->slug )}}">{{$articulo->titulo}}</a></h5>
                                <span class="data-info">{{$articulo->created_at->diffForHumans()}} / <i class="fa fa-user"></i><a href="">{{$articulo->user->name}}</a> / <i class="fa fa-folder-open-o"><a href="{{route('home.filtrar.categoria', $categoria->name)}}">{{$articulo->categoria->name}}</a></i> / <i class="fa fa-comments"></i><a href="#">0</a></span>
                                <p>{{$articulo->contenido}}<a href="{{route('articulos.show',$articulo->slug )}}">Leer [+]</a>.</p>
                                <br>
                                @if(Auth::check())
                                <a href="{{route('articulos.show',$articulo->slug )}}" class="btn btn-info"><span class="glyphicon glyphicon-wrench">Ver</span>
                                </a>
                                <a href="{{route('ArticuloEdit', $articulo->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench">Editar</span>
                                </a>
                                @if(Auth::user()->Admin() == 'admin')
                                <form style="display:inline" method="DELETE" action="{{route('articulos.destroy', $articulo->id)}}">
                                    <button onclick="return confirm('¿Esta seguro que desea eliminar?')" class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- End Post Item -->

                    <div class="text-center">
                        {{ $articulos->links() }}
                    </div>
                </div>
                <!-- End Content Text-->
            </div>

        </div>

        <!-- Newsletter -->
        @include('secciones.suscripcion')
        <!-- End Newsletter -->


</section>

@include('secciones.siguenosInstagram')

@endsection

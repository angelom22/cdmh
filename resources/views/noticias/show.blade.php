@extends('layouts.app')

@section('content')

<!-- menu content -->
@include('layouts.menu-2')
<!-- menu content -->

<!-- Section Area - Content Central -->
<section class="content-info">

    <div class="container paddings-mini">
        <div class="row">

            <!-- Sidebars -->
            <aside class="col-lg-3">

                <div>
                    <h4>Searh Sidebar</h4>
                    <form class="search" action="#" method="Post">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search..." name="email" type="email" required="required">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit" name="subscribe">@</button>
                            </span>
                        </div>
                    </form>
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
                        @foreach($articulo->etiquetas as $etiqueta)
                        <a href="" class="badge badge-dark">{{$etiqueta->name}}</a>
                        @endforeach
                    </div>
                </div>
                <!-- End Widget Text-->
            </aside>
            <!-- End Sidebars -->


            <div class="col-lg-9">
                <!-- Content Text-->

                <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>{{$articulo->titulo}}</h4>
                    </div>
                    <img src="{{asset('img/articulos/'.$articulo->imagen->name)}}" alt="titulo de la noticia">
                    <div class="info-panel">
                        <p>{!! $articulo->contenido !!}</p>
                    </div>
                </div>


                <!-- End Content Text-->

                <!-- Comments -->
                <!-- <div class="panel-box">

                    <div class="titles">
                        <h4>Comentarios</h4>
                    </div>

                    <ul class="testimonials">
                        <li>
                            <blockquote>
                                <p>Lionel Messi and Cristiano Ronaldo will come face to face for the first time
                                    in the World Cup only if their two nations finish in the same position in
                                    the group phase, either first or second.!.</p>
                                <img src="img/testimonials/1.jpg" alt="">
                                <strong>Federic Gordon</strong><a href="#">@iwthemes</a>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote>
                                <p>After two previous meetings on the big stage, it is honours even: Brazil won
                                    the Final of Korea/Japan 2002 2-0, while Germany recorded that famous
                                    victory at Brazil 2014!.</p>
                                <img src="img/testimonials/2.jpg" alt="">
                                <strong>Federic Gordon</strong><a href="#">@iwthemes</a>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote>
                                <p>To help fire your imagination and let you see if there is a potential
                                    knockout match you might be tempted to buy tickets for, FIFA.com has come up
                                    with a list of possible last-16 and quarter-final duels between some of the
                                    game’s biggest attractions.!.</p>
                                <img src="img/testimonials/3.jpg" alt="">
                                <strong>Federic Gordon</strong><a href="#">@iwthemes</a>
                            </blockquote>
                        </li>
                    </ul>
                </div> -->
                <!-- End Comments -->

                <!-- Comment Form -->
                <!-- <div class="panel-box padding-b">

                    <div class="titles">
                        <h4>Publicar Comentario</h4>
                    </div>

                    <div class="info-panel">

                        <form class="form-theme">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Your name *</label>
                                    <input type="text" required="required" value="" maxlength="100" class="form-control" name="name" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label>Your email address *</label>
                                    <input type="email" required="required" value="" maxlength="100" class="form-control" name="email" id="email">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Comment *</label>
                                    <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment" style="height: 138px;" required="required"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Post Comment" class="btn btn-primary">
                                </div>
                            </div>
                        </form>

                    </div>
                </div> -->
                <!-- End Comment Form -->

            </div>
        </div>
    </div>

    <!-- Newsletter -->
    
    <!-- End Newsletter -->

</section>
<!-- End Section Area -  Content Central -->

@include('secciones.siguenosInstagram')

@endsection

<!-- Post Item -->

@foreach($articulos as $articulo)
<div class="post-item">
    <div class="row">
        <div class="col-md-4">
            <div class="img-hover">

                <img src="{{asset('img/articulos/'.$articulo->imagen->name)}}" alt="titulo de la imagen" class="img-responsive">

                <div class="overlay"><a href="{{route('articulos.show',$articulo->slug )}}">+</a></div>
            </div>
        </div>
        <div class="col-md-8">
            <h5><a href="{{route('articulos.show',$articulo->slug )}}">{{$articulo->titulo}}</a></h5>
            <span class="data-info">{{$articulo->created_at->diffForHumans()}} / <i class="fa fa-folder-open-o"><a href="{{route('home.filtrar.categoria', $articulo->categoria->name)}}">{{$articulo->categoria->name}}</a></i> / <i class="fa fa-comments"></i><a href="#">0</a> </span>

            <p><a href="{{route('articulos.show',$articulo->slug )}}">Leer [+]</a>
            </p>

        </div>
    </div>
</div>
@endforeach


<!-- End Post Item -->

<!-- Post Item -->
<!-- <div class="post-item">
    <div class="row">
        <div class="col-md-4">
            <div class="img-hover">
                <img src="{{asset('img/blog/NuevaIndumentaria.jpg')}}" alt="nueva indumentaria" class="img-responsive">
                <div class="overlay"><a href="#">+</a></div>
            </div>
        </div>
        <div class="col-md-8">
            <h5><a href="single-news.html">Nueva Indumentaria por el #CDMH5ANIVERSARIO</a></h5>
            <span class="data-info">Mayo 25, 2020 / <i class="fa fa-comments"></i><a href="#">0</a></span>
            <p>¿Les gusta nuestra franela del quinto aniversario del club?.</p>
        </div>
    </div>
</div> -->
<!-- End Post Item -->

<!-- Post Item -->
<!-- <div class="post-item">
        <div class="row">
            <div class="col-md-4">
                <div class="img-hover">
                    <img src="{{asset('img/blog/noticia01.jpg')}}" alt="" class="img-responsive">
                    <div class="overlay"><a href="single-news.html">+</a></div>
                </div>
            </div>
            <div class="col-md-8">
                <h5><a href="single-news.html">Trayectoria del Club</a></h5>
                <span class="data-info">Enero 19, 2020 / <i class="fa fa-comments"></i><a href="#">0</a></span>
                <p>Hace ya algunos años le dimos vida a un proyecto que comenzó como un sueño pero con el transcurrir del tiempo este se ha fortalecido a punta de sacrificios, trabajo, constancia, empeño y dedicación.<a href="#">Seguir Leyendo [+]</a></p>
            </div>
        </div>
    </div>
    <!-- End Post Item -->

<!-- Post Item -->
<!-- <div class="post-item">
        <div class="row">
            <div class="col-md-4">
                <div class="img-hover">
                    <img src="{{asset('img/blog/noticia02.jpg')}}" alt="" class="img-responsive">
                    <div class="overlay"><a href="#">+</a></div>
                </div>
            </div>
            <div class="col-md-8">
                <h5><a href="#">CDMH y la Alcaldía del Hatillo trabajando juntos</a></h5>
                <span class="data-info">Enero 9, 2020 / <i class="fa fa-comments"></i><a href="#">5</a></span>
                <p>Nos encontramos comprometidos con el desarrolo del deporte en el municipio del hatillo y junto a la alcaldía seguimos sumando esfuerzos por un hatillo donde todo lo hacemos posible.<a href="#">Seguir Leyendo [+]</a></p>
            </div>
        </div>
    </div> -->
<!-- End Post Item -->

<!-- Post Item -->
<!-- <div class="post-item">
        <div class="row">
            <div class="col-md-4">
                <div class="img-hover">
                    <img src="{{asset('img/blog/noticia04.jpg')}}" alt="" class="img-responsive">
                    <div class="overlay"><a href="#">+</a></div>
                </div>
            </div>
            <div class="col-md-8">
                <h5><a href="#">Tryouts apertura 2020</a></h5>
                <span class="data-info">Enero 22, 2020 / <i class="fa fa-comments"></i><a href="#">0</a></span>
                <p>El próximo fin de semana estaremos realizando #tryouts para nuestras categorías #sub12 #sub14 y #sub20 Los interesados enviar lo siguiente a nuestro correo electrónico 📧 clubdeportivomunicipalhatillo@gmail.com.<a href="#">Seguir Leyendo [+]</a></p>
            </div>
        </div>
    </div> -->
<!-- End Post Item -->

<!-- Post Item -->
<!-- <div class="post-item">
        <div class="row">
            <div class="col-md-4">
                <div class="img-hover">
                    <img src="{{asset('img/blog/estructura-organizativa.jpg')}}" alt="" class="img-responsive">
                    <div class="overlay"><a href="single-news.html">+</a></div>
                </div>
            </div>
            <div class="col-md-8">
                <h5><a href="#">Esturctura organizativa 2020-2021</a></h5>
                <span class="data-info">Diciembre 09, 2019 / <i class="fa fa-comments"></i><a href="#">2</a></span>
                <p>Así será nuestra estructura organizativa para el año 2020-2021.</p>
            </div>
        </div>
    </div> -->
<!-- End Post Item -->
</div>

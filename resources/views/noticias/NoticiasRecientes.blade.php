@foreach($articulos as $articulo)
<div class="post-item">
    <div class="row">
        <div class="col-md-4">
            <div class="img-hover">
                <img src="{{asset('img/articulos/'.$articulo->imagen->name)}}" alt="titulo de la imagen" class="img__noticiaReciente img-responsive">
                <div class="overlay"><a href="{{route('articulos.show',$articulo->slug )}}">+</a></div>
            </div>
        </div>
        <div class="col-md-8">
            <h5><a href="{{route('articulos.show',$articulo->slug )}}">{{$articulo->titulo}}</a></h5>
            <span class="data-info">{{$articulo->created_at->diffForHumans()}} / <i class="fa fa-folder-open-o"><a href="{{route('home.filtrar.categoria', $articulo->categoria->name)}}">{{$articulo->categoria->name}}</a></i> / <i class="fa fa-comments"></i><a href="#">0</a> </span>
            <p>
                <a href="{{route('articulos.show',$articulo->slug )}}">Leer [+]</a>
            </p>
        </div>
    </div>
</div>
@endforeach

<div class="text-center">
    {{ $articulos->links() }}
</div>


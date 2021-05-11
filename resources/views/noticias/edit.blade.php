@extends('layouts.app')

@section('css')
    <!-- summernote -->
    <link rel="stylesheet" href="/css/summernote-bs4.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/css/select2/css/select2.css">
    <link rel="stylesheet" href="/css/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DropZone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
@endsection

@section('content')

<!-- menu content -->
@include('layouts.menu-2')
<!-- menu content -->

<!-- Section Area - Content Central -->
<section class="content-info">

    <div class="container paddings">
        <!-- Content Text-->
        <div class="panel-box block-form">
            <div class="titles text-center">
                <h4>Editar actículo.</h4>
            </div>

            @include('layouts.errores')

            <div class="info-panel">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="lead">Redacción de artículos para la web</p>
                    </div>
                </div>

                <form action="{{route('ArticuloUpdate', $articulo->id)}}" method="POST" enctype="multipart/form-data" files="true">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3 {{$errors->has('titulo') ? 'has-error' : ''}}">
                                <label for="titulo" class="form-label">Título de la publicación</label>
                                <input type="text" class="form-control" name="titulo" id="titulo"  tabindex="1" placeholder="Ingresa aqui el título de la publicación" value="{{$articulo->titulo}}">
                                {!! $errors->first('titulo', '<span class="alert-danger">:message</span>') !!}
                            </div>
                            <div class="mb-3 {{$errors->has('contenido') ? 'has-error' : ''}}">
                                <label for="contenio" class="form-label">Contenido</label>
                                <textarea   class="form-control" name="contenido" id="contenido" tabindex="3" placeholder="Contenido completo de la publicación">{{old('contenido', $articulo->contenido)}}</textarea>
                                {!! $errors->first('contenido', '<span class="alert-danger">:message</span>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 {{$errors->has('extracto') ? 'has-error' : ''}}">
                                <label for="extracto" class="form-label">Descripción corta</label>
                                <textarea rows="5" class="form-control" name="extracto" id="extracto"  tabindex="2" placeholder="Contenido extracto de la publicación">{{old('extracto',$articulo->extracto)}}</textarea>
                                {!! $errors->first('extracto', '<span class="alert-danger">:message</span>') !!}
                            </div>
                            <div class="mb-3 {{$errors->has('categoria') ? 'has-error' : ''}}">
                                <label for="categoria">Categoría</label>
                                <select class="form-control select2bs4" name="categoria" id="categoria" tabindex="5">
                                    @foreach($categorias as $categoria)
                                    <option value=" {{$categoria->id }}"
                                        {{ old('categoria', $categoria->id ) == $categoria->id ? 'selected' : '' }} >{{$categoria->name}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('categoria', '<span class="alert-danger">:message</span>') !!}
                            </div>
                            <div class="mb-3 {{$errors->has('etiquetas') ? 'has-error' : ''}}">
                                <label for="etiqueta">Etiquetas</label>
                                <select class="select2bs4" multiple="multiple" data-placeholder="Seleccione una o etiquetas" style="width: 100%;" name="etiquetas[]" id="etiqueta" tabindex="6">
                                    @foreach($etiquetas as $etiqueta)
                                    <option {{ collect(old('etiquetas', $articulo->etiquetas->pluck('id')))->contains($etiqueta->id) ? 'selected' : '' }} value="{{$etiqueta->id}}">{{$etiqueta->name}}</option>
                                    @endforeach  
                                </select>
                            {!! $errors->first('etiquetas', '<span class="alert-danger">:message</span>') !!}
                            </div>
                            <div class="mb-3">
                                <div class="dropzone">

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="offset-sm-2 col-sm-10">
                            <!-- <button type="submit">enviar</button> -->
                            <input type="submit" value="Editar" id="editar" class="bnt btn-iw" style="border-radius: 5px;">
                            <a class="btn btn-iw btn-danger" href="{{route('articulos.index')}}">Regresar</a>
                        </div>
                    </div>

                </form>

                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="col-md-12">
                            
                            <img class="card-img-top img-responsive" src="{{$articulo->imagen->name}}" alt="">
                        </div>
                             
                    </div>  
                </div>

            </div>

        </div>
        <!-- End Content Text-->
    </div>

</section>
<!-- End Section Area -  Content Central -->

@endsection

@section('js')

<script src="{{asset('plugins/ckeditor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('plugins/ckeditor/ckeditor/styles.js')}}"></script>

<!-- Summernote -->
<script src="/js/summernote-bs4.min.js"></script>

<!-- Select2 -->
<script src="/js/select2/js/select2.full.js"></script>

<!-- DropZone -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>

<script>
    // Dropzone
    var myDropzone = new Dropzone('.dropzone', {
        url:'/articulos/{{$articulo->slug}}/imagen',
        acceptedFiles: 'image/*',
        maxFilesize: 2,
        maxFiles: 1,
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dictDefaultMessage: 'Arrastre las fotos aqui para subirlas'
    });

    myDropzone.on('error', function(file, res){
        console.log(res.file);
        var msg = res.file[0];
        $('.dz-error-message:last > span').text(msg)
    });
    
    Dropzone.autoDiscover = false;

    // Summernote
    $('#contenido').summernote({
        placeholder: 'Redactar contenido',
        tabsize: 2,
        height: 300,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

 

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4',
      tags: true

    });

    </script>


@endsection

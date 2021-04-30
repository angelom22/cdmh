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
                <h4>Redactar actículo.</h4>
            </div>

            @include('layouts.errores')

            <div class="info-panel">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="lead">Redacción de artículos para la web</p>
                    </div>
                </div>
                
                <form action="{{route('ArticuloStore')}}" method="POST" enctype="multipart/form-data" files="true">
                    @method('post')
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3 {{$errors->has('titulo') ? 'has-error' : ''}}">
                                <label for="titulo" class="form-label"><strong>Título de la publicación</strong></label>
                                <input type="text" class="form-control" name="titulo" id="titulo"  tabindex="1" placeholder="Ingresa aqui el título de la publicación" value="{{old('titulo')}}">
                                {!! $errors->first('titulo', '<span class="alert-danger">:message</span>') !!}
                            </div>
                            <div class="mb-3 {{$errors->has('contenido') ? 'has-error' : ''}}">
                                <label for="contenio" class="form-label"><strong>Contenido</strong></label>
                                <textarea   class="form-control" name="contenido" id="contenido" tabindex="3" placeholder="Contenido completo de la publicación">{{old('contenido')}}</textarea>
                                {!! $errors->first('contenido', '<span class="alert-danger">:message</span>') !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3 {{$errors->has('extracto') ? 'has-error' : ''}}">
                                <label for="extracto" class="form-label"><strong>Descripción corta</strong></label>
                                <textarea rows="5" class="form-control" name="extracto" id="extracto"  tabindex="2" placeholder="Contenido extracto de la publicación">{{old('extracto')}}</textarea>
                                {!! $errors->first('extracto', '<span class="alert-danger">:message</span>') !!}
                            </div>
                            <div class="mb-3 {{$errors->has('categoria') ? 'has-error' : ''}}">
                                <label for="categoria"><strong>Categoría</strong></label>
                                <select class="form-control select2bs4" name="categoria_id" id="id_categoria" tabindex="5">
                                    <option value="">Seleccione una categorías</option>
                                    @foreach($categorias as $categoria)
                                    <option value=" {{$categoria->id }}"
                                        {{ old('categoria') == $categoria->id ? 'selected' : '' }} >{{$categoria->name}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('categoria', '<span class="alert-danger">:message</span>') !!}
                            </div>
                            <div class="mb-3 {{$errors->has('etiquetas') ? 'has-error' : ''}}">
                                <label for="categoria"><strong>Etiquetas</strong></label>
                                <select class="select2bs4" multiple="multiple" data-placeholder="Seleccione una o etiquetas" style="width: 100%;" name="etiquetas[]" id="etiqueta" tabindex="6">
                                    @foreach($etiquetas as $etiqueta)
                                    <option {{ collect(old('etiquetas'))->contains($etiqueta->id) ? 'selected' : '' }} value="{{$etiqueta->id}}">{{$etiqueta->name}}</option>
                                    @endforeach  
                                </select>
                            </div>
                            <div class="form-group" class="control-label">
                                <input type="file" name="image">
                            </div>
                        </div>
                    </div>

                    <div >
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Publicar" id="agregar" class="bnt btn-iw" style="border-radius: 5px;">
                            <a class="btn btn-iw btn-danger" href="{{route('articulos.index')}}">Regresar</a>
                        </div>
                    </div>

                </form>

            </div>

        </div>
        <!-- End Content Text-->
    </div>

</section>
<!-- End Section Area -  Content Central -->

@endsection

@section('js')


<!-- <script src="{{asset('plugins/ckeditor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('plugins/ckeditor/ckeditor/styles.js')}}"></script> -->

<!-- Summernote -->
<script src="/js/summernote-bs4.min.js"></script>

<!-- Select2 -->
<script src="/js/select2/js/select2.full.js"></script>

<!-- DropZone -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>

<script>

$(function () {
   

});

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

    // Dropzone
    // new Dropzone('.dropzone', {
    //     url:'/noticias/{noticia}/fotos',
    //     headers:{
    //         // 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
    //         'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //     },
    //     dictDefaultMessage: 'Arrastre las fotos aqui para subirlas'
    // });
    
    // Dropzone.autoDiscover = false;

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4',
      tags: true

    });

    </script>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    // CKEDITOR.replace( 'editor1' );
</script>

<script>
    // Selectores Multiples
    // $(".chosen-select").chosen({
    //     disable_search_threshold: 10,
    //     placeholder_text_multiple: 'Seleccione las etiquetas',
    //     max_selected_options: 5,
    //     search_contains: true,
    //     no_results_text: 'No se encontro etiqueta',
    // });

    // $(".select-categoria").chosen({
    //     placeholder_text_single: 'Selecciones una categoría'
    // });
</script>

@endsection

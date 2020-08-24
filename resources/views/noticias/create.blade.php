@extends('layouts.app')

@section('css')
<!-- bootstram Wysihtml5 -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-0.0.2.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-wysihtml5/libs/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-wysihtml5/libs/css/bootstrap-responsive.min.css')}}"/> -->

<!-- CKeditor -->

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
                    <div class="form-group">
                        <label for="titulo" class="control-label col-sm-2">Título</label>
                        <input type="text" class="form-control" name="titulo" require placeholder="Título del Artículo">
                    </div>

                    <div class="form-group">
                        <!-- <label for="titulo" class="control-label col-sm-2">Contenido</label> -->
                        <!-- <textarea id="text-area" name="contenido" class="textarea wysihtml5-editor placeholder" rows="5" marginwidth="0" marginheight="0" contenteditable="true" spellcheck="true" style="background-color: rgb(255, 255, 255); color: rgb(85, 85, 85); cursor: text; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 18px; letter-spacing: normal; text-align: start; text-decoration: none solid rgb(85, 85, 85); text-indent: 0px; text-rendering: auto; word-break: normal; overflow-wrap: break-word; word-spacing: 0px;"></textarea> -->
                        <textarea name="contenido" id="editor1" rows="20" cols="80">
                        </textarea>
                    </div>

                    <div class="col-sm-4 col-md-8 ">

                        <div class="form-group control-label col-sm-2 col-md-6">
                            <label for="categoria">Categoría</label>
                            <select class="form-control select-categoria" name="categoria_id" id="id_categoria">
                                <option disabled selected>Seleccione</option>
                                @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group control-label col-sm-2 col-md-6">
                            <label for="categoria">Etiquetas</label>
                            <select class="form-control chosen-select" multiple data-actions-box="true" name="etiquetas[]" id="id_etiquetas">
                                @foreach($etiquetas as $etiqueta)
                                <option value="{{$etiqueta->id}}">{{$etiqueta->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group" class="control-label">
                        <!-- <label for="imagen">Imagen</label> -->
                        <input type="file" name="image">
                    </div>

                    <div class="form-group">
                        <div class="offset-sm-2 col-sm-10">
                            <!-- <button type="submit">enviar</button> -->
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

<!-- <script src="{{asset('plugins/bootstrap-wysihtml5/libs/js/jquery-1.7.1.min.js')}}"></script> -->
    <!-- <script src="{{asset('plugins/bootstrap-wysihtml5/libs/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-wysihtml5/libs/js/wysihtml5-0.3.0_rc2.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-0.0.2.min.js')}}"></script>


<script type="text/javascript">
	$('#text-area').wysihtml5({
    "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
	"emphasis": true, //Italics, bold, etc. Default true
	"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
	"html": false, //Button which allows you to edit the generated HTML. Default false
	"link": true, //Button to insert a link. Default true
	"image": true, //Button to insert an image. Default true,
    "color": true //Button to change color of font  
});
</script> -->

<script src="{{asset('plugins/ckeditor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('plugins/ckeditor/ckeditor/styles.js')}}"></script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
</script>

<script>
    // Selectores Multiples
    $(".chosen-select").chosen({
        disable_search_threshold: 10,
        placeholder_text_multiple: 'Seleccione las etiquetas',
        max_selected_options: 5,
        search_contains: true,
        no_results_text: 'No se encontro etiqueta',
    });

    $(".select-categoria").chosen({
        placeholder_text_single: 'Selecciones una categoría'
    });
</script>

<script>
    // Plugins para el textarea
    // $('.text-area').trumbowyg();
</script>
@endsection

@extends('layouts.app')

@section('css')
    
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
                    <div class="form-group">
                        <label for="titulo" class="control-label col-sm-2">Título</label>
                        <input type="text" class="form-control" name="titulo" require value="{{$articulo->titulo}}">
                    </div>

                    <div class="">
                        <!-- <textarea id="markdown" class="text-area" name="contenido" cols="100" rows="20" value="{{$articulo->contenido}}"></textarea> -->
                        <input type="textarea" class="text-area" name="contenido" value="{{$articulo->contenido}}">
                        <!-- <textarea value="{{$articulo->contenido}}" id="text-area" name="contenido" class="textarea wysihtml5-editor placeholder" rows="5" marginwidth="0" marginheight="0" contenteditable="true" spellcheck="true" style="background-color: rgb(255, 255, 255); color: rgb(85, 85, 85); cursor: text; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 18px; letter-spacing: normal; text-align: start; text-decoration: none solid rgb(85, 85, 85); text-indent: 0px; text-rendering: auto; word-break: normal; overflow-wrap: break-word; word-spacing: 0px;"></textarea> -->
                    </div>

                    <div class="col-sm-4 col-md-8 ">

                        <div class="form-group control-label col-sm-2 col-md-6">
                            <label for="categoria">Categoría</label>
                            <select class="form-control select-categoria" name="categoria_id" id="id_categoria">
                                <option value="">Seleccione</option>
                                @foreach($categorias as $categoria)
                                <option value="{{$categoria->id }} " @if($categoria->id === $articulo->categoria->id)
                                    {{ 'selected' }}
                                    @endif>{{$categoria->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class=" form-group control-label col-sm-2 col-md-6">
                            <label for="categoria">Etiquetas</label>
                            <select class="form-control chosen-select" multiple data-actions-box="true" name="etiquetas[]" id="id_etiquetas">
                                <option value=""></option>
                                @foreach($etiquetas as $etiqueta)
                                <option value="{{$etiqueta->id}}">{{$etiqueta->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- <div class="form-group" class="control-label">
                        <input type="file" name="image">
                    </div> -->

                    <div class="form-group">
                        <div class="offset-sm-2 col-sm-10">
                            <!-- <button type="submit">enviar</button> -->
                            <input type="submit" value="Editar" id="editar" class="bnt btn-iw" style="border-radius: 5px;">
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
    $('.text-area').trumbowyg();
</script>


@endsection

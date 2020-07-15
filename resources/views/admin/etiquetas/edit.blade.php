@extends('layouts.app')

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
                <h4>Registrar Etiquetas.</h4>
            </div>

            @include('layouts.errores')

            <div class="info-panel">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="lead">Complete los campos requeridos para editar una etiqueta</p>
                    </div>
                </div>

                <form method="POST" action="{{route('EtiquetaUpdate', $etiqueta->id)}}" id="EtiquetaUpdate" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nombre" class="control-label col-sm-2">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" class="form-control" value="{{$etiqueta->name}}" required="">
                        </div>
                    </div>

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

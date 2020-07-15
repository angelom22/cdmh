@extends('layouts.app')

@section('content')

<!-- menu content -->
@include('layouts.menu-2')
<!-- menu content -->

<section class="content-info">

    <div class="container paddings">
        <!-- Content Text-->
        <div class="panel-box block-form">
            <div class="titles text-center">
                <h4>Registrar Categoria.</h4>
            </div>

            @include('layouts.errores')

            <div class="info-panel">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="lead">Complete los campos requeridos para registrar una categoría</p>
                    </div>
                </div>

                <form method="POST" action="{{route('categorias.store')}}" id="CategoriasCreate" enctype="multipart/form-data">
                    @method('post')
                    @csrf

                    <div class="form-group">
                        <label for="nombre" class="col-sm-2">Categoría</label>
                        <div class="col-sm-10">
                            <input type="text" id="id_nameCategoria" name="name" class="form-control" placeholder="Nombre de la Categoría" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Agregar" id="agregar" class="bnt btn-iw" style="border-radius: 5px;">
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

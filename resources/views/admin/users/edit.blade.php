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
                <h4>Editar Usuario.</h4>
            </div>

            @include('layouts.errores')

            <div class="info-panel">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="lead">Complete los campos requeridos para el editar de un usuario</p>
                    </div>
                </div>

                <form method="POST" action="{{route('usuarios.update',$user->id)}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nombre" class="control-label col-sm-2">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" id="id_name" name="name" class="form-control" value="{{$user->name}}" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ermail" class="control-label col-sm-2">Correo</label>
                        <div class="col-sm-10">
                            <input type="email" id="id_ermail" name="email" class="form-control" value="{{$user->email}}" required="">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="pass" class="control-label col-sm-2">Contraseña</label>
                        <div class="col-sm-10">
                            <input placeholder="Contraseña" type="password" id="password" name="password" class="form-control" required="">
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label for="pass" class="control-label col-sm-2">Tipo Usuario</label>
                        <div class="col-sm-10">
                            <select class="form-control" required="" name="type" id="id_tipo" ">
                                <option value=" {{$user->type}}"@if($user->type)
                                {{'selected'}}
                                @endif
                                >{{$user->type}}</option>
                                <option value="miembro">miembro</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                    </div>


                    <div class=" form-group">
                        <div class="offset-sm-2 col-sm-10">
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

<!--Seccion JS -->
@section('js')
<!-- Scripts Personales -->
<script src="{{ asset('js/user.js') }}"></script>
@endsection

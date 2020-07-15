@extends('layouts.app')

@section('content')

<!-- menu content -->
@include('layouts.menu-2')
<!-- menu content -->

<!-- Section Area - Content Central -->
<section class="content-info">
    <div class="container paddings">
        <!-- Content Text-->
        @include('flash::message')
        <div class="panel-box block-form">
            <div class="titles text-center">
                <h4>Etiquetas</h4>
            </div>
            <a href="{{route('EtiquetaCreate')}}" class="btn btn-info">Nuevo Etiqueta</a>

            <!-- Buscador de etiquetas -->
            <form method="GET" class="navbar-from pull-right" action="{{route('etiquetas.index')}}">
                <div class="input-group">
                    <input name="name" type="text" class="form-control" placeholder="Buscador..." aria-describedby="search" required="required">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit" name="subscribe">@</button>
                    </span>
                </div>
            </form>

            <!-- fin Buscador -->
            <br>
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    @foreach($etiquetas as $etiqueta)
                    <tr>
                        <td>{{ $etiqueta->id}}</td>
                        <td>{{ $etiqueta->name}}</td>
                        <td>
                            <a href="{{route('EtiquetaEdit',  $etiqueta->id )}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench">Editar</span>
                            </a>
                            <a href="{{route('etiquetas.destroy', $etiqueta->id )}}" onclick="return confirm('¿Esta seguro que desea eliminar?')" class=" btn btn-danger"><span class="glyphicon glyphicon-remove-circle">Eliminar</span>
                            </a>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{ $etiquetas->links() }}
            </div>

        </div>
</section>


@endsection

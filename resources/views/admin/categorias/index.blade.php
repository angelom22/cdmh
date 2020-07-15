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
                <h4>Categorias Registradas</h4>
            </div>
            <a href="{{route('CategoriaCreate')}}" class="btn btn-info">Nueva Categoría</a>
            <br>
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nombre Categoría</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->name }}</td>

                        <td>
                            <a href="{{route('CategoriaEdit',  $categoria->id )}}" class=" btn btn-warning "><span class=" glyphicon glyphicon-wrench">Editar</span>
                            </a>

                            <a href="{{route('categorias.destroy', $categoria->id )}}" onclick="return confirm('¿Esta seguro que desea eliminar?')" class=" btn btn-danger"><span class="glyphicon glyphicon-remove-circle">Eliminar</span>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $categorias->links() }}
        </div>
</section>

@endsection

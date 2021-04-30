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
            <hr>
            <table id="categorias" class="table table-dark table-bordered table-striped shadow-lg mt-4" style="width:100%">
                <thead class=" text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->name }}</td>

                        <td>
                            <a href="{{route('CategoriaEdit',  $categoria->id )}}" class=" btn btn-primary "><span class=" glyphicon glyphicon-wrench">Editar</span>
                            </a>

                            <a href="{{route('categorias.destroy', $categoria->id )}}" onclick="return confirm('¿Esta seguro que desea eliminar?')" class=" btn btn-danger"><span class="glyphicon glyphicon-remove-circle">Eliminar</span>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- {{ $categorias->links() }} -->
        </div>
</section>

@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@endsection


@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#categorias').DataTable({
                "lengthMenu": [[5,10,-1], [5,10,50,"All"]]
            });
        } );
    </script>
@endsection
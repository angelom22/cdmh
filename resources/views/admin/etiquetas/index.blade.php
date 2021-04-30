@extends('layouts.app')

@section('content')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@endsection

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
            <!-- <form method="GET" class="navbar-from pull-right" action="{{route('etiquetas.index')}}">
                <div class="input-group">
                    <input name="name" type="text" class="form-control" placeholder="Buscador..." aria-describedby="search" required="required">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit" name="subscribe">@</button>
                    </span>
                </div>
            </form> -->

            <!-- fin Buscador -->
            <br>
            <hr>
            <table id="etiquetas" class="table table-dark table-bordered table-striped shadow-lg mt-4" style="width:100%">
                <thead class=" text-white">
                    <tr>
                        <!-- <th scope="col">ID</th> -->
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach($etiquetas as $etiqueta)
                    <tr>
                        <td>{{ $etiqueta->id}}</td>
                        <td>{{ $etiqueta->name}}</td>
                        <td>
                            <a href="{{route('EtiquetaEdit',  $etiqueta->id )}}" class="btn btn-primary"><span class="glyphicon glyphicon-wrench">Editar</span>
                            </a>
                            <a href="{{route('etiquetas.destroy', $etiqueta->id )}}" onclick="return confirm('¿Esta seguro que desea eliminar?')" class=" btn btn-danger"><span class="glyphicon glyphicon-remove-circle">Eliminar</span>
                            </a>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                <!-- {{ $etiquetas->links() }} -->
            </div>

        </div>
</section>


@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#etiquetas').DataTable({
                "lengthMenu": [[5,10,-1], [5,10,50,"All"]]
            });
        } );
    </script>
@endsection
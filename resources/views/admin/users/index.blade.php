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
                <h4>Usuarios Registrados</h4>
            </div>
            <a href="{{route('usuarios.create')}}" class="btn btn-info">Nuevo Usuario</a>
            <br>
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Tipo</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email}}</td>
                        <td>
                            @if($user->type == "admin")
                            <span class="label label-danger">Administrador</span>
                            @else($user->type == "miembro")
                            <span class="label label-primary">miembro</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{route('usuarios.edit',  $user->id )}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench">Editar</span>
                            </a>
                            <form style="display:inline" method="DELETE" action="{{route('usuarios.destroy', $user->id)}}">
                                <button onclick="return confirm('¿Esta seguro que desea eliminar?')" class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $users->links() }}
        </div>
</section>

@endsection

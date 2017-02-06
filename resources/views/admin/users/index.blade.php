@extends('layout')
@section('title','Listado de Usuarios' )

@section('content')
    <a href="{{ route('admin.users.create') }}" class="btn btn-info">Crear nuevo Usuario</a>
    <br>


    <!-- Inicio Buscador de Profesiones -->
    {!! Form::open(['route' => 'admin.users.index','method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
            <div class="input-group">
                {!! Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Buscar Usuario...','aria-describedby'=>'search']) !!}
                <span class="input-group-addon" id="search">
                    <span class="glyphicon glyphicon-search" aria-hidden="true">
                    </span>
                </span>
            </div>
    {!! Form::close() !!}

    <!-- Fin Buscador de Profesiones -->
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>email</th>
            <th>Tipo de usuario</th>
            <th>Acción</th>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @if ($user->type == "admin")
                        <span class="label label-danger">{{$user->type}}</span>
                    @else
                        <span class="label label-primary">{{$user->type}}</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-warning">
                        <i class="fa fa-edit" aria-hidden="true"></i> Editar

                    </a>
                    <a href="{{ route('admin.users.destroy',$user->id) }}" onclick="return confirm('Seguro que desea eliminar el usuario?')" class="btn btn-danger">
                        <i class="fa fa-minus-square" aria-hidden="true"></i> Eliminar

                    </a>
                     <a href="{{ route('admin.users.show',$user->id) }}" class="btn btn-success">
                         <i class="fa fa-eye fa-lg" aria-hidden="true"></i> Mostrar

                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users->render() !!}
@endsection

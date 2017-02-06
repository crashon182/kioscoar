@extends('layout')
@section('title','Listado de Condiciones' )

@section('content')
    <a href="{{ route('admin.revistas.create') }}" class="btn btn-info">Crear nueva Revista</a>
    <br>
    <h3>Total de Registros encontrados: {{$count}}</h3>

    <!-- Inicio Buscador de Profesiones -->
    {!! Form::open(['route' => 'admin.revistas.index','method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
            <div class="input-group">
                {!! Form::text('titulo',null,['class' => 'form-control', 'placeholder' => 'Buscar Revista...','aria-describedby'=>'search']) !!}
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
            <th>Acción</th>
        </thead>
        <tbody>
        @foreach($magazines as $magazine)

            <tr>
                <td>{{$magazine->id}}</td>
                <td>{{$magazine->titulo}}</td>
                <td>
                    <a href="{{ route('admin.revistas.edit',$magazine->id) }}" class="btn btn-warning">
                        <i class="fa fa-edit" aria-hidden="true"></i> Editar

                    </a>
                    <a href="{{ route('admin.revistas.destroy',$magazine->id) }}" onclick="return confirm('Seguro que desea eliminarlo?')" class="btn btn-danger">
                        <i class="fa fa-minus-square" aria-hidden="true"></i> Eliminar

                    </a>
                     <a href="{{ route('admin.revistas.show',$magazine->id) }}" class="btn btn-success">
                         <i class="fa fa-eye fa-lg" aria-hidden="true"></i> Mostrar

                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $magazines->render() !!}
@endsection

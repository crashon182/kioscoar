@extends('layout')
@section('title','Agregar Condición')

@section('content')
    {!! Form::open(['route' => 'admin.tags.store','method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el Tag...','required']) !!}
        </div>




    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@endsection

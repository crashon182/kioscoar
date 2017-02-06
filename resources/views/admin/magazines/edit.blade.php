@extends('layout')
@section('title','Editar Revista: ' . $magazine->name)

@section('content')
    {!! Form::open(['route' => ['admin.revistas.update',$magazine],'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::label('titulo','Titulo') !!}
        {!! Form::text('titulo',$magazine->titulo,['class'=>'form-control','placeholder'=>'Ingrese el titulo de la publicación...','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Tapa','Tapa') !!}
        {!! Form::file('imagen') !!}
    </div>
    <div class="form-group">
        {!! Form::label('numero','numero') !!}
        {!! Form::text('numero',$magazine->numero,['class'=>'form-control','placeholder'=>'Ingrese el titulo de la publicación...','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('fecha','Fecha de Publicación') !!}
        {!! Form::date('fecha',$magazine->fecha,['class'=>'form-control','placeholder'=>'Ingrese el titulo de la publicación...']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Categoria') !!}
        {!! Form::select('category_id',$category,$magazine->category_id,['class'=>'form-control','placeholder'=>'Seleccione Categoria...','required']) !!}
    </div>



    <div class="form-group">
        {!! Form::label('tag_id','Colección') !!}
        {!! Form::select('tag_id',$tag,$magazine->tag_id,['class'=>'form-control select-tag','placeholder'=>'Seleccione Tag...','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('embebed','Codigo Embebido') !!}
        {!! Form::textarea('embebed',$magazine->embebed,['placeholder'=>'Ingrese el titulo de la publicación...','class' => 'ckeditor','required']) !!}

    </div>
    <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@endsection
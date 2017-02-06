@extends('layout')
@section('title','Agregar Condición')

@section('content')
    {!! Form::open(['route' => 'admin.revistas.store','method' => 'POST','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('titulo','Titulo') !!}
            {!! Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingrese el titulo de la publicación...','required']) !!}
        </div>

         <div class="form-group">
            {!! Form::label('Tapa','Tapa') !!}
            {!! Form::file('imagen') !!}
        </div>
         <div class="form-group">
            {!! Form::label('numero','numero') !!}
            {!! Form::text('numero',null,['class'=>'form-control','placeholder'=>'Ingrese el titulo de la publicación...','required']) !!}
        </div>
         <div class="form-group">
            {!! Form::label('fecha','Fecha de Publicación') !!}
            {!! Form::date('fecha',null,['class'=>'form-control','placeholder'=>'Ingrese el titulo de la publicación...']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id','Categoria') !!}
            {!! Form::select('category_id',$categories,null,['class'=>'form-control','placeholder'=>'Seleccione Categoria...','required']) !!}
        </div>



    <div class="form-group">
        {!! Form::label('tag_id','Tag') !!}
        {!! Form::select('tag_id',$tags,null,['class'=>'form-control select-tag','placeholder'=>'Seleccione Tag...','required']) !!}
    </div>
         <div class="form-group">
            {!! Form::label('embebed','Codigo Embebido') !!}
            {!! Form::textarea('embebed',null,['placeholder'=>'Ingrese el titulo de la publicación...','class' => 'ckeditor','required']) !!}

        </div>


    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


@endsection

@section('js')

        <script>
        $('.select-tag').chosen({
            placeholder_text_single: "Seleccione un Tag"
        })
    </script>

@endsection
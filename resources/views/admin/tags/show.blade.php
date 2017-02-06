@extends('layout')
@section('title','Revistas' )

@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">Datos Personales</div>
        <div class="panel-body">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td>Titulo</td>
                    <td>{{$magazine->titulo}}</td>
                </tr>


                </tbody>
            </table>
            <div class="row">
              <div class="col-lg-4">
              </div>
              <div class="col-lg-4">

                 {!!$magazine->embebed!!}
            </div>
            <div class="col-lg-4">
            </div>
          </div>
        </div>
    </div>





    <a href="{{ route('admin.revistas.index') }}" class="btn btn-info">Volver al listado de revistas</a>
    <br>


    <!-- Inicio Buscador de Profesiones -->


    <!-- Fin Buscador de Profesiones -->

@endsection

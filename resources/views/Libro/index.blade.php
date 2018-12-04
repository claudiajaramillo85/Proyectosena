@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Portatiles</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('equipo.create') }}" class="btn btn-info" >Añadir Portatiles</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Codigo De Barras Equipo</th>
               <th>Marca Portatil</th>
               <th>Referencia Portatil</th>
               <th>Serial Portatil</th>
               <th>Serial Cargador</th>
               <th>Novedades</th>
               <th>Disponibilidad</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($equipos->count())  
              @foreach($equipos as $equipo)  
              <tr>
                <td>{{$equipo->codigo_barras_equipo}}</td>
                <td>{{$equipo->marca_portatil}}</td>
                <td>{{$equipo->referencia_portatil}}</td>
                <td>{{$equipo->serial_portatil}}</td>
                <td>{{$equipo->serial_cargador}}</td>
                <td>{{$equipo->novedades}}</td>
                <td>{{$equipo->disponibilidad}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('EquipoController@edit', $equipo->id_equipo)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('EquipoController@destroy', $equipo->id_equipo)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
      {{ $equipos->links() }}
    </div>
  </div>
</section>

@endsection
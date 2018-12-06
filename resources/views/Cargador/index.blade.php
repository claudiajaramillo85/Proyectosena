@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Cargador</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('equipo.create') }}" class="btn btn-info" >Añadir Cargador</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Serial Cargador</th>
               <th>Novedades</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($cargadores->count())  
              @foreach($cargadores as $cargador)  
              <tr>
                <td>{{$cargador->serial_cargador}}</td>
                <td>{{$cargador->novedades}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('CargadorController@edit', $cargador->id_cargador)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('CargadorController@destroy', $cargador->id_cargador)}}" method="post">
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
      {{ $cargadores->links() }}
    </div>
  </div>
</section>

@endsection
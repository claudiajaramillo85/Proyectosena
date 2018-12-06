@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Instructores</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('instructor.create') }}" class="btn btn-info" >Añadir Instructores</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Cedula</th>
               <th>E-mail</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($instructores->count())  
              @foreach($instructores as $instructor)  
              <tr>
                <td>{{$instructor->nombre}}</td>
                <td>{{$instructor->apellido}}</td>
                <td>{{$instructor->cedula}}</td>
                <td>{{$instructor->email}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('InstructorController@edit', $instructor->id_instructor)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('InstructorController@destroy', $instructor->id_instructor)}}" method="post">
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
      {{ $instructores->links() }}
    </div>
  </div>
</section>

@endsection
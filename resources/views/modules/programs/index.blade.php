@extends('adminlte::page')

@section('content_header')
    <h1>Programas</h1>
@stop

@section('content')
<div class="col-12 mb-2">
  @can('programs.create')
    <a class="btn btn-success" href="{{ route('programs.create') }}">Crear Programa</a>  
  @endcan
</div>
<div class="col-12">
  @include('layout.flash-message')
</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Area</th>
        <th scope="col">Fecha Inicio</th>
        <th scope="col">Fecha Fin</th>
        <th scope="col">Estado</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @if (isset($programs))
        
     @foreach ($programs as $program) {{--le estoy diciendo al modelo que me traiga de la db los datos --}}
        <tr>
          <td>{{ $program->name }}</td>
          <td>{{ $program->description }}</td>
          <td>{{ $program->area->name}}</td> {{--estoy trayendo el nombre del area desde el modelo prgram por la realcion que tienen los dos --}}
          <td>{{ $program->start_date }}</td>
          <td>{{ $program->end_date }}</td>
          <td>{{ $program->active ? "Activo" : "Inactivo" }}</td>
          <td>
              <div>
                <form method="POST" action="{{ route('programs.destroy',$program->id) }}">
                  @csrf
                  @method('DELETE')
                  @can('programs.update')
                    <a class="btn btn-warning" href="{{ route('programs.edit',['program'=>$program]) }}"><i class="fas fa-edit"></i></a>
                  @endcan
                  @can('programs.delete')
                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                  @endcan  
                    <a class="btn btn-info" href="{{ route('instructorProgram.instructorProgram',['program'=>$program->id]) }}"><i class="fas fa-swimmer"></i></a>
                    <a href="{{ route('cityProgram.edit',['program'=>$program->id]) }}" class="btn btn-success"><i class="fas fa-map-marked-alt"></i></a>
                  </form>
              </div>
          </td>
        </tr>
        @endforeach

        @endif
    </tbody>
  </table>
@endsection
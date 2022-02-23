@extends('adminlte::page')
@can('activities.read')
@section('content_header')
    <h1>Actividades</h1>
@stop
@endcan
@section('content')
<div class="mb-4">
  @can('activities.create')
  <a href="{{route('activities.create')}}" class="btn btn-success">Crear Actividad</a>
  @endcan
<div class="col-12 mb-2">
  <a class="btn btn-info" style="float:right" href="{{ route('/export/activities') }}">Excel</a>  
</div>
</div>
<div class="col-12">
  @include('layout.flash-message')
</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Programa</th>
        <th scope="col">Fecha de inicio</th>
        <th scope="col">Fecha de finalización</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($activities as $activity)
        <tr>
          <td>{{ $activity->name }}</td>
          <td>{{ $activity->program->name}} </td>
          <td>{{ $activity->start_date }}</td>
          <td>{{ $activity->end_date }}</td>
          <td>
            <div>
              <form method="POST" action="{{ route('activities.destroy',$activity->id) }}">
                @csrf
                @method('DELETE')
                  @can('activities.update')
                    <a class="btn btn-warning" href="{{ route('activities.edit',['activity'=>$activity->id]) }}">Editar</a>
                    <a class="btn btn-info" href="{{ route('assistance.edit',['assistance'=>$activity->assistance->id]) }}">Asistencia</a>
                  @endcan
                  @can ('activities.delete')
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  @endcan
                </form>
            </div>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
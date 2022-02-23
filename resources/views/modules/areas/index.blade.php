@extends('adminlte::page')

@section('content_header')
    <h1>Areas</h1>
@stop
 
@section('content')
<div class="mb-4">
  @can('areas.create')
  <a href="{{route('areas.create')}}" class="btn btn-success">Crear Area</a>
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
        <th scope="col">Estado</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($areas as $area)
        <tr>
          <td>{{ $area->name }}</td>
          <td>{{ $area->description ?? "Sin descripción" }} </td>
          @if ( $area->active )
            <td>Activo</td>
          @else
            <td>Inactivo</td>  
          @endif
          <td>
            <div>
              <form method="POST" action="{{ route('areas.destroy',$area->id) }}">
                @csrf
                @method('DELETE')
                  @can('areas.update')
                    <a class="btn btn-warning" href="{{ route('areas.edit',['area'=>$area]) }}">Editar</a>
                  @endcan
                  @can('areas.delete')
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
@extends('adminlte::page')

@section('content_header')
    <h1>Cargos</h1>
@stop

@section('content')
<div class="col-12 mb-2">
  @can('positions.create')
  <a class="btn btn-success" href="{{ route('positions.create') }}">Crear Cargo</a>  
  @endcan
  
</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Cargo</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($positions as $position)
        <tr>
          <td>{{ $position->name }}</td>
          <td>
              <div>
                {{-- <a class="btn btn-danger" href="{{ route('positions.destroy',['position'=>$position->id]) }}">Eliminar</a> --}}
                @can('positions.delete')
                  <form method="POST" action="{{ route('positions.destroy',$position->id) }}">  
                @endcan
                  @csrf
                  @method('DELETE')
                  @can('positions.update')
                  <a class="btn btn-warning" href="{{ route('positions.edit',['position'=>$position]) }}">Editar</a> 
                  @endcan
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
              </div>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
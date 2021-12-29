@extends('adminlte::page')

@section('content_header')
    <h1>Cargos</h1>
@stop

@section('content')
<div class="col-12 mb-2">
  <a class="btn btn-success" href="{{ route('positions.create') }}">Crear Cargo</a>
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
                <form method="POST" action="{{ route('positions.destroy',$position->id) }}">
                  @csrf
                  @method('DELETE')

                    <a class="btn btn-warning" href="{{ route('positions.edit',['position'=>$position]) }}">Editar</a>
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                  </form>
              </div>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
@extends('adminlte::page')

@section('content_header')
    <h1>Usuarios</h1>
@stop
 
@section('content')
<div class="mb-4">
  <a href="{{route('users.create')}}" class="btn btn-success">Crear Usuario</a>
</div>
<div class="col-12">
  @include('layout.flash-message')
</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Cargo</th>
        <th scope="col">Correo</th>
        <th scope="col">Estado</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->name }} {{ $user->last_name }} {{ $user->second_last_name}}</td>
          <td>{{ $user->position->name }}</td>
          <td>{{ $user->email }}</td>
          @if ( $user->active )
            <td>Activo</td>
          @else
            <td>Inactivo</td>  
          @endif
          <td>
            <div>
              <form method="POST" action="{{ route('users.destroy',$user->id) }}">
                @csrf
                @method('DELETE')

                  <a class="btn btn-warning" href="{{ route('users.edit',['user'=>$user]) }}">Editar</a>
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </div>
          </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
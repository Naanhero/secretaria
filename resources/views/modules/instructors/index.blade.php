@extends('adminlte::page')

@section('content_header')
    <h1>Instructores</h1>
@stop
 
@section('content')
<div class="col-12">
  @include('layout.flash-message')
</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Estado</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($instructors as $instructor)
        <tr>
          <td>{{ $instructor->name }} {{ $instructor->last_name }} {{ $instructor->second_last_name}}</td>
          <td>{{ $instructor->email }}</td>
          @if ( $instructor->active )
            <td>Activo</td>
          @else
            <td>Inactivo</td>  
          @endif
          <td>
            <div>
                @can('instructors.update')
                <a class="btn btn-success" href="{{ route('instructors.edit',['instructor'=>$instructor]) }}">Administrar Grupos</a>
                @endcan               
            </div>
          </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
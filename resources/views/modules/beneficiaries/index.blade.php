@extends('adminlte::page')

@section('content_header')
    <h1>Beneficiarios</h1>
@stop

@section('content')
<div class="col-12 mb-2">
  @can('beneficiaries.create')
  <a class="btn btn-success" href="{{ route('beneficiaries.create') }}">Crear Beneficiario</a>  
  @endcan
</div>
<div class="col-12">
  @include('layout.flash-message')
</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Edad</th>
        <th scope="col">Email</th>
        <th scope="col">Estado</th>
        <th scope="col">Fecha</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @if (isset($beneficiaries))
        
        @foreach ($beneficiaries as $beneficiary)
        <tr>
          <td>{{ $beneficiary->name }} {{ $beneficiary->last_name }} {{ $beneficiary->second_last_name }}</td>
          <td>{{ $beneficiary->age }}</td>
          <td>{{ $beneficiary->email }}</td>
          <td>{{ $beneficiary->active ? "Activo" : "Inactivo" }}</td>
          <td>{{ $beneficiary->created_at }}</td>
          <td>
              <div>
                {{-- <a class="btn btn-danger" href="{{ route('positions.destroy',['position'=>$beneficiary->id]) }}">Eliminar</a> --}}
                <form method="POST" action="{{ route('beneficiaries.destroy',$beneficiary->id) }}">
                  @csrf
                  @method('DELETE')
                    @can('beneficiaries.update')
                      <a class="btn btn-warning" href="{{ route('beneficiaries.edit',['beneficiary'=>$beneficiary]) }}">Editar</a>
                    @endcan
                    @can('beneficiaries.delete')
                      <button class="btn btn-danger" type="submit">Eliminar</button>
                    @endcan
                  </form>
              </div>
          </td>
        </tr>
        @endforeach

        @endif
    </tbody>
  </table>
@endsection
@extends('adminlte::page')

@section('content_header')
    <h1>Crear Cargo</h1>
@stop

@section('content')
<div class="col-12">
    @can('positions.create')
        <form action="{{ route('positions.store') }}" method="post">  
    @endcan
        @csrf
        <div class="form-row align-items-center">
            <div class="col-sm-3 my-1">
                <label class="sr-only" for="inlineFormInputName">Nombre del cargo</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese un cargo">
            </div>
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>

@endsection
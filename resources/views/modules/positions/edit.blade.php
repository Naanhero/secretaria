@extends('adminlte::page')

@section('content_header')
    <h1>Editar Cargo</h1>
@stop

@section('content')
<div class="col-12">
    <form action="{{ route('positions.update',$position->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-row align-items-center">
            <div class="col-sm-3 my-1">
                <label class="sr-only" for="inlineFormInputName">Nombre del cargo</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $position->name }}">
            </div>
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
</div>

@endsection
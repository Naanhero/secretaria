@extends('adminlte::page')

@section('content_header')
    <h1>Editar Actividad</h1>
@stop

@section('content')
<div class="col-12">
    @include('layout.flash-message')
</div>
<div class="col-12">
    @can('activities.update')
        <form action="{{ route('activities.update', $activity->id) }}" method="post"> {{--store guarda en la db--}}
    @endcan
        @csrf 
        @method('put')
        <div class="form-row align-items-center">
            <div class="col-sm-4 my-1">
                <label for="inlineFormInputName">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$activity->name) }}">
                @error('name')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Fecha de inicio</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $activity->start_date->format('Y-m-d')) }}">
                @error('start_date')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Fecha de Finalización</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $activity->end_date->format('Y-m-d'))}}">
                @error('end_date')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-4">
                <label for="inputState">Programa</label>
                <select id="program_id" name="program_id"  class="form-control" value="{{ old('program_id') }}">
                    @foreach ($programs as $program)
                        <option value="{{ $program->id }}" {{ $program->id == $activity->program_id ? 'selected' : '' }}>{{ $program->name }}</option>      
                    @endforeach
                </select>
                @error('program_id')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            {{-- <div class="form-group col-sm-4"> 
                <label for="inputState">Estado</label>
                <select id="active" name="active" class="form-control" value="{{ old('active') }}">
                  <option selected value="1">Activo</option>
                  <option value="0">Inactivo</option>
                </select>
                @error('active')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>--}}
        </div>
        <div class="col-sm-8 my-4">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>

@endsection
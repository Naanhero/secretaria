@extends('adminlte::page')

@section('content_header')
    <h1>Editar Programa</h1>
@stop

@section('content')
    <div class="col-12">
        @include('layout.flash-message')
    </div>
    <div class="col-12">
        @can('programs.update')
            <form action="{{ route('programs.update', $program->id) }}" method="post"> {{-- store guarda en la db --}}
        @endcan
            @csrf
            @method('PUT')

            <div class="form-row align-items-center">
                <div class="col-sm-12 my-1">
                    <label for="inlineFormInputName">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $program->name) }}">
                    @error('name')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-sm-4">
                    <label for="inputState">Area</label>
                    <select id="area_id" name="area_id" class="form-control"
                        value="{{ old('area_id', $program->area_id) }}">
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}" {{ $area->id == $program->area_id ? 'selected' : '' }}>
                                {{ $area->name }}</option>
                        @endforeach
                    </select>
                    @error('area_id')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="col-sm-4 my-1">
                    <label for="inlineFormInputName">Fecha de inicio</label>
                    <input type="date" class="form-control" id="start_date" name="start_date"
                        value="{{ old('start_date', $program->start_date->format('Y-m-d')) }}">
                    @error('start_date')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="col-sm-4 my-1">
                    <label for="inlineFormInputName">Fecha de Finalizaci??n</label>
                    <input type="date" class="form-control" id="end_date" name="end_date"
                        value="{{ old('end_date', $program->end_date->format('Y-m-d')) }}">
                    @error('end_date')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-sm-4">
                    <label for="inputState">Estado</label>
                    <select id="active" name="active" class="form-control"
                        value="{{ old('active', $program->active) }}">
                        <option {{ $program->active ? 'selected' : '' }} value="1">Activo</option>
                        <option {{ !$program->active ? 'selected' : '' }} value="0">Inactivo</option>
                    </select>
                    @error('active')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-sm-12">
                    <label for="exampleFormControlTextarea1">Descripci??n</label>
                    <textarea class="form-control" id="description" name="description"
                        rows="3">{{ old('description', $program->description) }}</textarea>
                    @error('second_last_name')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>

@endsection

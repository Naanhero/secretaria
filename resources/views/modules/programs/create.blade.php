@extends('adminlte::page')

@section('content_header')
    <h1>Crear Programa</h1>
@stop

@section('content')
<div class="col-12">
    @include('layout.flash-message')
</div>
<div class="col-12">
    @can('programs.create')
        <form action="{{ route('programs.store') }}" method="post"> {{--store guarda en la db--}} 
    @endcan
        @csrf
        <div class="form-row align-items-center">
            <div class="col-sm-12 my-1">
                <label for="inlineFormInputName">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-4">
                <label for="inputState">Area</label>
                <select id="area_id" name="area_id"  class="form-control" value="{{ old('area_id') }}">
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->name }}</option>   
                    @endforeach
                </select>
                @error('area_id')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-4 my-1">
                <label for="inlineFormInputName">Fecha de inicio</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}">
                @error('start_date')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-4 my-1">
                <label for="inlineFormInputName">Fecha de Finalización</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date') }}">
                @error('end_date')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-4">
                <label for="inputState">Estado</label>
                <select id="active" name="active" class="form-control" value="{{ old('active') }}">
                  <option selected value="1">Activo</option>
                  <option value="0">Inactivo</option>
                </select>
                @error('active')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-4">
                <label for="inputState">Ciudad</label>
                <select id="city_id" name="city_id"  class="form-control" value="{{ old('city_id') }}">
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>   
                    @endforeach
                </select>
                @error('city_id')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-12">
                <label for="exampleFormControlTextarea1">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                  @error ('second_last_name')
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
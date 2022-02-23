@extends('adminlte::page')

@section('content_header')
    <h1>Crear Beneficiario</h1>
@stop

@section('content')
<div class="col-12">
    @include('layout.flash-message')
</div>
<div class="col-12">
    @can('beneficiaries.create')
        <form action="{{ route('beneficiaries.store') }}" method="post">  
    @endcan
        @csrf
        <div class="form-row align-items-center">
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error ('name')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Primer Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                @error ('last_name')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Segundo Apellido</label>
                <input type="text" class="form-control" id="second_last_name" name="second_last_name" value="{{ old('second_last_name') }}">
                @error ('second_last_name')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Celular</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                @error ('phone')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Direccion de Residencia</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                @error ('address')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Edad</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}">
                @error ('age')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-3">
                <label for="inputState">Género</label>
                <select id="gender_id" name="gender_id"  class="form-control" value="{{ old('gender_id') }}">
                    @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>   
                    @endforeach
                </select>
                @error ('gender_id')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-3">
                <label for="inputState">Ciudad</label>
                <select id="city_id" name="city_id" class="form-control" value="{{ old('city_id') }}">
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>   
                    @endforeach
                </select>
                @error ('city_id')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-3">
                <label for="inputState">Grupo Etnico</label>
                <select id="ethnic_group_id" name="ethnic_group_id" class="form-control" value="{{ old('ethnic_group_id') }}">
                    @foreach ($ethnicGroups as $ethnicGroup)
                        <option value="{{ $ethnicGroup->id }}">{{ $ethnicGroup->name }}</option>   
                    @endforeach
                </select>
                @error ('ethnic_group_id')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Correo Electronico</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error ('email')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-3">
                <label for="inputState">Estado</label>
                <select id="active" name="active" class="form-control" value="{{ old('active') }}">
                  <option selected value="1">Activo</option>
                  <option value="0">Inactivo</option>
                </select>
                @error ('active')
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
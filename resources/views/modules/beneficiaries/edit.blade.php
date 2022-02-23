@extends('adminlte::page')

@section('content_header')
    <h1>Editar Beneficiario</h1>
@stop

@section('content')
<div class="col-12">
    @can('beneficiaries.update')
        <form action="{{ route('beneficiaries.update',$beneficiary->id) }}" method="POST">    
    @endcan
        @csrf
        @method('PUT')
        
        <div class="form-row align-items-center">
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$beneficiary->name) }}">
                @error ('name')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Primer Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name',$beneficiary->last_name) }}">
                @error ('last_name')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Segundo Apellido</label>
                <input type="text" class="form-control" id="second_last_name" name="second_last_name" value="{{ old('second_last_name',$beneficiary->second_last_name) }}">
                @error ('second_last_name')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Celular</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone',$beneficiary->phone) }}">
                @error ('phone')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Direccion de Residencia</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address',$beneficiary->address) }}">
                @error ('address')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Edad</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ old('age',$beneficiary->age) }}">
                @error ('age')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-3">
                <label for="inputState">Género</label>
                <select id="gender_id" name="gender_id"  class="form-control" value="{{ old('gender_id',$beneficiary->gender_id) }}">
                    @foreach ($genders as $gender)
                        <option 
                            value="{{ $gender->id }}" 
                            {{ $gender->id == $beneficiary->gender_id ? 'selected' : '' }}
                        >{{ $gender->name }}</option>   
                    @endforeach
                </select>
                @error ('gender_id')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-3">
                <label for="inputState">Ciudad</label>
                <select id="city_id" name="city_id" class="form-control" value="{{ old('city_id',$beneficiary->city_id) }}">
                    @foreach ($cities as $city)
                        <option 
                            value="{{ $city->id }}"
                            {{ $city->id == $beneficiary->city_id ? 'selected' : '' }}
                            >{{ $city->name }}</option>   
                    @endforeach
                </select>
                @error ('city_id')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-3">
                <label for="inputState">Grupo Etnico</label>
                <select id="ethnic_group_id" name="ethnic_group_id" class="form-control" value="{{ old('ethnic_group_id',$beneficiary->ethnic_group_id) }}">
                    @foreach ($ethnicGroups as $ethnicGroup)
                        <option 
                            value="{{ $ethnicGroup->id }}"
                            {{ $ethnicGroup->id == $beneficiary->ethnic_group_id ? 'selected' : '' }}
                            >{{ $ethnicGroup->name }}</option>   
                    @endforeach
                </select>
                @error ('ethnic_group_id')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Correo Electronico</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email',$beneficiary->email) }}">
                @error ('email')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-3">
                <label for="inputState">Estado</label>
                <select id="active" name="active" class="form-control" value="{{ old('active',$beneficiary->active) }}">
                  <option value="1" {{ $beneficiary->active ? 'selected' : '' }}>Activo</option>
                  <option value="0" {{ !$beneficiary->active ? 'selected' : '' }}>Inactivo</option>
                </select>
                @error ('active')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <a href="{{ route('beneficiaries.index') }}" type="button" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
</div>

@endsection
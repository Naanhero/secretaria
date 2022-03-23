@extends('adminlte::page')

@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')
    <div class="col-12">
        @can('users.create')
            <form action="{{ route('users.store') }}" method="post">    
        @endcan
            @csrf
            <div class="form-row align-items-center">
                <div class="col-sm-3 my-1">
                    <label for="inlineFormInputName">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="col-sm-3 my-1">
                    <label for="inlineFormInputName">Primer Apellido</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        value="{{ old('last_name') }}">
                    @error('last_name')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="col-sm-3 my-1">
                    <label for="inlineFormInputName">Segundo Apellido</label>
                    <input type="text" class="form-control" id="second_last_name" name="second_last_name"
                        value="{{ old('second_last_name') }}">
                    @error('second_last_name')
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
                    <label for="inputState">Tipo de identificación</label>
                    <select id="type_id" name="type_id"  class="form-control" value="{{ old('type_id') }}">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>   
                        @endforeach
                    </select>
                    @error ('type_id')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="col-sm-3 my-1">
                    <label for="inlineFormInputName">N° de Identificación</label>
                    <input type="text" class="form-control" id="identification" name="identification" value="{{ old('identification') }}">
                    @error ('identification')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="col-sm-3 my-1">
                    <label for="inlineFormInputName">Celular</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="col-sm-3 my-1">
                    <label for="inlineFormInputName">Direccion de Residencia</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                    @error('address')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="col-sm-3 my-1">
                    <label for="inlineFormInputName">Correo Electronico</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="col-sm-3 my-1">
                    <label for="inlineFormInputName">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password"
                        value="{{ old('password') }}">
                    @error('password')
                        <small class="text-red">* {{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group col-sm-3">
                  <label for="inputState">Cargo</label>
                  <select id="position_id" name="position_id"  class="form-control" value="{{ old('position_id') }}">
                      @foreach ($positions as $position)
                          <option value="{{ $position->id }}">{{ $position->name }}</option>   
                      @endforeach
                  </select>
                  @error ('position_id')
                      <small class="text-red">* {{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group col-sm-3">
                    <label for="inputState">Estado</label>
                    <select id="active" name="active" class="form-control" value="{{ old('active') }}">
                        <option selected value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                    @error('active')
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

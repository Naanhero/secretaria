@extends('adminlte::page')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
    <div class="col-12">
      <form action="{{ route('users.update',$user->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-row align-items-center">
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$user->name) }}">
                @error('name')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Primer Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name"
                    value="{{ old('last_name',$user->last_name) }}">
                @error('last_name')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Segundo Apellido</label>
                <input type="text" class="form-control" id="second_last_name" name="second_last_name"
                    value="{{ old('second_last_name',$user->second_last_name) }}">
                @error('second_last_name')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-3">
              <label for="inputState">Género</label>
              <select id="gender_id" name="gender_id"  class="form-control" value="{{ old('gender_id',$user->name) }}">
                  @foreach ($genders as $gender)
                      <option value="{{ $gender->id }}" {{$gender->id == $user->gender_id ? 'selected' : ''}}>{{ $gender->name }}</option>   
                  @endforeach
              </select>
              @error ('gender_id')
                  <small class="text-red">* {{ $message }}</small>
              @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Celular</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone',$user->phone) }}">
                @error('phone')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Direccion de Residencia</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address',$user->address) }}">
                @error('address')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Correo Electronico</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email',$user->email) }}">
                @error('email')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="col-sm-3 my-1">
                <label for="inlineFormInputName">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                    <small class="text-red">* {{ $message }}</small>
                @enderror
            </div>
            <div class="form-group col-sm-3">
              <label for="inputState">Cargo</label>
              <select id="position_id" name="position_id"  class="form-control" value="{{ old('position_id',$user->position_id) }}">
                  @foreach ($positions as $position)
                      <option value="{{ $position->id }}" {{ $position->id == $user->position_id ? 'selected' : '' }}>{{ $position->name }}</option>   
                  @endforeach
              </select>
              @error ('position_id')
                  <small class="text-red">* {{ $message }}</small>
              @enderror
            </div>
            <div class="form-group col-sm-3">
                <label for="inputState">Estado</label>
                <select id="active" name="active" class="form-control" value="{{ old('active',$user->active) }}">
                    <option {{ $user->active ? 'selected' : '' }} value="1">Activo</option>
                    <option {{ !$user->active ? 'selected' : '' }} value="0">Inactivo</option>
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
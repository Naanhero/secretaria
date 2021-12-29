@extends('adminlte::page')

@section('content_header')
    <h1>Editar Area</h1>
@stop

@section('content')
  <div class="col-12">
    <form action="{{ route('areas.update',$area->id) }}" method="post">
      @csrf
      @method('PUT')

      <div class="form-row align-items-center">
          <div class="col-sm-8 my-2">
              <label for="inlineFormInputName">Nombre</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$area->name) }}">
              @error ('name')
                  <small class="text-red">* {{ $message }}</small>
              @enderror
          </div>
        </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descripción</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description',$area->description) }}</textarea>
          @error ('second_last_name')
              <small class="text-red">* {{ $message }}</small>
          @enderror
      </div>
          <div class="form-group col-sm-3">
              <label for="inputState">Estado</label>
              <select id="active" name="active" class="form-control" value="{{ old('active',$area->active) }}">
                <option {{ $area->active ? 'selected' : '' }} value="1">Activo</option>
                <option {{ !$area->active ? 'selected' : '' }} value="0">Inactivo</option>
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
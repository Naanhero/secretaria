@extends('adminlte::page')

@section('content_header')
    <h1>Programa: {{ $program->name }}  {{ $program->cities->count() }}</h1>
@stop

@section('content')
<div class="col-12">
    @include('layout.flash-message')
</div>
    <table class="table">
        <thead>
            <tr>
                <th colspan="2">
                    <form action="{{ route('cityProgram.store') }}" method="POST" id="addCityForm" name="addCityForm">
                        @csrf

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="inputState">Ciudades</label>
                                <select id="city_id" name="city_id"  class="form-control" value="{{ old('city_id') }}">
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>   
                                    @endforeach
                                </select>
                                <input type="number" id="program_id" name="program_id" value="{{ $program->id }}" hidden>
                                @error('city_id')
                                    <small class="text-red">* {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-sm-4" style="margin-top: auto">
                                <button class="btn btn-success" type="submit">Agregar</button>
                            </div>
                        </div>
                    </form>
                </th>
            </tr>
            <tr>
                <th scope="col">Nombre de la ciudad</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($program->cities as $city)
                <tr>
                    <td>{{ $city->name }}</td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('cityProgram.removeCity',['program_id'=>$program->id,'city_id'=>$city->id]) }}">Quitar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


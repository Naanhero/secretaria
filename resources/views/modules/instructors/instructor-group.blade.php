@extends('adminlte::page')

@section('content_header')
    <h1>{{ 'Grupos del Instructor '.$instructor->name }}</h1>
@stop

@section('content')
    <div class="col-12">
        @include('layout.flash-message')
    </div>
    <table class="table">
        <thead>
            <tr>
                <th colspan="2">
                    <form action="{{ route('groups.store') }}" method="POST" id="addInstructorForm" name="addInstructorForm">
                        @csrf

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <div class="col-sm-12 my-1">
                                    <label for="inlineFormInputName">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <small class="text-red">* {{ $message }}</small>
                                    @enderror
                                </div>
                                <input type="number" id="user_id" name="user_id" value="{{ $instructor->id }}" hidden>
                                @error('user_id')
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
                <th scope="col">Nombre del grupo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($instructor->groups as $group)
                <tr>
                    <td>{{ $group->name }}</td>
                    <td>
                        <form action="{{ route('groups.destroy',$group->id) }}" method="POST" id="removeInstructorForm" name="removeInstructorForm">
                            @csrf
                            @method('DELETE')

                            <input type="number" name="group_id" id="group_id" hidden>
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


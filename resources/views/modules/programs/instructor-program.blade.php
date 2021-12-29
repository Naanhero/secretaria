@extends('adminlte::page')

@section('content_header')
    <h1>{{'Instructores del Programa '.$program->name}}</h1>
@stop
@section('content-title',)

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th colspan="2">
                    <form action="{{ route('addInstructorProgram.addInstructor') }}" method="POST" id="addInstructorForm" name="addInstructorForm">
                        @csrf

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="inputState">Instructores</label>
                                <select id="user_id" name="user_id"  class="form-control" value="{{ old('user_id') }}">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }} {{ $user->last_name }}</option>   
                                    @endforeach
                                </select>
                                <input type="number" id="program_id" name="program_id" value="{{ $program->id }}" hidden>
                                @error('user_id')
                                    <small class="text-red">* {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-sm-4" style="margin-top: auto">
                                <button class="btn btn-success" onclick="document.getElementById('addInstructorForm').submit()">Agregar</button>
                            </div>

                        </div>
                    </form>
                </th>
            </tr>
            <tr>
                <th scope="col">Nombre del Instructor</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($program->users as $user)
                <tr>
                    <td>{{ $user->name }} {{ $user->last_name }}</td>
                    <td>
                        {{-- <form action="{{ route('removeInstructorProgram.removeInstructor') }}" method="POST" id="removeInstructorForm" name="removeInstructorForm">
                            @csrf

                            <button class="btn btn-danger">Quitar</button>
                        </form> --}}
                        <a class="btn btn-danger" href="{{ route('removeInstructorProgram.removeInstructor',['program'=>$program->id,'user'=>$user->id]) }}">eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


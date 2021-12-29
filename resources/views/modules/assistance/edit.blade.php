@extends('adminlte::page')

@section('content_header')
    <h1>Asistencia</h1>
@stop

@section('content')
<div class="col-12">
    @include('layout.flash-message')
</div>
    <table class="table">
        <thead>
            <tr>
                <th colspan="2">
                    <form action="{{ route('assistance.store') }}" method="POST" id="addInstructorForm" name="addInstructorForm">
                        @csrf

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="inputState">Beneficiarios</label>
                                <select id="beneficiary_id" name="beneficiary_id"  class="form-control" value="{{ old('beneficiary_id') }}">
                                    @foreach ($beneficiaries as $beneficiary)
                                        <option value="{{ $beneficiary->id }}">{{ $beneficiary->name }} {{ $beneficiary->last_name }}</option>   
                                    @endforeach
                                </select>
                                <input type="number" id="assistance_id" name="assistance_id" value="{{ $assistance->id }}" hidden>
                                @error('beneficiary_id')
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
                <th scope="col">Nombre del Beneficiario</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assistance->beneficiaries as $beneficiary)
                <tr>
                    <td>{{ $beneficiary->name }} {{ $beneficiary->last_name }}</td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('assistance.removeBeneficiary',['assistance_id'=>$assistance->id,'beneficiary'=>$beneficiary->id]) }}">Quitar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


<?php

namespace App\Http\Requests\Program;

use Illuminate\Foundation\Http\FormRequest;

class CreateProgramRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:3',
            'area_id' => 'required|exists:areas,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'boolean'
        ];
    }
}

<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'last_name' => 'required|string|min:3',
            'second_last_name' => 'required|string|min:3',
            'phone' => 'required|string|min:10|max:10',
            'address' => 'required|string|min:5',
            'gender_id' => 'required|exists:genders,id',
            'email' => 'required|email',
            'position_id' => 'required|exists:positions,id',
            'active' => 'required|boolean'
        ];
    }
}

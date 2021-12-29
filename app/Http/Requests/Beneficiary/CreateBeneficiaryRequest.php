<?php

namespace App\Http\Requests\Beneficiary;

use Illuminate\Foundation\Http\FormRequest;

class CreateBeneficiaryRequest extends FormRequest
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
            'age' => 'required|integer|between:1,100',
            'gender_id' => 'required|exists:genders,id',
            'city_id' => 'required|exists:cities,id',
            'ethnic_group_id' => 'required|exists:ethnic_groups,id',
            'email' => 'required|email',
            'active' => 'required|boolean'
        ];
    }
}

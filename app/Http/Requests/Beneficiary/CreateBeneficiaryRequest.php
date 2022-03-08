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
            'first_name' => 'required|string|min:3',
            'second_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'second_last_name' => 'required|string|min:3',
            'age' => 'required|integer|between:1,100',
            'type_id' => 'required|exists:types,id',
            'identification' => 'required|string|min:3',
            'phone' => 'required|string|min:10|max:10',
            'condition_id' => 'required|exists:conditions,id',
            'gender_id' => 'required|exists:genders,id',
            'ethnic_group_id' => 'required|exists:ethnic_groups,id',
            'city_id' => 'required|exists:cities,id',
            'address' => 'required|string|min:3',
            'neighborhood' => 'required|string|min:3',
            'zone_id' => 'required|exists:zones,id',
            'stratum_id' => 'required|exists:stratums,id',
            'email' => 'required|email',
            'active' => 'required|boolean'
        ];
    }
}

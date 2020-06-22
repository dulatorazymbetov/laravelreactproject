<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ApplicantEdit extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'lastname' => 'required',
            'firstname' => 'required',
            'patronymic' => 'string|nullable',
            'birthdate' => 'date|required',
            'gender' => 'required|exists:genders,id',
            'nationality_id' => 'required|exists:nationalities,id',
            'iin' => 'required|numeric',
            'email' => 'required|email:rfc,dns',
            'tel' => 'required',
            'registration_address' => 'required',
            'residential_address' => 'required',
            'lastname_translit' => 'required|alpha',
            'firstname_translit' => 'required|alpha',
            'patronymic_translit' => 'required|alpha',
            'birthplace' => 'required',
            'social_category_id' => 'integer|nullable',
            'military_organization_id' => 'integer|nullable',
            'live_in_almaty' => 'boolean'
        ];
    }
}

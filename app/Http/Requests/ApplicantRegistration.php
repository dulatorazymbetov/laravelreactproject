<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ApplicantRegistration extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'iin' => 'required|numeric',
            'tel' => 'required',
            'email' => 'required|email:rfc,dns',
            'lastname' => 'required',
            'firstname' => 'required',
            'patronymic' => 'string|nullable',
            'parent_fio' => 'required',
            'parent_tel' => 'required',
            'password' => 'required'
        ];
    }
}

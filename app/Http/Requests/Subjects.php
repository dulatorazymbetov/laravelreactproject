<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Subjects extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'title_kk' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'subject_code_kk' => 'required',
            'subject_code_ru' => 'required',
            'subject_code_en' => 'required',
            'description_kk' => 'string|nullable',
            'description_ru' => 'string|nullable',
            'description_en' => 'string|nullable',
            'ects_credits' => 'integer|nullable',
            'degree_id' => 'required|integer',
            'department_id' => 'required|integer',
            'lection' => 'required|integer',
            'lab' => 'required|integer',
            'practice' => 'required|integer',
            'is_additional' => 'required|boolean',
            'is_language_discipline' => 'boolean',
            'is_multilingual' => 'boolean',
            'is_research' => 'boolean',
            'is_practice' => 'boolean'
        ];
    }
}

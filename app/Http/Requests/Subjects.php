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
            'subject_code_kk' => 'unique:App\Models\EduProgram\Subject,subject_code_kk',
            'subject_code_ru' => 'unique:App\Models\EduProgram\Subject,subject_code_ru',
            'subject_code_en' => 'unique:App\Models\EduProgram\Subject,subject_code_en',
            'description_kk' => 'string|nullable',
            'description_ru' => 'string|nullable',
            'description_en' => 'string|nullable',
            'degree_id' => 'required|integer',
            'is_language_discipline' => 'boolean',
            'is_multilingual' => 'boolean',
            'is_research' => 'boolean',
            'is_practice' => 'boolean'
        ];
    }
}

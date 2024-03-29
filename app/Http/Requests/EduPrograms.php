<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EduPrograms extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'reg_num' => 'required',
            'title_kk' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'edu_programs_type_id' => 'required|integer',
            'edu_programs_group_id' => 'required|integer',
            'goals_kk' => 'required',
            'goals_ru' => 'required',
            'goals_en' => 'required',
            'academic_degree_id' => 'required|integer',
            'duration' => 'required',
            'credits' => 'required',
            'study_language_id' => 'required|integer',
            'app_date' => 'required|date',
            'nrk_level' => 'required|integer',
            'ork_level' => 'required|integer',
        ];
    }
}

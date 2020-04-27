<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EduProgramSubjects extends FormRequest {
    public function authorize()
    {
        return true;
    }

    public function rules(){
        return [
            'subject_id' => 'required|integer',
            'year' => 'required|integer',
            'term' => 'required|integer',
            'ects_credits' => 'integer|nullable',
            'subject_cycle_id' => 'required|integer',
            'is_university_subjects' => 'boolean',
            'is_selective' => 'boolean',
            'control_form_id' => 'required|integer',
            'exam_type_id' => 'required|integer',
            'rating_count' => 'required|integer'
        ];
    }
}

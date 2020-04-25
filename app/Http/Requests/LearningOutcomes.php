<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LearningOutcomes extends FormRequest {

    public function authorize() {
        return true;
    }
    public function rules() {
        return [
            'title_kk' => 'required',
            'title_kk' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'code' => 'required'
        ];
    }
}

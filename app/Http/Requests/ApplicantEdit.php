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
            'email' => 'required|email:rfc,dns',
            'tel' => 'required',
            'registration_address' => 'required',
            'residential_address' => 'required',
            'lastname_translit' => 'required|alpha',
            'firstname_translit' => 'required|alpha',
            'patronymic_translit' => 'nullable|alpha',
            'birthplace' => 'required',
            'social_category_id' => 'integer|nullable',
            'military_organization_id' => 'integer|nullable',
            'live_in_almaty' => 'boolean',
            'study_form_id' => 'integer|required',
            'edu_program_id' => 'integer|required',
            'payment_form_id' => 'integer|required',
            'need_campus' => 'integer|required',
            'english_level_id' => 'integer|nullable',
            'citizenship' => 'integer|required',
            'ent_certificate_number' => 'string|required',
            'ent_certificate_series' => 'string|nullable',
            'ent_ikt' => 'string|required',
            'ent_total' => 'regex:/^\d*(\.\d{2})?$/|required',
            'ent_history_of_kk' => 'regex:/^\d*(\.\d{2})?$/|nullable',
            'ent_math' => 'regex:/^\d*(\.\d{2})?$/|nullable',
            'ent_reading' => 'regex:/^\d*(\.\d{2})?$/|nullable',
            'ent_profile_1' => 'regex:/^\d*(\.\d{2})?$/|nullable',
            'ent_profile_2' => 'regex:/^\d*(\.\d{2})?$/|nullable',
            'creative_exam' => 'regex:/^\d*(\.\d{2})?$/|nullable',
            'creative_exam2' => 'regex:/^\d*(\.\d{2})?$/|nullable',
            'prev_edu_org_type' => 'integer|required',
            'prev_edu_org_region' => 'integer|required',
            'prev_edu_language' => 'integer|required',
            'prev_edu_score' => 'regex:/^\d*(\.\d{2})?$/|nullable',
            'prev_edu_direction' => 'string|nullable',
            'prev_edu_foreign' => 'boolean',
            'prev_edu_diplom_series' => 'string|required',
            'prev_edu_diplom_number' => 'string|required',
            'prev_edu_diplom_date' => 'date|nullable',
            'prev_edu_diplom_excellent'  => 'boolean',
            'main_doc_type' => 'required|integer',
            'main_doc_number' => 'required|string',
            'main_doc_series' => 'nullable|string',
            'main_doc_date' => 'required|string',
            'main_doc_giver' => 'required|string'
        ];
    }
}

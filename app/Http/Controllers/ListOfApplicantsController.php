<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
//MODELS
use App\Models\Applicant\Applicant;
use App\Models\User\User;
use App\Models\User\Gender;
use App\Models\User\Nationality;
use App\Models\EduProgram\EduProgram;
use App\Models\Student\StudyForm;
//REQUESTS
use App\Http\Requests\ApplicantEdit;

class ListOfApplicantsController extends Controller {
    
    public function all(Request $request){
        $rows = $request->rows;
        $offset = $request->page * $rows;
        $filter = json_decode($request->filter);
        
        $applicants = Applicant::with('user')
            ->when(isset($filter->search), function ($q) use ($filter) {
                $q->whereHas(
                    'user', function($q) use($filter) {
                        $q->whereRaw("concat(firstname, ' ', lastname, ' ', patronymic) like '%".$filter->search."%' ");
                        $q->orWhereRaw("iin like '%".$filter->search."%' ");
                        $q->orWhereRaw("tel like '%".$filter->search."%' ");
                    }
                );
            })
            ->when(isset($filter->apply_year), function ($q) use ($filter) {
                $q->where('apply_year', $filter->apply_year);
            });

        $total = $applicants->count();

        $items = $applicants->take($rows)
            ->skip($offset)
            ->orderBy('id', 'DESC')
            ->get();  
        

        return [
            'items' => $items,
            'total' => $total,
            'filter' => [
                'apply_year' => Applicant::select('apply_year')->distinct('apply_year')->orderBy('apply_year', 'DESC')->get()
            ]
        ];
    }
    public function get(Request $request){
        $id = $request->user()->id;
        return [
            'form' => [
                'gender' => Gender::all(),
                'edu_program' => EduProgram::select('title_en', 'title_kk', 'title_ru', 'id', 'academic_degree_id', 'reg_num')->get(),
                'study_form' => StudyForm::all(),
                'nationality' => Nationality::all()
            ],
            'item' => Applicant::with('user.nationality')->where('user_id', $id)->first()
        ];
    }
    public function update(ApplicantEdit $request){
        $id = $request->user()->id;
        $data = $request->validated();
        $users_data = Arr::only($data, [
            'firstname', 
            'lastname', 
            'patronymic',
            'birthdate', 
            'gender', 
            'nationality_id', 
            'iin', 
            'email', 
            'tel', 
            'registration_address', 
            'residential_address'
        ]);

        $user = User::find($id);
        $user->fill($users_data);
        $user->save();

        $applicants_data = Arr::only($data, [
            'lastname_translit', 
            'firstname_translit', 
            'patronymic_translit', 
            'birthplace', 
            'social_category_id', 
            'military_organization_id',
            'live_in_almaty'
        ]);
        $applicant = Applicant::where('user_id', $user->id)->first();
        $applicant->fill($applicants_data);
        $applicant->save();

        dd($data['udv']);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
//MODELS
use App\Models\Applicant\Applicant;
use App\Models\Applicant\AdmDivision;
use App\Models\Applicant\SocialStatus;
use App\Models\User\User;
use App\Models\User\Gender;
use App\Models\User\MilitaryOrganization;
use App\Models\User\Nationality;
use App\Models\User\Country;
use App\Models\EduProgram\EduProgram;
use App\Models\Student\StudyForm;
use App\Models\Student\PaymentForm;
use App\Models\Staff\EnglishLevel;
use App\Models\Staff\TeachingLanguage;
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
        $id = $request->id;
        if(!$id){$id = $request->user()->id;}
        return [
            'form' => [
                'gender' => Gender::all(),
                'edu_program' => EduProgram::select('title_en', 'title_kk', 'title_ru', 'id', 'academic_degree_id', 'reg_num')->get(),
                'study_form' => StudyForm::all(),
                'nationality' => Nationality::all(),
                'payment_form' => PaymentForm::all(),
                'english_level' => EnglishLevel::all(),
                'prev_edu_org_region' => AdmDivision::where('parent_id', 0)->get(),
                'prev_edu_language' => TeachingLanguage::all(),
                'citizenship' => Country::all(),
                'military' => MilitaryOrganization::all(),
                'social_status' => SocialStatus::all()
            ],
            'item' => Applicant::with('user.nationality', 'social_status')->where('user_id', $id)->first()
        ];
    }
    public function update(ApplicantEdit $request){
        $id = $request->id;
        if(!$id){$id = $request->user()->id;}
        $data = $request->validated();
        $users_data = [
            'firstname', 
            'lastname', 
            'patronymic',
            'birthdate', 
            'gender', 
            'nationality_id',
            'email', 
            'tel', 
            'registration_address', 
            'residential_address'
        ];

        $user = User::find($id);
        $user->fill(Arr::only($data, $users_data));
        $user->save();

        $applicant = Applicant::where('user_id', $user->id)->first();
        $applicant->fill(Arr::except($data, $users_data));
        $applicant->social_status()->sync(SocialStatus::findMany(explode(',', $request->social_statuses)));
        $applicant->save();

    }
    public function store_file(Request $request){
        $id = $request->user()->id;
        $user = User::find($id);
        $applicant = Applicant::where('user_id', $user->id)->first();

        if($request->file('udv_file')){
            $path = Storage::putFile('public/'.$id, $request->file('udv_file'));
            Storage::delete($applicant->udv_file);
            $applicant->udv_file = $path;
        }
        if($request->file('ent_file')){
            $path = Storage::putFile('public/'.$id, $request->file('ent_file'));
            Storage::delete($applicant->ent_file);
            $applicant->ent_file = $path;
        }
        if($request->file('middle_diplom_file')){
            $path = Storage::putFile('public/'.$id, $request->file('middle_diplom_file'));
            Storage::delete($applicant->middle_diplom_file);
            $applicant->middle_diplom_file = $path;
        }
        if($request->file('hight_diplom_file')){
            $path = Storage::putFile('public/'.$id, $request->file('hight_diplom_file'));
            Storage::delete($applicant->hight_diplom_file);
            $applicant->hight_diplom_file = $path;
        }
        if($request->file('exemption_file')){
            $path = Storage::putFile('public/'.$id, $request->file('exemption_file'));
            Storage::delete($applicant->exemption_file);
            $applicant->exemption_file = $path;
        }
        if($request->file('other_file')){
            $path = Storage::putFile('public/'.$id, $request->file('other_file'));
            Storage::delete($applicant->other_file);
            $applicant->other_file = $path;
        }
        $applicant->save();
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant\Applicant;
use App\Models\User\Gender;
use App\Models\EduProgram\EduProgram;
use App\Models\Student\StudyForm;

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
        return [
            'form' => [
                'gender' => Gender::all(),
                'edu_program' => EduProgram::select('title_en', 'title_kk', 'title_ru', 'id', 'academic_degree_id', 'reg_num')->get(),
                'study_form' => StudyForm::all()
            ],
            'item' => Applicant::with('user')->find($id)
        ];
    }
}
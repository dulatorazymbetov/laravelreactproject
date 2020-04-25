<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//MODELS
use App\Models\EduProgram\EduProgram;
use App\Models\EduProgram\EduProgramsGroup;
use App\Models\EduProgram\EduProgramsType;
use App\Models\Staff\AcademicDegree;
use App\Models\Staff\TeachingLanguage;
use App\Models\EduProgram\SubjectCycle;
use App\Models\EduProgram\SubjectComponent;
//REQUEST
use App\Http\Requests\EduPrograms;

class EduProgramsController extends Controller
{
    public function edu_programs_form(){
        return [
            'edu_programs_group' => EduProgramsGroup::orderBy('code')->get(),
            'edu_programs_type' => EduProgramsType::all(),
            'academic_degree' => AcademicDegree::all(),
            'teaching_language' => TeachingLanguage::all()
        ];
    }
    public function subjects_form(Request $request){
    	return [
    		'subject_cicles' => SubjectCycle::all(),
    		'subject_components' => SubjectComponent::all()
    	];
    }
    public function outcomes_form(Request $request){
    	return [
    		'edu_programs' => EduProgram::all()
    	];
    }
    public function all(){
    	return EduProgram::all();
    }
    public function add(EduPrograms $request){
    	$data = $request->validated();
		$edu_program = EduProgram::create($data);
		return $edu_program;
    }
    public function get(Request $request){
    	return [
    		'info' => EduProgram::find($request->id),
    		'form' => $this->edu_programs_form()
    	];
    }
    public function update(EduPrograms $request){
    	$id = $request->id;
    	$data = $request->validated();
    	$edu_program = EduProgram::find($id);
    	$edu_program->fill($data);
    	$edu_program->save();
    	return $edu_program;
    }
}

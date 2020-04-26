<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//MODELS
use App\Models\EduProgram\EduProgram;
use App\Models\EduProgram\EduProgramsGroup;
use App\Models\EduProgram\EduProgramsType;
use App\Models\EduProgram\LearningOutcome;
use App\Models\Staff\AcademicDegree;
use App\Models\Staff\TeachingLanguage;
use App\Models\EduProgram\SubjectCycle;
use App\Models\EduProgram\SubjectComponent;
//REQUESTS
use App\Http\Requests\EduPrograms;
use App\Http\Requests\LearningOutcomes;

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
    	return EduProgram::withCount('learning_outcomes')->get();
    }
    public function add(EduPrograms $request){
    	$data = $request->validated();
		$edu_program = EduProgram::create($data);
		return $edu_program;
    }
    public function get(Request $request){
    	return [
    		'info' => EduProgram::find($request->id),
    		'form' => $this->edu_programs_form(),
    		'outcomes' => LearningOutcome::where('edu_program_id', $request->id)->get(),
    	];
    }
    public function update(EduPrograms $request){
    	$data = $request->validated();
    	$edu_program = EduProgram::find($request->id);
    	$edu_program->fill($data);
    	$edu_program->save();
    	return $edu_program;
    }
    public function addOutcome(LearningOutcomes $request){
    	$data = $request->validated();
    	$data['edu_program_id'] = $request->id;
    	$learning_outcome = LearningOutcome::create($data);
    	return LearningOutcome::where('edu_program_id', $request->id)->get();
    }
    public function getOutcome(Request $request){
    	return LearningOutcome::find($request->id);
    }
    public function updateOutcome(LearningOutcomes $request){
    	$data = $request->validated();
    	$learning_outcome = LearningOutcome::find($request->id);
    	$learning_outcome->fill($data);
    	$learning_outcome->save();
    	return LearningOutcome::where('edu_program_id', $learning_outcome->edu_program_id)->get();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//MODELS
use App\Models\EduProgram\EduProgram;
use App\Models\EduProgram\EduProgramsGroup;
use App\Models\EduProgram\EduProgramsType;
use App\Models\EduProgram\EduProgramSubject;
use App\Models\EduProgram\LearningOutcome;
use App\Models\EduProgram\DegreeType;
use App\Models\EduProgram\ControlForm;
use App\Models\EduProgram\ExamType;

use App\Models\Staff\TeachingLanguage;
use App\Models\EduProgram\Subject;
use App\Models\EduProgram\SubjectCycle;
use App\Models\EduProgram\SubjectComponent;
//REQUESTS
use App\Http\Requests\EduPrograms;
use App\Http\Requests\LearningOutcomes;
use App\Http\Requests\Subjects;
use App\Http\Requests\EduProgramSubjects;

class EduProgramsController extends Controller
{
    public function eduProgramsForm(){
        return [
            'edu_programs_group' => EduProgramsGroup::orderBy('code')->get(),
            'edu_programs_type' => EduProgramsType::all(),
            'academic_degree' => DegreeType::all(),
            'teaching_language' => TeachingLanguage::all()
        ];
    }
    public function subjectsForm(Request $request){
    	return [
    		'subject_cicles' => SubjectCycle::all(),
    		'subject_components' => SubjectComponent::all()
    	];
    }
    public function outcomesForm(Request $request){
    	return [
    		'edu_programs' => EduProgram::all()
    	];
    }
    public function eduProgramSubjectsForm(Request $request){
    	return [
    		'subjects' => Subject::orderBy('subject_code_ru')->get(),
    		'subject_cycles' => SubjectCycle::all(),
    		'control_forms' => ControlForm::all()
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
    		'form' => $this->eduProgramsForm(),
    		'outcomes' => LearningOutcome::where('edu_program_id', $request->id)
    			->get(),
    		'subjects' => EduProgramSubject::with('subject')
    			->where('edu_program_id', $request->id)->get()
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
    public function allSubjects(){
    	return [
    		'items' => Subject::orderBy('subject_code_ru')->get(),
    		'form' => [
    			'degree' => DegreeType::all(),
    		]
    	];
    }
    public function addSubject(Subjects $request){
    	$data = $request->validated();
    	$subject = Subject::create($data);
		return Subject::orderBy('subject_code_ru')->get();
    }
    public function getSubject(Request $request){
    	return Subject::find($request->id);
    }
    public function updateSubject(Subjects $request){
    	$data = $request->validated();
    	$subject = Subject::find($request->id);
    	$subject->fill($data);
    	$subject->save();
    	return Subject::orderBy('id', 'DESC')->get();
    }
    public function addEduProgramSubject(EduProgramSubjects $request){
    	$data = $request->validated();
    	$data['edu_program_id'] = $request->id;
    	$subject = EduProgramSubject::create($data);
    	return EduProgramSubject::with('subject')->where('edu_program_id', $request->id)->get();
    }
    public function updateEduProgramSubject(EduProgramSubjects $request){
    	$data = $request->validated();
    	$subject = EduProgramSubject::find($request->id);
    	$subject->fill($data);
    	$subject->save();
    	return EduProgramSubject::with('subject')->where('edu_program_id', $subject->edu_program_id)->get();
    }
    public function getEduProgramSubject(Request $request){
    	return [
    		'form' => $this->eduProgramSubjectsForm($request),
    		'item' => EduProgramSubject::find($request->id)
    	];
    }
}

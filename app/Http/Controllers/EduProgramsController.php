<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EduProgram\EduProgram;
use App\Models\EduProgram\EduProgramsGroup;
use App\Models\EduProgram\EduProgramsType;
use App\Models\Staff\AcademicDegree;
use App\Models\Staff\TeachingLanguage;
use App\Models\EduProgram\SubjectCycle;
use App\Models\EduProgram\SubjectComponent;

class EduProgramsController extends Controller
{
    public function edu_programs_form(Request $request){
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
    public function add(Request $request){
    	$title_kk = $request->title_kk;
		$title_ru = $request->title_ru;
		$title_en = $request->title_en;
		$edu_programs_type_id = $request->edu_programs_type_id;
		$edu_programs_group_id = $request->edu_programs_group_id;
		$goals_kk = $request->goals_kk;
		$goals_ru = $request->goals_ru;
		$goals_en = $request->goals_en;
		$academic_degree_id = $request->academic_degree_id;
		$duration = $request->duration;
		$credits = $request->credits;
		$study_language_id = $request->study_language_id;
		$app_date = $request->app_date;
		$nrk_level = $request->nrk_level;
		$ork_level = $request->ork_level;

		$edu_program = new EduProgram;
		$edu_program->title_kk = $title_kk;
		$edu_program->title_kk = $title_kk;
		$edu_program->title_ru = $title_ru;
		$edu_program->title_en = $title_en;
		$edu_program->edu_programs_type_id = $edu_programs_type_id;
		$edu_program->edu_programs_group_id = $edu_programs_group_id;
		$edu_program->goals_kk = $goals_kk;
		$edu_program->goals_ru = $goals_ru;
		$edu_program->goals_en = $goals_en;
		$edu_program->academic_degree_id = $academic_degree_id;
		$edu_program->duration = $duration;
		$edu_program->credits = $credits;
		$edu_program->study_language_id = $study_language_id;
		$edu_program->app_date = $app_date;
		$edu_program->nrk_level = $nrk_level;
		$edu_program->ork_level = $ork_level;
		$edu_program->save();

		return $edu_program;
    }
    public function all(){
    	return EduProgram::all();
    }
}

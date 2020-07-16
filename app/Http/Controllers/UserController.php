<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\User;
use App\Models\Student\Student;
use App\Models\Applicant\Applicant;
use App\Models\Staff\Staff;
use App\Models\User\Role;
use App\Models\User\Module;
use Illuminate\Support\Facades\Storage;
use App\Diplom;
use App\Models\Staff\AcademicDegree;
use App\Models\Staff\AcademicRank;
use App\Models\Staff\EnglishLevel;
use App\Models\Staff\PositionType;
use App\Models\Staff\PositionTimeType;
use App\Models\Department\Department;
use App\Models\EduProgram\EduProgramsGroup;
use Artisaninweb\SoapWrapper\SoapWrapper;

class UserController extends Controller
{
    public function allUsers(){
    	return User::with('roles')->limit(200)->get();
    }
    public function allRoles(){
    	return Role::with('modules')->get();
    }
    public function allModules(){
    	return Module::with('roles')->get();
    }
    public function allStudents(){
        return Student::with('user')->orderBy('id', 'DESC')->get();
    }
    public function users(Request $request){
        $rows = $request->rows;
        $offset = $request->page * $rows;
        $filter = json_decode($request->filter);

        $items = User::with('roles')
            ->take($rows)
            ->skip($offset)
            ->when(isset($filter->search), function ($q) use ($filter) {
                $q->whereRaw("concat(firstname, ' ', lastname, ' ', patronymic) like '%".$filter->search."%' ");
                $q->orWhereRaw("login like '%".$filter->search."%' ");
            })
            ->get();
        $total = User::when(isset($filter->search), function ($q) use ($filter) {
                $q->whereRaw("concat(firstname, ' ', lastname, ' ', patronymic) like '%".$filter->search."%' ");
                $q->orWhereRaw("login like '%".$filter->search."%' ");
            })->count();

        return [
            'items' => $items,
            'total' => $total
        ];
    }
    public function getUser(Request $request){
        return [
            'items' => User::with('roles')->find($request->id),
            'form' => [
                'roles' => Role::orderBy('description_ru')->get()
            ]
        ];
    }
    public function updateUser(Request $request){
        $user = User::with('roles')->find($request->id);
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->roles()->sync(Role::findMany(explode(',', $request->roles)));
        $user->save();
    }

    public function getGraduate(Request $request){
        return [
            'info' => Student::with('user')->find($request->id),
            'diplom_info' => Diplom::where('student_id', $request->id)
        ];
    }

    public function updateDiplomDetail(Request $request){
        $dimplom = new Diplom();
        $graduate = Student::find($request->id);
        $dimplom->student_id = $request->id;
        $dimplom->firstname_ru = $request->firstname_ru;
        $dimplom->lastname_ru = $request->lastname_ru;
        $dimplom->patronymic_ru = $request->patronymic_ru;
        $dimplom->firstname_kk = $request->firstname_kk;
        $dimplom->lastname_kk = $request->lastname_kk;
        $dimplom->patronymic_kk = $request->patronymic_kk;
        $dimplom->firstname_en = $request->firstname_en;
        $dimplom->lastname_en = $request->lastname_en;
        $dimplom->patronymic_en = $request->patronymic_en;
        $dimplom->birthdate = $request->birthdate;
        $dimplom->iin = $request->iin;
        $dimplom->diplom_num = $request->diplom_num;
        $dimplom->diplom_date = $request->diplom_date;
        $dimplom->protocol_num = $request->protocol_num;
        $dimplom->prev_educ_doc_name_kk = $request->prev_educ_doc_name_kk;
        $dimplom->prev_educ_doc_name_ru = $request->prev_educ_doc_name_ru;
        $dimplom->prev_educ_doc_name_en = $request->prev_educ_doc_name_en;
        $dimplom->entrance_doc_name_kk = $request->entrance_doc_name_kk;
        $dimplom->entrance_doc_name_ru = $request->entrance_doc_name_ru;
        $dimplom->entrance_doc_name_en = $request->entrance_doc_name_en;
        $dimplom->entrance_doc_date = $request->entrance_doc_date;
        $dimplom->start_year = $request->start_year;
        $dimplom->finish_year = $request->finish_year;
        $dimplom->start_university_name_kk = $request->start_university_name_kk;
        $dimplom->start_university_name_ru = $request->start_university_name_ru;
        $dimplom->start_university_name_en = $request->start_university_name_en;
        $dimplom->university_name_kk = $request->finish_university_name_kk;
        $dimplom->university_name_ru = $request->finish_university_name_ru;
        $dimplom->university_name_en = $request->finish_university_name_en;
        $dimplom->credits = $request->credits;
        $dimplom->ects_credits = $request->ects_credits;
        $dimplom->theoretical_credits = $request->theoretical_credits;
        $dimplom->theoretical_ects_credits = $request->theoretical_ects_credits;
        $dimplom->gpa = $request->gpa;
        $dimplom->gak_protocol_num = $request->gak_protocol_num;
        $dimplom->gak_protocol_date = $request->gak_protocol_date;
        $dimplom->academic_degree_name_kk = $request->academic_degree_name_kk;
        $dimplom->academic_degree_name_ru = $request->academic_degree_name_ru;
        $dimplom->academic_degree_name_en = $request->academic_degree_name_en;
        $dimplom->speciality_name_kk = $request->speciality_name_kk;
        $dimplom->speciality_name_ru = $request->speciality_name_ru;
        $dimplom->speciality_name_en = $request->speciality_name_en;
        $dimplom->specialization_name_kk = $request->specialization_name_kk;
        $dimplom->specialization_name_ru = $request->specialization_name_ru;
        $dimplom->specialization_name_en = $request->specialization_name_en;
        $dimplom->qualification_name_kk = $request->qualification_name_kk;
        $dimplom->qualification_name_ru = $request->qualification_name_ru;
        $dimplom->qualification_name_en = $request->qualification_name_en;
        $dimplom->save();
        return $dimplom;
    }
    public function soap(){
        $s = new SoapWrapper;
        $s->add('getAllDataItems', function ($service) {
            $service->wsdl('https://nobd-services-test.iac.kz/nedb-ddm/services/ddmDataWebService?wsdl')
            ->trace(false)
            ->options(['login' => 'MUIT', 'password' => 'Mt48536!@']);
        });
        $s->client('getAllDataItems.arg0', function ($service) {
            $xml = simplexml_load_string($service->call('getAllDataItems.arg0', []));
        });

    }
    public function registerHash(Request $request){
        $hash = md5(md5(strrev($request->iin)));
        return "<a href='https://newcampus.iitu.kz/applicant_reg/".$request->iin."/".$hash."'>https://newcampus.iitu.kz/applicant_reg/".$request->iin."/".$hash."</a>";
    }
    public function registerApplicant(Request $request){
        $hash = md5(md5(strrev($request->iin)));
        if($hash===$request->hash){
            $user = User::where('login', $request->iin.'-2020')->first();
            $applicant = Applicant::where('user_id', $user->id)->first();
            return [
                'user' => $user,
                'applicant' => $applicant,
                'form' => [
                    'gop' => \DB::select("SELECT DISTINCT epg.id, epg.code, epg.title_kk, epg.title_ru, epg.title_en
                        FROM campus.edu_programs_groups epg
                        JOIN campus.edu_programs ep ON ep.edu_programs_group_id = epg.id
                        WHERE CODE LIKE 'B%'"
                    )
                ]
            ];
        }
        else {
            return response()->json('invalid login or password', 400);
        }
    }
    public function registerApplicantPost(Request $request){
        $hash = md5(md5(strrev($request->iin)));
        if($hash===$request->hash){
            if(!is_null($request->gop_2) OR !is_null($request->gop_3)){
                if($request->gop_1 === $request->gop_2 OR $request->gop_1 === $request->gop_3 OR $request->gop_2 === $request->gop_3){
                    return response()->json('reply gop', 420);
                }
            }
            $user = User::where('login', $request->iin.'-2020')->first();
            $applicant = Applicant::where('user_id', $user->id)->first();
            $applicant->gop_1 = $request->gop_1;
            $applicant->gop_2 = $request->gop_2;
            $applicant->gop_3 = $request->gop_3;
            $applicant->confirmed = $request->gop_3;
            $path = Storage::putFile('public/'.$user->id, $request->file('request_file'));
            Storage::delete($applicant->request_file);
            $applicant->request_file = $path;
            $applicant->confirmed = true;
            $applicant->save();
            return $applicant;
        }
        else {
            return response()->json('invalid login or password', 400);
        }
    }
    public function registerApplicantList(){
        $list = \DB::connection('old')->select("
            SELECT u.email, CONCAT(IFNULL(u.lastname, ''), ' ',IFNULL(u.firstname, ''), ' ',IFNULL(u.middlename, '')) fio,
            concat(spz.specializationcode, ' - ', spz.name) spz_name,
            ef.name ef_name,
            e.total_point ent,
            ust.name a_status
            FROM iitu_core_db.user u
            JOIN iitu_core_db.academic_plan ap ON ap.student_id = u.user_id
            JOIN iitu_core_db.academic_plan_additional_info api ON api.plan_id = ap.plan_id
            JOIN iitu_core_db.student_card sc ON sc.student_id = u.user_id
            JOIN iitu_core_db.academic_plan_pre_info app ON app.plan_id = ap.plan_id
            JOIN iitu_core_db.certificate_ent e ON e.cert_id = app.cert_id
            JOIN iitu_core_db.specialization spz ON spz.specialization_id = sc.specialization_id
            JOIN iitu_core_db.education_form ef ON ef.form_id = sc.edu_form_id
            JOIN iitu_core_db.user_applicant_status ust ON ust.status_id = u.user_applicant_status_id
            WHERE sc.edu_form_id = 6
            AND u.user_applicant_status_id = 3
            AND 
            ((sc.specialization_id IN (44,45) AND e.total_point >= 70)
            OR
            (sc.specialization_id not IN (44,45) AND e.total_point >= 50)
            )
            AND u.applicant_apply_year = 2020
            order BY spz_name, fio
        ");
        foreach($list as $key => $value){
            echo $value->spz_name." | ".$value->fio." ".$value->email." ".$value->a_status."<br/>";
        }
    }
}

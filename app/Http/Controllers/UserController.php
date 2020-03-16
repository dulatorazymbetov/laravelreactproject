<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\User;
use App\Models\Staff\Staff;
use App\Models\User\Role;
use App\Models\User\Module;
use App\Models\Staff\AcademicDegree;
use App\Models\Staff\AcademicRank;
use App\Models\Staff\EnglishLevel;

class UserController extends Controller
{
    public function allUsers(){
    	return User::with('roles')->get();
    }
    public function allRoles(){
    	return Role::with('modules')->get();
    }
    public function allModules(){
    	return Module::with('roles')->get();
    }
    public function allStudents(){
        return User::whereNotNull('student_id')->with('student')->orderBy('id', 'DESC')->get();
    }
    public function allTutors(Request $request){
        $rows = $request->rows;
        $offset = $request->page * $rows;
        return [
            'total' => Staff::count(),
            'list' => Staff::with('academic_rank', 'academic_degree', 'user')
                ->take($rows)
                ->skip($offset)
                ->orderBy('id', 'DESC')
                ->get(),
        ];
    }
    public function getTutor(Request $request){
        $id = $request->id;
        return [
            'form' => [
                'academic_degree' => AcademicDegree::all(),
                'academic_rank' => AcademicRank::all(),
                'english_level' => EnglishLevel::all()
            ],
            'tutor' => Staff::with('academic_rank', 'academic_degree', 'english_level','user')->find($id)
        ];
    }
    public function editTutor(Request $request){
        $id = $request->id;
        $tutor = Staff::find($id);
        $tutor->academic_rank_id = $request->academic_rank_id;
        $tutor->academic_degree_id = $request->academic_degree_id;
        $tutor->english_level_id = $request->english_level_id;
        $tutor->is_foreign = $request->is_foreign;
        $tutor->save();
        $user = User::find($tutor->user_id);
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->patronymic = $request->patronymic;
        $user->iin = $request->iin;
        $user->email = $request->email;
        $user->save();
    }
}

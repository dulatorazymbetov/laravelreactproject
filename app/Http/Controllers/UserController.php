<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\User;
use App\Models\Student\Student;
use App\Models\Staff\Staff;
use App\Models\User\Role;
use App\Models\User\Module;
use App\Models\Staff\AcademicDegree;
use App\Models\Staff\AcademicRank;
use App\Models\Staff\EnglishLevel;
use App\Models\Staff\PositionType;
use App\Models\Staff\PositionTimeType;
use App\Models\Department\Department;

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
    public function allTutors(Request $request){
        $rows = $request->rows;
        $offset = $request->page * $rows;
        $search = $request->search;
        $total_count = Staff::count();
        $count_with_filter = isset($request->search) ? Staff::wherehas('user', function($q) use($request) {
                $q->where('lastname', 'LIKE', '%'.$request->search.'%');
            })
            ->count()
            : $total_count;
        return [
            'statistic' => [
                'total' => $total_count,
                'with_filter' => $count_with_filter
            ],
            'list' => Staff::when($request->search, function($q) use($request){
                    $q->whereHas(
                        'user', function($q) use($request) {
                            $q->where('lastname', 'LIKE', '%'.$request->search.'%');
                        }
                    );
                })
                ->with('user','academic_rank', 'academic_degree', 'english_level')
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
                'english_level' => EnglishLevel::all(),
                'position_type' => PositionType::all(),
                'department' => Department::where('include_staff', true)->get(),
                'position_time_type' => PositionTimeType::all()
            ],
            'tutor' => Staff::with([
                'academic_rank', 
                'academic_degree', 
                'english_level',
                'user'
            ])->find($id)
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

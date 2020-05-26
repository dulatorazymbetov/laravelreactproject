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
}

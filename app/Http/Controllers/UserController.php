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
}

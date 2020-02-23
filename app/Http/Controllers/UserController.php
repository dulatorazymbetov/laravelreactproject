<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\User;
use App\Models\User\Role;
use App\Models\User\Module;

class UserController extends Controller
{
    public function allUsers(){
    	return User::with('roles')->limit(20)->get();
    }
    public function allRoles(){
    	return Role::with('modules')->limit(20)->get();
    }
    public function allModules(){
    	return Module::with('roles')->limit(20)->get();
    }
    public function allStudents(){
        return User::whereNotNull('student_id')->with('student')->limit(20)->orderBy('id', 'DESC')->get();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\User;

class UserController extends Controller
{
    public function allUsers(){
    	return User::with('roles')->get();
    }
}

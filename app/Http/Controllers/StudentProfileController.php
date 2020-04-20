<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;

class StudentProfileController extends Controller
{
    public function form(Request $request){
        return [
            'genders' => Gender::all(),
        ];
    }
   
}

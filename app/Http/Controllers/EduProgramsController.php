<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EduProgram\EduProgramsGroup;

class EduProgramsController extends Controller
{
    public function form(Request $request){
        return [
            'edu_programs_group' => EduProgramsGroup::all()
        ];
    }
}

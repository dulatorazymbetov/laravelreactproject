<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff\PositionType;

class StudentProfileController extends Controller
{
    public function form(Request $request){
        return [
            'genders' => PositionType::all(),
        ];
    }
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff\PositionType;

class HrOrderController extends Controller
{
    public function form(Request $request){
        return [
            'staff_type' => PositionType::all(),
        ];
    }
   
}

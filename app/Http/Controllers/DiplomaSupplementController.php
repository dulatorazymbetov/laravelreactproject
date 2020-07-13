<?php

namespace App\Http\Controllers;

use App\Models\User\User;
use App\Models\Student\Student;
use App\Models\Student\DiplomApp;
use App\Models\Student\DiplomAppSubject;

use Illuminate\Http\Request;
use App\Gender;
use PDF;

class DiplomaSupplementController extends Controller
{
    public function diplomaRu(Request $request){
        $user = DiplomApp::find($request->id);
        $user->subjects = DiplomAppSubject::where('student_id', $user->user_id)->get();
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->loadView('diploma/ru', compact('user'));

        return $pdf->stream('Report.pdf');
    }
    public function index(Request $request){
        $rows = $request->rows;
        $offset = $request->page * $rows;
        $filter = json_decode($request->filter);
        $items = DiplomApp::take($rows)
            ->skip($offset)
            ->when(isset($filter->search), function ($q) use ($filter) {
                $q->whereRaw("concat(first_name_ru, ' ', last_name_ru, ' ', middle_name_ru) like '%".$filter->search."%' ");
            })
            ->orderBy('id', 'DESC')
            ->get();
        $total = User::when(isset($filter->search), function ($q) use ($filter) {
                $q->whereRaw("concat(first_name_ru, ' ', last_name_ru, ' ', middle_name_ru) like '%".$filter->search."%' ");
            })->count();

        return [
            'items' => $items,
            'total' => $total
        ];
    }
    public function item(){}
}
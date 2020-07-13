<?php

namespace App\Http\Controllers;

use App\Models\User\User;
use App\Models\Student\Student;
use App\Models\Student\DiplomApp;
use App\Models\Student\DiplomAppSubject;
use App\Models\Student\DiplomAppTheme;

use Illuminate\Http\Request;
use App\Gender;
use PDF;

class DiplomaSupplementController extends Controller
{
    public function diplomaData(Request $request){
        $user = DiplomApp::where('id', $request->id)->first();
        $user->internships = DiplomAppSubject::with('type')
            ->where('student_id', $user->user_id)
            ->where('discipline_type_id', 1)
            ->get();
        $user->attestations = DiplomAppSubject::with('type')
            ->where('student_id', $user->user_id)
            ->where('discipline_type_id', 2)
            ->get();
        $user->themes = DiplomAppTheme::where('student_id', $user->user_id)->get();
        $user->subjects = DiplomAppSubject::with('type')
            ->where('student_id', $user->user_id)
            ->where('discipline_type_id', 3)
            ->get();
        return $user;
    }
    public function diplomaRu(Request $request){
        $user = $this->diplomaData($request);
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->loadView('diploma/ru', compact('user'));
        return $pdf->stream('Report.pdf');
    }
    public function diplomaKk(Request $request){
        $user = $this->diplomaData($request);
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->loadView('diploma/kk', compact('user'));
        return $pdf->stream('Report.pdf');
    }
    public function diplomaEn(Request $request){
        $user = $this->diplomaData($request);
        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->loadView('diploma/en', compact('user'));
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
        $total = DiplomApp::when(isset($filter->search), function ($q) use ($filter) {
                $q->whereRaw("concat(first_name_ru, ' ', last_name_ru, ' ', middle_name_ru) like '%".$filter->search."%' ");
            })->count();

        return [
            'items' => $items,
            'total' => $total
        ];
    }
    public function item(){}
}
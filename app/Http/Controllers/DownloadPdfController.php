<?php

namespace App\Http\Controllers;
use App\Models\User\User;
use App\Models\Student\Student;
use Illuminate\Http\Request;
use PDF;

class DownloadPdfController extends Controller
{
    public function downloadReport1PDF($id) {
    	$users = User::find($id);
        $students = Student::where('user_id', $id)->first();
        $pdf = PDF::loadView('report1', compact('users', 'students'));

        return $pdf->download('Report.pdf');
	}

	public function downloadReport2PDF($id) {
        $users = User::find($id);
        $students = Student::where('user_id', $id)->first();
        $pdf = PDF::loadView('report2', compact('users', 'students'));
        
        return $pdf->download('Report.pdf');
    }

    public function downloadReport3PDF($id) {
        $users = User::find($id);
        $students = Student::where('user_id', $id)->first();
        $pdf = PDF::loadView('report3', compact('users', 'students'));
        
        return $pdf->download('Report.pdf');
    }

    public function downloadReport4PDF($id) {
        $users = User::find($id);
        $students = Student::where('user_id', $id)->first();
        $pdf = PDF::loadView('report4', compact('users', 'students'));
        
        return $pdf->download('Report.pdf');
    }

    public function downloadReport5PDF($id) {
        $users = User::find($id);
        $students = Student::where('user_id', $id)->first();
        $pdf = PDF::loadView('report5', compact('users', 'students'));
        
        return $pdf->download('Report.pdf');
    }

    public function downloadReport6PDF($id) {
        $users = User::find($id);
        $students = Student::where('user_id', $id)->first();
        $pdf = PDF::loadView('report6', compact('users', 'students'));
        
        return $pdf->download('Report.pdf');
    }

    public function downloadDiplomaSupplement() {
        $pdf = PDF::loadView('diploma_supplement');
        return $pdf->download('diploma_supplement.pdf');
    }
}

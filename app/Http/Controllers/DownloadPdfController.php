<?php

namespace App\Http\Controllers;
use App\Models\User\User;
use Illuminate\Http\Request;
use PDF;

class DownloadPdfController extends Controller
{
    public function downloadReport1PDF($id) {
    	$users = User::find($id);
        $pdf = PDF::loadView('report1', compact('users'));

        return $pdf->download('Report.pdf');
	}

	public function downloadReport2PDF($id) {
        $users = User::find($id);
        $pdf = PDF::loadView('report2', compact('users'));
        
        return $pdf->download('Report.pdf');
    }

    public function downloadReport3PDF($id) {
        $users = User::find($id);
        $pdf = PDF::loadView('report3', compact('users'));
        
        return $pdf->download('Report.pdf');
    }

    public function downloadReport4PDF($id) {
        $users = User::find($id);
        $pdf = PDF::loadView('report4', compact('users'));
        
        return $pdf->download('Report.pdf');
    }

    public function downloadReport5PDF($id) {
        $users = User::find($id);
        $pdf = PDF::loadView('report5', compact('users'));
        
        return $pdf->download('Report.pdf');
    }

    public function downloadReport6PDF($id) {
        $users = User::find($id);
        $pdf = PDF::loadView('report6', compact('users'));
        
        return $pdf->download('Report.pdf');
    }
}

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
}

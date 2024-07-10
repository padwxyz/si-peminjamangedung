<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanSchedules;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class GenerateReportController extends Controller
{
    public function generateHistoryReport()
    {
       $today = date("Y-m-d H:i:s");
       $histories = LoanSchedules::all();
       
       $data = array(
        'date' => $today,
        'histories' => $histories
       );

       $pdf = Pdf::loadView('pdf.history_report', $data);
        return $pdf->stream();
    }
}

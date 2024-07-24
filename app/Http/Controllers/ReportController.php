<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App;
use Auth;

use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function report1($pid){
        $payment = Payment::find($pid);
    
        if (!$payment || !$payment->enrollment || !$payment->enrollment->student) {
            return response()->json(['error' => 'Payment or related data not found'], 404);
        }
    
        $print = "<div style='margin:20px; padding:20px;'>";
        $print .= "<h1 align='center'>Payment Receipt</h1>";
        $print .= "<hr/>";
        $print .= "<p>Receipt No: <b>" . $pid . "</b></p>";
        $print .= "<p>Date: <b>" . $payment->paid_date . "</b></p>";
        $print .= "<p>Enrollment NO: <b>" . $payment->enrollment->enroll_no . "</b></p>";
        $print .= "<p>Student Name: <b>" . $payment->enrollment->student->name . "</b></p>";
        $print .= "<hr/>";
        $print .= "<table style='width: 100%;'>";
        $print .= "<tr><td>Description</td><td>Amount</td></tr>";
        $print .= "<tr><td><h3>" . $payment->enrollment->batch->name . "</h3></td><td><h3>" . $payment->amount . "</h3></td></tr>";
        $print .= "</table>";
        $print .= "<hr/>";
        // $print .= "<span>Printed By: <b>" . Auth::user()->name . "</b></span>";
        $print .= "<span>Printed Date: <b>" . date('Y m d') . "</b></span>";
        $print .= "</div>";
    
        $pdf = Pdf::loadHTML($print);
        return $pdf->download('payment_receipt.pdf');
    }
  
    

}

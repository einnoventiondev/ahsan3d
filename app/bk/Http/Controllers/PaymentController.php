<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = Payment::with('invoice')->get();
      
        return view('pages.admin.dashboard.payment.index', compact('payment'));
    }
}

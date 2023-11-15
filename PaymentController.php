<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function requestPage()
    {
        return view('request');
    }

    public function submitPayment(Request $request)
    {
        $response = Http::post('http://localhost:5000/create_payment_request', $request->all());

        return view('response', ['response' => $response->json()]);
    }
}

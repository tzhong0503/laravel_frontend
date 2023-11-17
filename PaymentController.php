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

        // Get the response body
        $responseData = $response->json();

        // Render the payment form view with the response data
        return view('response')->with('responseData', $responseData);
    }
}

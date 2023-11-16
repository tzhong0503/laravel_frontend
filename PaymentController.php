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

        // Extract reference number from the response
        $referenceNumber = $response->json()['Redirect_Body']['Reference_Number'];

        // Make a subsequent request to update payment status
        $updateStatusResponse = Http::post('http://localhost:5000/update_payment_status', [
            'reference_number' => $referenceNumber,
        ]);

        return view('response', [
            'response' => $response->json(),
            'updateStatusResponse' => $updateStatusResponse->json(),
        ]);
        
        
    }
}

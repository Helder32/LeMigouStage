<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Http\Controllers\Controller;
use App\client;

class PdfController extends Controller
{
    public function clientPdf($id)
        {
            $client= client::findOrFail($id);
            $pdf = PDF::loadView('resultCustomer', compact('client'));
            $name = "Client N°".$client->id.".pdf";
            return $pdf->download($name);
        
        }
}

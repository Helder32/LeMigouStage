<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\achat;


class venteRestController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('venteRest');
    }
}

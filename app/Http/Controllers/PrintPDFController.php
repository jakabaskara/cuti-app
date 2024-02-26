<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintPDFController extends Controller
{
    public function index()
    {
        return view('form');
    }
}

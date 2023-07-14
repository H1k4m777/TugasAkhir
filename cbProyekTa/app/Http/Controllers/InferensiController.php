<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelInferensi;

class InferensiController extends Controller
{
    public function index()
    {
        $inferensi = ModelInferensi::all();

        return view('rules', compact('inferensi'));
    }
}

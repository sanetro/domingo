<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class translatorController extends Controller
{
    public function numbers() {
        return view('spanish');
    }
}

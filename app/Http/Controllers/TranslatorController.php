<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    // Here is the function what user sees when type domingo.bingo/translator 
    public function index() {
        return "You are in main page of translator.";
    }

    public function translate($language) {
        $number_pronunciation = [
            "spanish" => "Uno, dos, tres, quatro, sinco, sies, siete, ocho, nueve, diez.",
            "english" => "One, two, three, four, five, six, seven, eight, nine, ten",
            "polish" => "jeden, dwa, trzy, cztery, piec, szesc, siedem, osiem, dziwiec, dziesiec."
        ];
        $words = $number_pronunciation[$language];
        return view('translator', compact('words', 'language'));
    }
}

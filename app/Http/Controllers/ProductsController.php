<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        // First way - compact()

        $greetings = "Welcome in Products";
        $description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas earum iure consectetur quia.";
        return view('index', compact('greetings', 'description'));        
    }
    
    public function vegetables() {
        // Second way - with method
        $data = [
            "OrderOne" => "Carrot",
            "OrderTwo" => "Broccoli"
        ];
        return view('vegetables')->with('data', $data);
    }
    
    public function spanish($name){
        $num_esp_eng = [
            "one" => "uno",
            "dos" => "two",
            "tres" => "three"
        ];
        
        return view('spanish', ['products' => $num_esp_eng[$name] ?? '']);
    }

}

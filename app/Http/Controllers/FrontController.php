<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data=Product::all();
        return view('index', [
            "title" => "Home",
            'data' => $data
        ]);
    }
}

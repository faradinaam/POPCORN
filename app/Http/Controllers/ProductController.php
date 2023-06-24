<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('dashboard.products.index');
    }
    public function create(){
        return view('dashboard.products.create');
    }
    public function edit(){
        return view('dashboard.products.edit');
    }
    public function variation(){
        return view('dashboard.products.variation');
    }
    public function delete(){
        return view('dashboard.products.delete');
    }
}

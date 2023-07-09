<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data = product::all();
        return view('dashboard.products.index',compact('data'));
    }
    public function create(){
        return view('dashboard.products.create');
    }
    public function insertproduct(Request $request){
        dd($request->all());
        product::create($request->all());
        return redirect()->route('dashboard.product.index');
    }
    public function edit(){
        return view('dashboard.products.edit');
    }
    public function variation(){
        return view('dashboard.products.variation');
    }
    public function createvariation(){
        return view('dashboard.products.createvariation');
    }
    public function insertvariation(Request $request){
        dd($request->all());
        product::create($request->all());
        // return redirect()->route('dashboard.product.variation');
    }
    public function editvariation(){
        return view('dashboard.products.editvariation');
    }
    public function delete(){
        return view('dashboard.products.delete');
    }
}

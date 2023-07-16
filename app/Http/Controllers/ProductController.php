<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariation;
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
        // dd($request->all());
        Product::create($request->all());
        return redirect()->route('dashboard.product.index')->with('Success', 'Data berhasil ditambahkan');
    }

    public function showdata($id){
        $data = Product::find($id);
        // dd($data);
        return view('dashboard.products.show',compact('data'));
    }
    public function updateproduct(Request $request, $id){
        $data = Product::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard.product.index')->with('Success','Data berhasil diubah');
    }

    public function deleteproduct($id){
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('dashboard.product.index')->with('Success','Data berhasil dihapus');
    }

    public function edit(){
        return view('dashboard.products.edit');
    }
    public function variation($product_id){
        $variations = ProductVariation::where('product_id',$product_id)->get();
        return view('dashboard.products.variation', ['product_id'=>$product_id,'variations'=>$variations]);
    }
    public function createvariation($product_id){
        return view('dashboard.products.createvariation', ['product_id'=>$product_id]);
    }
    public function insertvariation($product_id, Request $request){
        // return $request;
        ProductVariation::create([
            'product_id'=> $product_id,
            'name'=> $request->name,
            'weight'=> $request->weight,
            'price'=> $request->price,
        ]);
        return redirect()->route('dashboard.product.variation',['product_id'=>$product_id]);
    }
    public function editvariation(){
        return view('dashboard.products.editvariation');
    }
    public function delete(){
        return view('dashboard.products.delete');
    }
}

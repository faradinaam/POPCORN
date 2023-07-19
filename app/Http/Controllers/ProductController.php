<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $data = product::all();
        // return $data;
        return view('dashboard.products.index', compact('data'));
    }
    public function create()
    {
        return view('dashboard.products.create');
    }
    public function insertproduct(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
            'description' => 'required'
        ]);

        $path = $request->file('photo')->store('product_photos', 'public');
        $slug = Str::slug($request->name) . '-' . strtolower(Str::random(5));

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $slug,
            'photo' => $path,
            'rute' => ""
        ]);

        return redirect()->route('dashboard.product.index')->with('Success', 'Data berhasil ditambahkan');
    }

    public function showdata($id)
    {
        $data = Product::find($id);
        // dd($data);
        return view('dashboard.products.show', compact('data'));
    }

    public function updateproduct(Request $request, $id)
    {
        $data=[
            'name' => $request->name,
            'description' => $request->description,
        ];

        if($request->hasfile('photo'))
        {
            $path = $request->file('photo')->store('product_photos', 'public');
            $data['photo'] = $path;
        }

        Product::find($id)->update($data);
        return redirect()->route('dashboard.product.index')->with('Success', 'Data berhasil diubah');
    }

    public function deleteproduct($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('dashboard.product.index')->with('Success', 'Data berhasil dihapus');
    }

    public function edit()
    {
        return view('dashboard.products.edit');
    }
    public function variation($product_id)
    {
        $variations = ProductVariation::where('product_id', $product_id)->get();
        return view('dashboard.products.variation', ['product_id' => $product_id, 'variations' => $variations]);
    }
    public function createvariation($product_id)
    {
        return view('dashboard.products.createvariation', ['product_id' => $product_id]);
    }
    public function insertvariation($product_id, Request $request)
    {
        // return $request;
        ProductVariation::create([
            'product_id' => $product_id,
            'name' => $request->name,
            'weight' => $request->weight,
            'price' => $request->price,
        ]);
        return redirect()->route('dashboard.product.variation', ['product_id' => $product_id]);
    }

    public function editvariation($id)
    {
        $variation = ProductVariation::find($id);
        return view('dashboard.products.editvariation', ['variation' => $variation]);
    }

    public function updatevariation(Request $request, $id)
    {
        $variation = ProductVariation::find($id);
        $variation->update($request->all());
        return redirect()->route('dashboard.product.variation', ['product_id' => $variation->product_id])->with('Success', 'Data berhasil diubah');
    }

    public function deletevariation($id)
    {
        $variation = ProductVariation::find($id);
        $variation->delete();
        return redirect()->route('dashboard.product.variation', ['product_id' => $variation->product_id])->with('Success', 'Variasi berhasil dihapus');
    }

    public function delete()
    {
        return view('dashboard.products.delete');
    }
}

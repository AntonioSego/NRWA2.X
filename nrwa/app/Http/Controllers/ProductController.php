<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',['products'=>$products]);
        return view('products.index');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('product_name', 'like', '%' . $query . '%')->get();
        return response()->json($products);
    }

    public function create(){
        $brands = Brand::all();
        $categories = Category::all();
        return view('products.create')->with('brands',$brands)->with('categories',$categories);
    }

    public function store(Request $request){
        $data  = $request->validate([
            
        'product_name'  => 'required',
        'quantity' => 'required | numeric',
        'rate' => 'required | numeric',
        'active'=> 'required | boolean',
        'status' => 'required | boolean',
        'brand_id' => 'required | numeric',
        'category_id' => 'required | numeric'

        ]);

        $new_data  = Product::create($data);

        return redirect(route('product.index'));

    }
    public function edit(Product $product){
        return view('products.edit',['product' => $product]);
    }

    public function update(Product $product,Request $request){
        $data  = $request->validate([
            
        'product_name'  => 'required',
        'quantity' => 'required | numeric',
        'rate' => 'required | numeric',
        'active'=> 'required | boolean',
        'status' => 'required | boolean',
        'brand_id' => 'required | numeric',
        'category_id' => 'required | numeric'

            ]);

            $product->update($data);
            return redirect(route('product.index'))->with('succes','Uspjesno uredjen');
            
    }

    public function delete(Product $product){
        return view('products.delete',['product' => $product]);
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('succes','Uspjesno izbrisan');
        
    }
}
